<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<head>
    <title>Pictures</title>
</head>

<body style="width: 100%;height: 100vh;margin: 0;">
    <div class="topnav">
        <div class="head">
            <a href=""><img src="/img/carmodel.png" alt="" width="35" height="35"></a>
        </div>
            <?php
                //Проверяем авторизован ли пользователь
                if(!isset($_SESSION['first_name']) && !isset($_SESSION['password'])){
                    // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
            ?>
            <div class="head">
                <a href="registrationNew.php">Регистрация</a>
            </div>
            
            <div class="head">
                <a href="authorizationNew.php">Авторизация</a>
            </div>
            <?php
                }else{
                    //Если пользователь авторизован, то выводим ссылку Выход
            ?> 
                    <div class="head">
                        <a href="logout.php">Выход</a>
                    </div>
            <?php
                }
            ?>
        <div class="head">
            <a class="active"  href="site/images.html">Картинки</a>
         </div>
    </div>
    <div class="left">
        <img src="/img/ad.jpg" style="width: 100%; margin: 20px 0;">
        <img src="/img/ad.jpg" style="width: 100%; margin: 20px 0;">
        <img src="/img/ad.jpg" style="width: 100%; margin: 20px 0;">
    </div>
    <div class="right">
        <img src="/img/ad.jpg" style="width: 100%; margin: 20px 0;">
        <img src="/img/ad.jpg" style="width: 100%; margin: 20px 0;">
        <img src="/img/ad.jpg" style="width: 100%; margin: 20px 0;">
    </div>

    <div>
        <ul id="slides">
            <li class="slide showing"><img src="../img/bmv1.jpg" class="image" width="40"></li>
            <li class="slide"><img src="../img/bmv2.jpg" class="image"></li>
            <li class="slide"><img src="../img/mers1.jpg" class="image"></li>
            <li class="slide"><img src="../img/mers2.jpg" class="image"></li>
            <li class="slide"><img src="../img/bmwm5.jpg" class="image"></li>
        </ul>
    </div>

    <script>
        var slides = document.querySelectorAll('#slides .slide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide,4000);
        
        function nextSlide() {
            slides[currentSlide].className = 'slide';
            currentSlide = (currentSlide+1)%slides.length;
            slides[currentSlide].className = 'slide showing';
        }
    </script>
</body>
</html>