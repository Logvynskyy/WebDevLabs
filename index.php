<?php
    //Запускаем сессию
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
            $(".facebook").text("")
                .append("<img src=https://www.facebook.com/images/fb_icon_325x325.png width=20 height=20 />")
                .button()
            $(".twitter").text("")
                .append("<img src=https://play-lh.googleusercontent.com/yQ0oBTVi7VttofA73DSrcf9zrBsnktxxxn6ZaAoSVV8GNFlJKh2Z-A0CT5XgOKWwE_fs width=20 height=20 />")
                .button()
            $(".instagram").text("")
                .append("<img src=https://store-images.s-microsoft.com/image/apps.31997.13510798887167234.6cd52261-a276-49cf-9b6b-9ef8491fb799.30e70ce4-33c5-43d6-9af1-491fe4679377?mode=scale&q=90&h=300&w=300 width=20 height=20 />")
                .button()
            $(".pinterest").text("")
                .append("<img src=https://3dnews.ru/assets/external/illustrations/2020/09/23/1021339/32432432.jpg width=20 height=20 />")
                .button()
            } );
            </script>
    </head>
    <body>
        <div class="topnav">
            <a class="active" href=""><img src="/img/carmodel.png" alt="" width="35" height="35"></a>
            <a href="site/registration.html"></a>
            <a href="site/images.html"></a>
          </div>
          <div class="left"><img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
           
            <ul id="menu">
                <li class="ui-state-disabled">
                <li><a href="index.html">Главная</a></li>
                <li><div>Регистрация</div>
                  <ul>
                    <li class="ui-state-disabled">
                    <li><a href="site/registrationNew.php">Новый пользыватель</a></li>
                    <li><a href="site/authNew.php">Войти</a></li>
                  </ul>
                </li>
                <li><a href="site/images.html">Картинки</a></li>
                  </ul>
                </li>
                <li class="ui-state-disabled"></li>
              </ul>
        </div>
        <div class="right">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
            <img src="img/ad.jpg" style="width: 100%; margin: 20px 0;">
        </div>
        <div id="auth_block">
            <?php
                //Проверяем авторизован ли пользователь
                if(!isset($_SESSION['first_name']) && !isset($_SESSION['password'])){
                    // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
            ?>
            <div id="link_register">
                <a href="site/registrationNew.php">Регистрация</a>
            </div>
            
            <div id="link_auth">
                <a href="site/authNew.php">Авторизация</a>
            </div>
            <?php
                }else{
                    //Если пользователь авторизован, то выводим ссылку Выход
            ?> 
                    <div id="link_logout">
                        <a href="site/logout.php">Выход</a>
                    </div>
            <?php
                }
            ?>
        </div>
        <div style="margin: 0px;width: 60%;display: flex;justify-content: center;">
            <table>
                <caption style="font-weight: bolder;color: darkmagenta;" >Car shop by(Sh1monchik,Gr1nis,Shovch1k,Maks1mka)</caption> 
                <tr>    
                    <th>Марка</th>
                    <th>Модель</th>
                    <th>Лошадиные силы</th>
                    <th>Цена</th>
                    <th>Продавец</th>
                </tr>
               
                <?php
                $connection = new mysqli("localhost","root","","carshop");
                $query = "SELECT * into outfile ‘D:\OpenServer\domains\WebDevLabs\text.csv’ lines terminated by ‘
                ‘ from cars ";
                $result = $connection->query($query);
                $cars = mysqli_query($connect, "SELECT * FROM `cars`,`models` WHERE cars.Name = models.ID");
                $cars = mysqli_fetch_all($cars);
                 
                foreach($cars as $car) {
                ?>
                <tr>
                    <td><?= $car[6]?></td>
                    <td><?= $car[7]?></td>
                    <td><?= $car[8]?></td>
                    <td><?= $car[2]?></td>
                    <td><?= $car[4]?></td>

                    <td><a href="deleteCar.php?id=<?= $car[0] ?>" style="text-decoration: none;color:darkred;">Delete</a></td>
                </tr>
                <?php 
                }
                ?>
            </table>
        </div>
        <div class="bottom">
            <span class = "text-center">Made by Gr1nis, Sh1monchik, <a class="laydak" href="JavaScript:alert('Maks1mka laydak');">Maks1mka</a> and Shovch1k</span>
            <a class="facebook" href="https://facebook.com" target="_blank">Facebook</a>
            <a class="twitter" href="https://twitter.com" target="_blank">Twitter</a>
            <a class="instagram" href="https://instagram.com" target="_blank">Instagram</a>
            <a class="pinterest" href="https://pinterest.com" target="_blank">Pinterest</a>
        </div>
    </body>
    
</html>