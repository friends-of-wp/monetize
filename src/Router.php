<?php

abstract class WpMonetizeRouter
{
    const ROUTE_CHECKOUT = 'wp-monetize-checkout';

    static public function registerRoutes()
    {
        add_submenu_page('_doesnt_exist', 'Check Out', '', 'manage_options',  self::ROUTE_CHECKOUT, 'wp_monetize_show_check_out');
    }

    static public function getCheckoutRoute($productIdentifier)
    {
        return "/wp-admin/admin.php?page=" . self::ROUTE_CHECKOUT . '&product=' . $productIdentifier;
    }
}
