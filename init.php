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

    function GetData()
    {
        $var = $DataCollected;
    }
}

class CustomBlock
{
    function __construct()
    {
        add_action('enqueue_block_editor_assets', array($this, 'registerblock'));
    }
    function registerblock()
    {
        //Register the script for the block below
        wp_enqueue_script('customblock', plugin_dir_url(__FILE__). 'tableblock.js', array('wp-blocks'));
    }
}
/*Creates and init classes*/
/**$ImpsydeClass = new ImpsydeCodeTest();*/
/**$Data = new Data();*/
$SettingsClass = new CodeSettings();
/**$Customblock = new CustomBlock();*/
?>



