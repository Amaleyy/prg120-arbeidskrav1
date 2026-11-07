<?php
include("db-tilkobling.php");
if (isset($_POST["slett"]))
{
    $klassekode = $_POST["klassekode"];

    $sqlSetning = "DELETE FROM klasse WHERE klassekode='$klassekode'";
    mysqli_query($db, $sqlSetning) or die("Ikke mulig å slette klasse");

    print "Klasse er slettet";
}
$sqlSetning = "SELECT * FROM klasse";
$sqlResultat = mysqli_query($db, $sqlSetning);
?>
<html>
<body>

<h1>Slett klasse</h1>

<form method="post" action="slettklasse.php" onsubmit="return confirm('Vil du slette valgt klasse?');">

<select name="klassekode">
<?php
while ($rad = mysqli_fetch_array($sqlResultat))
{
    print "<option value='" . $rad["klassekode"] . "'>";
    print $rad["klassekode"] . " " . $rad["klassenavn"];
    print "</option>";
}
?>
</select>

<input type="submit" name="slett" value="Slett klasse">

</form>

</body>
</html>