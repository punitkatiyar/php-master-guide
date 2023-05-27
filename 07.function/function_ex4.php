<?php
function cal($x,$y)
{
    $res1=$x+$y;
    $res2=$x-$y;
    $res3=$x*$y;
    $res4=$x/$y;
   
    //return $res1,$res2,$res3,$res4;
    // return $res1;
    // return $res2;
    // return $res3;
    // return $res4;
    return array($res1,$res2,$res3,$res4);

    //echo "Result Is: ";
}
$a=cal(10,20);
echo "Result Is: ";
echo $a[0];
echo "Result Is: ";
echo $a[1];
echo "Result Is: ";
echo $a[2];
echo "Result Is: ";
echo $a[3];




?>