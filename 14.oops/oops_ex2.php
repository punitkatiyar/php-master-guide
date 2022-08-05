<?php
class A
{
    public $dev="Welcome To";

    function fun1($data)
    {
        echo "<h1>{$this->dev} {$data}</h1>";
    }
    function fun2($data)
    {
        echo "<h1>{$this->dev} {$data}</h1>";
    }
}
$obj=new A;
########################
$obj->dev="Hello";
########################
$obj->fun1("Ducat");
$obj->fun2("India");


$obj2=new A;
$obj2->fun1("Ducat");
$obj2->fun2("India");


// $res="Punit";
// function say_hello()
// {
//     echo $res;
// }
// say_hello();


?>