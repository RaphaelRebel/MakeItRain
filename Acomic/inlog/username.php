<?php
session_start();

$_SERVER['logout'] = '<a href="../inlog/logout.php">LOGOUT</a>';
$_SERVER['profile'] = '<a href="../pages/profile.html">Profile</a>';

if(!isset($_SESSION['username'])){
    echo'<a href="../index.html"> Login</a>';
}
else{
    echo $_SESSION['username'];
    echo $_SERVER['profile'];
    echo $_SERVER['logout'];
}


?>