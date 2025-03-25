<?php
/** 
 * modèle de page 404
*/
$icone_couleur = ltrim(get_theme_mod('icone_couleur','#fff'),'#'); 

?>
   
   
   <?php get_header() ?>

    <section class="erreur__contenu">
        <h1 class="erreur__titre">Erreur 404</h1>


        <p>OOPS ! Désolé la page est introuvable.</p>

        <div>
        <img src="https://s2.svgbox.net/materialui.svg?ic=facebook&color=<?php echo $icone_couleur ?>" width="32" height="32">
        <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=<?php echo $icone_couleur ?>" width="32" height="32">
        </div>

    </section>

    <?php get_footer() ?>
</body>
</html>