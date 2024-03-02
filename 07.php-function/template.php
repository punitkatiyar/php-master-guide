<?php
// echo @$data;
//data();
// $data="<h1>Hello In Function</h1>";
// echo $data;
// Function


# heding function
function data($data,$ht){
    // function body
    echo "<h$ht>$data</h$ht>";
}
# image function
function image($img_url,$img_size){
    if($img_size==1)
    {
        echo "<img src='$img_url' width='100%' alt='image'>";
    }
    else if($img_size==2)
    {
        echo "<img src='$img_url' width='50%' alt='image'>";
    }
    else if($img_size==3)
    {
        echo "<img src='$img_url' width='25%' alt='image'>";
    }
}

# link

function alink($url,$home=""){
    echo "<a href='{$url}.php' id='$home'>$url</a>";
}

function head($title,$css="style.css"){
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo "<title>{$title}</title>
    <link rel='stylesheet' href='{$css}'>";
    echo '</head>
    <body>
    <header>';
        echo "<h1>{$title}</h1>";
    echo '</header>';
}




?>
