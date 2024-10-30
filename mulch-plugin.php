<?php

/**
 * @package MulchPlugin
 */

 /*
    Plugin Name: Mulch
    Plugin URI: http://www.revemarketing.com/
    Description: Mulch, a content activation and recommendation platform, understands anonymous website visitors and surfaces personalized content to grow conversions
    Version: 1.0.3
    Author: ReveMarketing
    Author URI: http://www.revemarketing.com/mulch
    License: GPLv2 or later
    Text Domain: mulch-plugin
 */

defined('ABSPATH') or die('Hey, you can\t access this file, you silly human!');


if (file_exists(dirname(__FILE__).'/vendor/autoload.php')) {
    require_once dirname(__FILE__).'/vendor/autoload.php';
}


function activate_mulch_plugin()
{
    require_once plugin_dir_path(__FILE__) . 'inc/Base/Activate.php';
    mulchInc\base\Activate::activate();
    require_once plugin_dir_path(__FILE__) . 'inc/Pages/Admin.php';
    require_once plugin_dir_path(__FILE__) . 'inc/Base/SettingsLinks.php';
    require_once plugin_dir_path(__FILE__) . 'templates/iframe.php';
}
register_activation_hook(__FILE__, 'activate_mulch_plugin');

function deactivate_mulch_plugin()
{
    require_once plugin_dir_path(__FILE__) . 'inc/Base/Deactivate.php';
    mulchInc\base\Deactivate::deactivate();
}


register_deactivation_hook(__FILE__, 'deactivate_mulch_plugin');

register_uninstall_hook(__FILE__, 'mulch_uninstall_plugin');

function mulch_uninstall_plugin()
{
    delete_option('Mulch_Programm_ID');
    delete_option('Mulch_Widget_ID');
}
require_once plugin_dir_path(__FILE__) . 'inc/init.php';
if (class_exists('mulchInc\Init')) {
    mulchInc\Init::register_services();
}
