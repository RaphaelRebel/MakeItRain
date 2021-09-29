

<?php
 $host = "localhost";
 $user = "root";
 $pass = "root";
 $db = "comics";

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
  echo '<div class="comic-layout">'. '<img class="comic-image" src="../uploads/' . $row['image'].'"/>'.' ' .'<p class="comic-description">'. $row['title'] .'</p>'. '<p class="comic-prize">$ '.$row['prize'].'<br/><a href="details.php?comicid='.$row['id'].' target="_blank">Go to Comic</a> </p>' .'</div>';
}



 for ($page = 1; $page<=$number_of_pages;$page++) {
   echo '<a class="load-layout" href="../main.php?page=' .$page. '">'.$page.'</a>';
 }




?>