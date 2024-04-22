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
    <main id="Bedanktmain">
    <?php
    if ((isset($_GET['submit']))){
        $firstname = $_GET['firstname'];
        $tussenv = $_GET['tussenv'];
        $lastname = $_GET['lastname'];
        $phone = $_GET['phone'];
        $email = $_GET['email'];
        $people = $_GET['people'];
        $date = $_GET['date'];
        $tijd = $_GET['tijd']; 
        if(empty($firstname) . empty($lastname) . empty($phone) . empty($email) . empty($people) . empty($date) . empty($tijd))
        {
            echo '<p class="resText">Vul astublieft alles behalve Tussenvoegsels in.</p>';
        }
        else
        {
            echo '<p class="resText">' . $firstname ." " .$lastname .'<br><br> Bedankt voor u reservering op ' . $date . " om ". $tijd . ' uur voor ' . $people . " mensen.". "<br><br> We nemen contact met u op met deze gegevens:<br> Telefoonnummer: " . $phone ." <br>Email adress: ". $email . '</p>';
        }
    }   else {
        echo '<p class="resText">Er is geen reservatie geplaatst.</p>';
    }
    ?>
    </main>
    <?php
    require '../Footer.php';
    ?>
</body>
</html>