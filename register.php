<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<h1>Register User</h1>
    <form action="reg_new.php" method = "post">
    Enter Name : <br>
        <input type="text" name = "user"><br>

    Enter Password : <br>
        <input type="password" name = "pass"><br>

    Confirm Password : <br>
        <input type="password" name = "pass2"><br>
    
    Select Your Role : <br>
        <select name="type">
            <option value="admin">admin</option>
            <option value="user">user</option>
        </select>
        <input type="submit" value= "register">
        <a href = "login.php">Go to login</a>
    </form>
</body>
</html>