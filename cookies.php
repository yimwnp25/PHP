<?php
    $expire = time()+10;
    $time_now = date("F jS, Y-g:i a");
    if (!isset($_COOKIE["LastVisit"])){
        echo "Init cookie<br>";
        setcookie("LastVisit",$time_now,$expire);
        setcookie("User","WNP",$expire);
            //echo "Last Time : "+($expire);
    }else{
        echo "Welcome Back";
        echo $_COOKIE["User"];
        echo "<br>";
        echo $_COOKIE["LastVisit"];
        //$re = $_COOKIE["LastVisit"] - time();
        //echo $re;
    }
?>