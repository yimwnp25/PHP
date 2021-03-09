<?php
    print_r($_POST);
    insert_new($_POST['user'],$_POST['pass'],$_POST['type']);

    function insert_new($user,$pass,$type){
        $mysql = new mysqli("localhost","root","","my_shop");
        $sql = "INSERT INTO `user`(`id`, `user`, `pass`, `type`, `create_date`)
                VALUES (null,'{$user}',md5('{$pass}'+md5(SYSDATE())),
                '{$type}',SYSDATE())";
        $result = $mysql->query($sql);
        echo "<hr>";
        if($result) echo "<br>Operation Completed<br>";
        else echo "<br>Error at : {$mysql->error}<br>";
    }
?>
<a href = "register.php">Go to register</a>