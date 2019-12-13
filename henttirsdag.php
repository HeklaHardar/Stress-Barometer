<?php
// MANDAG
$henttirsdag="SELECT Start FROM arbejde WHERE Dagid='2' AND Brugerid='$_SESSION[brugerid]'";
$henttirsdag_query=mysqli_query($dbconnect, $henttirsdag);

while($henttirsdag_result=mysqli_fetch_assoc($henttirsdag_query)){
    $tirsdag[] = $henttirsdag_result['Start'];
}

if (in_array ("24",$tirsdag)) {
  $tirsdag00=TRUE;
}
if (in_array ("1",$tirsdag)) {
  $tirsdag1=TRUE;
}
if (in_array ("2",$tirsdag)) {
  $tirsdag2=TRUE;
}
if (in_array ("3",$tirsdag)) {
  $tirsdag3=TRUE;
}
if (in_array ("4",$tirsdag)) {
  $tirsdag4=TRUE;
}
if (in_array ("5",$tirsdag)) {
  $tirsdag5=TRUE;
}
if (in_array ("6",$tirsdag)) {
  $tirsdag6=TRUE;
}
if (in_array ("7",$tirsdag)) {
  $tirsdag7=TRUE;
}
if (in_array ("8",$tirsdag)) {
  $tirsdag8=TRUE;
}
if (in_array ("9",$tirsdag)) {
  $tirsdag9=TRUE;
}
if (in_array ("10",$tirsdag)) {
  $tirsdag10=TRUE;
}
if (in_array ("11",$tirsdag)) {
  $tirsdag11=TRUE;
}
if (in_array ("12",$tirsdag)) {
  $tirsdag12=TRUE;
}
if (in_array ("13",$tirsdag)) {
  $tirsdag13=TRUE;
}
if (in_array ("14",$tirsdag)) {
  $tirsdag14=TRUE;
}
if (in_array ("15",$tirsdag)) {
  $tirsdag15=TRUE;
}
if (in_array ("16",$tirsdag)) {
  $tirsdag16=TRUE;
}
if (in_array ("17",$tirsdag)) {
  $tirsdag17=TRUE;
}
if (in_array ("18",$tirsdag)) {
  $tirsdag18=TRUE;
}
if (in_array ("19",$tirsdag)) {
  $tirsdag19=TRUE;
}
if (in_array ("20",$tirsdag)) {
  $tirsdag20=TRUE;
}
if (in_array ("21",$tirsdag)) {
  $tirsdag21=TRUE;
}
if (in_array ("22",$tirsdag)) {
  $tirsdag22=TRUE;
}
if (in_array ("23",$tirsdag)) {
  $tirsdag23=TRUE;
}
?>
