<?php
if (!defined('ABSPATH')) exit;

function your_theme_setup() {
    // Add security headers
    add_action('send_headers', function() {
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('X-Content-Type-Options: nosniff');
        header('Referrer-Policy: strict-origin-when-cross-origin');
    });

    // Disable XML-RPC
    add_filter('xmlrpc_enabled', '__return_false');

    // Remove WordPress version
    remove_action('wp_head', 'wp_generator');

    // Disable file editing in admin
    if (!defined('DISALLOW_FILE_EDIT')) {
        define('DISALLOW_FILE_EDIT', true);
    }
}
add_action('after_setup_theme', 'your_theme_setup'); 