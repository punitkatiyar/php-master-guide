<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>

<body>
    <h1 align="center">While loops Example</h1>
    <?php
    ##########################################################
    # while loops
    echo '<table border="1" width="50%" align="center"><tr>';
    $count=1;
    while($count<10)
    {
        echo "<td>$count</td>";
        $count ++;
    }
    echo '</tr></table>';
    ############################################################
    ?>
    <h1 align="center">do While loops Example</h1>
    <?php
    ###########################################################
    echo '<table border="1" width="50%" align="center"><tr>';
    $count=1;
    do{
        ?>
        <!-- html Enviroment -->
           <td>Box</td> 
        <!-- html Enviroment -->    
        <?php
        $count ++;
    }
    while($count<10);
    echo '</tr></table>';
    #############################################################
    ?>
    <h1 align="center">For loops Example</h1>
    <?php
    echo '<table border="1" width="50%" align="center"><tr>';
    for($count=0;$count<=10;$count++)
    {
         echo "<td>$count</td>";
    }
    echo '</tr></table>';
    #############################################################
    ?>
    <h1 align="center">Foreach loops With Array Index Example</h1>
    <?php
    #############################################################
    $person=array("Punit","FullStack",2022,"Delhi");
    echo '<table border="1" width="50%" align="center"><tr>';
    foreach($person as $data)
    {
         echo "<td>$data</td>";
    }
    echo '</tr></table>';
    ?>
    <h1 align="center">Foreach loops With Array Associative Example</h1>
    <?php
    #############################################################
    $person=array("a"=>"Punit","b"=>"FullStack","c"=>2022,'d'=>"Delhi");
    echo '<table border="1" width="50%" align="center"><tr>';
    foreach($person as $k=>$v)
    {
         echo "<td>$k ".":"." $v</td>";
    }
    echo '</tr></table>';
    ?>


    
   
  




</body>

</html>
