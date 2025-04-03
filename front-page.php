<?php
/** 
 * modèle front-page.php permet d'afficher la page d'accueil
*/


?>
   
   
   <?php get_header() ?>
   <?php get_template_part('gabarit/hero') ?>
 
    <section class="formulaire">
        <form class="formulaire__contenu">
            <div class="formulaire__groupe">
              <label for="nom">Nom</label>
              <input type="text" id="nom" name="nom" placeholder="Écrivez votre nom">
            </div>
            <div class="formulaire__groupe">
              <label for="prenom">Prénom</label>
              <input type="text" id="prenom" name="prenom" placeholder="Écrivez votre prénom">
            </div>
            <div class="formulaire__groupe">
              <label for="courriel">Courriel</label>
              <input type="email" id="courriel" name="courriel" placeholder="Écrivez votre courriel">
            </div>
            <div class="formulaire__groupe">
              <label for="telephone">Téléphone</label>
              <input type="tel" id="telephone" name="telephone" placeholder="Écrivez votre téléphone">
            </div>
            <button type="submit" class="formulaire__bouton">S'INSCRIRE</button>
          </form>
    </section>



    <section class="populaire">
        <div class="boiteflex global">
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category('galerie')){
                    the_content();
                } else { ?>

              <?php get_template_part("gabarit/carte"); ?>
                <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <!--///////////// section destination REST-API ///////////////!-->
    <?php categories_liste("destination"); ?>
    <section class="destination">
      <h2 class="destination__titre">Articles de la catégorie</h2>
      <div class="destination__list">  
      </div>
    </section>
    <?php get_footer() ?>
</body>
</html>