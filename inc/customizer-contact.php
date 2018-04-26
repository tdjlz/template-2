<?php 

add_action( 'customize_register', 'contact_options' );

function contact_options( $wp_customize ) {
    
    $wp_customize->add_section( 
      'contact' , 
      array(
        'title'       => __( 'contact Settings', 'mytheme' ),
        'priority'    => 100,
        'capability'  => 'edit_theme_options',
        'description' => __('Change Scontact options here.', 'mytheme')
      ) 
    );

    $wp_customize->add_setting( 'contact_heading', array() );

    $wp_customize->add_setting( 'contact_description', array() );

    $wp_customize->add_setting('contact_option_1',array());

    $wp_customize->add_setting('contact_option_2',array());

    $wp_customize->add_setting('contact_option_3',array());


    $wp_customize->add_control( new WP_Customize_Control (
      $wp_customize,
      'contact_heading_control',
      array(
           'label' => __( 'Contact Heading', 'mytheme' ),
           'section' => 'contact',
           'settings' => 'contact_heading',
           'priority' => 20,
           'type' => 'text'
      )
  ));
  $wp_customize->add_control( new WP_Customize_Control (
       $wp_customize,
       'scontact_description_control',
       array(
            'label' => __( 'Contact Description', 'mytheme' ),
            'section' => 'contact',
            'settings' => 'contact_description',
            'priority' => 30,
            'type' => 'textarea'
       )
  ));


  $wp_customize->add_control( new WP_Customize_Control (
    $wp_customize,
    'scontact_contact_option_1',
    array(
         'label' => __( 'Contact option 1', 'mytheme' ),
         'section' => 'contact',
         'settings' => 'contact_option_1',
         'priority' => 40,
         'type' => 'text'
    )
));


$wp_customize->add_control( new WP_Customize_Control (
    $wp_customize,
    'scontact_description_option_2',
    array(
         'label' => __( 'Contact option 2', 'mytheme' ),
         'section' => 'contact',
         'settings' => 'contact_option_2',
         'priority' => 50,
         'type' => 'text'
    )
));


$wp_customize->add_control( new WP_Customize_Control (
    $wp_customize,
    'scontact_description_option_3',
    array(
         'label' => __( 'Contact option 3', 'mytheme' ),
         'section' => 'contact',
         'settings' => 'contact_option_3',
         'priority' => 60,
         'type' => 'text'
    )
));
}

?>

<?php ?>