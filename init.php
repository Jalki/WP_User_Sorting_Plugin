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
    public function __construct(){
    add_action( 'enqueue_block_editor_assets', array($this, 'loadAlertjs'));
    add_action( 'enqueue_block_editor_assets', array($this, 'loadDatajs'));
    add_action('enqueue_block_editor_assets', array($this,'loadMyBlockFiles'));
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
    /*This initialize and creates the custom block type that will contain our table of users*/
    function loadMyBlockFiles() {
        wp_enqueue_script(
        'Impsyde-Code-Test',
        plugin_dir_url(__FILE__) . 'Tableblock.js',
        array('wp-blocks', 'wp-i18n', 'wp-editor'),
        true
        );
    }
}

 
/*Creates and init classes*/
/**$ImpsydeClass = new ImpsydeCodeTest();*/
$ImpsydeData = new Dataload();
$ImpsydeSettingsClass = new ImpsydeCodeSetting();
?>