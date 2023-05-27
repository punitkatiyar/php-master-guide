# Login Form With Validation Of Input Field

```
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
if(isset($_POST['ulogin']))
{
    extract($_POST);
    if(empty($uemail) and empty($upass) ){
        $msg="Please Fill All Content";
    }
    else if($uemail==''){
        $msg="Please Enter Your Eamil Id";
    }
    else if($upass==''){
        $msg="Please Enter Your Password";
    }
    else{
    $msg="Welcome";    
    }
}
?>
```
## Template Source Code

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Application</title>
    <style>
        input{ margin:1%;}
        h3{ color:green;}
    </style>
</head>
<body>
    <div class="login">
    <form method="post">
        <div><input type="email" name="uemail" placeholder="Enter Email Id"></div>
        <div><input type="password" name="upass" placeholder="Enter Password"></div>
        <div><input type="submit" name="ulogin" value="Login Now"></div>
        <a href="register.php">Resiter New Account</a>
        <h3><?php echo @$msg;?></h3>
    </form>
    </div>
    
</body>
</html>
```

# Register user account info 

# [uId] id : admin (during database)

> [uName] name : text
> 
        [uEmail]email : email
        [uPass] password : password
        [uCat] catagory : radio
        [uDob] DOB : date
        [uCourse]course : select
        [uTime] Time : time
        [uMobile]mobile : tel
