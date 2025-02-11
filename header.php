<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Voyage</title>
    <!-- link rel="stylesheet" href="normalize.css" -->
    <!-- link rel="stylesheet" href="style.css" -->
    <?php wp_head(); ?> 
    <!-- <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <div class="entete">
            <figure class="entete__logo">
                <img src="<?php echo get_template_directory_uri() . '/images/logo.png' ?>" alt="logo voyage">
            </figure>
           <label for="chk__burger" class="burger">
            <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu-alt-1&color=000" width="32" height="32">
        </label>
            </label> 
            <input type="checkbox" id="chk__burger" class="chk__burger">
            
            <div class="entete__nav">

            <?php wp_nav_menu(array(
                'menu' => 'principal',
                'container' => 'nav',
                'container_class' => 'entete__menu',
            )); ?>

                
                <div class="entete__recherche">
                    <form class="recherche">
                        <input type="text" class="recherche__input">
                        <img class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
                    </form>
                </div>
            </div>
        </div>
    </header>