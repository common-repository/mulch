<?php 

/** 
 * @package MulchPlugin
 */

 namespace mulchInc\Base;

 class Activate {
     public static function activate() {
         flush_rewrite_rules();
     }
 }