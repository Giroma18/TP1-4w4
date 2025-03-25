<?php
/** 
 * modèle de page 404
*/
    $erreur_background = get_theme_mod('hero_background', 'Default Title'); 
?>
   
   
   <?php get_header() ?>

    <section class="erreur__contenu"  style="background-image: url('<?php echo $erreur_background ?>'); background-repeat: no-repeat">

        <div class="erreur__block">
            <h1 class="erreur__titre">Erreur 404</h1>
            <p>OOPS ! Désolé la page est introuvable.</p>

            <div>
                <?php get_template_part('gabarit/icone-sociaux') ?>
            </div>
        </div>
    </section>
    <?php get_footer() ?>
</body>
</html>