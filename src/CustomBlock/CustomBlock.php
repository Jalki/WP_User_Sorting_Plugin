<?php

if (! defined('ABSPATH')) exit;
/*This class initialize the javascript that allows us to download the data we need and an test Alert when entering a post/page editing*/
class CustomBlock{
    public function __construct(){
    add_action('enqueue_block_editor_assets', array($this,'loadMyBlockFiles'));
    }
    /*This initialize and creates the custom block type that will contain our table of users*/
    function loadMyBlockFiles() {
        wp_enqueue_script(
        'Impsyde-Code-Test',
        plugin_dir_url(__FILE__) . 'Customblock.js',
        array('wp-blocks', 'wp-i18n', 'wp-editor'),
        true
        );
    }
}

$Block = new CustomBlock();
?>