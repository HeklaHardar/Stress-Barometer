<?php
// FREDAG
$hentfredag="SELECT Start FROM arbejde WHERE Dagid='5' AND Brugerid='$_SESSION[brugerid]'";
$hentfredag_query=mysqli_query($dbconnect, $hentfredag);

if(mysqli_num_rows($hentfredag_query) > 0){

while($hentfredag_result=mysqli_fetch_assoc($hentfredagquery)){
    $fredag[] = $hentfredag_result['Start'];
}

if (in_array ("24",$fredag)) {
  $fredag00=TRUE;
}
if (in_array ("1",$fredag)) {
  $fredag1=TRUE;
}
if (in_array ("2",$fredag)) {
  $fredag2=TRUE;
}
if (in_array ("3",$fredag)) {
  $fredag3=TRUE;
}
if (in_array ("4",$fredag)) {
  $fredag4=TRUE;
}
if (in_array ("5",$fredag)) {
  $fredag5=TRUE;
}
if (in_array ("6",$fredag)) {
  $fredag6=TRUE;
}
if (in_array ("7",$fredag)) {
  $fredag7=TRUE;
}
if (in_array ("8",$fredag)) {
  $fredag8=TRUE;
}
if (in_array ("9",$fredag)) {
  $fredag9=TRUE;
}
if (in_array ("10",$fredag)) {
  $fredag10=TRUE;
}
if (in_array ("11",$fredag)) {
  $fredag11=TRUE;
}
if (in_array ("12",$fredag)) {
  $fredag12=TRUE;
}
if (in_array ("13",$fredag)) {
  $fredag13=TRUE;
}
if (in_array ("14",$fredag)) {
  $fredag14=TRUE;
}
if (in_array ("15",$fredag)) {
  $fredag15=TRUE;
}
if (in_array ("16",$fredag)) {
  $fredag16=TRUE;
}
if (in_array ("17",$fredag)) {
  $fredag17=TRUE;
}
if (in_array ("18",$fredag)) {
  $fredag18=TRUE;
}
if (in_array ("19",$fredag)) {
  $fredag19=TRUE;
}
if (in_array ("20",$fredag)) {
  $fredag20=TRUE;
}
if (in_array ("21",$fredag)) {
  $fredag21=TRUE;
}
if (in_array ("22",$fredag)) {
  $fredag22=TRUE;
}
if (in_array ("23",$fredag)) {
  $fredag23=TRUE;
}

}
?>
