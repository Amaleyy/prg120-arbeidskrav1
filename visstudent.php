<?php
include("db-tilkobling.php");

$sqlSetning = "SELECT * FROM student";
$sqlResultat = mysqli_query($db, $sqlSetning);

while ($rad = mysqli_fetch_array($sqlResultat))
{
    print $rad["brukernavn"] . " ";
    print $rad["fornavn"] . " ";
    print $rad["etternavn"] . " ";
    print $rad["klassekode"] . "<br>";
}
?>

<html>
<body>

<h1>Vis studenter</h1>

</body>
</html>