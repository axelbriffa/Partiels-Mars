<?php include ('config/settings.php');
// appel des trois dernières lignes de la base de données articles 
$articles = $sql -> prepare ('SELECT * FROM articles ORDER BY id DESC LIMIT 3');
$articles -> execute();
$articles = $articles -> fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- appel de la partie head dans partials -->
    <?php include('partials/head.php')?>
    <link rel="stylesheet" href="css/index.css">
    <title>Accueil - SIMHATI</title>
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

        <!-- article prem -->
        <article id="prem">
            <div class="gauche">
                <h1>L'équilibre du Monde</h1>
                <h2>Simhati propose des outils et des expériences de sophrologie et de yoga uniques afin de se reconnecter à son soi le plus profond, révéler sa beauté intérieure et faire rayonner celle du monde.</h2>
                <ul>
                    <li>
                        <a href="services.php" class="cta">Mes services</a>
                    </li>
                    <li>
                    <a href="#" class="cta remove">Prendre RDV</a>
                    </li>
                </ul>
            </div>
                <figure>
                    <img src="img/yoga 1.png" alt="Illustration du jeune fille qui fait du yoga">
                </figure>
        </article>



        <!-- article sophrologie -->

        <article id="sophrologie">
            <article>
                <h1>Qu'est-ce que la sophrologie ?</h1>
                <p id="petit">La sophrologie est une technique de relaxation exclusivement verbale. Les exercices de sophrologie vont associer la respiration, 
                la détente musculaire et la visualisation positive ou imagerie mentale, avec pour principal objectif de créer des ressentis positifs.</p>
                <div id="bas">
                    <div class="gauche"><p>Elle est centrée sur votre <span class="gras">vécu</span>, vos <span class="gras">perceptions</span>. Elle vous considère dans votre <span class="gras">globalité</span>. Elle ne cherche pas de pourquoi à votre <span class="gras">symptôme</span>. La <span class="gras">sophrologie</span> s’intéresse au <span class="gras">phénomène</span> c’est-à-dire, à ce qui apparaît et se <span class="gras">vit</span>. L’absence de <span class="gras">démarche analytique</span> vous place dans la recherche de votre <span class="gras">solution</span> (la seule qui compte ) sur un temps limité. Elle passe par la <span class="gras">perception</span> de son corps.</p></div>
                    <div class="droite"><p>Elle fait appel à des <span class="gras">techniques</span> de <span class="gras">respiration</span>, de <span class="gras">relaxation</span> et s’appuie sur votre <span class="gras">imagination</span>. Progressive, elle amène chacun à développer une <span class="gras">attention de qualité</span> pour agir en conséquence. Elle part de la <span class="gras">connaissance </span>du corps humain pour <span class="gras">rééquilibrer </span>en douceur le système nerveux. Nous la devons aux travaux du neuro-psychiatre <span class="gras">Caycedo</span>.</p></div>
                </div>
            </article>
            <img src="img/blob/Vector_1.svg" class="svg">

        </article>



        <!-- article citation -->
        <article id="citation">
            <figure>
                <img src="img/plane-red 1.png" alt="Illustration d'un avion qui fait le tour de la terre">
            </figure>
            <div>
                <p>"Il y a des voyages qui se font avec un seul bagage, le coeur."</p>
                <p id="nom">
                    Audrey Hepburn
                </p>
                <img src="img/blob/Vector_2svg.svg" class="svg">
            </div>
        </article>



        <!-- article proposition -->
        <article id="proposition">
            <article id="contenaire">
                <div class="gauche">
                    <h1>Ce que je propose</h1>
                    <p>Je propose des outils et des expériences uniques afin de se reconnecter à son soi le plus profond et révéler sa beauté intérieure et  faire rayonner la beauté du monde grâce à la sophrologie et au yoga, ainsi que d’autres techniques en m’alliant à d’autres experts (arts, nutrition, sport, danse…) </p>
                    <p> Aujourd’hui à travers cette offre, j’associe mes compétences en communication et événementiel et mon intérêt pour le développement personnel et la spiritualité dans cette nouvelle activité.
                    </p>
                </div>
                <div class="droite">
                    <div>
                        <p>Du Lundi au Vendredi de Xh à XXh</p>
                        <p>Sur rendez-vous</p>
                        <p>Cabinet au 28 rue de la Réunion 75020 Paris</p>
                    </div>
                    <a href="services.php" class="cta remove">Voir les offres</a>
                </div>
            </article>
        </article>

        

        <!-- article parcours -->
        <article id="parcours">
            <figure>
                <img src="img/student 1.png" alt="Illustration chapeau diplôme">
            </figure>
            <h1>Mon parcours</h1>
            <p>Je suis diplômée de l'institut de formation à la sophrologie, une des écoles les plus connues et je passe actuellement une certification d'état appelée RNCP pour avoir une meilleure reconnaissance au niveau de certains établissements.</p>
            <div>
                <a href="propos.php" class="cta">A propos de moi</a>
                <a href="contact.php" class="cta remove">Me contacter</a>
            </div>
        </article>


        <!-- article des trois derniers articles du blog -->
        <article id="article">
            <section id="trait"></section>
            <h1>Article et podcast</h1>

            <div>
                <!-- boucle qui affiche les trois dernieres lignes de la bdd articles -->
                <?php foreach($articles as $i){?>
                    <article>
                        <figure>
                            <img src="<?= $i['image_source']?>" alt="<?=$i['image_description']?>">
                        </figure>
                        <h2><?=$i['title']?></h2>
                        <p><?=$i['comment']?></p>
                        <a href="blog.php" class="cta">Lire l'article</a>
                    </article>
                <?php }?>
            </div>
            <div id="total">
                <a href="blog.php" class="cta" id="total">Voir plus</a>
            </div>


        </article>
        

    </main>
    <!-- appel de la partie footer dans partials -->
    <?php include('partials/footer.php')?>
    
</body>
</html>