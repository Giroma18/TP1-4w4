<?php
/*
Template Name: Événement
*/
?>
<?php get_header(); ?>

<section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article">
                <h2 class="populaire__titre"><?php the_title(); ?></h2>
                <div class="populaire__contenu"><?php the_content(); ?></div>
                <p>La conférence  : <?php the_field('titre_evenement'); ?> </p>  
                <p>Le conférencier : <?php the_field('conferencier_evenement'); ?> </p>  
                <p><?php the_field('description_evenement'); ?> </p>  
                <p>Le lieu : <?php the_field('lieu_evenement'); ?> </p>  
                <p>La date : <?php the_field('date_evenement'); ?> </p>  
            </article>
            <?php endwhile; endif; ?>
            <!-- //////////////////////////////////// section destination REST-API -->
    <?php categories_liste("destination"); ?>
    <section class="destination">
        <h2 class="destination__titre">Articles de la catégorie</h2>
        <div class="destination__list"></div>
    </section>
        </div>
    </section>

<?php get_footer(); ?>