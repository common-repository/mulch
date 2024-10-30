<?php

/**
 * @package MulchPlugin
 */


 if(!defined ('WP_UNINSTALL_PLUGIN')) {
    die;
 }

 $mulch_programm_id = 'Mulch_Programm_ID';
  $mulch_widget_id = 'Mulch_Widget_ID';

 delete_option( $mulch_programm_id );
 delete_option(  $mulch_widget_id );
