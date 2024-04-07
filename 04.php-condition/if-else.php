<title>if and else in PHP</title>

<hr>
<?php
// 1,2,3,4,5
$num=10;

/*
    syntax
    
    if(condition){
        // true
    }
    else{
        // false
    }
*/
//  = assignment , == compair

if($num==1){
    echo "<h1>One</h1>";
}
else if($num==2){
    echo "<h1>Two</h1>";
}
else if($num==3){
    echo "<h1>Three</h1>";
}
else if($num==4){
    echo "<h1>Four</h1>";
}
else if($num==5){
    echo "<h1>Five</h1>";
}
else{
    echo "<h2>no opp found</h2>";
}
?>