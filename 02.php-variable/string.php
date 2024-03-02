<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Type | Code With Punit</title>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    .wrapper {
        width: 90%;
        margin: auto;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <a href="./">PHP Menu</a>
        <h1>PHP Data Type</h1>
        <ol>
            <li>
                Scaler Type
                <ul>
                    <li>string</li>
                    <li>Integer</li>
                    <li>Float</li>
                    <li>boolen</li>
                </ul>

            </li>
            <li>Compund Type</li>
            <li>Spacial Type</li>
        </ol>
        <?php
    /*
    string : combination of character (a-z,A-Z, year 2022 , @ )
    syntax : "",''
    */
    // case 1
    # $title="This is data 1";
    # $title='This is data 2';
    # $title=`This is data 2`;
    # echo $title;
    
    // case 2
    $title="welcome to string type data";
    echo $title;
    echo "$title";
    echo '$title';
    
    // case 3
    echo "<h1> $title </h1>";
    echo "$title year 2022 <hr>";
    echo "{$title}year 2022"."<hr>";

    // string function
    ?>
        <hr>
        Uppercase :<?php echo strtoupper($title);?>
        <hr>
        Lowercase :<?php echo strtolower($title);?>
        <hr>
        uppercase words :<?php echo ucwords($title);?>
        <hr>
        uppercase first :<?php echo ucfirst($title);?>
        <hr>
        Length :<?php echo strlen($title);?>
        <hr>
        Repeat :<?php echo str_repeat($title,20);?>
        <hr>

    </div>
</body>

</html>