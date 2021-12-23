<?php
require_once 'connection.php';
session_start();

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Car Shop</title>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="../style.css">
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
                <a href="../index.php"><img src="/img/carmodel.png" alt="" width="35" height="35"></a>
            </div>
                <?php
                    //Проверяем авторизован ли пользователь
                    if(!isset($_SESSION['first_name']) && !isset($_SESSION['password'])){
                        // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
                ?>
                <div class="head">
                    <a href="../pages/registrationNew.php">Регистрация</a>
                </div>
                
                <div class="head">
                    <a href="../pages/authorizationNew.php">Авторизация</a>
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
                    <input type="text" name="color" id="color" class="form-change">
                    <button onClick="changeColor()">Send</button>
                
                    <input type="text" name="font" id="font"class="form-change">
                    <button onClick="changeFont()">Send</button>
                </div>
        </div>
        <div class="left" style="height:90vh">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
        </div>
        <div class="right"  style="height:90vh">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
        </div>
    
        <div style="padding: 35px;width: 60%;display: flex;justify-content: center; height: 90vh;">            
                <?
                    $text = mysqli_fetch_array(mysqli_query($connect, "SELECT Info FROM `car_info` WHERE car_info.ID = $id"));
                    $img = mysqli_fetch_array(mysqli_query($connect, "SELECT img FROM `car_info` WHERE car_info.ID = $id"));
                ?>
                <div class="desc">
                    <div class="ph">
                        <?
                            echo '<img src = "' . $img[0] . '">';
                        ?>
                    </div>
                    <br>
                    <div class ="info">
                        <?
                            echo $text[0] . '<br>';
                        ?>
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


