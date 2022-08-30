<?php
require_once 'database.php';
$query="SELECT * FROM `student`";   
$data=mysqli_query($dbcon,$query);
?>
<html>
<head>  
    <title>Update data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
if(@$_GET['action']=='update')
{
    // echo "<h1>".$_GET['id']."</h1>";
    ?>
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


<?php
}
else{
    ?>
    <table border="1" width="90%" align="center" cellpadding="10px">
    <?php
    while($res=mysqli_fetch_array($data))
    {
        ?>
        <tr>
            <td><?php echo $res['sid'];?></td>
            <td><?php echo $res['sname'];?></td>
            <td><?php echo $res['semail'];?></td>
            <td><?php echo $res['spass'];?></td>
            <td><?php echo $res['scourse'];?></td>
            <td><?php echo $res['smobile'];?></td>
            <td><?php echo $res['scity'];?></td>
            <td><a href="?id=<?php echo $res['sid'];?>&action=update">Update data</a></td>
        </tr>
        <?php
    }
    ?>
</table>


    <?php
}
?>



    
</body>
</html>