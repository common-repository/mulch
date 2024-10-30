<?php

/**
 * @package MulchPlugin
 */

 namespace mulchInc\Pages;
 use \mulchInc\Base\BaseController;

 class Admin extends BaseController {
     public function register() {
        add_action('admin_menu', array($this, 'add_admin_pages'));
        require_once plugin_dir_path( __FILE__ ) . 'Admin.php';
     }

     public static function add_admin_pages() {
        add_menu_page('Mulch Plugin', 'Mulch', 'manage_options', 'mulch_plugin', array($this, 'admin_index'),
            plugin_dir_url( __FILE__ ).'../../assets/images/icon.png', 95);

    }

        public static function admin_index() {
        require_once $this->plugin_path . '/templates/iframe.php';
    }
 }
