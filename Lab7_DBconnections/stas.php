<?php
$conn = @mysqli_connect("localhost", "root", "") or die("An error with connection occured");
mysqli_select_db($conn, "radiotech");

$definition = $_POST["definition"];
$details = $_POST["details"];
$device = $_POST["device"];
$dictionary = $_POST["dictionary"];
$example = $_POST["example"];
$illustration = $_POST["illustration"];
$topic = $_POST["topic"];

// $sql = "INSERT INTO `topic`(`Розділ`, `Назва`, `Вміст`) VALUES ('Електроніка','Відеокарти','Електронний пристрій')";
// mysqli_query($conn, $sql) or die(mysqli_error($conn));
// $sql = "INSERT INTO `device`(`Topic ID`, `Назва`, `Мета використання`, `Спосіб застосування`) VALUES ('1','Процесор','Здійснює координацію роботи всіх інших пристроїв, виконує функції керування пристроями, керує обчисленнями в компютері.','Вирішує операційна система')";
// mysqli_query($conn, $sql) or die(mysqli_error($conn));
// $sql = "INSERT INTO `details`(`Device ID`, `Назва`, `Матеріал`, `Мета використання`) VALUES ('2','Арифметично-логічний пристрій','Кремній','Арифметичні операції, такі як додавання, множення і ділення, а також логічні операції (OR, AND, ASL, ROL і ін.) обробляються за допомогою АЛП.')";
// mysqli_query($conn, $sql) or die(mysqli_error($conn));
// $sql = "INSERT INTO `example`(`Topic ID`, `Вміст`) VALUES ('1','Ваш пристрій')";
// mysqli_query($conn, $sql) or die(mysqli_error($conn));
// $sql = "INSERT INTO `dictionary`(`Topic ID`, `Термін`) VALUES ('1','Кеш-память. Особлива високошвидкісна память процесора. Кеш використовується як буфер для прискорення обміну даними між процесором і оперативною памяттю, а також для збереження копій інструкцій і даних, що недавно використовувалися процесором. Значення з кеш-памяті витягаються прямо, без звертання до основної памяті.')";
// mysqli_query($conn, $sql) or die(mysqli_error($conn));

$sql = "SELECT * FROM topic";
if($result = $conn->query($sql)){
    foreach($result as $row){ 
        $userid = $row["id"];
        $username = $row["Розділ"];
        $userage = $row["Назва"];
        echo $userid, $username, " - ", $userage, "<br>";
    }
    echo "<br>";
}

$sql = "SELECT * FROM device WHERE `Назва` LIKE 'Процесор'";
if($result = $conn->query($sql)){
    foreach($result as $row){ 
        $userid = $row["id"];
        $username = $row["Topic ID"];
        $userage = $row["Назва"];
        echo $userid, $username, " - ", $userage;
    }
}

mysqli_close($conn);
