<?php 

add_action( 'customize_register', 'section_2_options' );

function section_2_options( $wp_customize ) {
    
    $wp_customize->add_section( 
      'section_2' , 
      array(
        'title'       => __( 'Section 2 Settings', 'mytheme' ),
        'priority'    => 100,
        'capability'  => 'edit_theme_options',
        'description' => __('Change Section 2 options here.', 'mytheme')
      ) 
    );

    $wp_customize->add_setting( 'section_2_image', array() );

    $wp_customize->add_control( new WP_Customize_Image_Control(
      $wp_customize,
      'section_2_image_control',
      array(
           'label' => __('Section 2 Image', 'mytheme'),
           'section' => 'section_2',
           'settings' => 'section_2_image',
           'priority' => 10
      )
  ));
    
    $wp_customize->add_setting( 'section_2_heading', array() );

    $wp_customize->add_setting( 'section_2_description', array() );


    $wp_customize->add_control( new WP_Customize_Control (
      $wp_customize,
      'section_2_heading_control',
      array(
           'label' => __( 'Section 2 Heading', 'mytheme' ),
           'section' => 'section_2',
           'settings' => 'section_2_heading',
           'priority' => 20,
           'type' => 'text'
      )
  ));
  $wp_customize->add_control( new WP_Customize_Control (
       $wp_customize,
       'section_2_description_control',
       array(
            'label' => __( 'Section 2 Description', 'mytheme' ),
            'section' => 'section_2',
            'settings' => 'section_2_description',
            'priority' => 30,
            'type' => 'textarea'
       )
  ));

}

?>

<?php ?>