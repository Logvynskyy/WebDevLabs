<?php
    //Запускаем сессию
    session_start();
 
    //Добавляем файл подключения к БД
    require_once("../connection.php");
 
    //Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
    $_SESSION["error_messages"] = '';
 
    //Объявляем ячейку для добавления успешных сообщений
    $_SESSION["success_messages"] = '';

    if(isset($_POST["btn_submit_register"]) && !empty($_POST["btn_submit_register"])){
 
        if(isset($_POST["first_name"])){
     
            //Обрезаем пробелы с начала и с конца строки
            $first_name = trim($_POST["first_name"]);
         
            //Проверяем переменную на пустоту
            if(!empty($first_name)){
                // Для безопасности, преобразуем специальные символы в HTML-сущности
                $first_name = htmlspecialchars($first_name, ENT_QUOTES);
            }else{
                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите Ваше имя</p>";
         
                //Возвращаем пользователя на страницу регистрации
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ".$address_site."/site/registrationNew.php");
         
                //Останавливаем скрипт
                exit();
            }
         
             
        }else{
            // Сохраняем в сессию сообщение об ошибке. 
            $_SESSION["error_messages"] .= "<p class='mesage_error'>Отсутствует поле с именем</p>";
         
            //Возвращаем пользователя на страницу регистрации
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/site/registrationNew.php");
         
            //Останавливаем скрипт
            exit();
        }

        if(isset($_POST["password"])){
 
            //Обрезаем пробелы с начала и с конца строки
            $password = trim($_POST["password"]);
         
            if(!empty($password)){
                $password = htmlspecialchars($password, ENT_QUOTES);
         
                //Шифруем папроль
                $password = md5($password."top_secret"); 
            }else{
                // Сохраняем в сессию сообщение об ошибке. 
                $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите Ваш пароль</p>";
                 
                //Возвращаем пользователя на страницу регистрации
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ".$address_site."/site/registrationNew.php");
         
                //Останавливаем  скрипт
                exit();
            }
         
        }else{
            // Сохраняем в сессию сообщение об ошибке. 
            $_SESSION["error_messages"] .= "<p class='mesage_error'>Отсутствует поле для ввода пароля</p>";
             
            //Возвращаем пользователя на страницу регистрации
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/site/registrationNew.php");
         
            //Останавливаем  скрипт
            exit();
        }
        
        $query = "INSERT INTO `Users`(`Name`, `Password`, `isAdmin`) VALUES ('$first_name', '$password', '0')";
        $result_query_insert = mysqli_query($mysqli, $query);
 
        if(!$result_query_insert){
            // Сохраняем в сессию сообщение об ошибке. 
            $_SESSION["error_messages"] .= "<p class='mesage_error' >Ошибка запроса на добавления пользователя в БД</p>";
            
            //Возвращаем пользователя на страницу регистрации
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/site/registrationNew.php");
        
            //Останавливаем  скрипт
            exit();
        }else{
        
            $_SESSION["success_messages"] = "<p class='success_message'>Регистрация прошла успешно!!! <br />Теперь Вы можете авторизоваться используя Ваш логин и пароль.</p>";
        
            //Отправляем пользователя на страницу авторизации
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/site/form_auth.php");
        }
        
        /* Завершение запроса */
        $result_query_insert->close();
        
        //Закрываем подключение к БД
        $mysqli->close();
     
    }else{
 
        exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
    }
?>