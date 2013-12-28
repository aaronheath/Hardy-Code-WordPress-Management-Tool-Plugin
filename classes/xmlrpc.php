<?php

/*
|--------------------------------------------------------------------------
| Class: WPMT_xmlrpc
|--------------------------------------------------------------------------
|
| This class performs tasks related to API requests.
|
*/

class WPMT_xmlrpc {
    
    public static $class_name  = "WPMT_xmlrpc";
    public static $call_prefix = "wpmt.";
    
    public static function wpmt_methods( $methods ) {
        
        $methods    = array(
            self::$call_prefix."repeater"                  => array(self::$class_name, "wpmt_repeater"), 
            self::$call_prefix."pushUpdate"                => array(self::$class_name, "wpmt_pushUpdate"), 
            self::$call_prefix."stop"                      => array(self::$class_name, "wpmt_stop"), 
            self::$call_prefix."start"                     => array(self::$class_name, "wpmt_start"), 
            self::$call_prefix."remoteStatusNotification"  => array(self::$class_name, "wpmt_remoteStatusNotification"),
        );
        
        return $methods;
        
    }
    
    public static function wpmt_repeater( $args ) {
        
        $arg1   = (string) $args;
        return $arg1;
        
    }
    
    public static function wpmt_pushUpdate( $args ) {
        
        $return = API::push_update();
        return self::$call_prefix."wpmt_pushUpdate"." :: completed";
        
    }
    
    public static function wpmt_stop( $args ) {
        
        $return = API::start();
        return self::$call_prefix."wpmt_stop"." :: completed";
        
    }
    
    public static function stop( $args ) {
        
        $return = API::push_update();
        return self::$call_prefix."wpmt_start"." :: completed";
        
    }
    
    public static function wpmt_remoteStatusNotification( $args ) {
        
        $return = API::remote_status_notification();
        return self::$call_prefix."wpmt_remoteStatusNotification"." :: completed";
        
    }
    
}