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
    <input type="text" class = "number">
    <button onclick="addField()">Додати ще одне поле</button>
    <div id="input0"></div>
    <br><button class = "gist" onclick="sendJSON()">Згенерувати гістограму</button><br>
    <div id="graph"></div>

    <script>
        var x = 0;
        function addField(){
            let str = '<input type="text" class="number"><div id="input' + (x + 1) + '"></div>';
            document.getElementById('input' + x).innerHTML = str;
            x++;
        }

        function getValues(){
            var vals = document.getElementsByClassName('number');
            var values = new Array(vals.length);
            for(let i = 0; i < values.length; i++){
                values[i] = vals[i].value;
            }
            values.sort(function(a, b) {
                return b - a;
            });
            console.log(values);
            return values;
        }

        function sendJSON(){

            let values = getValues(); 

            $.ajax({
                url: 'histogram.php',
                type: 'POST',
                crossDomain: true,
                dataType: 'json',
                data: {
                    data: values
                },
                success: function(data) { 

                    // console.log(data[0]);
                    // console.log(data[0][0]);

                    var div = document.getElementById('graph');
                    div.style.visibility = 'visible';

                    for(let i = 0; i < data.length; i++){
                        console.log(data[i][0]);
                        for(let j = 0; j < data[i][0].length; j++){
                            console.log(data[i][0][j]);
                            let bar = document.createElement("div");
                            bar.className = "bar";
                            bar.style.height = `${data[i][0][j]}px`;
                            div.appendChild(bar);
                        }
                    }
                }
            });
        }

    </script>
</body>
</html>