<?php
/*
Template Name: Événement
*/
$couleurVague = get_theme_mod('couleur_vague', '#34dde2');
?>
<?php get_header(); ?>

<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="populaire__article">
            <h2 class="populaire__titre"><?php the_title(); ?></h2>
            
            <p>Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! Notre planète regorge de destinations incroyables, chacune promettant une expérience unique et mémorable...</p>
        
            <div class="populaire__contenu"><?php the_content(); ?></div>
        </article>
        <?php endwhile; endif; ?>

        <!-- //////////////////////////////////// section destination REST-API -->

       
        
        <?php vague($couleurVague); ?>
        <?php categories_liste("categorie"); ?>
        <div style="background-color: #34dde2">
            <div class="pays-menu"></div> <!-- Le menu des pays sera injecté ici par JS -->
            <div class="destination__list"></div> <!-- Les articles s’affichent ici -->
        </div>

    </div>
</section>

<?php get_footer(); ?>
