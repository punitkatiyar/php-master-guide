# loops

> while

> do while

> for

> foreach

<hr>

```
<?php
    //while 
    $num=1;
    while($num<=5)
    {
        echo "<h1>$num</h1>";
        $num ++;
    }
    //do while

    $i=1;
    do{
       echo "<h1>$i</h1>"; 
       $i ++;
    }
    while($i<=10);

    //for 

    for($a=1;$a<=5;$a++)
    {
        echo "<h1>$a</h1>"; 
    }

    //foreach

    $color=array("red","green","blue","yellow");
    echo $color[0].'<hr>';
    echo $color[1].'<hr>';
    echo $color[2].'<hr>';
    echo $color[3].'<hr>';

    foreach($color as $value )
    {
        echo "<h1>$value</h1>";
    }

    $colors=array("c1"=>"red","c2"=>"green","c3"=>"blue","c4"=>"yellow");

    foreach($colors as $key=>$val)
    {
        echo "<h2>Key: $key and Val : $val </h2>";
    }
    ?>
```
