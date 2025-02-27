<?php
/**
 * @package MulchPlugin
 */
namespace mulchInc;

final class Init {
     public static function get_services() {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class,
            //Base\UnistallLinks::class
        ];
     }

     public static function register_services() {
        foreach(self::get_services() as $class){
            $service = self::instantiate($class);
            if(method_exists($service, 'register')) {
                $service->register();
            }
        }
    }
    public static function instantiate($class) {
        $service = new $class();
        return  $service;
    }
}
