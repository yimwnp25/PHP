<?php
    require_once('head.php');
    print_r($_SESSION);
    if($_SESSION['type']=='admin'){
?>
    
    <h1>Admin Menu</h1>
    <hr>
    <li>XXXXX</li>
    <li>XXXXX</li>
    <li><a href = 'logout.php'>Logout</a></li>

    <?php
    }else{
?>

    <h1>Hi! <?=$_SESSION['user'] ?> Menu</h1>
    <hr>
    <li>XXXXX</li>
    <li>XXXXX</li>
    <li><a href = 'logout.php'>Logout</a></li>
<?php
    }
?>