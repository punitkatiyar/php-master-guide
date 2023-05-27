<?php
require_once 'config.php';
if(isset($_POST['insert']))
{
    extract($_POST);
    $query="INSERT INTO `user` (`id`, `uname`, `uemail`, `upass`, `ucity`, `umobile`) VALUES (NULL, '$uname', '$uemail', '$upass', '$ucity', '$umobile')";
    mysqli_query($dbcon,$query);
}
/*
mysqli_query contain 2 parameter 
1. dababase connection
2.database query
*/
?>

<form method="post">
    <p><input type="text" name="uname" placeholder="Enter Your Name"></p>
    <p><input type="email" name="uemail" placeholder="Enter Your email"></p>
    <p><input type="password" name="upass" placeholder="Enter Your password"></p>
    <p><input type="text" name="ucity" placeholder="Enter City"></p>
    <p><input type="number" name="umobile" placeholder="Enter Your Mobile"></p>
    <p><input type="submit" name="insert" value="Inset"></p>
</form>
