<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Integer</title>
</head>

<body>
    <?php
        # php integer [number]
        $num1=210;
        $num2=100;
        echo $num1+$num2;
        echo '<hr>';
        echo $num1-$num2;
        ?>
    <hr>
    Basic Math :<?php echo ($num1+$num2+(150/2)) ?>
    <br>
    Absoulute value : <?php echo abs(10-20);?>
    <hr>
    Exponential value : <?php echo pow(2,3);?>
    <hr>
    Square root :<?php echo sqrt(100); ?>
    <hr>
    Modulo :<?php echo fmod(20,7);?>
    <hr>
    Random :<?php echo rand();?>
    <hr>
    <?php $res=rand(1,10);?>
    Random (min,max) :<?php echo $res;?>
    <hr>
    <?php
    /*
    +=
    -=
    *=
    /=
    */
    $result=$num1;
    $result +=$num2;
    echo $result;
    ?>
    <h2>Increment :<?php $data=1; $data++; echo $data;?></h2>
    <h2>decrement :<?php $data--; echo $data;?></h2>
    <?php
    echo 100+"cat5";
    
    ?>
</body>

</html>