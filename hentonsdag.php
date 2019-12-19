<?php
// MANDAG
$hentonsdag="SELECT Start FROM arbejde WHERE Dagid='3' AND Brugerid='$_SESSION[brugerid]'";
$hentonsdag_query=mysqli_query($dbconnect, $hentonsdag);

if(mysqli_num_rows($hentonsdag_query) > 0){

while($hentonsdag_result=mysqli_fetch_assoc($hentonsdag_query)){
    $onsdag[] = $hentonsdag_result['Start'];
}

if (in_array ("24",$onsdag)) {
  $onsdag00=TRUE;
}
if (in_array ("1",$onsdag)) {
  $onsdag1=TRUE;
}
if (in_array ("2",$onsdag)) {
  $onsdag2=TRUE;
}
if (in_array ("3",$onsdag)) {
  $onsdag3=TRUE;
}
if (in_array ("4",$onsdag)) {
  $onsdag4=TRUE;
}
if (in_array ("5",$onsdag)) {
  $onsdag5=TRUE;
}
if (in_array ("6",$onsdag)) {
  $onsdag6=TRUE;
}
if (in_array ("7",$onsdag)) {
  $onsdag7=TRUE;
}
if (in_array ("8",$onsdag)) {
  $onsdag8=TRUE;
}
if (in_array ("9",$onsdag)) {
  $onsdag9=TRUE;
}
if (in_array ("10",$onsdag)) {
  $onsdag10=TRUE;
}
if (in_array ("11",$onsdag)) {
  $onsdag11=TRUE;
}
if (in_array ("12",$onsdag)) {
  $onsdag12=TRUE;
}
if (in_array ("13",$onsdag)) {
  $onsdag13=TRUE;
}
if (in_array ("14",$onsdag)) {
  $onsdag14=TRUE;
}
if (in_array ("15",$onsdag)) {
  $onsdag15=TRUE;
}
if (in_array ("16",$onsdag)) {
  $onsdag16=TRUE;
}
if (in_array ("17",$onsdag)) {
  $onsdag17=TRUE;
}
if (in_array ("18",$onsdag)) {
  $onsdag18=TRUE;
}
if (in_array ("19",$onsdag)) {
  $onsdag19=TRUE;
}
if (in_array ("20",$onsdag)) {
  $onsdag20=TRUE;
}
if (in_array ("21",$onsdag)) {
  $onsdag21=TRUE;
}
if (in_array ("22",$onsdag)) {
  $onsdag22=TRUE;
}
if (in_array ("23",$onsdag)) {
  $onsdag23=TRUE;
}
}
?>
