<?php

/**
 * @package MulchPlugin
 */

 namespace mulchInc\Base;
 use \mulchInc\Base\BaseController;

 class Enqueue extends BaseController{
     public function register() {
        $getWIDCheck = get_option('Mulch_Widget_ID');
        if($getWIDCheck != 0) {
            add_action('wp_enqueue_scripts', array($this, 'enqueue_front'));
            add_action('wp_footer', array($this, 'appendtoFooter'));
         }
        add_action('wp_ajax_update_status', array($this, 'update_status'));
        add_action('wp_ajax_nopriv_update_status', array($this, 'update_status'));
     }


    function enqueue_front() {
      $getPID = get_option('Mulch_Programm_ID');
        wp_enqueue_style('mypluginstyle', $this->plugin_url . '/assets/css/mulch.css');
        wp_enqueue_script('mypluginscript',  "https://cdn.revemarketing.com/mwidgets/js/sdk.js?c=mulch&pid=$getPID", array( 'jquery' ));
        wp_register_script('mypluginscript',  "https://cdn.revemarketing.com/mwidgets/js/sdk.js?c=mulch&pid=$getPID", array( 'jquery' ));
    }


    function appendtoFooter() {
        $getPID = get_option('Mulch_Programm_ID');
        $getWID = get_option('Mulch_Widget_ID');
        $a =  '<div class="revemarketing-crw" data-wid="'. $getWID .'" data-wt="crw"></div>';
        print_r($a);
    }

    public function update_status(){
        $pid = (int)$_POST['pid'];
        $wid = (int)$_POST['wid'];
        update_option( 'Mulch_Programm_ID', $pid);
        update_option( 'Mulch_Widget_ID', $wid);
        exit();
    }

  public function check_status(){
    return get_option('Mulch_Programm_ID');
    return get_option('Mulch_Widget_ID');
  }


 }

 ?>
