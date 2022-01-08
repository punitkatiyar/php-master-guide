<?php
// database connection
/*
host name :localhost
user name : root
user password : ""
database name :blog.com
*/
# type 1
$dbcon=mysqli_connect("localhost","root","","blog.com");

# type 2 variable
$host='localhost';
$user="root";
$pass="";
$database="blog.com";
mysqli_connect($host,$user,$pass,$database);

# type 3 constant
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DATABASE","blog.com");
mysqli_connect(HOST,USER,PASS,DATABASE);

# type 4 array
$dbinfo=array("localhost","root","","blog.com");
mysqli_connect($dbinfo[0],$dbinfo[1],$dbinfo[2],$dbinfo[3]);










?>
