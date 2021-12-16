<?php
session_start();
header('Access-Control-Allow-Origin: *');

$file = file_get_contents('data.json');
$list = json_decode($file,TRUE); 
unset($file);

$list[] = [ $_POST['data'] ];
$jsonArr = json_encode($list);
file_put_contents('data.json', $jsonArr);

echo $jsonArr;