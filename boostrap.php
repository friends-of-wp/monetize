<?php

if (!defined('WPINC')) die;

// @todo always load newest version and try to be backwards compatible

if (defined('WP_MONETIZE_LOADED')) {
    return;
}

define('WP_MONETIZE_LOADED', true);
define('WP_MONETIZE_VERSION', '0.0.1');

if (!isset($wpMonetizePremiumProducts)) {
    $wpMonetizePremiumProducts = [];
}

include_once __DIR__ . '/autoload.php';

function wp_monetize_show_check_out()
{
    include __DIR__ . '/src/templates/pages/checkout.php';
}

function wp_monetize_register_style()
{
    wp_register_style('wp-monetize', get_template_directory_uri() . '/wp-monetize/src/css/wp-monetize.css', [], '1.0');
}

add_action('admin_menu', [WpMonetizeRouter::class, 'registerRoutes']);
add_action('wp_enqueue_scripts', 'wp_monetize_register_style');
