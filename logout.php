<?php
    require_once('head.php');
    session_destroy();
    header("location : login.php");
?>