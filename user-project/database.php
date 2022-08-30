<?php
// hostname:localhost
// user name:root
// password:
// database name:online

// echo '<pre>';
// print_r(mysqli_connect("localhost","root","","online"));
// echo '</pre>';
# connection type 1

$dbcon=mysqli_connect("localhost","root","","online");

# type 2

// $DBhost="localhost";
// $DBuser="root";
// $DBpass="";
// $DBname="online";
// mysqli_connect($DBhost,$DBuser,$DBpass,$DBname);

# type 3

// define("DBHOST","localhost");
// define("DBUSER","root");
// define("DBPASS","");
// define("DBNAME","online");

// mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

# type 4

// $array=array("localhost","root","","online");

// mysqli_connect($array[0],$array[1],$array[2],$array[3]);

?>