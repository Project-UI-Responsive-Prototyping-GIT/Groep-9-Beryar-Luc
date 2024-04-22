<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Aztec Casita</title>
    <meta name="author" content="Beryar Salman">
    <link rel = "icon" href ="../img/MicrosoftTeams-image.png" type = "image/x-icon"> 
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
    require '../Header.php'
    ?>
    <br><br><br><br><br><br>
    <main id="MenuMain">
        <form id="buttons" action="Menu.php" method="get">
            <input type="submit" name="button1" class="button" value="Italian">
            <input type="submit" name="button2" class="button" value="American">
            <input type="submit" name="button3" class="button" value="Special">
            <input type="submit" name="Dranken" class="button" value="Naar Dranken">
        </form>
        
        <?php   
        if(isset($_GET['button1'])){
            echo "<img class='kaart' src='../img/italian.webp' alt='logo'>";
        }
        if(isset($_GET['button2'])){
            echo "<img class='kaart' src='../img/American.jpg' alt='logo'>";
        }
        if(isset($_GET['button3'])){
            echo "<img class='kaart' src='../img/special.jpg' alt='logo'>";
        }
        if(!isset($_GET['button3']) & !isset($_GET["button1"]) & !isset($_GET["button2"])){
            echo "<img class='kaart' src='../img/italian.webp' alt='logo'>";
        }
        if(isset($_GET['Dranken'])){
            header('Location: ../Dranken/Dranken.php');
        }
        ?>
    </main>
    <br><br>
    <?php
    require '../Footer.php'
    ?>
</body>
</html>