<?php
session_start();

$_SERVER['logout'] = '<a href="inlog/logout.php">UITLOGGEN</a>';

if(!isset($_SESSION['username'])){
    echo'<a href="../index.html"> Login</a>';
}
else{
    echo $_SESSION['username'];
    echo $_SERVER['logout'];
}


?>