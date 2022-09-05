<?php
require_once 'config.php';
if($_SESSION['sid']=="")
{
    header("location:index.php");
}
session_destroy();
?>