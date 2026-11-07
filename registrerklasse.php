<?php
include("db-tilkobling.php");
if (isset($_POST["registrer"]))
{
$klassekode = $_POST["klassekode"];
$klassenavn = $_POST["klassenavn"];
$studiumkode = $_POST["studiumkode"];

$sqlSetning = "INSERT INTO klasse (klassekode, klassenavn, studiumkode)
VALUES ('$klassekode', '$klassenavn', '$studiumkode')";
if (mysqli_query($db, $sqlSetning))
{
    echo "Klasse er registrert";
}
else
{
    echo "Klassekode finnes fra før";
}
?>
<html>
<body>
<h1>Registrer klasse</h1>
<form method="post" action="registrerklasse.php">

Klassekode:
<input type="text" name="klassekode">
<br><br>

Klassenavn:
<input type="text" name="klassenavn">
<br><br>

Studiumkode:
<input type="text" name="studiumkode">
<br><br>

<input type="submit" name="registrer" value="Registrer">
</form>
</body>
</html>
