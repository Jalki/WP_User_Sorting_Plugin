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
    private $DataCollected;
    
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
        add_action('init', array($this, "Registerblock"));
    }
    function Registerblock()
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
            plugins_url( 'src\CSS\editor.css', __FILE__ ),
            array( 'wp-edit-blocks'),
            filemtime(plugin_dir_plugin(__FILE__) . 'src\CSS\editor.css')
        );

        wp_register_style(
            'impsyde-block-editor-frontend-style',
            plugins_url('style.css', __FILE__),
            array(),
            filemtime(plugin_dir_path(__FILE__) . 'src\CSS\style.css')
        );

        register_block_type('', array(
        'editor_script' => 'impsyde-block-script',
        'editor_style' => 'impsyde-block-editor-style',
        'style' => 'impsyde-block-editor-frontend-style'
    ));
    }
}

 
/*Creates and init classes*/
/**$ImpsydeClass = new ImpsydeCodeTest();*/
$Data = new Data();
$SettingsClass = new CodeSettings();
$CustomBlock = new CustomBlock();
?>



