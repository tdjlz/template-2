<?php 
add_action( 'customize_register', 'logo_options' );

function logo_options( $wp_customize ) {
    
    $wp_customize->add_section( 
      'logo' , 
      array(
        'title'       => __( 'logo Settings', 'mytheme' ),
        'priority'    => 100,
        'capability'  => 'edit_theme_options',
        'description' => __('Change logo options here.', 'mytheme')
      ) 
    );

    $wp_customize->add_setting( 'logo_image', array() );

    $wp_customize->add_control( new WP_Customize_Image_Control(
      $wp_customize,
      'logo_image_control',
      array(
           'label' => __('logo Image', 'mytheme'),
           'section' => 'logo',
           'settings' => 'logo_image',
           'priority' => 10
      )
  ));
}

  ?>