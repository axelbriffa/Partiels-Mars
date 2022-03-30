<?php include ('config/settings.php');
// appel du fichier qui permet la connexion à la bdd
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- appel de la partie head dans partials -->
    <?php include('partials/head.php')?>
    <link rel="stylesheet" href="css/propos.css">
    <title>Propos - SIMHATI</title>
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
        <article class="gauche">
            <h1>A propos</h1>
            <p>
                Depuis toujours, j’avais envie de changer le monde. Je me suis engagée très tôt dans des associations contre la précarité ou encore pour lutter contre le réchauffement climatique. Mon premier rêve était de devenir journaliste pour observer le monde.
            </p>
            <p>
                J’ai pratiqué pour la première fois la sophrologie à l’âge de 15 ans pour m’aider à gérer mes angoisses à l’école. Je n’ai ensuite jamais cessé d’explorer le monde du yoga et de la méditation. Je pratique le yoga depuis 15 ans et je le pratique quotidiennement. Car je suis convaincue que pour changer le monde encore faut-il être aligné avec soi-même. 
            </p>
            <p>
                Aujourd’hui, je suis sophrologue pour à mon tour guider ceux qui le souhaitent dans la découverte de son corps, de ses sensations, de ses émotions.
            </p>
            
            <div id="contact">
                <div>
                    <i class="fa-solid fa-book"></i>
                    <p>Diplômé de l'institut de formation à la sophrologie</p>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <p>06.00.00.00.00</p>
                </div>
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <p>28 rue de la Réunion à Paris</p>
                </div>
            </div>
        </article>
        
        <figure>
            <img src="img/Vector_23.png" alt="Photographie de Julia BORDES">
        </figure>




    </main>
    <!-- appel de la partie footer dans partials -->
    <?php include('partials/footer.php')?>
    
</body>
</html>