<?php
/***
 * Gabarit permettant d'afficher une carte
 */

?>

<article class="carte carte--grande">
                      
                    <figure class="carte__image"> 
                            <?php if (has_post_thumbnail()) {
                                //Permet d'afficher la petite image associé à l'article (l'image mise en avant)
                                the_post_thumbnail('thumbnail'); }
                            ?>
                    </figure> 
                    <h2 class="carte__titre"><?php the_title(); ?></h2> 
                    <?php echo wp_trim_words(get_the_excerpt(), 20,"..."); ?>
                    <div class="carte__temp">
                        <p>Température min. <?php echo the_field('temperature_minimum'); ?>°C</p>
                        <p>Température max. <?php echo the_field('temperature_maximum'); ?>°C</p>
                        <p>Température moy. <?php echo the_field('temperature_moyenne'); ?>°C</p>
                    </div>
                
                    <?php the_category();?>
                    <div class="carte__contenu">
                        <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink();?>">Suite</a>
                    </div>
                    
                </article>