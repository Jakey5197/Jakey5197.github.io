<?php
    $IP = $_GET['ip'];

    //opening file and writing ip to contents
    $data_file = fopen("data.txt", "w");
    fwrite($data_file, $IP);
    fclose($data_file);
?>