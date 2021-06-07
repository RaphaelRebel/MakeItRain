<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<link rel="stylesheet" href="style.css">

<?php
 $dbhost = "localhost";
 $dbname = "comics";
 $user = "root";
 $pass = "root";

 $con = mysqli_connect('localhost', 'root', 'root');
 mysqli_select_db($con, 'comics');


 $pagesize = 5;
 $sql = 'SELECT * FROM comics';
 $result = mysqli_query($con, $sql);
 $number_of_results = mysqli_num_rows($result);

$number_of_pages = ceil($number_of_results / $pagesize);

if (!isset($_GET['page'])) {
  $page = 1;
}
else {
  $page = $_GET['page'];
}


$offset = ($page - 1) * $pagesize;

$sql = "SELECT * FROM comics LIMIT " . $offset . ', ' . $pagesize;
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
  echo '<div class="comic-layout">'. '<img src="uploads/' . $row['image'].'"'.' ' . $row['title'] . $row['prize'] .'</div></br>';
}



 for ($page = 1; $page<=$number_of_pages;$page++) {
   echo '<a href="index.php?page=' .$page. '">'.$page.'</a>';
 }




?>
</body>
</html>