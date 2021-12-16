<?php
    session_start();
    header('Access-Control-Allow-Origin: *');

    $file = file_get_contents('data2.json');
    $font = json_decode($file, TRUE); 
    unset($file);

    $font = $_POST['data'];
    file_put_contents('data2.json', json_encode($font));

    echo json_encode($font);
?>