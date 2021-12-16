<?php  
require_once 'connection.php';
session_start();
$mark = $_POST['mark'];
$model = $_POST['model'];
$horsePower = $_POST['horsePower'];
$price = $_POST['price'];
$firstName = $_SESSION['first_name'];
// $lastId = mysqli_query($connect,"SELECT last_insert_id()");
$seller = mysqli_query($connect,"SELECT name FROM carshop.users where id=1") or die(mysqli_error($connect));
$sell = mysqli_fetch_array($seller);
mysqli_query($connect,"INSERT INTO `models` (Manufacturer, Model, 'Horse Power') VALUES (".$mark.", ".$model.", ".$horsePower.")") or die(mysqli_error($connect));
// $name = mysqli_query($connect,"SELECT `ID` FROM `models` WHERE Manufacturer = ".$mark." and Model = ".$model."") or die(mysqli_error($connect));
mysqli_query($connect,"INSERT INTO cars ( Name, Price,isNew, Owner) VALUES ($lastId', '$price', '0', ".$sell[0].")") or die(mysqli_error($connect));
header('Location: index.php');
?>