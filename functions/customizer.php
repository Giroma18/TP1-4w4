<?php
/**
 * ///////////////////////////// PERSONNALISATION //////////////////////////*
 */

function theme_31w_customize_register($wp_customize) {
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    $wp_customize->add_section('hero_section', array(
      'title' => __('Hero Section', 'theme_31w'),
      'priority' => 30,
    ));
  
    ////////////////////////////////////////////////////////// L'auteur
  
    $wp_customize->add_setting('hero_auteur', array(
      'Valerie' => __('Bienvenue sur mon site', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
  
    $wp_customize->add_control('hero_auteur', array(
      'label' => __('Auteur', 'theme_31w'),
      'section' => 'hero_section',
      'type' => 'text',
    ));



    ////////////////////////////////////////////////////////// Image en background de la zone Hero
    $wp_customize->add_setting('hero_background', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Image en background', 'theme_31w'),
        'section' => 'hero_section',
    )));
    ///////////////////////////////////////////////////////////// Nouvelle section footer
    $wp_customize->add_section('footer_section', array(
      'title' => __('Hero pied de page', 'theme_31w'),
      'priority' => 30,
    ));

    //////////////////////////////////////////////////////////////// Courriel
    $wp_customize->add_setting('footer_courriel', array(
      'default' => __('cmaisonneuve@info.qc.ca', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
  
    $wp_customize->add_control('footer_courriel', array(
      'label' => __('Courriel', 'theme_31w'),
      'section' => 'footer_section',
      'type' => 'text',
    ));

    //////////////////////////////////////////////////////////////// Adresse
    $wp_customize->add_setting('footer_adresse', array(
      'default' => __('3800 R. Sherbrooke E, Montréal', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
  
    $wp_customize->add_control('footer_adresse', array(
      'label' => __('adresse', 'theme_31w'),
      'section' => 'footer_section',
      'type' => 'text',
    ));

    //////////////////////////////////////////////////////////////// Téléphone
    $wp_customize->add_setting('footer_telephone', array(
      'default' => __('514-254-7131', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
  
    $wp_customize->add_control('footer_telephone', array(
      'label' => __('téléphone', 'theme_31w'),
      'section' => 'footer_section',
      'type' => 'text',
    ));
  
  
    //////////////////////////////////////////////////////////// Champ mission
    $wp_customize->add_setting('footer_mission', array(
      'default' => __('mission club de voyage', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
  
    $wp_customize->add_control('footer_mission', array(
      'label' => __('Mission', 'theme_31w'),
      'section' => 'footer_section',
      'type' => 'textarea',
    ));
  
    ///////////////////////////////////////////////////////// Couleur du texte de la zone Héro
    $wp_customize->add_setting('hero_couleur', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
  
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Couleur du texte', 'theme_31w'),
        'section' => 'hero_section',
    )));

    ///////////////////////////////////////////////////////// Couleur des icones de la zone Héro
    $wp_customize->add_setting('icone_couleur', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
      
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'icone_couleur', array(
      'label' => __('Couleur de icone', 'theme_31w'),
      'section' => 'hero_section',
    )));

      ///////////////////////////////////////////////////////////// Nouvelle section page 404
      $wp_customize->add_section('erreur_section', array(
        'title' => __('page404', 'theme_31w'),
        'priority' => 30,
      ));

    ////////////////////////////////////////////////////////// Image en background de la page 404
    $wp_customize->add_setting('erreur_background', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_background', array(
      'label' => __('Image en background', 'theme_31w'),
      'section' => 'erreur_section',
    )));
  
  }
  
  add_action('customize_register', 'theme_31w_customize_register'); 