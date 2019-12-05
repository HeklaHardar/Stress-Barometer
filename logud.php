<style><?php include("style.css"); ?></style>
<?php
//start session for at have adgang til session-variabler
session_start();
//luk session, dvs log ud
$_SESSION = array(); session_destroy();

echo "Du er nu logget ud";
header("Location: index.php");
?>
