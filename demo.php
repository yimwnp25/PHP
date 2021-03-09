<?php
    include_once("class.Database.php");
    $db = new Database();
    $db->connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<form action="form-edit.php" method = "post">
    <?php
    $db->show_alldata();
    $db->update_customer("UK","Thailand");
    $db->show_alldata("customer");
    $data = $db->show_customerbyid("customer","2");
    print_r($data);
    echo "<br>";
    $sel = $db->selbyid();
    print_r($sel);
    ?><br>
    <h1>SELECT ID : </h1>
    <select name = "sel_id">
    <?php
        foreach ($sel as $key => $idx){
            echo "<option value='{$idx["Id"]}'>{$idx["Id"]}</option>";
        }
    ?>
    </select>
    <input type="submit" value="select">
    </form>
</body>
</html>
<?php
$db->disconnect();
?>