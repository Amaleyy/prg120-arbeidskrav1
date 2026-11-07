<?php
include("db-tilkobling.php");

if (isset($_POST["slett"]))
{
    $brukernavn = $_POST["brukernavn"];

    $sqlSetning = "DELETE FROM student WHERE brukernavn='$brukernavn'";
    mysqli_query($db, $sqlSetning) or die("Ikke mulig å slette student");

    print "Student er slettet";
}

$sqlSetning = "SELECT * FROM student";
$sqlResultat = mysqli_query($db, $sqlSetning);
?>

<html>
<body>

<h1>Slett student</h1>

<form method="post" action="slettstudent.php" onsubmit="return confirm('Vil du slette valgt student?');">

<select name="brukernavn">
<?php
while ($rad = mysqli_fetch_array($sqlResultat))
{
    print "<option value='" . $rad["brukernavn"] . "'>";
    print $rad["brukernavn"] . " " . $rad["fornavn"] . " " . $rad["etternavn"];
    print "</option>";
}
?>
</select>

<br><br>

<input type="submit" name="slett" value="Slett student">

</form>

</body>
</html>