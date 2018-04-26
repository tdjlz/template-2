<?php 

add_action( 'customize_register', 'section_4_options' );

function section_4_options( $wp_customize ) {
    
    $wp_customize->add_section( 
      'section_4' , 
      array(
        'title'       => __( 'Section 4 Settings', 'mytheme' ),
        'priority'    => 100,
        'capability'  => 'edit_theme_options',
        'description' => __('Change Section 4 options here.', 'mytheme')
      ) 
    );

    $wp_customize->add_setting( 'section_4_heading', array() );

    $wp_customize->add_setting( 'section_4_description', array() );


    $wp_customize->add_control( new WP_Customize_Control (
      $wp_customize,
      'section_4_heading_control',
      array(
           'label' => __( 'Section 4 Heading', 'mytheme' ),
           'section' => 'section_4',
           'settings' => 'section_4_heading',
           'priority' => 20,
           'type' => 'text'
      )
  ));
  $wp_customize->add_control( new WP_Customize_Control (
       $wp_customize,
       'section_4_description_control',
       array(
            'label' => __( 'Section 4 Description', 'mytheme' ),
            'section' => 'section_4',
            'settings' => 'section_4_description',
            'priority' => 30,
            'type' => 'textarea'
       )
  ));

}

?>

<?php ?>