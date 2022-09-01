<?php
require_once 'database.php';
$query="SELECT * FROM `student`";   
$data=mysqli_query($dbcon,$query);

if(isset($_POST['supdate']))
{
    extract($_POST);
    $query="UPDATE `student` SET `sname`='$sname',`semail`='$semail',`scourse`='$scourse',`smobile`='$smobile',`scity`='$scity' WHERE `sid`='$hid'";   
    mysqli_query($dbcon,$query);
    header("location:profile.php");
}
?>
<html>
<head>  
    <title>Update data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
require_once "head.php";
if(@$_GET['action']=='update')
{
    $id=$_GET['id'];
    echo "<h1 class='text-center'>".$_GET['id']."</h1>";
    $query="SELECT * FROM `student` WHERE `sid`='$id'";   
    $data=mysqli_query($dbcon,$query);
    $ures=mysqli_fetch_array($data);
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 bg-primary my-2 p-5">
                <div class="bg-white h4 p-2 text-primary">Please Update data..</div>
                <form method="post">
                    <input type="hidden" name="hid" value="<?php echo $id ?>">
                    <input type="text" name="sname" placeholder="Enter Your name" value="<?php echo $ures['sname'];?>" class="form-control my-2" required>
                    <input type="email" name="semail" placeholder="Enter Your Email" value="<?php echo $ures['semail'];?>" class="form-control mb-2" required>
                    <input type="text" name="scourse" placeholder="Enter Your Course" value="<?php echo $ures['scourse'];?>" class="form-control mb-2"
                        required>
                    <input type="text" name="smobile" placeholder="Enter Your Mobile" value="<?php echo $ures['smobile'];?>" class="form-control mb-2"
                        required>
                    <input type="text" name="scity" placeholder="Enter Your City" class="form-control mb-2" value="<?php echo $ures['scity'];?>" required>
                    <input type="submit" name="supdate" value="Update Data" class="form-control mb-2">
                </form>
            </div>
        </div>
    </div>


<?php
}
else{
    ?>
    <div class="container">
    <table align="center" class="table table-hover">
    <?php
    while($res=mysqli_fetch_array($data))
    {
        ?>
        <tr>
            <td class="bg-info"><?php echo $res['sid'];?></td>
            <td><?php echo $res['sname'];?></td>
            <td><?php echo $res['semail'];?></td>
            <td><?php echo $res['spass'];?></td>
            <td><?php echo $res['scourse'];?></td>
            <td><?php echo $res['smobile'];?></td>
            <td><?php echo $res['scity'];?></td>
            <td><a class="btn btn-primary" href="?id=<?php echo $res['sid'];?>&action=update">Update data</a></td>
        </tr>
        <?php
    }
    ?>
</table>
</div>


    <?php
}
?>



    
</body>
</html>