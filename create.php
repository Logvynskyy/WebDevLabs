<?php  
require_once 'php\connection.php';
echo ("test");
$name = $_POST['name'];
$price = $_POST['price'];
$isNew = $_POST['isNew'];
$power = $_POST['power'];
$model = $_POST['model'];
$manufacturer = "INSERT INTO `models` (`Manufacturer`, `Model`, `Horse Power`) VALUES ('$name', '$model', '$power');";
if (mysqli_query($connect, $manufacturer)) {
    $last_id = mysqli_insert_id($connect);
    mysqli_query($connect,"INSERT INTO `cars` (`Name`, `Price`, `isNew`) VALUES ('$last_id', '$price', '$isNew');");
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } else {
    echo "Error: " . $manufacturer . "<br>" . mysqli_error($connect);
  }



header('Location: index.php');
?>