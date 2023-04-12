<?php

$result = json_encode(
  [
      'status' => 'success',
      'message' => 'plugin successfully activated',
      'plugin_name' => $_GET['product']
  ], JSON_PRETTY_PRINT
);

echo $result;
