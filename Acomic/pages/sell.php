<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/system.css">
    <link rel="stylesheet" href="../style/sell.css">
    <title>Sell your comics</title>
</head>

<body>
    <div id="container">
        <form id="inlog" action="../PHP/save_image.php" method="POST" enctype="multipart/form-data">
            <input id="imp-img" type="file" name="image" accept="image/*" />
            <p>What is the title?</p>
            <input type="text" name="title">
            <p>What is your prize?</p>
            <input type="text" name="prize">
            <input type="submit" />
        </form>
    </div>
</body>

</html>