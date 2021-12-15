<?php
    //Запускаем сессию
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Authorisation New</title>
</head>
<body>
<div class="block_for_messages">
    <?php
 
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
 
            //Уничтожаем чтобы не появилось заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }
 
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            //Уничтожаем чтобы не появилось заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>
 
<?php
    //Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
    //иначе выводим сообщение о том, что он уже авторизован
    if(!isset($_SESSION["first_name"]) && !isset($_SESSION["password"])){
?>
 
    
    <div class="topnav">
        <div class="head">
            <a href="../index.php"><img src="/img/carmodel.png" alt="" width="35" height="35"></a>
        </div>
        <div class="head">
            <a class="active">Авторизация</a>
        </div>
        <div class="head">
            <a href="images.php">Картинки</a>  
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

    <div id="form_auth" class="form">
        <h1>Форма авторизации</h1>
        <form action="../php/auth.php" method="post" name="form_auth">
            <table>
          
                <tbody><tr>
                    <td> Login: </td>
                    <td>
                        <input type="text" name="first_name" required="required"><br>
                        <!-- <span id="valid_email_message" class="mesage_error"></span> -->
                    </td>
                </tr>
          
                <tr>
                    <td> Пароль: </td>
                    <td>
                        <input type="password" name="password" placeholder="минимум 6 символов" required="required"><br>
                        <!-- <span id="valid_password_message" class="mesage_error"></span> -->
                    </td>
                </tr>
 
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn_submit_auth" value="Войти">
                    </td>
                </tr>
            </tbody></table>
        </form>
    </div>
 
<?php
    }else{
?>
 
    <div id="authorized">
        <h2>Вы уже авторизованы</h2>
    </div>
 
<?php
    }
?>
</body>
</html>