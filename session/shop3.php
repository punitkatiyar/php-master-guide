<?php
require_once 'config.php';
if($_SESSION['sid']=="")
{
    header("location:index.php");
}
echo $_SESSION['sid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop 3</title>
</head>

<body>
    <img src="image/teacher-3.jpg" width="250px" height="250px" alt="teacher">
    <a href="./">Home</a>

</body>

</html>