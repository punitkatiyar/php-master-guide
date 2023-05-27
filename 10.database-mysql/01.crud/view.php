<?php
require_once 'config.php';
$query="SELECT * FROM `user`";
$data=mysqli_query($dbcon,$query);

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
    echo "</tr>";
    }
    ?>
    </table>


</body>

</html>
