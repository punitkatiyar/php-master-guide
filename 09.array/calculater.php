<?php
// form = array  (associative arrray)
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';
// echo $_GET['num1'];
// echo $_GET['num2'];

// if(@$_GET['add']=='Addition')
// {
//     $num1=$_GET['num1'];
//     $num2=$_GET['num2'];
//     extract($_GET);
//     echo $num1+$num2;

// }
extract($_POST);
if(isset($_POST['add']))
{
    $res= $num1+$num2;
}
else if( isset($_POST['sub']))
{
    $res= $num1-$num2;
}
else if(isset($_POST['multi']))
{
    $res= $num1*$num2;
}
else if(isset($_POST['div']))
{
    $res= $num1/$num2;
}







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .cal {
        width: 400px;
        height: 450px;
        background: lightblue;
        margin: auto;
    }

    input {
        padding: 2%;
        width: 90%;
        display: block;
        margin: auto;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <div class="cal">
        <h1>Basic Calculater</h1>
        <form method="post">
            <input type="number" name="num1" value="<?php echo @$num1;?>" plcaeholder="Enter First Number">
            <input type="number" name="num2" value="<?php echo @$num2;?>" plcaeholder="Enter Second Number">

            <input type="submit" name="add" value="add">
            <input type="submit" name="sub" value="sub">
            <input type="submit" name="multi" value="multi">
            <input type="submit" name="div" value="div">
        </form>
        <h2><?php echo @$res;?></h2>
    </div>

</body>

</html>