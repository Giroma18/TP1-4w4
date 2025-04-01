<?php
/** 
 * modèle de page 404
*/
    $erreur_background = get_theme_mod('hero_background', 'Default Title'); 
?>
   
   
   <?php get_header() ?>

    <section class="erreur__contenu"  style="background-image: url('<?php echo $erreur_background ?>'); background-repeat: no-repeat">

        <div class="erreur__block">
            <h1 class="erreur__titre">Oops, vous avez échoué sur l'île 404 !</h1>

        </div>

        <div class="erreur__block">
            <p>Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !</p>
        </div>
        
        <button class="erreur__boutton">
            Retour à l'accueil
        </button>
            <div class="erreur__menu">
                <?php wp_nav_menu(array(
                        "menu"=>"404",
                        "container"=>"nav",
                        "container_class"=>"erreur__menu"
                ));?>
            </div>

        <input class="erreur__rechercher" type="placeholder">
        
    </section>
    <?php get_footer() ?>
</body>
</html>