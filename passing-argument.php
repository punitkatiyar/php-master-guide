<?php
// case 1
function hello($myname)
{
    echo "<h1>My Name is {$myname}</h1>";
}
hello('Punit');
hello('Rohit');
//hello(); Fatal error: Uncaught ArgumentCountError: Too few arguments to function hello()
// case 2
function say_hello()
{
    echo "<h2>Welcome to Function Argument example<h2>";
}
say_hello("Punit");
// case 3
function card($username,$size)
{
    echo "<h$size>Hi Developer $username</h$size>";
}
card("Punit",1);
card("Punit",2);
card("Punit",3);
card("Punit",4);
function ulink($url,$urlname)
{
    echo "<a href='$url'>$urlname</a>";
}
ulink("https://myunitbook.com","My Unit Book");

function image($img,$img_size)
{
    if($img_size=='big')
    {
        echo "<img src='$img' width='100%'>";
    }
    else if($img_size=='mid')
    {
        echo "<img src='$img' width='50%'>";
    }
    else
    {
        echo "<img src='$img' width='25%'>";

    }
}
image("imgage.png","");

?>