<?php
/***
 * Gabarit permettant d'afficher une carte
 */

$categorie = get_the_category();
// print_r ($categorie);
$macategorie = single_cat_title('',false);
if (!$macategorie){
    $macategorie = "Populaire";
}
?>

<article class="carte carte--grande">
                      
                    <figure class="carte__image"> 
                            <?php if (has_post_thumbnail()) {
                                //Permet d'afficher la petite image associé à l'article (l'image mise en avant)
                                the_post_thumbnail('thumbnail'); }
                            ?>
                    </figure> 
                    <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink();?>"><h2 class="carte__titre"><?php the_title(); ?></h2></a>
                    <?php echo wp_trim_words(get_the_excerpt(), 20,"..."); ?>
                    <div class="carte__temp">
                        <p>Température min. <?php echo the_field('temperature_minimum'); ?>°C</p>
                        <p>Température max. <?php echo the_field('temperature_maximum'); ?>°C</p>
                        <p>Température moy. <?php echo the_field('temperature_moyenne'); ?>°C</p>
                    </div>
                    
                    <?php foreach($categorie as $une_categorie): ?>
                    <?php if ($une_categorie->name != $macategorie): ?>
                    <a href="<?= get_category_link($une_categorie->term_id)?>" class="carte__bouton"><?= $une_categorie->name; ?></a>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </article>