<?php
//require_once('head.php');
    session_start();
    if(isset($_POST['user'])){
        if(verify($_POST['user'],$_POST['pass'])=="pass"){
        echo "<a href = 'menu.php'>Go to menu </a><br>";
        echo "<a href = 'logout.php'>Logout</a>";
        $_SESSION['user']=$_POST['user'];
        $_SESSION['type']=$_POST['type'];
        $_SESSION['status']=$_POST['status'];
        }else{
            echo "Fail<br>";
            echo "<a href='login.php'>Try Again</a>";
        }
    }

    function verify($user,$pass){
        $text = "pass";
        $mysql = new mysqli('localhost','root','','my_shop');
        $sql = "SELECT count(user) as n , user , pass , md5('$pass'+md5(create_date)) as p
                FROM user
                where user = '{$user}' and pass = md5('{$pass}'+md5(create_date))";
        $result = $mysql->query($sql);
        $row = $result->fetch_assoc();
        print_r($row);
        echo "{$row['n']}<br>";
        return ($row['n']==1)?"pass":"fail";
    }
?>