<?php 

/** 
 * @package MulchPlugin
 */

 namespace mulchInc\Base;
 use \mulchInc\Base\BaseController;

 class SettingsLinks extends BaseController{
     public function register() {
        add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
        require_once plugin_dir_path( __FILE__ ) . 'SettingsLinks.php';
     }

     public function settings_link($links) {
        $settings_link = '<a href="admin.php?page=mulch_plugin">Settings</a>';
        array_push($links, $settings_link);
        return $links;
     }
     
 }