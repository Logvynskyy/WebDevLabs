<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гістограма</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<style>
    #graph {
        width: 100%;
        height: 90vh;
        border: 1px solid #aeaeae;
        visibility: hidden;
}
    .bar {
        width: 70px;
        margin: 1px;
        display: inline-block;
        position: relative;
        background-color: #aeaeae;
        vertical-align: baseline;
    }
</style>
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
                        // console.log(data[1]);

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
                        // console.log(data[1]);

                        document.body.style.fontFamily = data;

                    }
                });
            };
        
    </script>
</body>
</html>