<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell your comics</title>
</head>
<body>
<form action="save_image.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" accept="image/*" />
         <input type="text" name="title">
         <input type="text" name="prize">
         <input type="submit"/>
      </form>

</body>
</html>