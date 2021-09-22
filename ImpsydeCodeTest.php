<?php 

/**
 * Plugin Name: Impsyde Code Test
 * Description: This is for a coding test with Impsyde to test my skill in PHP
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Version: 0.1
 * Author: Jaleen Bowens-Kelly
 * License: MIT
 */

 /*Impsyde check for class*/
if ( !class_exists( "ImpsydeCodeTest" ) ){
/*Class Impysde*/
    class ImpysdeCodeTest
    {
        /*Function for installation*/
        static function install(){

        }
        /*Function for plugin activation*/
        function plugin_activate(){
            do_action( 'plugin_activate');
        }
        register_activation_hook( __FILE__, 'plugin_activate' );
    }
}

?>