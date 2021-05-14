<?php
/**
 * Plugin Name: Traveler PayGate PayWeb3
 * Description: This plugin is used for Traveler Theme
 * Version: 1.0.0
 * Author: App Inlet (Pty) Ltd
 * Author URI: https://www.appinlet.com
 *
 * Copyright: © 2021 PayGate (Pty) Ltd.
 *
 * License: GPLv2 or later
 * Text Domain: traveler-paygate
 */

require_once 'Countries.php';
require_once 'PaywebUtility.php';

use \Omnipay\Omnipay;

if ( ! class_exists('ST_Paygate_Gateway')) {
    class ST_Paygate_Gateway extends \STAbstactPaymentGateway
    {
        static private $_ints;

        const PM_GWAY_ST_PAYGATE_ENABLE_IS_ON = 'pm_gway_st_paygate_enable:is(on)';

        // Test Credentials
        const TEST_MERCHANT_ID  = '10011072130';
        const TEST_MERCHANT_KEY = 'secret';

        // Endpoints
        const PAYWEB_INITIATE = 'https://secure.paygate.co.za/payweb3/initiate.trans';
        const PAYWEB_PROCESS  = 'https://secure.paygate.co.za/payweb3/process.trans';
        const PAYWEB_QUERY    = 'https://secure.paygate.co.za/payweb3/query.trans';

        private $default_status = true;

        private $_gateway_id = 'st_paygate';

        private $merchantId;

        private $merchantKey;

        private $testMode = false;

        public function __construct()
        {
            add_filter('st_payment_gateway_st_paygate_name', array($this, 'get_name'));

            // Paygate is only available with traveler-code version 1.3.2
            add_action('admin_notices', array(PaywebUtility::class, '_add_notices'));
            add_action('admin_init', array(PaywebUtility::class, '_dismis_notice'));

            if (st()->get_option('paygate_enable_sandbox', 'on') == 'on') {
                $this->testMode = true;
            }

            if ($this->testMode) {
                $this->merchantId  = self::TEST_MERCHANT_ID;
                $this->merchantKey = self::TEST_MERCHANT_KEY;
            } else {
                $this->merchantId  = st()->get_option('paygate_merchant_id');
                $this->merchantKey = st()->get_option('paygate_merchant_key');
            }
        }

        function html()
        {
            echo Traveler_PayGate_Payment::get_inst()->loadTemplate('paygate');
        }

        /**
         * Entry point from Traveler checkout for payment process
         *
         * @param $order_id
         *
         * @return array
         */
        function do_checkout($order_id)
        {
            $pp = $this->get_authorize_url($order_id);

            if (isset($pp['redirect_form']) && $pp['redirect_form']) {
                $pp_link = $pp['redirect_form'];
            }


            do_action('st_before_redirect_paygate');

            if ( ! isset($pp_link)) {
                return array(
                    'status'  => false,
                    'message' => isset($pp['message']) ? $pp['message'] : false,
                    'data'    => isset($pp['data']) ? $pp['data'] : false,
                );
            }

            if ( ! $pp_link) {
                return array(
                    'status'  => false,
                    'message' => __('Can not get PayGate Authorize URL.', 'traveler-paygate')
                );
            } else {
                return array(
                    'status'        => true,
                    'redirect_form' => $pp_link
                );
            }
        }

        /**
         * @param $order_id
         *
         * @return array
         */
        private function getInitialData($order_id): array
        {
            $data                     = [];
            $data['PAYGATE_ID']       = $this->merchantId;
            $data['REFERENCE']        = get_post_meta($order_id, 'order_token_code', true);
            $data['AMOUNT']           = (int)((float)get_post_meta($order_id, 'total_price', true) * 100);
            $data['CURRENCY']         = TravelHelper::get_current_currency('name');
            $data['RETURN_URL']       = $this->get_return_url($order_id);
            $data['TRANSACTION_DATE'] = date('Y-m-d H:i:s');
            $data['LOCALE']           = 'en';
            $data['COUNTRY']          = Countries::getCountryCodeByCountryName(
                    get_post_meta($order_id, 'st_country', true)
                ) ?? 'ZAF';
            $data['EMAIL']            = STInput::request('st_email', 'email');

            $data['CHECKSUM'] = PaywebUtility::getPaywebChecksum($this->merchantKey, $data);

            return $data;
        }

        /**
         * Initiate transaction at PayWeb
         *
         * @param $data
         *
         * @return array|null
         */
        private function initiatePayweb($data): ?array
        {
            $response = PaywebUtility::doCurlPost(self::PAYWEB_INITIATE, $data);
            if (strpos($response, 'Error:') !== false) {
                return null;
            }
            $initReturns = [];
            $parts       = explode('&', $response);
            foreach ($parts as $part) {
                $p                  = explode('=', $part);
                $initReturns[$p[0]] = $p[1];
            }

            return ['result' => true, 'data' => $initReturns];
        }

        /**
         * Returns PayWeb redirect form to Traveler
         *
         * @param $order_id
         *
         * @return array|string[]
         */
        function get_authorize_url($order_id)
        {
            $initiateData = $this->getInitialData($order_id);

            $response = $this->initiatePayweb($initiateData);
            if ($response['result'] && PaywebUtility::checkPaywebChecksum($this->merchantKey, $response['data'])) {
                return [
                    'redirect_form' => $this->getRedirectForm($response['data'])
                ];
            } else {
                return array('status' => false, 'message' => 'Failed to initiate PayGate', 'data' => $initiateData);
            }
        }

        /**
         * Returns html for form that redirects to PayWeb portal
         *
         * @param $res
         *
         * @return string
         */
        function getRedirectForm($res): string
        {
            $url = self::PAYWEB_PROCESS;

            return <<<FORM
<form action="$url" method="post" id="st_form_paygate_submit" xmlns="">
<input type="hidden" name="PAY_REQUEST_ID" value="$res[PAY_REQUEST_ID]">
<input type="hidden" name="CHECKSUM" value="$res[CHECKSUM]">
</form>
<script> document.getElementById('st_form_paygate_submit').submit(); </script>
FORM;
        }

        function is_available($item_id = false)
        {
            $result = false;
            if (st()->get_option('pm_gway_st_paygate_enable') == 'on') {
                $result = true;
            }
            if ($item_id) {
                $meta = get_post_meta($item_id, 'is_meta_payment_gateway_st_paygate', true);
                if ($meta == 'off') {
                    $result = false;
                }
            }

            return $result;
        }

        function get_name()
        {
            return "PayGate";
        }

        function _pre_checkout_validate()
        {
            return true;
        }

        /**
         * Redirect from PayWeb portal
         *
         * @param $order_id
         *
         * @return array|bool[]
         */
        function check_complete_purchase($order_id): array
        {
            $reference = filter_var($_GET['order_token_code'], FILTER_SANITIZE_STRING);

            $data                       = [];
            $data['PAYGATE_ID']         = $this->merchantId;
            $data['PAY_REQUEST_ID']     = filter_var($_POST['PAY_REQUEST_ID'], FILTER_SANITIZE_STRING);
            $data['TRANSACTION_STATUS'] = filter_var($_POST['TRANSACTION_STATUS'], FILTER_SANITIZE_STRING);
            $data['REFERENCE']          = $reference;
            $data['CHECKSUM']           = filter_var($_POST['CHECKSUM'], FILTER_SANITIZE_STRING);

            if ( ! PaywebUtility::checkPaywebChecksum($this->merchantKey, $data)) {
                return [
                    'status'  => false,
                    'message' => 'Checksum could not be verified',
                    'data'    => $data,
                ];
            }

            unset($data['TRANSACTION_STATUS']);
            $data['CHECKSUM'] = PaywebUtility::getPaywebChecksum($this->merchantKey, $data);
            $response         = $this->queryPayweb($data);

            if ( ! $response['result']) {
                $return = [
                    'status'  => false,
                    'message' => 'Query could not be made',
                    'data'    => $data,
                ];
            } else {
                $response = $response['data'];
                $status   = filter_var($response['TRANSACTION_STATUS'], FILTER_SANITIZE_STRING);
                if ($status == '1') {
                    // Approved
                    $return = ['status' => true];
                } else {
                    $return = [
                        'status'  => false,
                        'message' => filter_var($response['RESULT_DESC'], FILTER_SANITIZE_STRING),
                        'data'    => $response,
                    ];
                }
            }

            return $return;
        }

        /**
         * Query PayGate PayWeb to get full transaction detail
         *
         * @param $data
         *
         * @return array|null
         */
        private function queryPayweb($data): ?array
        {
            $response = PaywebUtility::doCurlPost(self::PAYWEB_QUERY, $data);
            if (strpos($response, 'Error:') !== false) {
                return null;
            }
            $initReturns = [];
            $parts       = explode('&', $response);
            foreach ($parts as $part) {
                $p                  = explode('=', $part);
                $initReturns[$p[0]] = $p[1];
            }

            return ['result' => true, 'data' => $initReturns];
        }

        /**
         * Payment configuration settings
         * @return array[]
         */
        function get_option_fields()
        {
            return array(
                array(
                    'id'        => 'paygate_merchant_id',
                    'label'     => __('Merchant Id', 'traveler-paygate'),
                    'type'      => 'text',
                    'section'   => 'option_pmgateway',
                    'desc'      => __('Your Merchant Id', 'traveler-paygate'),
                    'condition' => self::PM_GWAY_ST_PAYGATE_ENABLE_IS_ON
                ),
                array(
                    'id'        => 'paygate_merchant_key',
                    'label'     => __('Merchant Key', 'traveler-paygate'),
                    'type'      => 'text',
                    'section'   => 'option_pmgateway',
                    'desc'      => __('Your Merchant Key', 'traveler-paygate'),
                    'condition' => self::PM_GWAY_ST_PAYGATE_ENABLE_IS_ON
                ),
                array(
                    'id'        => 'paygate_enable_sandbox',
                    'label'     => __('Enable Sandbox', 'traveler-paygate'),
                    'type'      => 'on-off',
                    'section'   => 'option_pmgateway',
                    'std'       => 'on',
                    'desc'      => __('Allow you to enable sandbox mode for testing', 'traveler-paygate'),
                    'condition' => self::PM_GWAY_ST_PAYGATE_ENABLE_IS_ON
                ),
            );
        }

        function get_default_status()
        {
            return $this->default_status;
        }

        function get_logo()
        {
            return Traveler_PayGate_Payment::get_inst()->pluginUrl . 'assets/img/PayGate_logo.svg';
        }

        function getGatewayId()
        {
            return $this->_gateway_id;
        }

        function is_check_complete_required()
        {
            return true;
        }

        static function instance()
        {
            if ( ! self::$_ints) {
                self::$_ints = new self();
            }

            return self::$_ints;
        }

        static function add_payment($payment)
        {
            $payment['st_paygate'] = self::instance();

            return $payment;
        }

    }

    add_filter('st_payment_gateways', array('ST_Paygate_Gateway', 'add_payment'));
}
