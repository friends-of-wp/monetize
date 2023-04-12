<?php if (!defined('WPINC')) die; ?>

<link rel='stylesheet' href='<?php echo WP_PLUGIN_URL . '/WPSecurityScore/wp-monetize/src/css/wp-monetize.css' ?>'
      media='all'/>

<div class="update-nag notice notice-info inline">
    Want to enjoy more features? <a href="<?php echo WpMonetizeRouter::getCheckoutRoute($productIdentifier); ?>">Upgrade to PREMIUM</a> and
    get the full product scope.
</div>

