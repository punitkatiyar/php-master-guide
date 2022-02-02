<?php
function say_hello($name,$size)
{
    echo "<h{$size}>Hello $name</h{$size}>";
}
say_hello("Punit",1);
say_hello("Ashu",2);
say_hello("Vikash",3);
say_hello("Amit",4);

function alink($url,$linkname)
{
    echo "<a href='$url'>$linkname</a>";
}

alink("https://codewithpunit.com","My Website");
alink("https://codewithpunit.com","My Website 1");





?>