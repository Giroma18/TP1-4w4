<?php 
   /** ZONE HERO */
   $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
   for($k=0; $k<3; $k++)
   {
        $hero_background[$k] = get_theme_mod('hero_background_' . $k, 'Default Title'); 
   }
   $hero_couleur = get_theme_mod('hero_couleur','#fff');
   ?>
   <style>
    .hero__couleur{
        color: white;
    
    }
   </style>
<section  class="hero">
    <!-- //////////////////////////////////////////////// hero__carrousel -->
    <div class="hero__carrousel--active" style="background-image: url('<?php echo $hero_background[0] ?>');"></div>    
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[1] ?>');"></div>    
    <div class="hero__carrousel" style="background-image: url('<?php echo $hero_background[2] ?>');"></div>
    <div class="hero__radio">
        <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="0" checked="checked">
        <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="1">
        <input class="hero__radio__input" type="radio" name="carrousel" data-id_carrousel="2">
    </div>

    <!-- ///////////////////////////////////////////////// hero__contenu -->
    <div class="hero__contenu global" style="color : <?php echo $hero_couleur ?>" >
            
            <h1 class="hero__titre hero__couleur">
                <?php bloginfo('name'); ?>
            </h1>

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
</section>