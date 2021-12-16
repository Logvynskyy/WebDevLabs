<?php
    session_start();
    header('Access-Control-Allow-Origin: *');

    $file = file_get_contents('data1.json');
    $color = json_decode($file, TRUE); 
    unset($file);

    $color = $_POST['data'];
    file_put_contents('data1.json', json_encode($color));

    echo json_encode($color);
?>