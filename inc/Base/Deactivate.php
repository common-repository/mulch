<?php 

/** 
 * @package MulchPlugin
 */

 namespace mulchInc\Base;

 class Deactivate {
     public static function deactivate() {
        echo 'Deactivated';
         flush_rewrite_rules();
     }
 }