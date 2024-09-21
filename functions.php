<?php

/**
 * Add Editor Stylesheet
 */
function portfolio_editor_stylesheet() {
  add_theme_support('editor-styles');
  add_editor_style('assets/css/editor-styles.css');
};
add_action('after_setup_theme', 'portfolio_editor_stylesheet');


/**
 * Enqueue Block Stylesheets
 */
add_action('init', 'starter_enqueue_block_styles');

function starter_enqueue_block_styles()
{

  //add block name for each style
  $blocks = array(
    'core/button',
    'core/heading'
  );

  foreach ($blocks as $block) {
    $slug = str_replace('/', '-', $block);
    $asset = include get_theme_file_path( "assets/css/blocks/{$slug}.asset.php" );

    wp_enqueue_block_style($block, array(
      'handle' => "starter-block-{$slug}",
      'src' => get_theme_file_uri("assets/css/blocks/{$slug}.css"),
      'path' => get_theme_file_path("assets/css/blocks/{$slug}.css"),
      'deps' => $asset['dependencies'],
      'ver' => $asset['version']
    ));

  }
};

/**
 * Enqueue Custom Stylesheets
 */
add_action('wp_enqueue_scripts', 'starter_enqueue_main_styles');

function starter_enqueue_main_styles() {
  $asset = include get_theme_file_path( 'assets/css/screen.asset.php');

  wp_enqueue_style(
    'starter-style',
    get_theme_file_uri( 'assets/css/screen.css' ),
    $asset['dependencies'],
    $asset['version']
  );
};

/**
 * Enqueue the custom.js file
 */
add_action('wp_enqueue_scripts', 'starter_frontend_scripts' );

function starter_frontend_scripts() {

  $asset = include get_theme_file_path() . '/assets/js/custom.asset.php';

  wp_enqueue_script( 'starter-frontend-scripts', get_theme_file_uri() . '/assets/js/custom.js', $asset['dependencies'], $asset['version'], true);
}

/** * Completely Remove jQuery From WordPress */
function my_init() {
  if (!is_admin()) {
      wp_deregister_script('jquery');
      wp_register_script('jquery', false);
  }
}
add_action('init', 'my_init');