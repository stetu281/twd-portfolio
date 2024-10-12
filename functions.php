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
    'core/button'
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
 * Enqueue Frontpage Stylesheet
 */
add_action('wp_enqueue_scripts', 'starter_enqueue_frontpage_styles');

function starter_enqueue_frontpage_styles() {

  if(is_page(16)) {
    $asset = include get_theme_file_path( 'assets/css/frontpage.asset.php');

    wp_enqueue_style(
      'frontpage-style',
      get_theme_file_uri( 'assets/css/frontpage.css' ),
      $asset['dependencies'],
      $asset['version']
    );  
  }


};

/**
 * Enqueue Works Page Stylesheet
 */
add_action('wp_enqueue_scripts', 'starter_enqueue_works_styles');

function starter_enqueue_works_styles() {

  if(is_page(18)) {
    $asset = include get_theme_file_path( 'assets/css/works.asset.php');

    wp_enqueue_style(
      'works-style',
      get_theme_file_uri( 'assets/css/works.css' ),
      $asset['dependencies'],
      $asset['version']
    );
  }
};

/**
 * Enqueue Contact Page Stylesheet
 */
add_action('wp_enqueue_scripts', 'starter_enqueue_contact_styles');

function starter_enqueue_contact_styles() {

  if(is_page(20)) {
    $asset = include get_theme_file_path( 'assets/css/contact.asset.php');

    wp_enqueue_style(
      'contact-style',
      get_theme_file_uri( 'assets/css/contact.css' ),
      $asset['dependencies'],
      $asset['version']
    );
  }
};

/**
 * Enqueue Walking Page Stylesheet
 */
add_action('wp_enqueue_scripts', 'starter_enqueue_walking_styles');

function starter_enqueue_walking_styles() {

  if(is_page(486)) {
    $asset = include get_theme_file_path( 'assets/css/walking.asset.php');

    wp_enqueue_style(
      'walking-style',
      get_theme_file_uri( 'assets/css/walking.css' ),
      $asset['dependencies'],
      $asset['version']
    );
  }
};

/**
 * Enqueue Single Article Stylesheet
 */
add_action('wp_enqueue_scripts', 'starter_enqueue_single_styles');

function starter_enqueue_single_styles() {

  if(is_single()) {
    $asset = include get_theme_file_path( 'assets/css/walking.asset.php');

    wp_enqueue_style(
      'single-style',
      get_theme_file_uri( 'assets/css/single.css' ),
      $asset['dependencies'],
      $asset['version']
    );
  }
};

/**
 * Enqueue the custom.js file
 */
add_action('wp_enqueue_scripts', 'starter_frontend_scripts' );

function starter_frontend_scripts() {

  $asset = include get_theme_file_path() . '/assets/js/custom.asset.php';

  wp_enqueue_script( 'starter-frontend-scripts', get_theme_file_uri() . '/assets/js/custom.js', $asset['dependencies'], $asset['version'], true);
}

/**
 * Enqueue js for works page
 */
add_action('wp_enqueue_scripts', 'work_page_scripts');

function work_page_scripts() {
  if(is_page(18)) {

    $asset = include get_theme_file_path() . '/assets/js/page-works.asset.php';

    wp_enqueue_script('work_page_scripts', get_theme_file_uri() . '/assets/js/page-works.js', $asset['dependencies'], $asset['version'], true );
  }
}

/**
 * Enqueue js for walking Articles page
 */
add_action('wp_enqueue_scripts', 'walking_page_scripts');

function walking_page_scripts() {
  if(is_page(486)) {

    $asset = include get_theme_file_path() . '/assets/js/page-walking.asset.php';

    wp_enqueue_script('walking_page_scripts', get_theme_file_uri() . '/assets/js/page-walking.js', $asset['dependencies'], $asset['version'], true );
  }
}

/** * Completely Remove jQuery From WordPress */
function my_init() {
  if (!is_admin()) {
      wp_deregister_script('jquery');
      wp_register_script('jquery', false);
  }
}
add_action('init', 'my_init');

/**
 * Only load wpcf7 scripts and style on contact page
 */

 add_filter( 'wpcf7_load_js', '__return_false' );
 add_filter( 'wpcf7_load_css', '__return_false' );

add_action('wp_enqueue_scripts', 'load_wpcf7_scripts');

function load_wpcf7_scripts() {
  if ( is_page('20') ) {
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
      wpcf7_enqueue_scripts();
    }
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
      wpcf7_enqueue_styles();
    }
  }
}