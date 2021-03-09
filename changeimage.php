<?php
    print_r($_POST);
    $mysql = new mysqli ("localhost","root","","my_shop");
    $imgData = addslashes(file_get_contents($_FILES['FileImage']['tmp_name']));
    $imgType = $_FILES['FileImage']['type'];
    $imgSize = $_FILES['FileImage']['size'];
    $sql = "UPDATE image 
                    set     image_data = '$imgData',
                            image_type = '$imgType',
                            image_size = '$imgSize'
                    where   id = {$_POST['tid']}";
    echo $sql;
    $current_id = $mysql->query($sql);
    if($current_id) echo "update success<br>";
    else echo "error {$mysql->error}<br>";

?>