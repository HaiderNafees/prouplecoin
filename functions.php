<?php
// Theme Setup
function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'primary' => 'Primary Menu'
    ));
}
add_action('after_setup_theme', 'theme_setup');

// Enqueue Scripts and Styles
function theme_scripts() {
    // Styles
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');

    // Scripts
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');

// Register Whitepaper Template
function register_whitepaper_template($templates) {
    $templates['whitepaper.php'] = 'Whitepaper';
    return $templates;
}
add_filter('theme_page_templates', 'register_whitepaper_template');