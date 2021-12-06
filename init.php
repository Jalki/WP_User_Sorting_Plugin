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

/*This class initialize the javascript that allows us to download the data we need and then place the data into the custom block that will show the information*/
class Data
{
    function __construct(){
        add_action();
    }

    function GetData()
    {
        wp_enqueue_script(
            'Get_Data',
            plugin_dir_url(__FILE__) . 'src\Javascript\Data.js',
            array('wp-blocks', 'wp-i18n', 'wp-editor'),
            true
            );
    }

    function SetData()
    {
        
    }
}


/*Creates and init classes*/
/**$Data = new Data();*/
$SettingsClass = new CodeSettings();
/**$Customblock = new CustomBlock();*/
?>



