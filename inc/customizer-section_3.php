<?php 

add_action( 'customize_register', 'section_3_options' );

function section_3_options( $wp_customize ) {
    
    $wp_customize->add_section( 
      'section_3' , 
      array(
        'title'       => __( 'Section 3 Settings', 'mytheme' ),
        'priority'    => 100,
        'capability'  => 'edit_theme_options',
        'description' => __('Change Section 3 options here.', 'mytheme')
      ) 
    );

    
    $wp_customize->add_setting( 'section_3_heading', array() );

    $wp_customize->add_setting( 'section_3_description', array() );

    $wp_customize->add_setting('section_3_block_1_title', array());

    $wp_customize->add_setting('section_3_block_1_description', array());


    $wp_customize->add_control( new WP_Customize_Control (
      $wp_customize,
      'section_3_heading_control',
      array(
           'label' => __( 'Section 3 Heading', 'mytheme' ),
           'section' => 'section_3',
           'settings' => 'section_3_heading',
           'priority' => 20,
           'type' => 'text'
      )
  ));
  $wp_customize->add_control( new WP_Customize_Control (
       $wp_customize,
       'section_3_description_control',
       array(
            'label' => __( 'Section 3 Description', 'mytheme' ),
            'section' => 'section_3',
            'settings' => 'section_3_description',
            'priority' => 30,
            'type' => 'textarea'
       )
  ));

  $wp_customize->add_control( new WP_Customize_Control (
    $wp_customize,
    'section_3_block_1_title_control',
    array(
         'label' => __( 'Block 1 title', 'mytheme' ),
         'section' => 'section_3',
         'settings' => 'section_3_block_1_title',
         'priority' => 40,
         'type' => 'text'
    )
));

$wp_customize->add_control( new WP_Customize_Control (
    $wp_customize,
    'section_3_block_1_description_control',
    array(
         'label' => __( 'Block 1 Description', 'mytheme' ),
         'section' => 'section_3',
         'settings' => 'section_3_block_1_description',
         'priority' => 50,
         'type' => 'textarea'
    )
));
}

?>

<?php ?>