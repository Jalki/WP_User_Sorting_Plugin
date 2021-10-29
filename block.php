<?php
function loadMyBlockFiles() {
    wp_enqueue_script(
      'my-super-unique-handle',
      plugin_dir_url(__FILE__) . 'block.js',
      array('wp-blocks', 'wp-i18n', 'wp-editor'),
      true
    );
  }

add_action('enqueue_block_editor_assets', 'TableBlock.js');