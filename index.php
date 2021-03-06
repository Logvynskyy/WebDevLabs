<?php

require_once 'php/connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Car Shop</title>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
        <script>
        $( function() {
            $( "#menu" ).menu();
            $("#facebook").text("")
                .append("<img src=https://www.facebook.com/images/fb_icon_325x325.png width=20 height=20 />")
                .button()
            $("#twitter").text("")
                .append("<img src=https://play-lh.googleusercontent.com/yQ0oBTVi7VttofA73DSrcf9zrBsnktxxxn6ZaAoSVV8GNFlJKh2Z-A0CT5XgOKWwE_fs width=20 height=20 />")
                .button()
            $("#instagram").text("")
                .append("<img src=https://store-images.s-microsoft.com/image/apps.31997.13510798887167234.6cd52261-a276-49cf-9b6b-9ef8491fb799.30e70ce4-33c5-43d6-9af1-491fe4679377?mode=scale&q=90&h=300&w=300 width=20 height=20 />")
                .button()
            $("#pinterest").text("")
                .append("<img src=https://3dnews.ru/assets/external/illustrations/2020/09/23/1021339/32432432.jpg width=20 height=20 />")
                .button()
            } );
            </script>
    </head>
    <body>
        <div class="topnav">
            <div class="head">
                <a class="active" href=""><img src="/img/carmodel.png" alt="" width="35" height="35"></a>
            </div>
                <?php
                    //Проверяем авторизован ли пользователь
                    if(!isset($_SESSION['first_name']) && !isset($_SESSION['password'])){
                        // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
                ?>
                <div class="head">
                    <a href="pages/registrationNew.php">Регистрация</a>
                </div>
                
                <div class="head">
                    <a href="pages/authorizationNew.php">Авторизация</a>
                </div>
                
                <?php
                    }else{
                        if($_SESSION['first_name'] == "Stas"){
                ?> 
                        <div class="head">
                            <a href="php/diary.php">Заметки</a>
                        </div>
                <?php
                        }
                ?>
                        <div class="head">
                            <a href="php/logout.php">Выход</a>
                        </div>
                <?php
                    }
                ?>
                <div style="float: right; padding: 6px">
                    <input type="text" name="color" id="color">
                    <button onClick="changeColor()">Send</button>
                
                    <input type="text" name="font" id="font">
                    <button onClick="changeFont()">Send</button>
                </div>
        </div>
        <div class="left">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
        </div>
        <div class="right">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
        </div>
    
        <div style="margin: 0px;width: 60%;display: flex;justify-content: center;">
            
            <div>
                <table class="cars_table">
                    <caption style="font-weight: bolder;color: darkmagenta;" >Car shop by(Sh1monchik,Gr1nis,Shovch1k,Maks1mka)</caption> 
                    <tr class="cars_tr">    
                        <th class="cars_td">Марка</th>
                        <th class="cars_td">Модель</th>
                        <th class="cars_td">Лошадиные силы</th>
                        <th class="cars_td">Цена</th>
                        <th class="cars_td">Продавец</th>
                    </tr>
                
                    <?php
                    $cars = mysqli_query($connect, "SELECT * FROM `cars`,`models` WHERE cars.Name = models.ID");
                    $cars = mysqli_fetch_all($cars);
                    
                    foreach($cars as $car) {
                    ?>
                    <tr class="cars_tr">
                        <td class="cars_td"><a href="php\template.php?id=<?= $car[0] ?>"><?= $car[6]?></a></td>
                        <td class="cars_td"><?= $car[7]?></td>
                        <td class="cars_td"><?= $car[8]?></td>
                        <td class="cars_td"><?= $car[2]?></td>
                        <td class="cars_td"><?php if($car[4] == 3){?>
                            Салон
                        <?php 
                            }
                        ?></td>
                        <?php
                            if($_SESSION['first_name'] == "Stas"){
                        ?> 
                        <td class="cars_td"><a href="php scripts\deleteCar.php?id=<?= $car[0] ?>" style="text-decoration: none;color:darkred;">Удалить</a></td>
                        <?php
                            }
                        ?>
                    </tr>
                    <?php 
                    }
                    ?>
                </table>
                <div style="width: 60%; margin-left: 30px;">
                    <form action="create.php" method="post">
                        <h1>Додавання машини</h1>
                        <p class="text-form">Name</p>
                        <input type="text" name="name">
                        <p class="text-form">Price</p>
                        <input type="number" name="price">
                        <p class="text-form">iSNew</p>
                        <input type="number" name="isNew">
                        <p class="text-form">Horse Power</p>  
                        <input type="number"  name="power">
                        <p class="text-form">Model</p>
                        <br>
                        <input type="text" name="model">

                        <input type="submit" value="Add new car" style="margin-bo   ttom: 15px;">
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom">
            <span class = "text-center">Made by Gr1nis, Sh1monchik, <a class="laydak" href="JavaScript:alert('Maks1mka laydak');">Maks1mka</a> and Shovch1k</span>
            <div style="float: right">
                <a class="cm" id="facebook" href="https://facebook.com" target="_blank">Facebook</a>
                <a class="cm" id="twitter" href="https://twitter.com" target="_blank">Twitter</a>
                <a class="cm" id="instagram" href="https://instagram.com" target="_blank">Instagram</a>
                <a class="cm" id="pinterest" href="https://pinterest.com" target="_blank">Pinterest</a>
            </div>
        </div>
        <script>
            
            function changeColor(){

                let data = document.getElementById('color').value;

                $.ajax({
                    url: 'php/test1.php',
                    type: 'POST',
                    crossDomain: true,
                    dataType: 'json',
                    data: data,
                    success: function(data1) { 

                        console.log(data);

                        document.body.style.background = data;

                    }
                });
            };   

            function changeFont(){

                let data = document.getElementById('font').value;

                $.ajax({
                    url: 'php/test2.php',
                    type: 'POST',
                    crossDomain: true,
                    dataType: 'json',
                    data: data,
                    success: function(data2) { 

                        console.log(data);

                        document.body.style.fontFamily = data;

                    }
                });
            };
        
    </script>
    </body>
    
</html>