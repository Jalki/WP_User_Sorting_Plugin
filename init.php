<?php

/*This*/
class CodeSettings{
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
            <h2>Color</h2>
        </div>
        <div>
            <h2></h2>
        </div>
    <?php
    }
}

/*This class initialize the javascript that allows us to download the data we need and an test Alert when entering a post/page editing*/
class Data
{
    private $DataCollected
    function __construct()
    {
        add_action('enqueue_block_editor_assets', array($this, 'CustomBlock'));
    }

    function CustomBlock(){
        wp_enqueue_script(
            'Impsyde-Code-Test',
            plugin_dir_url(__FILE__) . 'Tableblock.js',
            array('wp-blocks', 'wp-i18n', 'wp-editor'),
            true
            );
    }
}

class CustomBlock
{
    function __construct()
    {
        add_action('register')
    }
}

 
/*Creates and init classes*/
/**$ImpsydeClass = new ImpsydeCodeTest();*/
$Data = new Data();
$SettingsClass = new CodeSettings();
?>



