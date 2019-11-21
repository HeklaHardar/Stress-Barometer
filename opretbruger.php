<html>
<head>
<title>Opret Bruger</title>
<style><?php include("style.css"); ?></style>
</head>
<body>
<?php
include ("dbconnect.php");
if($dbconnect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
require("bagopretbruger.php")

?>
<p><b>Opret bruger: </b></p>
<!-- vi laver bokse som vi kan udfylde med information, og sende til vores 'action' side via POST funktionen. -->
<form action="" method="post">
    <p>
        <label for="bruger_navn">Brugernavn:</label> <br>
        <input type="text" minlength="3" name="bruger_navn" id="bruger_navn" required>
    </p>
    <p>
        <label for="password">Password:</label> <br>
        <input type="password" minlength="3" name="password" id="password" required>
    </p>
    <p>
        <label for="gentagpassword">Gentag password:</label> <br>
        <input type="password" minlength="3" name="gentagpassword" id="gentagpassword" required>
    </p>

<!-- når man trykker på knappen 'submit' bliver man sendt videre til siden 'action.php' hvor vi så vil kontrollere, og indsætte informationen i tabellen.-->
    <input type="submit" value="Opret bruger">
</form>

<p><a href="index.php" class="knap">Tilbage til login</a></p>


</body>
</html>
