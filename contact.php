<?php
include('config/settings.php');
// appel du fichier qui permet la connexion à la bdd
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- appel de la partie head dans partials -->
    <?php include('partials/head.php')?>
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact - SIMHATI</title>
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
        <h1>Contact</h1>
        <p>Une question ? Une prise de rendez-vous ? Un avis ? N’hésitez pas à me contacter par téléphone, par mail ou sur les réseaux sociaux. Vous pouvez également remplir ce formulaire.</p>
        <div>
            <!-- formulaire qui va traiter les informations dans le fichier core.php -->
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                <legend><span>*</span> : Mentions obligatoires</legend>
                <div id="name">
                    <div class="input">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" placeholder="Entrez ici votre nom de famille">
                    </div>
                    <div class="input">
                        <label for="firstName">Prénom</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Entrez ici votre prénom">
                    </div>
                </div>
                <div class="input">
                    <label for="mail">E-mail<span>*</span></label>
                    <input type="mail" id="mail" name="mail" placeholder="Entrez ici votre adresse mail">
                </div>
                <div class="input">
                    <label for="message">Message<span>*</span></label>
                    <input type="text" id="message" name="message" placeholder="Entrez votre message ici">
                </div>
                <div>
                <button type="submit" name="contact">Envoyer</button>
                </div>
            </form>
            <figure>
                <img src="img/Rectangle_16.png" alt="Map de l'emplacement du cabinet">
                <img src="img/blob/Vector_7.svg" class="svg">
            </figure>
            
        </div>
    </main>
    <!-- appel de la partie footer dans partials -->
    <?php include('partials/footer.php')?>
    
</body>
</html>