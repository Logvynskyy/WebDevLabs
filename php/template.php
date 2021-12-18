<?php
require_once 'connection.php';
session_start();

$id = $_GET['id'];

$text = mysqli_fetch_array(mysqli_query($connect, "SELECT Info FROM `car_info` WHERE car_info.ID = $id"));
$img = mysqli_fetch_array(mysqli_query($connect, "SELECT img FROM `car_info` WHERE car_info.ID = $id"));

echo $text[0] . '<br>';

echo '<img src = "' . $img[0] . '">';

