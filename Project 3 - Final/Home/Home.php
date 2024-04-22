<!doctype html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Restaurant Aztec Casita">
<meta name="author" content="Luc Martijn">
<meta name="keywords" content="Restaurant, Aztec Casita">
<title>Home - Aztec Casita</title>
<link rel = "icon" href ="../img/MicrosoftTeams-image.png" type = "image/x-icon"> 
<link rel="stylesheet" type="text/css" href="../style.css">
<script src="lib.js" defer></script>
</head>

<body>
    <?php 
    require '../Header.php';
    ?>
    <main>
        <Section id="HomeSec1">
            <img id="Sec1Logo" src="../img/MicrosoftTeams-image (1).png" alt="logo"> 
            <article id="Sec1Text">
                <h2 class="HomeH2">Lorem ipsum</h2>
                <p class="HomeP">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem culpa ea at sunt maxime magni rerum, corporis reiciendis, modi ratione quo, pariatur possimus mollitia? Autem molestiae officia optio atque aliquid.</p>
            </article>
        </Section>
        <Section id="HomeSec2">
            <article class="Sec2Text">
                <h2 class="HomeH2">Lorem ipsum</h2>
                <p class="HomeP">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem culpa ea at sunt maxime magni rerum, corporis reiciendis, modi ratione quo, pariatur possimus mollitia? Autem molestiae officia optio atque aliquid.</p>
            </article>
            <img class='slideshow' src="../img/PastaOvenschotel.jpg" alt="logo"> 
            <img class='slideshow' src="../img/MacaroniTaart.jpg" alt="logo"> 
            <img class='slideshow' src="../img/Pizza.jpg" alt="Pizza"> 
            <article class="Sec2Text">
                <h2 class="HomeH2">Lorem ipsum</h2>
                <p class="HomeP">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem culpa ea at sunt maxime magni rerum, corporis reiciendis, modi ratione quo, pariatur possimus mollitia? Autem molestiae officia optio atque aliquid.</p>
            </article>
        </Section>
    </main>
    <?php 
    require '../Footer.php';
    ?>
</body>

</html>