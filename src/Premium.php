<?php

abstract class WpMonetizePremium
{
    static $activeProducts = [];

    public static function activatePremium($productIdentifier)
    {
        self::$activeProducts[] = $productIdentifier;
    }

    public static function isPremium($productIdentifier)
    {
        return in_array($productIdentifier, self::$activeProducts);
    }
}
