<?php 

/**
 * Plugin Name: Impsyde Code Test
 * Description: This is for a coding test with Impsyde to test my skill in PHP
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Version: 0.5
 * Author: Jaleen Bowens-Kelly
 * License: MIT
 */

/*Loads Data.js*/
function loadDatajs(){
    wp_enqueue_script( 
        "",
        plugin_dir_url(__FILE__) . "Data.js",
        array('wp-blocks', 'wp-i18n', 'wp-editor'),
        true
    );
}

function loadAlertjs(){
    wp_enqueue_script( 
        "Alert_User!",
        $src = 'src\Javascript\Alert.js',
        array('wp-blocks', 'wp-i18n', 'wp-editor'),
        true
    );
}

function loadTableblockjs(){
    wp_register_script( 
        "Table Block",
        plugin_dir_url(__FILE__) . "TableBlock.js",
        array('wp-blocks', 'wp-i18n', 'wp-editor'),
        true
    );
}

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
            echo
            do_action( 'loadAlert.js',  )
        }
        function load_plugin(){

        }
    }
}

add_action( 'init', 'loadTableblockjs' );
add_action( 'init', 'loadAlertjs' )

?>