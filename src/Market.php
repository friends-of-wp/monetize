<?php

abstract class WpMonetizeMarket
{
    const DOMAIN_MARKET = 'http://localhost:8080/wp-content/plugins/WPSecurityScore/wp-monetize/tmp/checkout.php';

    public static function getIFrameUrl($productIdentifier)
    {
        /**
         * @todo handle wordpress in a sub dir
         * @todo add a secret to the url to verify
         */
        $activationCallBackUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/wp-content/plugins/WPSecurityScore/wp-monetize/src/api/activate.php?product=' . $productIdentifier . '&activationKey=' . self::createCreateActivationKey();

        return self::DOMAIN_MARKET . '?product=' . $productIdentifier . '&callback=' . urlencode($activationCallBackUrl);
    }

    private static function createCreateActivationKey()
    {
        global $wpMonetizeCustomerId;

        $identifier = [
            'customerId' => $wpMonetizeCustomerId,
            'domain' => $_SERVER['HTTP_HOST']
        ];

        return md5(json_encode($identifier));
    }

    public static function activateProduct($productIdentifier, $activationKey)
    {

    }
}
