<?php

abstract class WpMonetizeLoader
{
    const ASSET_TYPE_BUTTON = 'button';

    /**
     * @var string[]
     */
    static private $assetTypes = [
        self::ASSET_TYPE_BUTTON
    ];

    static public function load($productIdentifier, $type, $identifier)
    {
        if(WpMonetizePremium::isPremium($productIdentifier)) {
            return;
        }

        if (!in_array($type, self::$assetTypes)) {
            throw new \RuntimeException('The given asset type "' . $type . '" is not known.');
        }

        $templateFileName = __DIR__ . '/templates/' . $type . '/' . $identifier . '.php';

        if (file_exists($templateFileName)) {
            include $templateFileName;
        } else {
            throw new \RuntimeException('No template with name "' . $identifier . '" found.');
        }
    }
}
