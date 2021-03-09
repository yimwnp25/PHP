<?php
    include_once("class.Database.php");
    $db = new Database();
    $db->connect();

    print_r($_POST);
    print("<br>");
    
    $data['title'] = $_POST['cus_title'];
    $data['name'] = $_POST['cus_name'];
    $data['surname'] = $_POST['cus_surname'];
    $data['country'] = $_POST['cus_country'];
    $db->update_customer_data($_POST['c_id'], $data);
?>
