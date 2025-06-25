<<<<<<< HEAD
<?php
if (!defined('ABSPATH')) {
    exit;
}

function theme_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ]);
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-line-height');
    add_theme_support('custom-spacing');
    add_theme_support('custom-units');
    
    register_nav_menus([
        'primary' => __('Primary Menu', 'textdomain'),
        'footer' => __('Footer Menu', 'textdomain')
    ]);
}
add_action('after_setup_theme', 'theme_setup');

function theme_scripts() {
    wp_enqueue_style('theme-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/main.js', [], wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');

function theme_block_styles() {
    wp_enqueue_script('theme-block-styles', get_template_directory_uri() . '/js/block-styles.js', ['wp-blocks'], wp_get_theme()->get('Version'), true);
}
add_action('enqueue_block_editor_assets', 'theme_block_styles');
=======
<?php
// functions.php

// Enqueue styles and scripts
function enqueue_theme_assets() {
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_assets');

// Register navigation menus
function register_theme_menus() {
  register_nav_menu('primary-menu', 'Primary Menu');
}
add_action('init', 'register_theme_menus');
>>>>>>> c756519 (Save current progress: animations, header/footer includes, and layout updates)
