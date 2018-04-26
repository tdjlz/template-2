<?php 

add_action( 'customize_register', 'section_1_options' );

function section_1_options( $wp_customize ) {
    
    $wp_customize->add_section( 
      'section_1' , 
      array(
        'title'       => __( 'Section 1 Settings', 'mytheme' ),
        'priority'    => 100,
        'capability'  => 'edit_theme_options',
        'description' => __('Change Section 1 options here.', 'mytheme')
      ) 
    );

    $wp_customize->add_setting( 'section_1_image', array() );

    $wp_customize->add_control( new WP_Customize_Image_Control(
      $wp_customize,
      'section_1_image_control',
      array(
           'label' => __('Section 1 Image', 'mytheme'),
           'section' => 'section_1',
           'settings' => 'section_1_image',
           'priority' => 10
      )
  ));
    
    $wp_customize->add_setting( 'section_1_heading', array() );

    $wp_customize->add_setting( 'section_1_description', array() );


    $wp_customize->add_control( new WP_Customize_Control (
      $wp_customize,
      'section_1_heading_control',
      array(
           'label' => __( 'Section 1 Heading', 'mytheme' ),
           'section' => 'section_1',
           'settings' => 'section_1_heading',
           'priority' => 20,
           'type' => 'text'
      )
  ));
  $wp_customize->add_control( new WP_Customize_Control (
       $wp_customize,
       'section_1_description_control',
       array(
            'label' => __( 'Section 1 Description', 'mytheme' ),
            'section' => 'section_1',
            'settings' => 'section_1_description',
            'priority' => 30,
            'type' => 'textarea'
       )
  ));

}

?>

<?php ?>