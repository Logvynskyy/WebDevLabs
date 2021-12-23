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
    <title>Registration New</title>
</head>
<body>
    <div class="topnav">
        <div class="head">
            <a href="../index.php"><img src="../img/carmodel.png" alt="" width="35" height="35"></a>
        </div>
        <div class="head">
            <a class="active">Регистрация</a>
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
    
    
    <div id="form_register" class="form">
            <h1>Форма регистрации</h1>
 
            <form action="../php/register.php" method="post" name="form_register"|>
                <table>
                    <tbody><tr>
                        <td> Логін: </td>
                        <td>
                            <input type="text" name="first_name" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td> Пароль: </td>
                        <td>
                            <input type="password" name="password" required="required"><br>
                            <span id="valid_password_message" class="mesage_error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="btn_submit_register" value="Зареєструватися!">
                        </td>
                    </tr>
                </tbody></table>
            </form>
        </div>
  
    <!-- <script>
        function func(){
            var allOptions = document.getElementsByClassName("namesList-opt");
            var newName = document.getElementsByClassName("option__text")[0].value;

            var a = true; 
            for(let i = 0; i < allOptions.length; i++){
                if(allOptions[i].value == newName){alert("Name already exists."); a = false}
            }
            if(a){
                var list = document.getElementById('namesList');
                var option = document.createElement('option');
                option.value = newName;
                option.className = "namesList-opt";
                list.appendChild(option);
            }
        }
    </script> -->
</body>
</html>