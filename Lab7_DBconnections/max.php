<?php
$conn = @mysqli_connect("localhost", "root", "") or die("An error with connection occured");
mysqli_select_db($conn, "buses");

// $sql = "INSERT INTO `drivers`(`Name`, `SName`, `FName`, `Experience`, `Category`) VALUES ('Stas','Logvinskiy','Igorevich','4','D')";
// mysqli_query($conn, $sql) or die(mysqli_error($conn));
// $sql = "INSERT INTO `buses`(`IdDriver`, `IdRoute`, `Model`, `Sits`, `Number`, `Mileage`, `BirthYear`, `Category`) VALUES ('1','1','MAN','55','146','55880','01.01.2019','D')";
// mysqli_query($conn, $sql) or die(mysqli_error($conn));
// $sql = "INSERT INTO `routes`(`Type`, `Length`, `Title`, `Cost`) VALUES ('City','53','Borsch-Tresh','134')";
// mysqli_query($conn, $sql) or die(mysqli_error($conn));
// $sql = "INSERT INTO `schedules`(`Date`, `IdRoute`, `InTime`, `OutTime`, `ExpProfit`, `Profit`) VALUES ('02.12.2021','1','2021-01-01 10:00:00','2021-01-01 22:00:00','56613','22888')";
// mysqli_query($conn, $sql) or die(mysqli_error($conn));
// $sql = "INSERT INTO `stoplists`(`Count`, `IdRoute`, `IdStop`) VALUES ('51','1','1')";
// mysqli_query($conn, $sql) or die(mysqli_error($conn));
// $sql = "INSERT INTO `stops`(`Title`, `Profit`, `ExpProfit`, `Location`) VALUES ('First_Stop','22888','56613','Borsch')";
// mysqli_query($conn, $sql) or die(mysqli_error($conn));

$sql = "SELECT * FROM drivers";
if($result = $conn->query($sql)){
    foreach($result as $row){ 
        $name = $row["Name"];
        $sname = $row["SName"];
        $fname = $row["FName"];
        echo $sname, " - ", $name,  " - ", $fname, "<br>";
    }
    echo "<br>";
}

$sql = "SELECT * FROM buses WHERE `Model` LIKE 'MAN'";
if($result = $conn->query($sql)){
    foreach($result as $row){ 
        $model = $row["Model"];
        $sits = $row["Sits"];
        $mileage = $row["Mileage"];
        echo $model, " Number of seats - ", $sits, " Meleage of bus - ", $mileage;
    }
}

mysqli_close($conn);
