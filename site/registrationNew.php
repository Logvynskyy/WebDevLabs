<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleRegNew.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <title>Registration New</title>
</head>
<body>
<div class="topnav">    
        <a href="../index.php">Главная</a>
        <a class="active">Регистрация</a>
        <a href="images.html">Картинки</a>
    </div>
        <div class="add__option" style="display:flex;height:80vh;flex-direction:column;align-items: center;justify-content:center">
            <h1 class="text__title">Введіть нове ім'я</h1>
            <div>  <input style="margin-bottom:2%;" type="text" class="option__text" placeholder="New name" title="Please enter your name"> <br></div>
          <div> <input style="margin-bottom:2%;" type="text" class="option__text" placeholder="New password" title="Please enter your password"><br></div>
           
            <button class="add__option-btn" onclick="func()" style="width:10%;">Add name</button>
        </div>
    </div>
  
    <script>
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
    </script>
</body>
</html>