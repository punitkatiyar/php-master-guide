<?php
if(@$key==null)
{
    echo "<h1 style='color:red; padding:5%; text-align:center;'>Page not Found</h1>";
}
else
{
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="head bg1 mb-1">
        <a href="./" class="logo">Blog Website</a>
    </div>
    <div class="nav bg2 mb-1">
        <ul>
            <li><a href="./">Home</a></li>
            <li><a href="./page.php">Page 1</a></li>
            <li><a href="./page.php">Page 1</a></li>
            <li><a href="./page.php">Page 1</a></li>
            <li><a href="./page.php">Page 1</a></li>
        </ul>
    </div>
    <div class="mid mb-1">


        <?php
}



?>