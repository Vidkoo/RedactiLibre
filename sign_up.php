<?php 
/* 
    ----------------------------------------------
        Created by : Vidko
        Description : redactilibre.com sign_up page
    ----------------------------------------------
*/
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RédactiLibre | Inscription</title>
        <script src="https://kit.fontawesome.com/4fd84f8514.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="img/Logo_redactilibre.ico" type="image/x-icon">
    </head>
    <body>
        <!-- Haut de page et menu de navigation -->
        <?php include("header.php"); ?>

        <!-- Formulaire d'inscription -->
        <main>
            <form action="" method="post">
                <div>
                    <label for="pseudo">Pseudonyme <input type="text" name="pseudo" id="pseudo"></label>
                </div>
                <div>
                    <label for="mail">Adresse mail <input type="email" name="mail" id="mail"></label>
                </div>
                <div>
                    <label for="password">Mot de passe <input type="password" name="password" id="password"></label>
                </div>
                <div>
                    <label for="birth-day">Votre date de naissence <input type="date" name="birth-day" id="birth-day"></label>
                </div>
                <div>
                    <label for="CGU"><input type="checkbox" name="cgu_agree" id="CGU"> Accepter les conditions générales d'utilisation</label>
                </div>
                <div>
                    <input type="button" value="S'inscrire">
                </div>
            </form>
        </main>

        <!-- Bas de page -->
        <?php include("footer.php"); ?>
    </body>
</html>