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
    <form action="customer_process.php" method = "post">
    <?php 
        $data = $db->show_customerbyid("customer",$_POST['sel_id']);
        print_r($data);
        echo "<br>";
    ?>
    <table>
        <tr><td>ID      </td><td><input type = "text"        name = "cus_id"         value = "<?= $data['Id']           ?>"></td></tr>
        <tr><td>Title   </td><td><input type = "text"        name = "cus_title"      value = "<?= $data['Title']        ?>"></td></tr>
        <tr><td>Name    </td><td><input type = "text"        name = "cus_name"       value = "<?= $data['FirstName']    ?>">
                                 <input type = "text"        name = "cus_surname"    value = "<?= $data['LastName']     ?>"></td></tr>
        <tr><td>Country </td><td><input type = "text"        name = "cus_country"    value = "<?= $data['country']      ?>"></td></tr>
        <input type="hidden" name="c_id" value="<?= $data['Id']?>">
        <tr><td  clospan="2"><input type = "submit" value = "save"><input type = "reset" value = "clear"></tr>
    </table>
    </form>
    <form action="customer_del.php" method="post">
    <input type= "hidden" name = "cus_id" value=" <?php echo $data['Id'] ?>">
    <input type= "submit" value = "Del">
    </form>
</body>
</html>