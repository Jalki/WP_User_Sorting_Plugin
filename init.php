<?php

/*This*/
class ImpsydeCodeSetting{
    function __construct(){
        add_action('admin_menu', array($this, 'Settings') );
    }
    function Settings(){
        add_options_page('Impsyde Code Settings', 'Table Sorting Settings', 'manage_options', 'User-sort-settings-page', array($this, 'SettingsPG') );
    }
    
    function SettingsPG() {   ?>
        <div class="Title_Page">
            <h1>Settings</h1>
        </div>
        <div>
            <h2></h2>
        </div>
    <?php
    }
}

/*This class initialize the javascript that allows us to download the data we need and an test Alert when entering a post/page editing*/
class Dataload{
    function __construct(){
    add_action( 'enqueue_block_editor_assets', array($this, 'loadAlertjs'));
    add_action( 'enqueue_block_editor_assets', array($this, 'loadDatajs'));
    }
    /*Fires an Javascript alert when loading in block editor on any posts or page!*/
    function loadAlertjs(){
        wp_enqueue_script( 
            "Alert_User!",
            plugin_dir_url(__FILE__) . "src/Javascript/Alert.js"  ,
            array('wp-blocks'),
            true
        );
    }
    /*Loads Data.js*/
    function loadDatajs(){
        wp_enqueue_script( 
            "Data",
            plugin_dir_url(__FILE__) . "src/Javascript/Data.js",
            array('wp-blocks', 'wp-i18n', 'wp-editor'),
            true
        );
}
    
}

/*This class initialize and creates the custom block type that will contain our table of users*/
class CustomTable{
    function __construct(){
        add_action( 'init', array($this, "register_block"));
    }

    function register_block(){

        wp_register_script( 
            'User-Sorting-Plugin-Script',
            plugin_url( 'src/Javascript/TableBlock.js', __FILE__ ),
            $asset_file['dependencies'],
            $asset_file['version']
        );
        
        wp_register_style( 
            'User-Sorting-Custom-Editor',
            plugins_url( 'src/CSS/editor.css', __FILE__ ),
            array(),
            filemtime(plugin_dir_path( __FILE__ ) . 'src/CSS/editor.css')
        );

        wp_register_style( 
            'User-Sorting-Custom',
            plugins_url( 'src/CSS/style.css', __FILE__ ),
            array(),
            filemtime(plugin_dir_path( __FILE__ ) . 'src/CSS/style.css')
        );

        register_block_type( 'ImpsydePlugin/User-Table', array(
            'editor_script' => 'User-Sorting-Plugin-Script',
            'editor_style' => 'User-Sorting-Custom-Editor',
            'style'        => 'User-Sorting-Custom',
        ) );
    }
}

 /*Impsyde check for class*/
if ( !class_exists( "ImpsydeCodeTest" ) ){
/*Class Impysde*/
    class ImpsydeCodeTest
    {
        /*Function for installation*/
        static function install(){
            return null;
        }
        /*Function for plugin activation*/
        function __construct(){
            do_action( 'plugin_activate');
        }
        function load_plugin(){
            return null;
        }
    }
}
/*Creates and init classes*/
$ImpsydeClass = new ImpsydeCodeTest();
$ImpsydeSettingsClass = new ImpsydeCodeSetting();
$ImpsydeData = new Dataload();
$ImpsydeCustomBlock = new CustomTable();
