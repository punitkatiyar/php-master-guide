<?php
$data="Hello";
$data="Hiii";
echo $data;
// define the class
class Ducat{
    ###############################
    $samp="Punit";
    ###############################
    // define the method
    function hello($data)
    {
        echo "<h1>{$data}{$samp}</h1>";
    }
     function hello1($data)
    {
        echo "<h2>{$data}{$samp}</h2>";
    }
}


class India{
    function hello()
    {
        echo "<h1>Say Hello</h1>";
    }
}


// creating object
$manager1=new Ducat;
$manager1->hello("Ducat India");
$manager1->hello1("Welcome to OOps");


$manager2=new Ducat;
$manager2->hello("India Ducat");










?>