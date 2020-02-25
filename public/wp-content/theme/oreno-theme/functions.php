<?php

declare(strict_types=1);

function myguten_enqueue()
{
  $asset = include(get_home_path() . '/blocks/h2/index.asset.php');
  wp_enqueue_script(
    'myguten-script',
    get_home_url() . '/blocks/h2/index.js',
    $asset['dependencies'],
    $asset['version'],
  );
}
add_action('enqueue_block_editor_assets', 'myguten_enqueue');
