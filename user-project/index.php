<?php
require_once 'database.php';
error_reporting(0);
if(isset($_POST['slogin']))
{
    extract($_POST);
    $query="SELECT * FROM `student` WHERE `semail`='$suid' and `spass`='$supass'";   
    $data=mysqli_query($dbcon,$query);
    $res=mysqli_fetch_array($data);
    // print_r($res);
    if($res['semail']==$suid and $res['spass']==$supass)
    {
        echo "Welcome";
    }
    else{
        echo "Please Register your account first";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form method="post">
                    <input type="text" name="suid" placeholder="Enter Your Email" class="form-control mb-2">
                    <input type="text" name="supass" placeholder="Enter Your Password" class="form-control mb-2">
                    <input type="submit" name="slogin" value="Login Now" class="btn btn-primary mb-2">
                </form>
                <a href="register.php">Register Now</a>
            </div>
        </div>
    </div>

    
    
</body>
</html>