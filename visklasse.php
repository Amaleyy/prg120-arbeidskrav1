<?php
include("db-tilkobling.php");

$sqlSetning = "SELECT * FROM klasse";
$resultat = mysqli_query($db, $sqlSetning);

while ($rad = mysqli_fetch_array($resultat))
{
    print $rad["klassekode"] . " ";
    print $rad["klassenavn"] . " ";
    print $rad["studiumkode"] . "<br>";
}
?>

<html>
<body>
<h1>Vis klasser</h1>
</body>
</html>