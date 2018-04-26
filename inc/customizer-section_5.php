<?php 

add_action( 'customize_register', 'section_5_options' );

function section_5_options( $wp_customize ) {
    
    $wp_customize->add_section( 
      'section_5' , 
      array(
        'title'       => __( 'Section 5 Settings', 'mytheme' ),
        'priority'    => 100,
        'capability'  => 'edit_theme_options',
        'description' => __('Change Section 5 options here.', 'mytheme')
      ) 
    );

    $wp_customize->add_setting( 'section_5_heading', array() );

    $wp_customize->add_setting( 'section_5_description', array() );


    $wp_customize->add_control( new WP_Customize_Control (
      $wp_customize,
      'section_5_heading_control',
      array(
           'label' => __( 'Section 5 Heading', 'mytheme' ),
           'section' => 'section_5',
           'settings' => 'section_5_heading',
           'priority' => 20,
           'type' => 'text'
      )
  ));
  $wp_customize->add_control( new WP_Customize_Control (
       $wp_customize,
       'section_5_description_control',
       array(
            'label' => __( 'Section 5 Description', 'mytheme' ),
            'section' => 'section_5',
            'settings' => 'section_5_description',
            'priority' => 30,
            'type' => 'textarea'
       )
  ));

}

?>

<?php ?>