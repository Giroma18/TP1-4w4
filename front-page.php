<?php
/** 
 * modèle front-page.php permet d'afficher la page d'accueil
*/
?>
   
   
   <?php get_header() ?>
   <h1>front-page.php</h1>

    <section class="hero">
        <div class="hero__contenu global">
            <h1 class="hero__titre">
                <?php bloginfo('name'); ?>
            </h1>
            <p class="hero__description">
                <?php bloginfo('desciption'); ?>
            </p>
            <a href="" class="hero__description">
                info@cmaisonneuve.qc.ca
            </a>
            <a href="" class="hero__description">
                3800, rue Sherbrooke, Montréal
            </a>
            <a href="" class="hero__description">
                514-254-7131
            </a>
            <button class="hero__bouton">
                Inscription
            </button>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/materialui.svg?ic=facebook&color=000" width="32" height="32">
                <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32">
            </div>
        </div>
    </section>
   
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

                <article class="carte carte--grande">

                    <figure class="carte__image">
                        <img src="voyage.jpg" alt="Image de voyage">
                    </figure>
                    
                     <h2 class="populaire__titre"><?php the_title(); ?></h2>

                        <div class="populaire__contenu">
                            <?php echo wp_trim_words(get_the_excerpt(), 20,"..."); ?>
                        </div>

                    <div class="carte__contenu">
                        <button class="carte__bouton carte__bouton--actif">Suite</button>
                    </div>
                </article>
                <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer() ?>
</body>
</html>