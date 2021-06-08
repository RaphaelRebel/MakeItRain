<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php
 $dbhost = "localhost";
 $dbname = "comics";
 $user = "root";
 $pass = "root";

 $conn = mysqli_connect('localhost', 'root', 'root');
 mysqli_select_db($conn, 'comics');



 $pagesize = 12;
 $sql = 'SELECT * FROM comics';
 $result = mysqli_query($conn, $sql);
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
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
  echo '<div class="comic-layout">'. '<img class="comic-image" src="pages/uploads/' . $row['image'].'"'.' ' .'<p class="comic-description">'. $row['title'] .'</p>'. '<p class="comic-prize">$ '.$row['prize'].'</p>' .'</div></br>';
}



 for ($page = 1; $page<=$number_of_pages;$page++) {
   echo '<a href="main.php?page=' .$page. '">'.$page.'</a>';
 }




?>

</body>
</html>