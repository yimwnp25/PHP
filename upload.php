<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" 
          action = "test.php" method = "post">
        <h1>Select FileImage</h1>
        <hr>
        <input type = "file" name = "FileImage">
        <input type = "submit" value = "save">
        <input type = "reset" value = "cancle">
    </form>
</body>
</html>