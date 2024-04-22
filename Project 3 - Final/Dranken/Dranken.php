<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dranken - Aztec Casita</title>
    <meta name="author" content="Luc Martijn">
    <link rel = "icon" href ="../img/MicrosoftTeams-image.png" type = "image/x-icon"> 
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
    require '../Header.php'
    ?>
    <br><br><br><br><br><br>
    <main id="DrankenMain">
        <form id="DrankenButtons" action="Dranken.php" method="get">
            <input type="submit" name="button1" class="DButton" value="Dranken">
            <input type="submit" name="button2" class="DButton" value="Bier">
            <input type="submit" name="button3" class="DButton" value="Wijn">
            <input type="submit" name="Dranken" class="DButton" value="Naar Menu">
        </form>
        
        <?php   
        if(isset($_GET['button1'])){
            echo "<img class='kaart' src='../img/Dranken.png' alt='logo'>";
        }
        if(isset($_GET['button2'])){
            echo "<img class='kaart' src='../img/Bier.jpg' alt='logo'>";
        }
        if(isset($_GET['button3'])){
            echo "<img class='kaart' src='../img/Wijn.webp' alt='logo'>";
        }
        if(!isset($_GET['button3']) & !isset($_GET["button1"]) & !isset($_GET["button2"])){
            echo "<img class='kaart' src='../img/Dranken.png' alt='logo'>";
        }
        if(isset($_GET['Dranken'])){
            header('Location: ../Menu/Menu.php');
        }
        ?>
    </main>
    <br><br>
    <?php
    require '../Footer.php'
    ?>
</body>
</html>