<?php
abstract class bank{
    abstract function id_proof();
}
// Fatal error: Class Ducat contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (bank::id_proof)
class Ducat extends bank{
    public $title="Ducat India";

    function __construct($data){
        $this->title=$data;
        
    }
    function id_proof(){
        echo "Hello Ducat India";
    }
}
// Parse error: syntax error, unexpected identifier "id_proof", expecting variable
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $app=new Ducat("Test");

    $app->id_proof();
    
    
    ?>

</body>

</html>
