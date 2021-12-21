<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    span {
        color: red;
    }
    </style>
</head>

<body>
    <?php
    function shop($data)
    {
        $data1="<span>$data</span>";
        $data2="&#9962;";
        return array($data1 , $data2);   
    }
    $temp="My Name Is";
    $res= shop("Punit");
    $output=$res[0].$res[1];
    echo "$temp $output";
    
    
    
    ?>


</body>

</html>
