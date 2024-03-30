<h1>PHP Float</h1>

<?php

$float1 = 10;

$float2 = 10.12345;

// echo 100 / 0;

echo $float1 + $float2;

?>

<h1>PHP Float Function</h1>

<h1>Rodund :<?php echo round($float2, 4); ?></h1>

<h1>Ceil :<?php echo ceil($float2); ?></h1>

<h1>floor :<?php echo floor($float2); ?></h1>

<!-- type testing -->

<?php $num = 5; ?>

<h2>Integer :<?php echo is_int($num); ?></h2>
<h2>flat :<?php echo is_float($float2); ?></h2>

<h2>Numaric :<?php echo is_numeric($num); ?></h2>
<h2>Numaric :<?php echo is_numeric($float2); ?></h2>

<a href="boolen.php">Boolen Data Type</a>