<?php
    $user_ip = $_SERVER['REMOTE_ADDR'];

    $file = fopen('data.txt', 'a');

    fwrite($file, $user_ip . "\n");

    fclose($file);

    header('Location: index.html');
    
    exit;
?>