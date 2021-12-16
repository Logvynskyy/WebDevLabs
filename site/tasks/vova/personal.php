<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Персоналізатор</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <h1>Example h1</h1>
    <h3>Example h3</h3>    
    <p>Example p</p>

        <input type="text" name="color" id="color"><br>
        <button onClick="changeColor()">Send</button><br>

        <input type="text" name="font" id="font"><br>
        <button onClick="changeFont()">Send</button><br>

    <script>
            function changeColor(){

                let data = document.getElementById('color').value;

                $.ajax({
                    url: 'test1.php',
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
                    url: 'test2.php',
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