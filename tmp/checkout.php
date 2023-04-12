<?php

    $superSecret = 'vdqdIXW7Z6eWMC5ps7UiqnuuYwxunI8xVl7uHCRi1O0fDfhaD8ZkWOdIPcCaK8fTYNfTtoCDaRmW215bmOompE5cIdWbDyXGvsk';

    // $licenseKey =

?>

<style>
    body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        color: #3c434a;
        padding: 0;
        margin: 0;
    }

    p {
        font-size: 13px;
        line-height: 1.5;
        margin: 1em 0;
    }

    .button {
        margin-left: 4px;
        padding: 4px 8px;
        position: relative;
        top: -3px;
        text-decoration: none;
        border: 1px solid #2271b1;
        border-radius: 2px;
        text-shadow: none;
        font-weight: 600;
        font-size: 13px;
        line-height: normal;
        color: #2271b1;
        background: #f6f7f7;
        cursor: pointer;
        text-align: center;
        float: left;
        margin-right: 10px;
    }
</style>

<div style="margin-top: 30px">

    <p style="max-width: 800px; margin-bottom: 30px">
        This content is coming from an external source already and is includes via an iFrame. Lorem ipsum dolor sit
        amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
        erat, sed diam voluptua.
    </p>

    <br>

    <div>
        <div class="button" style="width: 90px">
            Login
        </div>

        <div class="button" style="width: 150px">
            Register Account
        </div>

        <div class="button" style="width: 150px">
            Buy product
        </div>
    </div>

    <br><br>

    <script>

    </script>

    <p>
        <?php echo "Callback URL: " . urldecode($_GET['callback']); ?>
    </p>
</div>
