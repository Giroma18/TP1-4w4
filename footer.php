<?php
    $footer_mission = get_theme_mod('footer_mission', 'Default Title'); 
    $footer_couleur_arriere = get_theme_mod('footer_couleur_arriere', '#eea44a');
    
    /** Permet d'Afficher une vague avant le footer */
    vague($footer_couleur_arriere)
    ?>


<footer class="piedpage" style ="background-color: <?= $footer_couleur_arriere ?>">
    

        <section class="piedpage__s1">
                <h4>Menu</h4>
                <?php wp_nav_menu(array(
                    "menu"=>"principal",
                    "container"=>"nav",
                    "container_class"=>"piedpage__s1__externe"
                ));?>

            <div class="piedpage__icone-app">
                <img src="https://s2.svgbox.net/materialui.svg?ic=facebook&color=000" width="32" height="32">
                <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32">
                
            </div>

        </section>

        <section class="piedpage__s2">
            <h4>Informations</h4>
            <a href="" class="piedpage__s2__coord">
                <?php echo $footer_courriel = get_theme_mod('footer_courriel', 'Default Title'); ?>
            </a>
            <a href="" class="piedpage__s2__adresse">
                <?php echo $footer_adresse = get_theme_mod('footer_adresse', 'Default Title'); ?>
            </a>
            <a href="" class="piedpage__s2__tel">
                <?php echo $footer_telephone = get_theme_mod('footer_telephone', 'Default Title'); ?>
            </a>
           
            <div class="piedpage__s1__adresse__recherche">
                <?php get_search_form();?>
            </div>

        </section>
        
        <section class="piedpage__s3">
            <h4>Mission club de voyage </h4>
            <?php echo $footer_mission; ?>
        </section>

        <section class="piedpage__s4">
            <h4>Liens externes</h4>
            <?php wp_nav_menu(array(
                "menu" => "externe",
                "container" => "nav",
            )); ?>
        </section>
   
 
</footer>
<?php wp_footer() ?>