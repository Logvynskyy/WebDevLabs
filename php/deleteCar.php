<?php
require_once 'connection.php';

$id = $_GET['id']; 

mysqli_query($connect,"DELETE FROM `cars` WHERE `cars`.`ID` = $id");
header('Location: index.php');
?>