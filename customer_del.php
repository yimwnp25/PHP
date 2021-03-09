<?php
    include_once("class.Database.php");
    $db = new Database();
    $db->connect();

    print_r($_POST);
    $db->del_customer($_POST['cus_id']);
?>