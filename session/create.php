<?php
require_once 'config.php';
if(isset($_POST['go']))
{
    $sid=$_POST['sid'];
    $_SESSION['sid']=$sid;
    echo $_SESSION['sid'];
}
else{
    echo "<h2>Please Create your pass</h2>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p><input type="text" name="sid" Placeholder="Enter Your Name"></p>
        <p><input type="submit" name="go" value="Create Pass"></p>
    </form>
     <a href="./">Home</a>

    
</body>
</html>