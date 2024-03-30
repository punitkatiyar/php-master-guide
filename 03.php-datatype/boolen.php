<h1>PHP Boolen</h1>

<?php
// $bool1 = true;
// $bool2 = false;

$bool1 = TRUE;
$bool2 = FALSE;

// $bool1 = 1;
// $bool2 = 0;


?>

<h2>True : <?php echo is_bool($bool1); ?></h2>
<h2>False :<?php echo is_bool($bool2); ?></h2>


<!-- example  -->

<?php
$num = true;
if (is_bool($num)) {
    //  true
    echo "Pass Test";
} else {
    // false 
    echo "Do Again Test";
}
?>