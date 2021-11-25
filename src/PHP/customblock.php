<?php
function impsyde_custom_block()
{
    wp_register_script('impsyde-block', get_template_directory_uri() . '/src/CustomBlock/TableBlock.js', array());

    register_block_type('/impsydetest/usertable', array(
        'editor_script' => 'impsyde-block'
    ));
}

add_action('init', 'impsyde_custom_block');
?>