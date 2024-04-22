<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review - Aztec Casita</title>
    <meta name="author" content="Beryar Salman">
    <link rel = "icon" href ="../img/MicrosoftTeams-image.png" type = "image/x-icon"> 
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
    require '../Header.php'
    ?>

    <main>
        <section id="box">
            <section id="review">
                <h1>Write a review:</h1><br>
                <form action="Review.php" method="POST">
                    <p>First name:</p>
                        <input type="text" name="firstname" value=""><br><br>
                    <p>Last name:</p>
                        <input type="text" name="lastname" value=""><br><br><br><br>
                    <p>Your Review:</p>
                        <textarea name="review" rows="4" cols="50"></textarea><br><br><br>
                    <p>Your Rating:</p>
                    <section id="radio">
                        <input type="radio" name="rating" value="1"><p>1</p>
                        <input type="radio" name="rating" value="2"><p>2</p>
                        <input type="radio" name="rating" value="4"><p>4</p>
                        <input type="radio" name="rating" value="5"><p>5</p>
                    </section><br><br>
                    <input type="submit" value="Submit" name="submit">
                </form>
            </section>

            <section id="allReviews">
                <h1>Reviews:</h1>
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['firstname'] . ' ' . $_POST['lastname'] . "<br><br>";
                    $rating = $_POST['review'] . '<br>' . $_POST['rating'];
                }
                    if(isset($name) & isset($rating) == true){
                        echo $name . $rating;
                    }
                ?>
            </section>
        </section>
    </main>

    <?php
    require '../Footer.php'
    ?>
</body>
</html>