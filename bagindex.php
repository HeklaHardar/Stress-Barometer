<?php
session_start();
require("dbconnect.php");
require("testinput.php");

if($dbconnect === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_SESSION['logincheck'])) {
 // hvis man er logget ind bliver man ført til forsiden
 header("Location: barometer.php");
 echo "du er logget ind";

 }

if ($_POST) {
  echo "posted";
 if (ctype_alnum($_POST['brugernavn']) && ctype_alnum($_POST['password'])){
   $brugernavn=test_input($_POST['brugernavn']);
   $password=test_input($_POST['password']);

   echo "post";


   $checklogin="SELECT Password, Brugerid FROM Brugere WHERE Brugernavn = '$brugernavn'";
   $checklogin_query=mysqli_query($dbconnect, $checklogin);
   $checklogin_result=mysqli_fetch_assoc($checklogin_query);



   if(mysqli_num_rows($checklogin_query) == 1)  {
     if (password_verify($password, $checklogin_result['Password'])) {
       //når brugeren har logget ind med korrekt brugernavn og password, lav variabler for brugerinformation.
       $_SESSION['brugernavn']= $brugernavn;
       $_SESSION['brugerid']=$checklogin_result['Brugerid'];
       $_SESSION['logincheck']= "yep";
       echo "yep";
       header("Location: barometer.php");
     }else {
       echo "Forkert password";
     }
   } else {
     echo "Forkert brugernavn";
   }
 }else {
   echo "Brug venligst kun bogstaver og tal";
 }
}


?>
