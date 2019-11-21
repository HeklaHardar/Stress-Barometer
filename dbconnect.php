<!-- Denne side sørger for at vi kan oprette forbindelse til vores database -->
<?php
//variabel for navnet på vores database
$dbnavn="stresstest";

	// vi laver en variabel som vi kan bruge til at få forbindelse til vores database
	$dbconnect = mysqli_connect("localhost", "root", "", "stresstest");
	// vi sørger for at den kan vise tegn korrekt, såsom Æ, Ø, og Å.
	$dbconnect->set_charset("utf8");

  ?>
