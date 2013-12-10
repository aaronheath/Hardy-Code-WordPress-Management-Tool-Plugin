<?php

/*
|--------------------------------------------------------------------------
| Class: Info
|--------------------------------------------------------------------------
|
| This class pulls information from various areas of the install about
| this install.
|
*/

class Info {
    
    /**
     * Returns the name of this install.
     *    
     * @return string
     */
    
    public static function name() {
        
        $return = get_bloginfo('name');
        return $return;
        
    }
    
    /**
     * Returns the URL of this install.
     *    
     * @return string
     */
    
    public static function url() {
        
        $return = get_bloginfo('wpurl');
        return $return;
        
    }
    
    /**
     * Returns the version number of this install.
     *    
     * @return string
     */
    
    public static function version() {
        
        $return = get_bloginfo('version');
        return $return;
        
    }
    
    /**
     * Returns information about the current theme.
     *    
     * @input  string $element
     * @return array
     */
    
    public static function theme($element = false) {
        
        $allowedElements = array("name", "version", "template");
        
        if(!$element && !in_array($element, $allowedElements)) {
            return false;
        }
        
        $return = wp_get_theme()->$element;
        return $return;
        
    }
    
    /**
     * Returns array of themes that have available updates.
     *    
     * @return array
     */
    
    public static function themeUpdates() {
        
        wp_update_themes();
        $return = get_theme_updates();
        return $return;
        
    }
    
    /**
     * Returns array of information about the sites plugins.
     *    
     * @return array
     */
    
    public static function plugins() {
        
        $return = get_plugins();
        return $return;
        
    }
    
    /**
     * Returns array of information about the sites plugins that have updates avilable.
     *    
     * @return array
     */
    
    public static function pluginUpdates() {
        
		wp_update_plugins();
        $return = get_plugin_updates();
        return $return;
        
    }
    
    /**
     * Returns string of disk space / usage information.
     *    
     * @input  string $element
     * @return array
     */
    
    public static function disk($element = false) {
        
        if(!$element) {
            return false;
        }
        
        switch($element) {
            case "total":
                $return = disk_total_space(".");
                break;
            case "free":
                $return = disk_free_space(".");
                break;
            default:
                $return = false;
        }

        return $return;
        
    }
    
}