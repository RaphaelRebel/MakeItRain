<?php
$comicid = $_GET["comicid"];

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
echo $ComicTitle ."<br/>";
// echo $ComicSellerID."<br/>";
echo $ComicPrize."<br/>";
echo '-';


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
echo $UserName;


?>