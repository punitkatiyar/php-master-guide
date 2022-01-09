<?php
require_once 'config.php';
$query="SELECT * FROM `user`";
$data=mysqli_query($dbcon,$query);
// update
if(isset($_POST['update']))
{
    extract($_POST);
    print_r($_POST);
    $query="UPDATE `user` SET `uname`='$uname',`uemail`='$uemail',`ucity`='$ucity',`umobile`='$umobile' WHERE `id`='$uuid'";
    mysqli_query($dbcon,$query);
    header('location:update.php');
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
    <a href="./">Home</a>
    <?php
    if(@$_GET['action']=='edit')
    {
        $euid=$_GET['id'];
        $query="SELECT * FROM `user` WHERE `id`='$euid'";
        $data=mysqli_query($dbcon,$query);
        $res=mysqli_fetch_array($data);
        // print_r($res);
        ?>
    <form method="post">
        <p><input type="hidden" name="uuid" value="<?php echo $res['id']?>"></p>
        <p><input type="text" name="uname" placeholder="Enter Your Name" value="<?php echo $res['uname']?>"></p>
        <p><input type="email" name="uemail" placeholder="Enter Your email" value="<?php echo $res['uemail']?>"></p>
        <p><input type="text" name="ucity" placeholder="Enter City" value="<?php echo $res['ucity']?>"></p>
        <p><input type="number" name="umobile" placeholder="Enter Your Mobile" value="<?php echo $res['umobile']?>"></p>
        <p><input type="submit" name="update" value="update"></p>
    </form>
    <?php
    }
    else
    {
        ?>
    <table border="1" width="80%" align="center">
        <?php
    while($res=mysqli_fetch_array($data))
    {
    // echo '<pre>';
    // print_r($res);
    // echo '</pre>';
    echo "<tr>";
        echo "<td height='40px'>{$res['id']}</td>";
        echo "<td>{$res['uname']}</td>";
        echo "<td>{$res['uemail']}</td>";
        echo "<td>{$res['ucity']}</td>";
        echo "<td>{$res['umobile']}</td>";
        echo "<td><a href=?id=".$res['id']."&action=edit>Edit Data</a></td>";
    echo "</tr>";
    }
    ?>
    </table>
    <?php
    }
    ?>
</body>
</html>
