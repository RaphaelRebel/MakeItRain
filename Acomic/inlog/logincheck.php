<HEAD>
<?php 
session_start();
?>
<link rel="stylesheet" href="../style/logincheck.css"></link>
</HEAD>
<BODY>   
    <div id="container" >
        
<?php
    $gebruikersnaam = $_POST['user'];
    $wachtwoord = $_POST['pass'];

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "comics";

    $mysqli = new mysqli($host,$user,$pass,$db);
    if ($mysqli -> connect_errno)
    {
        echo "fout met connectie db:" . $mysqli -> connect_error;
        exit();
    }

    $sql = "SELECT * FROM users WHERE username ='$gebruikersnaam'";
    $result = $mysqli -> query($sql);
    if ($result -> num_rows == 0)
    {
        echo "gebruiker niet bekend . $gebruikersnaam";
        exit();
    } 

   $gebruiker = $result -> fetch_assoc();
   $gebruikersID = $gebruiker['id'];
   $wachtwoord_juist = password_verify($wachtwoord, $gebruiker['password']);
    $result  -> free_result();
    $mysqli -> close();

    
    
    if($wachtwoord_juist == TRUE)
    {
        session_start();
    //    echo "Je bent ingelogd<hr>";
       $_SESSION['username'] = $gebruikersnaam;
       $_SESSION['iduser'] = $gebruikersID;
    //    echo "Klik <a href ='../main.php'>hier</a> om naar de volgende beveiligde site te gaan";  
    echo "<script> location.href='../main.php'; </script>";
        exit; 
    }
    else
    {
        echo "Inloggen is mislukt. <br><a id='button' href ='../index.html'>Klik hier</a> om terug te gaan.";
        
    }
?>
</div>


</BODY>
</HTML>