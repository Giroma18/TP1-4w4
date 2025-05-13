<?php 
   /** ZONE HERO */
   $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
   $hero_nombre_image = get_theme_mod('hero_nombre_image', 3);
   for($k=0; $k<3; $k++)
   {
        $hero_background[$k] = get_theme_mod('hero_background_' . $k, 'Default Title'); 
   }
   $hero_couleur = get_theme_mod('hero_couleur','#fff');

   $carrousel = [];

    // Charger dynamiquement 3 images dans le tableau $carrousel
    for($k = 0; $k < $hero_nombre_image; $k++) {
    $carrousel[] = get_theme_mod('hero_background_' . $k, '');
    }


   ?>



   <style>
    .hero__couleur{
        color: white;
    }

   </style>
<section  class="hero">
    <!-- //////////////////////////////////////////////// boucle du carrousel -->
    <?php foreach ($carrousel as $index => $background): ?>
        <div class="hero__carrousel <?php echo ($index === 0) ? 'hero__carrousel--active' : ''; ?>" style="background-image: url('<?php echo esc_url($background); ?>');"></div>
    <?php endforeach; ?>

    <div class="hero__radio">
        <?php foreach ($carrousel as $index => $background): ?>
            <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="<?php echo $index; ?>" <?php echo ($index === 0) ? 'checked="checked"' : ''; ?>>
            <label class="hero__radio__label" for="<?php echo $index; ?>"></label>
        <?php endforeach; ?>
    </div>

    <!-- ///////////////////////////////////////////////// hero__contenu -->
    <div class="hero__contenu global" style="color : <?php echo $hero_couleur ?>" >
            
            <div class="hero__animation hero__animation--active">
                <h1 class="hero__titre hero__couleur" style="color : <?php echo $hero_couleur ?>">
                    <?php bloginfo('name'); ?>
                </h1>

                <p class="hero__description"> 
                    <?php bloginfo('desciption'); ?>
                </p>

            </div>
            
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

                <p class="hero__auteur hero__couleur" style="color : <?php echo $hero_couleur ?>">
                    Auteur : <?php echo $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); ?>
                </p>
                    <button class="hero__bouton">
                        Inscription
                    </button>
                </div>

        </div>
</section>