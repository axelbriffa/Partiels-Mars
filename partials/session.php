<!-- appel sur toutes les pages -->

<article>
    <!-- affichage des différents élements dans le tableau $_SESSION -->
    <?php 
        if (isset($_SESSION['message'])){
            flash_out();
    }?>
</article>