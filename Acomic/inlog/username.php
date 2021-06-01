<?php
session_start();

// if($_SESSION['username'] == TRUE){
//     echo $_SESSION['username'];
// }
// else{
//     echo"Login";
// }

if(!isset($_SESSION['username'])){
    echo'<a href="../index.html"> Login</a>';
}
else{
    echo $_SESSION['username'];
   
}


?>