<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacatures - Aztec Casita</title>
    <meta name="author" content="Luc Martijn">
    <link rel = "icon" href ="../img/MicrosoftTeams-image.png" type = "image/x-icon"> 
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
    require '../Header.php';
?>

<main id="VacaMain">
    <section id="VacaSec1">
        <h1> Kom werken bij Aztec Casita!</h1>  
        <?php
        if (!isset($_GET['submit'])){
        echo "<form id='VacaForm' action='Vacatures.php' method='get'>
            <h1>Reserveren</h1>
            <p>Voornaam:</p> <input type='text' class='VacaInput' name='firstname'><br><br>
            <p>Tussenvoegsel:</p> <input type='text' class='VacaInput' name='tussenv'><br><br>
            <p>Achternaam:</p> <input type='text' class='VacaInput' name='lastname'><br><br>
            <p>Telefoonnummer:</p> <input type='tel' class='VacaInput' name='phone'><br><br>
            <p>E-mailadres:</p> <input type='email' class='VacaInput' name='email'><br><br>
        <input type='submit' value='Submit' name='submit'>
        </form>";} else {
            echo "<p id='VacaThanks'>Bedankt voor het invoeren! U krijgt zo snel mogelijk van ons te horen!</p>";
        }
        ?>
    </section>
    <section id="VacaSec2">
        <article id="VacaArt">
           <p id="VacaText">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem culpa ea at sunt maxime magni rerum, corporis reiciendis, modi ratione quo, pariatur possimus mollitia? Autem molestiae officia optio atque aliquid.</p>
        </article>
        <img id="VacaPromoImg" src="../img/PromoImage.jpg" alt="logo">

    </section>
</main>

<?php
    require '../Footer.php';
?>
</body>
</html>