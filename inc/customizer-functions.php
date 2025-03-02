<?php
//Header and footer customizer
function langusistemos_header($wp_customize){
    $wp_customize->add_section('ls-header-section', array(
        'title' => 'Header',
        'priority' => 10
      ));

    $wp_customize->add_setting('header-logo-img');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'header-logo-img-control', array(
      'label' => 'Logo paveikslėlis',
      'section' => 'ls-header-section',
      'settings' => 'header-logo-img',
      'width' => 160,
      'height' => 64
    )));

    $wp_customize->add_setting('header-top-warranty', array(
      'default' => '10 metų garantija'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-top-warranty-control', array(
      'label' => '10 metų garantija',
      'section' => 'ls-header-section',
      'settings' => 'header-top-warranty'
    )));

    $wp_customize->add_setting('header-top-fast-service', array(
      'default' => 'Greitas aptarnavimas'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-top-fast-service-control', array(
      'label' => 'Greitas aptarnavimas',
      'section' => 'ls-header-section',
      'settings' => 'header-top-fast-service'
    )));

    $wp_customize->add_setting('header-top-experience', array(
      'default' => '20+ metų patirtis'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-top-experience-control', array(
      'label' => '20+ metų patirtis',
      'section' => 'ls-header-section',
      'settings' => 'header-top-experience'
    )));

    $wp_customize->add_setting('header-top-feedback', array(
      'default' => 'Klientų įvertinimas'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-top-feedback-control', array(
      'label' => 'Klientų įvertinimas',
      'section' => 'ls-header-section',
      'settings' => 'header-top-feedback'
    )));

    $wp_customize->add_setting('header-top-feedback-rate', array(
      'default' => '5'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-top-feedback-rate-control', array(
      'label' => 'Balas',
      'section' => 'ls-header-section',
      'settings' => 'header-top-feedback-rate'
    )));

    $wp_customize->add_setting('header-top-phone', array(
      'default' => '+370 674 44 443'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-top-phone-control', array(
      'label' => 'Telefonas',
      'section' => 'ls-header-section',
      'settings' => 'header-top-phone'
    )));

    $wp_customize->add_setting('header-top-email', array(
      'default' => 'info@langu-sistemos.lt'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-top-email-control', array(
      'label' => 'El. paštas',
      'section' => 'ls-header-section',
      'settings' => 'header-top-email'
    )));

    $wp_customize->add_setting('header-top-get-offer', array(
      'default' => 'Gauti pasiūlymą'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-top-get-offer-control', array(
      'label' => 'Gauti pasiūlymą',
      'section' => 'ls-header-section',
      'settings' => 'header-top-get-offer'
    )));

    $wp_customize->add_setting('header-top-calculations', array(
      'default' => 'Kainos skaičiuoklė'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-top-calculations-control', array(
      'label' => 'Kainos skaičiuoklė',
      'section' => 'ls-header-section',
      'settings' => 'header-top-calculations'
    )));

    $wp_customize->add_setting('header-top-contacts', array(
      'default' => '/kontaktai'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-top-contacts-control', array(
      'label' => 'Kontaktų nuoroda',
      'section' => 'ls-header-section',
      'settings' => 'header-top-contacts'
    )));
}
add_action('customize_register', 'langusistemos_header');