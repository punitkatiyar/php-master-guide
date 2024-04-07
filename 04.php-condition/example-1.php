<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="get">
        <input type="number" name="num" placeholder="Enter 1 to 5 number">
        <input type="submit" name="res" value="Result">
    </form>
    <!-- ?num=1&res=Result : get method default -->
    <?php
    // $_GET[]
    // $_POST[]
    // $_REQUEST[] get and post method 
    echo "<h1>GET Request</h1><hr>";
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
    
    echo "<h1>POST Request</h1><hr>";
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    echo "<h1>GET + POST Request</h1><hr>";
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';
    

    
    
    
    ?>






</body>

</html>