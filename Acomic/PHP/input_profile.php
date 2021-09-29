<html>
<head>
<title>Details</title>


<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/details.css">
</head>
<?php

$comicid = $_GET["userid"];

//Connect naar de Database
$conn = mysqli_connect('localhost', 'root', 'root');
 mysqli_select_db($conn, 'comics');

//Haal alle gegevens van deze comic uit de database met als comicID $comicID
$sql = "SELECT * FROM comics WHERE id ='$comicid'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows == 0) {
    echo "Er is iets fout gegaan met het ophalen van de comic";
    exit();
}

$Comic = $result->fetch_assoc();
$ComicTitle = $Comic['title'];
$ComicSellerID = $Comic['seller'];
$ComicPrize = $Comic['prize'];
$ComicImage = $Comic['image'];

echo  '<div class="container-detail"> <h2>Title: </h2>' . $ComicTitle .'<br/>';
echo '<img src="uploads/'.$ComicImage.'">';
// echo $ComicSellerID."<br/>";
echo '<h2>Prize: </h2>'.'$ '.$ComicPrize."<br/>";
echo '<h2>Email: </h2>-';


//Haal alle gegevens van de seller van deze comic uit de database met als ID $ComicSeller
$sqlUser = "SELECT * FROM users WHERE id = $ComicSellerID";

$resultUser = mysqli_query($conn, $sqlUser);

if ($resultUser->num_rows == 0) {
    echo "Er is iets fout gegaan met het ophalen van de gebruiker";
    exit();
}
$resultUser2 = $resultUser->fetch_assoc();
$UserEmail = $resultUser2['email'];
$UserName = $resultUser2['username'];
echo $UserEmail ."<br/>";
echo '<h2>Username: </h2>'.$UserName ;

echo '<a href="mailto:'.$UserEmail.'"<button>E-Mail the user</a>
<a href="main.php">Go back</a>
</div> ';



?>

</html>