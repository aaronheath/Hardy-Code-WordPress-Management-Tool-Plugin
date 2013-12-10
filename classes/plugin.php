<?php

/*
|--------------------------------------------------------------------------
| Class: Plugin
|--------------------------------------------------------------------------
|
| This class handles the various housekeeping activities of the plugin.
|
*/

class Plugin {
    
    /**
     * Determines if the plugin is currently activate via the admin
     * plugin interface.
     * 
     * @param  string $plugin
     * @return bool
     */
    
    public static function status($plugin = "wpmt/index.php") {
        
        $return    = is_plugin_active($plugin);
        return $return;
        
    }
    
    /**
     * Function that is called upon when the plugin is activated by WordPress.
     *    
     * @return null
     */
    
    public static function activate() {
        
        if( !Key::get() ) {
            
            $key = Key::generate();
            Key::assign($key);
            
        }
        
        API::start();
        API::push_update();
        API::remote_status();
        
    }
    
    /**
     * Function that is called upon when this plugin is deactivated.
     *    
     * @return null
     */
    
    public static function disable() {
        
        API::stop();

    }
    
}