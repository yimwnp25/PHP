<?php
    print_r($_POST);
    echo"<pre>"; 
    print_r($_FILES); 
    echo"</pre>";
    $mysql = new mysqli ("localhost","root","","my_shop");
    $imgData = addslashes(file_get_contents($_FILES['FileImage']['tmp_name']));
    $imgType = $_FILES['FileImage']['type'];
    $imgSize = $_FILES['FileImage']['size'];
    $sql = "INSERT INTO image(image_data, image_type, image_size)
            VALUES ('{$imgData}','{$imgType}',{$imgSize})";
    echo $sql;
    $current_id = $mysql->query($sql);
    if($current_id) echo "insert Success<br>";
    else echo "error {$mysql->error}<br>";
?>