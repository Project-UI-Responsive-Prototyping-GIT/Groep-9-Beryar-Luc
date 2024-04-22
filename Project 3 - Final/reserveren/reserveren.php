<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveren</title>
    <meta name="author" content="Beryar Salman">
    <link rel = "icon" href ="../img/MicrosoftTeams-image.png" type = "image/x-icon"> 
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
    require '../Header.php';
?>

<main id="resmain">
    <form id="form" action="bedankt.php" method="get">
        <h1>Reserveren</h1>
        <p>Voornaam:</p> <input type="text" name="firstname"><br><br>
        <p>Tussenvoegsel:</p> <input type="text" name="tussenv"><br><br>
        <p>Achternaam:</p> <input type="text" name="lastname"><br><br>
        <p>Telefoonnummer:</p> <input type="tel" name="phone"><br><br>
        <p>E-mailadres:</p> <input type="email" name="email"><br><br>
        <p>Aantal personen:</p> <input type="number" name="people"><br><br>
        <p>Datum van reservering:</p> <input type="date" name="date"><br><br>
        <p>Tijd van reservering:</p> <input type="time" name="tijd"><br><br>

    <input name="sx`ubmit" type="submit" value="Submit">
    </form>

</main>

<?php
    require '../Footer.php';
?>
</body>
</html>