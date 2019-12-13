<?php
session_start();
require("dbconnect.php");
require("testinput.php");
// KONTROLLER DBCONNECT
if($dbconnect === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
// KONTROLLER LOGIN
if (isset($_SESSION['logincheck'])) {
}else {
   header("Location: index.php");
}

require('hentmandag.php');
require('henttirsdag.php');

?>
