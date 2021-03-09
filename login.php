<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="check.php" method="post">
        Username :<br>
        <input type="text" name = "user" value = "" require><br>

        Password :<br> 
        <input type="password" name = "pass" value = "" require><br>

        Select Type : <br>
        <input type="radio" name = "type" value = "admin">admin
        <input type="radio" name = "type" value = "user">user<br>

        Status : <br>
        <select name="status">
            <option value="pass">pass</option>
            <option value="fail">fail</option>
        </select>
        <input type="submit" value="check">
    </form>
</body>
</html>