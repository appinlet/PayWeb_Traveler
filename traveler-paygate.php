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

class Traveler_PayGate_Payment
{
    public $pluginUrl = '';
    public $pluginPath = '';
    public $customFolder = 'traveler-paygate';

    public function __construct()
    {
        $this->pluginPath = trailingslashit(plugin_dir_path(__FILE__));
        $this->pluginUrl  = trailingslashit(plugin_dir_url(__FILE__));

        add_action('plugins_loaded', [$this, '_pluginSetup']);
        add_action('init', [$this, '_pluginLoader'], 20);
        add_action('wp_enqueue_scripts', [$this, '_pluginEnqueue']);
    }

    public function _pluginSetup()
    {
        load_plugin_textdomain('traveler-paygate', false, basename(dirname(__FILE__)) . '/languages');
    }

    public function _pluginLoader()
    {
        if (class_exists('STTravelCode') && class_exists('STAbstactPaymentGateway')) {
            require_once($this->pluginPath . 'inc/paygate.php');
        }
    }

    public function _pluginEnqueue()
    {
        // Not used in this plugin
    }

    public function loadTemplate($name, $data = null)
    {
        if (is_array($data)) {
            extract($data);
        }

        $template = $this->pluginPath . 'views/' . $name . '.php';

        if (is_file($template)) {
            $templateCustom = locate_template($this->customFolder . '/views/' . $name . '.php');
            if (is_file($templateCustom)) {
                $template = $templateCustom;
            }
            ob_start();

            require($template);

            return @ob_get_clean();
        }
    }

    public static function get_inst()
    {
        static $instance;

        if (is_null($instance)) {
            $instance = new self();
        }

        return $instance;
    }
}

Traveler_PayGate_Payment::get_inst();
