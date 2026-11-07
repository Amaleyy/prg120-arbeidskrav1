<?php
include("db-tilkobling.php");

if (isset($_POST["registrer"]))
{
    $brukernavn = $_POST["brukernavn"];
    $fornavn = $_POST["fornavn"];
    $etternavn = $_POST["etternavn"];
    $klassekode = $_POST["klassekode"];

    $sqlSetning = "INSERT INTO student (brukernavn, fornavn, etternavn, klassekode)
    VALUES ('$brukernavn', '$fornavn', '$etternavn', '$klassekode')";

    mysqli_query($db, $sqlSetning) or die("Ikke mulig å registrere student");
}

$sqlSetning = "SELECT * FROM klasse";
$sqlResultat = mysqli_query($db, $sqlSetning);
?>

<html>
<body>

<h1>Registrer student</h1>

<form method="post" action="registrerstudent.php">

Brukernavn: <input type="text" name="brukernavn"><br><br>

Fornavn: <input type="text" name="fornavn"><br><br>

Etternavn: <input type="text" name="etternavn"><br><br>

Klasse:
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

<br><br>

<input type="submit" name="registrer" value="Registrer student">

</form>

</body>
</html>