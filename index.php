<?php 
/* 
    ----------------------------------------------
        Created by : Vidko
        Description : redactilibre.com home page
    ----------------------------------------------
*/
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RédactiLibre | Accueil</title>
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

        <!-- Contenu principal de la page -->
        <main>
            <section class="search_button_sec">
                <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Rechercher un article</a>
            </section>
            <div class="content">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#0077c0" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
                <section class="presentation_sec">
                    <h2>Qui sommes-nous ?</h2>
                    <p>
                        Bienvenue sur RédactiLibre, votre portail d'expression libre et gratuit pour tous vos besoins de rédaction et d'exploration des idées ! 
                        Chez RédactiLibre, nous croyons en la puissance de la libre expression, de la créativité, et du partage de connaissances. 
                        Notre plateforme a été conçue pour vous permettre de créer des articles sur une multitude de sujets, qu'ils concernent le gaming, la politique, la culture, 
                        ou tout ce qui vous passionne.RédactiLibre est l'endroit idéal pour les écrivains en herbe, les experts, les passionnés ou simplement 
                        ceux qui cherchent à partager leur point de vue. Nous mettons à votre disposition un espace sans contraintes, où votre créativité peut s'épanouir, 
                        et où chaque idée a sa place. Que vous soyez un gamer passionné désirant partager vos astuces, un analyste politique engagé souhaitant exprimer son opinion, 
                        ou un amoureux de la culture voulant discuter des dernières tendances, RédactiLibre est là pour vous.
                    </p>
                </section>
                <section class="new_article_sec">
                    <h2>Nouveaux articles</h2>
                    <p>Aucun article pour le moment</p>
                </section>
            </div>
        </main>

        <!-- Bas de page -->
        <?php include("footer.php"); ?>
    </body>
</html>