<?php 
   /** ZONE HERO */
   $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
   $hero_background = get_theme_mod('hero_background', 'Default Title'); 
   $hero_couleur = get_theme_mod('hero_couleur','#fff');
   ?>
   <style>
    .hero__couleur{
        color: white;
    
    }
   </style>
    <section  class="hero" style="color : <?php echo $hero_couleur ?>; background-image: url('<?php echo $hero_background ?>'); background-repeat: no-repeat">
        <div class="hero__contenu global">
            <h1 class="hero__titre hero__couleur">
                <?php bloginfo('name'); ?>
            </h1>
            
            <div class="hero__block" style="color : <?php echo $hero_couleur ?>">
                <p class="hero__description"> <?php bloginfo('desciption'); ?></p>

                <p class="hero__couleur" style="color : <?php echo $hero_couleur ?>">
                    Auteur : <?php echo $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); ?></p>
            
                <a href="" class="hero__description hero__couleur" style="color : <?php echo $hero_couleur ?>">
                    <?php echo $footer_courriel = get_theme_mod('footer_courriel', 'Default Title'); ?>
                </a>

                <a href="" class="hero__description hero__couleur" style="color : <?php echo $hero_couleur ?>">
                    <?php echo $footer_adresse = get_theme_mod('footer_adresse', 'Default Title'); ?>
                </a>
                
                <a href="" class="hero__description hero__couleur" style="color : <?php echo $hero_couleur ?>">
                    <?php echo $footer_adresse = get_theme_mod('footer_telephone', 'Default Title'); ?>
                </a>

                <?php get_template_part('gabarit/icone-sociaux') ?>
                <button class="hero__bouton">
                    Inscription
                </button>

            </div>
        </div>
    </section>