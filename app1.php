<?php
developer();
//echo $developer;
$dev="Punit Full Stcak Developer";
echo $dev;
// define the function
function developer(){
    echo "<h1>Hi Developer</h1>";
}
// call the function
developer();
// passing the argument
// function developer(){
//     echo "<h1>Hi Punit</h1>";
// }
function heading($title="Application user",$size=1,$color="blue"){
    echo "<h$size style='color:$color;'>Hi $title</h$size>";
    //print_r($_POST);
}
extract($_POST);
//print_r($_POST);
if(isset($_POST['go']))
{
    // $title=$_POST['title'];
    // $size=$_POST['size'];
    // $color=$_POST['color'];
    heading($title,$size,$color);
    //echo "Hiii";
}
else{
    heading();
    echo "Byeee";
}
?>
<form method="post">
    <input type="text" name="title" value="<?php echo @$title;?>" placeholder="Enter Your Name">
    <select name="size">
        <option value="1">Heading 1</option>
        <option value="2">Heading 2</option>
        <option value="3">Heading 3</option>
        <option value="4">Heading 4</option>
        <option value="5">Heading 5</option>
        <option value="6">Heading 6</option>
    </select>
    <input type="color" name="color">
    <input type="submit" name="go">

</form>