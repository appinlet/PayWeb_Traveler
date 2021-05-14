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

class PaywebUtility
{
    /**
     * @param string $key
     * @param array $data
     *
     * @return string
     */
    public static function getPaywebChecksum($key, $data): string
    {
        $checkString = '';
        foreach ($data as $k => $d) {
            if ($k !== 'CHECKSUM') {
                $checkString .= $d;
            }
        }

        return md5($checkString . $key);
    }

    /**
     * @param $key
     * @param $data
     *
     * @return bool
     */
    public static function checkPaywebChecksum($key, $data)
    {
        $theirKey = $data['CHECKSUM'];
        $ourKey   = self::getPaywebChecksum($key, $data);

        return hash_equals($theirKey, $ourKey);
    }

    /**
     * @param $url
     * @param array $data
     *
     * @return string
     */
    public static function doCurlPost($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_NOBODY, false);
        curl_setopt($ch, CURLOPT_REFERER, $_SERVER['HTTP_HOST']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

        $count = 5;
        while ($count > 0) {
            $result = curl_exec($ch);
            $error  = curl_error($ch);
            --$count;
            if (is_string($result) && $result != '') {
                curl_close($ch);

                return $result;
            }
        }
        if ($error != '') {
            curl_close($ch);

            return 'Error: ' . $error;
        }
        curl_close($ch);

        return 'Error: Could not initiate';
    }

    public static function _dismis_notice()
    {
        if (STInput::get('st_dismiss_paygate_notice')) {
            update_option('st_dismiss_paygate_notice', 1);
        }
    }

    public static function _add_notices()
    {
        if (get_option('st_dismiss_paygate_notice')) {
            return;
        }

        if (class_exists('STTravelCode') && isset(STTravelCode::$plugins_data['Version'])) {
            $version = STTravelCode::$plugins_data['Version'];
            if (version_compare('1.3.2', $version, '>')) {
                ?>
                <div class="error settings-error notice is-dismissible">
                    <p class=""><strong><?php
                            _e('Traveler Notice:', 'traveler-paygate') ?></strong></p>
                    <p>
                        <?php
                        $travelCode = '<strong><em>' . __('Traveler Code', 'traveler-paygate') . '</em></strong>';
                        $print      = <<<PRINT
<strong>PayGate</strong> requires $travelCode version <strong>1.3.2</strong> or above. 
Your current is <strong>$version</strong>
PRINT;

                        printf(__($print, 'traveler-paygate')); ?>
                    </p>
                    <p>
                        <a href="http://shinetheme.com/demosd/documentation/how-to-update-the-theme-2/"
                           target="_blank"><?php
                            _e('Learn how to update it', 'traveler-paygate') ?></a>
                        |
                        <a href="<?php
                        echo admin_url('index.php?st_dismiss_paygate_notice=1') ?>" class="dismiss-notice"
                           target="_parent"><?php
                            _e('Dismiss this notice', 'traveler-paygate') ?></a>
                    </p>
                    <button type="button" class="notice-dismiss"><span class="screen-reader-text"><?php
                            _e('Dismiss this notice', 'traveler-paygate') ?>.</span></button>
                </div>
                <?php
            }
        }
    }
}
