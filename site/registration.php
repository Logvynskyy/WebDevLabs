<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="../styleReg.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <title>Document</title>
    <script>
        setInterval(function() {
            var time = new Date($.now());
            $('#clock-wrapper').html(
                time
                );
        }, 500);
    </script>
    <script>
        $(document).ready(function() {
        $('#digiclock').jdigiclock({

        });
        });
    </script>
</head>

<body>
    <div class="topnav">    
        <a href="../index.html">Главная</a>
        <a class="active">Регистрация</a>
        <a href="images.html">Картинки</a>
    </div>

    <div style="width: 70%; float: left;">
        <div class="input__text">
          
          <form method="POST">
          <h1 class="text__title">Введіть ваше ім'я</h1>
          <input type="text" class="input__text" placeholder="Your name" list="namesList" name="data">
            <input type="submit", value="Відправити дані">
            </form>
            <?php
                if(isset($_POST['data'])){
                    echo "Інформація отримана";
                }
                else{
                    echo "Поле для введення пусте";
                }
                echo "<br>";
                echo date('m/d/Y h:i:s a', time());

            ?>
          <datalist id="namesList">
            <option class = "namesList-opt" value="Vova">
            <option class = "namesList-opt" value="Maxim">
            <option class = "namesList-opt" value="Denis">
            <option class = "namesList-opt" value="Stas">
        </datalist>
        </div>
        <div class="add__option" style="margin-top: 12%;width: 30%;">
            <h1 class="text__title">Введіть нове ім'я</h1>
            <input type="text" class="option__text" placeholder="New name" title="Please enter your name">
            <button class="add__option-btn" onclick="func()">Add name</button>
        </div>
        <div>
            <p>Date: <input type="text" id="datepicker"></p>
        </div>
    </div>
    
    <div style="width: 30%; float: right;">
        <div id="digiclock"><h3 id="clock-wrapper" style="margin: 0;"></h3></div>
        <br>
        <div>
            <table id="currencyTable">
                <caption>Курс валют от Приватбанка на <span id="date"></span></caption>
                <tr>
                    <th>Валюта 1</th>
                    <th>Валюта 2</th>
                    <th>Покупка</th>
                    <th>Продажа</th>
                </tr>
            </table>
        </div>
        <br><br>
        <button id="submit">Дізнатися погоду у Києві</button>
        <div id="weather"></div>
    </div>
    
    <script>
        $("#datepicker").datepicker();

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

        $('#date').text(new Date().toLocaleDateString());
        const currencyObj = {
            USD: 'доллар США',
            UAH: 'укр. гривна',
            RUR: 'рос. рубль',
            EUR: 'евро',
            BTC: 'биткоин'
        }
        $.getJSON("https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5", function (result) {
            console.log(result);
            $.each(result, function (i, field) {
                console.log('field', field);
                var tr = "<td>" + currencyObj[field.base_ccy] + "</td><td>" + currencyObj[field.ccy] 
                + "</td><td>" + field.buy + "</td><td>" + field.sale + "</td>";
                $("#currencyTable tbody").append("<tr>" + tr + "</tr>");
            });
        });
        $( function() {
            $( document ).tooltip({
                track: true
            });
        } );

        class Fetch {
            async getCurrent(input) {
                const myKey = "39a9a737b07b4b703e3d1cd1e231eedc";

                const response = await fetch(
                    `https://api.openweathermap.org/data/2.5/weather?q=${input}&appid=${myKey}`
                );

                const data = await response.json();

                console.log(data);

                return data;
            }
        }

        const ft = new Fetch();

        const search = "Kyiv";
        const button = document.getElementById("submit");
        button.addEventListener("click", () => {
            const currentVal = search;

            ft.getCurrent(currentVal).then((data) => {
                let div = document.createElement("div");
                div.innerHTML = `
                    <h3>Максимальна температура ${Math.round(data.main.temp_max - 273.15, 1)} градусів Цельсія.<br>
                        Мінімальна температура ${Math.round(data.main.temp_min - 273.15, 1)} градусів Цельсія</h3>
                    <p>Погодні умови: ${data.weather[0].description}</p>`;
                document.body.append(div);
                });
        });

    </script>
</body>
</html>