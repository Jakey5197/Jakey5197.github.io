<?php
    // Get the visitor's IP address
    $ip = $_SERVER['REMOTE_ADDR'];

    // Save the IP address to data.txt file
    $file = fopen('data.txt', 'a');
    fwrite($file, $ip . "\n");
    fclose($file);
?>