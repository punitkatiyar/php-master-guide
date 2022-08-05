<?php
class Template{
    function __construct()
    {
        echo "<h1>I Am The Boss</h1>";
    }
    // function __construct()
    // {
    //     echo "<h3>I Am The Manage</h3>";
    // }
    function hello()
    {
        echo "<h6>Hello In Function</h6>";
    }    
}
class User{
    function __construct()
    {
        echo "<h1>I Am The User Boss</h1>";
    }
    // function __construct()
    // {
    //     echo "<h3>I Am The Manage</h3>";
    // }
    function profile()
    {
        echo "<h6>Hello In Function</h6>";
    }
    
}

$mub=new Template;
$mub->hello();
$mub->hello();

$mub1=new User;
$mub1->profile();




//$mub1=new Template();


?>