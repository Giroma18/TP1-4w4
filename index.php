<?php
/** Modèle de base de la base de donnée */

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <img class="entete__logo" src="http://localhost/4w4/wp-content/themes/tp1/images/logoVoyage.png" alt="logo">
            </figure>
           <label for="chk__burger" class="burger">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
            </label> 
            <input type="checkbox" id="chk__burger" class="chk__burger">
            
            <div class="entete__nav">
                <nav class="entete__menu">
                    <ul class="menu">
                        <li class="menu__li">
                            <a class="menu__a" href="#">Sport</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Pleine nature</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Croisière</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Aventure</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Culturel</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Repos</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Zen</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Économique</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Favorie</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Pays</a>
                        </li>
                    </ul>
                </nav>
                <div class="entete__recherche">
                    <form class="recherche">
                        <input type="text" class="recherche__input">
                        <img class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
                    </form>
                </div>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="hero__contenu global">
            <h1 class="hero__titre">
                Voyagez Autrement avec Mondo Voyages !
            </h1>
            <p class="hero__description">
               Découvrez des destinations uniques et inoubliables avec Mondo Voyages.<br>Nous vous offrons des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure. Partez à la découverte du mone avec nous et créez des souvenirs impérissables. 
            </p>
            <a href="" class="hero__courriel">
                info@cmaisonneuve.qc.ca
            </a>
            <a href="" class="hero__adresse">
                3800, rue Sherbrooke, Montréal
            </a>
            <a href="" class="hero__telephone">
                514-254-7131
            </a>
            <button class="hero__bouton">
                Inscription
            </button>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/materialui.svg?ic=facebook&color=000" width="32" height="32">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000" width="32" height="32">
            </div>
        </div>
    </section>
   
    <section class="galerie">
        <figure class="galerie__fig">
            <img src="" alt="">
        </figure>
    </section>


    <section class="promotion">
        <div class="carte carte--grande">
            <figure class="carte__image">
                <img src="images/img1.jpg" alt="Image de voyage">
            </figure>

            <div class="carte__contenu">
                <h2 class="carte__titre">Destination de rêve</h2>
                <p class="carte__description">Découvrez des endroits magnifiques à travers le monde.</p>
                <button class="carte__bouton carte__bouton--actif">Réserver</button>
            </div>
        </div>
    </section>
</body>
</html>