<div class="wrap">
    <div id="icon-themes" class="icon32"></div>
    <h2>Checkout</h2>

    <script type="text/javascript">
        function iframeLoaded() {
            const iFrameID = document.getElementById('monetize-checkout-iframe');
            if (iFrameID) {
                iFrameID.height = "";
                iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + "px";
            }
        }
    </script>

    <div>
        <iframe id="monetize-checkout-iframe" src="<?php echo WpMonetizeMarket::getIFrameUrl($_GET['product']); ?>"
                width="100%"
                onload="iframeLoaded()">
        </iframe>
    </div>
</div>
