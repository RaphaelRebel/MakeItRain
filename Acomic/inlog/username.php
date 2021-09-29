<html>
    <head>
<link src="../script/profile.js">
</head>
<body>
<?php
session_start();

//informatie over welke database

$conn = mysqli_connect('localhost', 'root', 'root');
mysqli_select_db($conn, 'comics');

//informatie uit de database een naam geven
$sql = "SELECT * FROM users ";
$result = mysqli_query($conn, $sql);
$profile = mysqli_fetch_array($result);

$_SERVER['logout'] = '<a href="inlog/logout.php">LOGOUT</a>';
$_SERVER['profile'] = '<a href="PHP/input_profile.php?userid=' . $profile['id'] . ' target="_blank">Profile</a> </p>';

if(!isset($_SESSION['username'])){
    echo'<a href="index.html"> Login</a>';
}
else{
    echo $_SESSION['username'];
    echo $_SERVER['profile'];
    echo $_SERVER['logout'];
}


?>
</body>
</html>