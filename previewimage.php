<?php
    if(isset($_GET['id'])){
        $mysql = new mysqli("localhost","root","","my_shop");
        $sql = "SELECT image_data from image where id = {$_GET['id']}";
        $result = $mysql->query($sql);
        $data = $result->fetch_assoc();
        header("Content-type: image");
        echo $data['image_data'];
    }
?>