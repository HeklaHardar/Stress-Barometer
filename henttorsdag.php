<?php
// MANDAG
$henttorsdag="SELECT Start FROM arbejde WHERE Dagid='4' AND Brugerid='$_SESSION[brugerid]'";
$henttorsdag_query=mysqli_query($dbconnect, $henttorsdag);

if(mysqli_num_rows($henttorsdag_query) > 0){


while($henttorsdag_result=mysqli_fetch_assoc($henttorsdag_query)){
    $torsdag[] = $henttorsdag_result['Start'];
}


if (in_array ("24",$torsdag)) {
  $torsdag00=TRUE;
}
if (in_array ("1",$torsdag)) {
  $torsdag1=TRUE;
}
if (in_array ("2",$torsdag)) {
  $torsdag2=TRUE;
}
if (in_array ("3",$torsdag)) {
  $torsdag3=TRUE;
}
if (in_array ("4",$torsdag)) {
  $torsdag4=TRUE;
}
if (in_array ("5",$torsdag)) {
  $torsdag5=TRUE;
}
if (in_array ("6",$torsdag)) {
  $torsdag6=TRUE;
}
if (in_array ("7",$torsdag)) {
  $torsdag7=TRUE;
}
if (in_array ("8",$torsdag)) {
  $torsdag8=TRUE;
}
if (in_array ("9",$torsdag)) {
  $torsdag9=TRUE;
}
if (in_array ("10",$torsdag)) {
  $torsdag10=TRUE;
}
if (in_array ("11",$torsdag)) {
  $tirsdag11=TRUE;
}
if (in_array ("12",$torsdag)) {
  $torsdag12=TRUE;
}
if (in_array ("13",$torsdag)) {
  $torsdag13=TRUE;
}
if (in_array ("14",$tirsdag)) {
  $torsdag14=TRUE;
}
if (in_array ("15",$torsdag)) {
  $torsdag15=TRUE;
}
if (in_array ("16",$torsdag)) {
  $torsdag16=TRUE;
}
if (in_array ("17",$torsdag)) {
  $torsdag17=TRUE;
}
if (in_array ("18",$torsdag)) {
  $torsdag18=TRUE;
}
if (in_array ("19",$torsdag)) {
  $torsdag19=TRUE;
}
if (in_array ("20",$torsdag)) {
  $torsdag20=TRUE;
}
if (in_array ("21",$torsdag)) {
  $torsdag21=TRUE;
}
if (in_array ("22",$torsdag)) {
  $torsdag22=TRUE;
}
if (in_array ("23",$torsdag)) {
  $torsdag23=TRUE;
}

}
?>
