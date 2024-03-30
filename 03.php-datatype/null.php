<h1>PHP NULL </h1>
<?php
$var1 = null;
$var2 = ""
?>

<h2>var 1 null ? :<?php echo is_null($var1); ?></h2>

<h2>var 2 null ? :<?php echo is_null($var2); ?></h2>

<h2>var 3 null ? :<?php echo is_null($var3); ?></h2>


<h2>var 1 set ? :<?php echo isset($var1); ?></h2>

<h2>var 2 set ? :<?php echo isset($var2); ?></h2>

<h2>var 3 set ? :<?php echo isset($var3); ?></h2>

<!--  empty : "", '', null, 0, 0.0, false, array() -->

<h2>var 1 empty ? :<?php echo empty($var1); ?></h2>

<h2>var 2 empty ? :<?php echo empty($var2); ?></h2>

<h2>var 3 empty ? :<?php echo empty($var3); ?></h2>