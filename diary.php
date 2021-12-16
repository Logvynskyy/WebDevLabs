<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
 $( function() {
    $( "#datepicker" ).datepicker();
  } );

$(document).ready(function () {
  $("form").submit(function (event) {
    var formData = {
      theme: $("#theme").val(),
      description: $("#description").val(),
      datepicker: $("#datepicker").val(),
    };

    $.ajax({
      type: "POST",
      url: "process.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);
    });

    event.preventDefault();
  });
});
  </script>
</head>
<body>
    <p>Diary</p>
    <form action="" method="post" name="1">
        <p>Theme</p>
        <p><input type="text" name="theme" id="theme"></p>
        <p>Description</p>
        <p><input type="text" name="description" id="description"></p>
        <p>Date</p>
        <p><input type="text" id="datepicker" name="datepicker"></p>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>