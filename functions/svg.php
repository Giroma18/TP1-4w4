<?php
/* Traitement des images svg**/



 function vague($couleur){?>


<svg 
    xmlns="http://www.w3.org/2000/svg" 
    class="vague"
    style="top: 10px;"
    viewBox="0 0 1440 320">
        <path 
            fill="<?= $couleur ?>" 
            fill-opacity="1" 
            d="M0,160L48,154.7C96,149,192,139,288,133.3C384,128,480,128,576,149.3C672,171,768,213,864,240C960,267,1056,277,1152,282.7C1248,288,1344,288,1392,288L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
</svg>

<?php }


function icones_sociaux() {
    /*** Zone des ICONES ***/  
    $icone_couleur = ltrim(get_theme_mod('icone_couleur', '#fff'), '#'); 
    $footer_nombre_icone = get_theme_mod('footer_nombre_icone', 3);

    $tab_nom_icone = [];
    $tab_lien = [];

    for ($k = 0; $k < $footer_nombre_icone; $k++) {
        $tab_nom_icone[$k] = get_theme_mod("nom_icone_$k", 'link'); // 'link' par défaut
        $tab_lien[$k] = get_theme_mod("lien_icone_$k", '#');
    }

    echo '<div class="hero__icone-app icone__couleur">';
    for ($k = 0; $k < $footer_nombre_icone; $k++) {
        echo '<a href="' . esc_url($tab_lien[$k]) . '" target="_blank">';
        echo '<img src="https://s2.svgbox.net/social.svg?ic=' . esc_attr($tab_nom_icone[$k]) . '&color=' . esc_attr($icone_couleur) . '" width="32" height="32">';

        echo '</a>';
    }
    echo '</div>';
}




