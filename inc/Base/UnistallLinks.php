<?php 

/** 
 * @package MulchPlugin
 */

 namespace mulchInc\Base;
 use \mulchInc\Base\BaseController;

 class UnistallLinks extends BaseController{
     public function register() {
        add_filter("plugin_action_links_$this->plugin", array($this, 'Unisntall'));
     }

     public function Unisntall($links) {
        $unistall_link = '<a href="javascript:void(0)">Uninstall</a>';
        array_push($links, $unistall_link);
        return $links;
     }
     
 }