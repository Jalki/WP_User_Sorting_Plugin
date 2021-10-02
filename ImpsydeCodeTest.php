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


class ImpsydeCodeSettings{
    function __construct(){
        add_action('admin_menu', array($this, 'Settings') );
    }
    function Settings(){
        add_options_page('Impsyde Code Settings', 'Table Sorting Settings', 'manage_options', 'User-sort-settings-page', array($this, 'SettingsPG') );
    }
    
    function SettingsPG() {   ?>
        <div class="">
            <h1>Settings</h1>
        </div>
    <?php
    }
}

/*Loads Data.js*/
function loadDatajs(){
    wp_enqueue_script( 
        "Data",
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

add_action( 'enqueue_block_editor_assets', 'loadTableblockjs' );

 /*Impsyde check for class*/
if ( !class_exists( "ImpsydeCodeTest" ) ){
/*Class Impysde*/
    class ImpsydeCodeTest
    {
        /*Function for installation*/
        static function install(){

        }
        /*Function for plugin activation*/
        function __construct(){
            do_action( 'plugin_activate');
            do_action( 'loadAlertjs' );
            do_action( 'loadTableblockjs' );
        }
        function load_plugin(){

        }
    }
}
$ImpsydeClass = new ImpsydeCodeTest();
$ImpsydeSettingsClass = new ImpsydeCodeSettings();


add_action( 'enqueue_block_editor_assets', 'loadAlertjs' );

?>