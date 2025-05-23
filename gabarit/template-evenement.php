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
                <div class="populaire__contenu"><?php the_content(); ?></div>
                <p>La conférence  : <?php the_field('titre_evenement'); ?> </p>  
                <p>Le conférencier : <?php the_field('conferencier_evenement'); ?> </p>  
                <p><?php the_field('description_evenement'); ?> </p>  
                <p>Le lieu : <?php the_field('lieu_evenement'); ?> </p>  
                <p>La date : <?php the_field('date_evenement'); ?> </p>  
            </article>
            <?php endwhile; endif; ?>


    <!-- //////////////////////////////////// section destination REST-API -->
    <?php categories_liste("destination");  ?>

    <?php vague($couleurVague) ?>
    <div style ="background-color: #34dde2">
    <section class="destination" >
   <ul>
        <li>France</li>
        <li>États-Unis</li>
        <li>Canada</li>
        <li>Argentine</li>
        <li>Chili</li>
        <li>Belgique</li>
        <li>Maroc</li>
        <li>Mexique</li>
        <li>Japon</li>
        <li>Italie</li>
        <li>Islande</li>
        <li>Chine</li>
        <li>Grèce</li>
        <li>Suisse</li>
    </ul>
    </section>
    </div>
<?php get_footer(); ?>