<?php
session_start();
if(isset($_SESSION['User'])!="LeMatt"){

    header("location:login.php");   

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
<strong><a href="index.php">START </a></strong>()
<strong><a href="gallery.php">GALLERY </a></strong>()
<strong><a href="close.php">CLOSE </a></strong> 



    
</body>
</html>