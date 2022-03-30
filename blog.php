<?php include ('config/settings.php');
// appel du fichier qui permet la connexion à la bdd



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- appel de la partie head dans partials -->
    <?php include('partials/head.php')?>
    <link rel="stylesheet" href="css/blog.css">
    <title>Blog - SIMHATI</title>
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
    <main id="main">
        <!-- appel de la partie session dans partials -->
        <?php include ('partials/session.php')?>
        <h1>Blog</h1>

        <!-- formulaire pour faire un filtre en fonction d'une thematique -->
        <form action="blog.php#main" method="GET">
            <ul>
                <li>
                    <a href="blog.php#main">Tout voir</a>
                    <select name="thematic" id="thematic">
                        <option value="yoga">Yoga</option>
                        <option value="sophrologie">Sophrologie</option>
                        <option value="inde">Inde</option>
                        <option value="simhati">Simhati</option>
                    </select>
                </li>
                <li>
                    <button name="filtre" id="filtre">Rechercher</button>
                </li>
            </ul>
        </form>
        <?php 
        
            $filtre ='';
            // utilisation du filtre
            if (isset($_GET['filtre'])){

                
                $filtre .= ' WHERE thematic = "'.$_GET['thematic'].'"';

            }
            // appel dans la bdd des articles en fonction du filtre
            $articles = $sql -> prepare('SELECT * FROM articles'.$filtre);

            $articles -> execute ();
            //on lit les resultats sous forme de tableau
            $articles = $articles->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <img src="img/Meditation_practice_02_02-removebg-preview.png" alt="Illustration d'une personne qui fait du yoga" id="illu">
        
        <!-- boucle pour afficher les articles disponibles -->
        <?php foreach ($articles as $i){
            ?>
            <article class="blog">
                <article class="haut">
                    
                    <figure>
                        <img src="<?=$i['image_source']?>" alt="<?=$i['image_description']?>">
                    </figure>
                    <div>
                        <h2><?=$i['title']?></h2>
                        <p><?=$i['comment']?></p>
                    </div>
                </article>
                <div class="bas">
                    <p>
                        Ecrit par <?=$i['author']?> le <?= dateFR($i['modified'])?> 
                    </p>
                    <div>
                        <p id="avis">
                            Cette avis vous a été utile ? 
                        </p>
                        <!-- formulaire qui traite dans core.php le nombre de like et dislike -->
                        <form action="<?= $_SERVER['PHP_SELF']?>" method="GET">

                            <!-- button like qui récupère en valeur l'id de l'article pour le réutiliser dans la bdd -->
                            <div class="oui">
                                <button type="submit" name="lik" value="<?=$i['id']?>">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                </button>
                                <!-- affichage du nombre de like -->
                                <p><?= $i['cool'];?></p>
                            </div>

                            <!-- button dislike qui récupère en valeur l'id de l'article pour le réutiliser dans la bdd -->
                            <div class="non">
                                <button type="submit" name="dislike" value="<?=$i['id']?>">
                                    <i class="fa-solid fa-thumbs-down"></i>
                                </button>
                                <!-- affichage du nombre de dislike -->
                                    <p><?= $i['dislike'];?></p>
                            </div>
                        </form>
                        
                            
                    </div>
                </div>
                
            </article>
        <?php 
        } ?>
    
        <img src="img/blob/deco.svg" class="svg" id="blob">
    </main>
    <?php include('partials/footer.php')?>
    
</body>
</html>