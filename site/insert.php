<?php
$conn = @mysqli_connect("localhost", "root", "") or die("An error with connection occured");
mysqli_select_db($conn, "carshop");

$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Mercedes-Benz','S-Class','435')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Volkswagen','Touareg','249')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('BMW','X3','198')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Infiniti','QX80','400')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Ford','F-150','430')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Porsche','Cayenne','249')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Chevrolet','Corvette','850')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Skoda','Octavia','160')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Toyota','Land Cruiser 300','249')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Land Rover','Range Rover Velar','320')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Lexus','ES','198')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Volvo','XC60','200')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Tesla','Model X','500')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Maserati','Levante','400')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Jaguar','F-Pace','480')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('KIA','Picanto','110')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Audi','Q7','249')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Hyundai','Elantra','180')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Subaru','Impreza WRX STI','270')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Mitsubishi','ASX','150')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Nissan','Juke','200')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Mercedes-Benz','Sprinter','205')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Volkswagen','Passat','180')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('BMW','M8','640')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Infiniti','QX70','215')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Ford','Mondeo','190')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Porsche','Taycan','680')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Chevrolet','Aveo','90')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Skoda','Kodiaq','220')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Toyota','Camry','301')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Land Rover','Discovery','249')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Lexus','LX','310')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Volvo','V90','195')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Tesla','Model S Plaid','1100')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Maserati','Ghibli','350')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Jaguar','XF','310')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('KIA','Sorento','199')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Audi','A6','290')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Hyundai','Accent','120')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Subaru','Outback','188')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Mitsubishi','Lancer','190')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `models`(`Manufacturer`, `Model`, `Horse Power`) VALUES ('Nissan','Leaf','170')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));



$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('1','24000','1')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('2','47000','0')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('3','77000','1')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('4','71000','0')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('5','33000','0')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('6','17000','1')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('7','25000','1')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('8','13000','1')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('6','40000','0')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('5','72000','1')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('4','76000','0')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('10','78000','0')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('15','75000','0')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('11','11000','1')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('11','33500','1')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('14','75600','0')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('3','63500','1')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('4','36900','1')"; mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('1','52000','0')"; 
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql = "INSERT INTO `cars`(`Name`, `Price`, `isNew`) VALUES ('2','41000','0')";
mysqli_query($conn, $sql) or die(mysqli_error($conn));


// $sql = "SELECT * FROM drivers";
// if($result = $conn->query($sql)){
//     foreach($result as $row){ 
//         $name = $row["Name"];
//         $sname = $row["SName"];
//         $fname = $row["FName"];
//         echo $sname, " - ", $name,  " - ", $fname, "<br>";
//     }
//     echo "<br>";
// }

// $sql = "SELECT * FROM buses WHERE `Model` LIKE 'MAN'";
// if($result = $conn->query($sql)){
//     foreach($result as $row){ 
//         $model = $row["Model"];
//         $sits = $row["Sits"];
//         $mileage = $row["Mileage"];
//         echo $model, " Number of seats - ", $sits, " Meleage of bus - ", $mileage;
//     }
// }

mysqli_close($conn);
