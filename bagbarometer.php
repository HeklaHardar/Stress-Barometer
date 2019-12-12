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
// MANDAG
$hentmandag="SELECT Start FROM arbejde WHERE Dagid='1' AND Brugerid='$_SESSION[brugerid]'";
$hentmandag_query=mysqli_query($dbconnect, $hentmandag);
//$hentmandag_result=mysqli_fetch_assoc($hentmandag_query);
// echo $hentmandag_result
while($hentmandag_result=mysqli_fetch_assoc($hentmandag_query)){
    $Mandag[] = $hentmandag_result['Start'];
}
// var_dump($Mandag);
if (in_array ("24",$Mandag)) {
  $mandag00=TRUE;
}
if (in_array ("1",$Mandag)) {
  $mandag1=TRUE;
}
if (in_array ("2",$Mandag)) {
  $mandag2=TRUE;
}
if (in_array ("3",$Mandag)) {
  $mandag3=TRUE;
}
if (in_array ("4",$Mandag)) {
  $mandag4=TRUE;
}
if (in_array ("5",$Mandag)) {
  $mandag5=TRUE;
}
if (in_array ("6",$Mandag)) {
  $mandag6=TRUE;
}
if (in_array ("7",$Mandag)) {
  $mandag7=TRUE;
}
if (in_array ("8",$Mandag)) {
  $mandag8=TRUE;
}
if (in_array ("9",$Mandag)) {
  $mandag9=TRUE;
}
if (in_array ("10",$Mandag)) {
  $mandag10=TRUE;
}
if (in_array ("11",$Mandag)) {
  $mandag11=TRUE;
}
if (in_array ("12",$Mandag)) {
  $mandag12=TRUE;
}
if (in_array ("13",$Mandag)) {
  $mandag13=TRUE;
}
if (in_array ("14",$Mandag)) {
  $mandag14=TRUE;
}
if (in_array ("15",$Mandag)) {
  $mandag15=TRUE;
}
if (in_array ("16",$Mandag)) {
  $mandag16=TRUE;
}
if (in_array ("17",$Mandag)) {
  $mandag17=TRUE;
}
if (in_array ("18",$Mandag)) {
  $mandag18=TRUE;
}
if (in_array ("19",$Mandag)) {
  $mandag19=TRUE;
}
if (in_array ("20",$Mandag)) {
  $mandag20=TRUE;
}
if (in_array ("21",$Mandag)) {
  $mandag21=TRUE;
}
if (in_array ("22",$Mandag)) {
  $mandag22=TRUE;
}
if (in_array ("23",$Mandag)) {
  $mandag23=TRUE;
}
?>
