<?php
require_once 'database.php';
error_reporting(0);
if(isset($_POST['sreg']))
{
    extract($_POST);
    $query="SELECT * FROM `student` WHERE `semail`='$semail'";   
    $data=mysqli_query($dbcon,$query);
    $res=mysqli_fetch_array($data);
    // print_r($res);
    if($res['semail']==$semail)
    {
        echo "Youir Account has been allready register";
    }
    else{
        $query="INSERT INTO `student`(`sid`, `sname`, `semail`, `scourse`, `smobile`, `scity`) 
        VALUES (NULL,'$sname','$semail','$scourse','$smobile','$scity')";
        mysqli_query($dbcon,$query);   
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form method="post">
                    <input type="text" name="sname" placeholder="Enter Your name" class="form-control mb-2" required>
                    <input type="email" name="semail" placeholder="Enter Your Email" class="form-control mb-2" required>
                    <input type="text" name="scourse" placeholder="Enter Your Course" class="form-control mb-2"
                        required>
                    <input type="number" name="smobile" placeholder="Enter Your Mobile" class="form-control mb-2"
                        required>
                    <input type="text" name="scity" placeholder="Enter Your City" class="form-control mb-2" required>
                    <input type="submit" name="sreg" value="Register" class="form-control mb-2">
                </form>
            </div>
        </div>
    </div>

</body>

</html>