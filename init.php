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
        add_action('enqueue_block_assets', array($this, 'registerblock'));
    }
    function registerblock()
    {
        //Register the script for the block below
        wp_register_script(
            'impsyde-block-script',
            plugins_url( 'TableBlock.js', __FILE__),
            array('wp-blocks', 'wp-components', 'wp-element', 'wp-i18n', 'wp-editor'),
            filemtime(plugin_dir_path(__FILE__) . 'TableBlock.js'),
            true
        );

        wp_register_style(
            'impsyde-block-editor-style',
            plugins_url( 'src/css/editor.css', __FILE__ ),
            array( 'wp-edit-blocks'),
            filemtime(plugin_dir_plugin(__FILE__) . 'src\css\editor.css')
        );

        wp_register_style(
            'impsyde-block-editor-frontend-style',
            plugins_url('style.css', __FILE__),
            array(),
            filemtime(plugin_dir_path(__FILE__) . 'src\css\style.css')
        );
        register_block_type('impsydetest/usertable', array(
        'editor_script' => 'impsyde-block-script',
        'editor_style' => 'impsyde-block-editor-style',
        'style' => 'impsyde-block-editor-frontend-style'
    )   );
    }
}
/*Creates and init classes*/
/**$ImpsydeClass = new ImpsydeCodeTest();*/
$Data = new Data();
$SettingsClass = new CodeSettings();
$Customblock = new CustomBlock();
?>



