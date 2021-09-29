
<html>
    <head>
    <link rel="stylesheet" href="../style/system.css">
    </head>
    <body>
        <div id="container">
            <?php
            session_start();
            unset($_SESSION['username']);
            echo"U bent uitgelogd <a href='../index.html'>klik hier om weer in te loggen</a>";
            echo "<script> location.href='../main.php'; </script>";
        exit; 
            ?>
        </div>
    </body>
</html>