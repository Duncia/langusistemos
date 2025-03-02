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
}
add_action('customize_register', 'langusistemos_header');