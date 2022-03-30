<?php include ('config/settings.php');
// appel du fichier qui permet la connexion à la bdd
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- appel de la partie head dans partials -->
    <?php include('partials/head.php')?>
    <link rel="stylesheet" href="css/services.css">
    <title>Services - SIMHATI</title>
</head>
<body>
    <!-- menu pour l'accessibilité -->
    <ul class="access"> 
        <li>
            <a href="#header">Aller au menu</a>
        </li>
        <li>
            <a href="#main">Passer directement au contenu</a>
        </li>
    </ul>
    <!-- appel de la partie header dans partials -->
    <?php include ('partials/header.php')?>
    <!-- appel de la partie session dans partials -->
    <?php include ('partials/session.php')?>
    <main id="main">
        
        <article id="tete">
            <h1>Mes services</h1>
            <p>Grâce à une grande variété d’offres à des prix variés, je trouverai celle la plus adaptée à vos besoins et à vos envies. Je mettrai à profit mes années d’études et mon savoir-faire afin que vous ressentiez une amélioration dans votre vie quotidienne.</p>
            <div id="propo">
                <div>
                    <figure>
                        <img src="img/Rectangle_8.png" alt="Illustration d'une tête avec une fleur de lotus à l'intérieur">
                    </figure>
                    <h2>Sophrologie</h2>
                </div>
                <div>
                    <figure>
                        <img src="img/Rectangle_9.png" alt="Illustration d'une tête avec une fleur de lotus à l'intérieur">
                    </figure>
                    <h2>Yoga</h2>
                </div>
                <div>
                    <figure>
                        <img src="img/Rectangle_15.png" alt="Illustration d'une tête avec une fleur de lotus à l'intérieur">
                    </figure>
                    <h2>Et bien plus...</h2>
                </div>
            </div>
            <a href="#service">
                <i class="fa-solid fa-angle-down"></i>
            </a>
        </article>
        <article id="service">
            <article>
                <figure>
                    <img src="img/Rectangle_10.png" alt="Illustration fleur de lotus">
                </figure>
                <h2>Cours de yoga</h2>
                <img src="img/blob/Vector_4.svg" class="svg" id="yoga">
            </article>
            <article>
                <figure>
                    <img src="img/Rectangle_10-1.png" alt="Illustration lien une personne et ces pensées">
                </figure>
                <div>
                    <h2>Weekend ou semaine immersive de reconnexion à soi</h2>
                    <h2>400 euros le weekend - 820 euros la semaine</h2>
                </div>
            </article>
            <article>
                <img src="img/blob/Vector_5.svg" class="svg" id="sport">
                <figure>
                    <img src="img/Rectangle_10-2.png" alt="Illustration d'une personne qui fait du sport">
                </figure>
                <div>
                    <h2>Ateliers en groupe de sophrologie et de yoga : </h2>
                    <p class="desc">Ateliers classiques ou associés à une autre discipline : randonnée, art, sport…</p>
                    <h2>20 et 70 euros par personne en fonction de l’activité</h2>
                </div>
            </article>
            <article>
                <figure>
                    <img src="img/Rectangle_10-3.png" alt="illustration d'une plante qui sort du cerveau de quelqu'un">
                </figure>
                <div>
                    <h2>Accompagnement individuel en sophrologie </h2>
                    <p class="desc">Séances sur des thématiques de stress, endormissement, gestion de la douleur, préparation mentale à un événement (examen, compétition sportive, représentation artistiques…) </p>
                    <h2>60 et 580 euros selon les différentes offres</h2>
                </div>
            </article>
            <article>
                <img src="img/blob/Vector_6.svg" class="svg" id="lune">
                <figure>
                    <img src="img/Rectangle_10-4.png" alt="Illustration d'une lune">
                </figure>
                <div>
                    <h2>Parcours en autonomie : </h2>
                    <p class="desc">Podcasts sur les thèmes de préparation à un événement ou stress ou endormissement... </p>
                    <h2>99 euros par parcours</h2>
                </div>
            </article>
            <article>
                <figure>
                    <img src="img/Rectangle_10-5.png" alt="Illustration d'un micro">
                </figure>
                    <div>
                    <h2>Podcast informationnel sur la spiritualité</h2>
                    <h2>Gratuit</h2>
                </div>
            </article>
            <div id="cta">
                <a href="https://framadate.org/abc/fr/" class="cta">S'inscrire</a>
            </div>
            <!-- svg en arriere plan -->
            <div id="deco">
                <img src="img/blob/Vector_8.svg" class="svg" id="un">
                <img src="img/blob/Vector_9.svg" class="svg" id="deux">
                <img src="img/blob/Vector_10.svg" class="svg" id="trois">
                <img src="img/blob/Vector_11.svg" class="svg" id="quatre">
                <img src="img/blob/Vector_12.svg" class="svg" id="cinq">
                <img src="img/blob/Vector_13.svg" class="svg" id="six">
            </div>
        </article>


        <!-- slider -->
        <article id="slider">
            <figure>
                <img src="img/unsplash_E5egsk4eUQ0.png" alt="Photographie d'un paysage montagneu avec un ciel rouge">
            </figure>

            <!-- flèche qui au clic appelle la fonction slider dans le fichier function.js -->
            <div id="arow">
                <i class="fa-solid fa-angle-left" id="precedant" onclick="slider(-1)"></i>
                <i class="fa-solid fa-angle-right" id="suivant" onclick="slider(1)"></i>
            </div>

            <!-- rond  qui au clic appelle la fonction pointer dans le fichier function.js-->
            <div id="circle">
                <i class="fa-regular fa-circle" onclick="pointer(0)"></i>
                <i class="fa-regular fa-circle" onclick="pointer(1)"></i>
                <i class="fa-regular fa-circle" onclick="pointer(2)"></i>
                <i class="fa-regular fa-circle" onclick="pointer(3)"></i>
                <i class="fa-regular fa-circle" onclick="pointer(4)"></i>
                <i class="fa-regular fa-circle" onclick="pointer(5)"></i>
                <i class="fa-regular fa-circle" onclick="pointer(6)"></i>
            </div>
        </article>
               

    </main>
    <!-- appel de la partie footer dans partials -->
    <?php include('partials/footer.php')?>
    <script src="js/function.js"></script>
    
</body>
</html>