<!-- appel sur toutes les pages -->
<footer>
    <figure>
        <img src="img/logo-sans-fond.png" alt="logo de simhati">
    </figure>
    <div id="reseaux">
        <a href="https://instagram.com/lesprit_simhati?utm_medium=copy_link"><img src="img/insta.png" alt="Logo Instagram"></a>
        <a href="https://www.facebook.com/profile.php?id=100076955451461"><img src="img/facebook-logo-outline_icon-icons.png" alt="Logo Facebook"></a>
        <a href="https://www.pinterest.fr/"><img src="img/pinterest-outlined-logo_icon-icons.png" alt="Logo Pinterest"></a>
        <a href="https://www.youtube.com/"><img src="img/youtube.png" alt="Logo Youtube"></a>
    </div>
    <div id="lien">
        <a href="#">Mention légales</a>
        <a href="contact.php">Contact</a>
        <p id="button">Newsletter</p>
    </div>
    <!-- newsletter avec l'affichage via le fichier main.js -->
    <div id="news" class="display">
    <div id="newsletter">
        <!-- formulaire traiter dans core.php -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <input type="mail" name="newsletters" placeholder="Entrez votre adresse mail">
            <button type="submit" name="news">
                <i class="fa-solid fa-angle-right"></i>
            </button>
        </form>
    </div>
    </div>
    <p> © Copyright 2022 - Simhati - Tous droits réservés</p>
</footer>
<script src="js/main.js"></script>
