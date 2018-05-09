<?php
add_action( 'customize_register', 'download_link_options' );

function download_link_options( $wp_customize ) {

    $wp_customize->add_section(
        'download_link_section',
        array(
            'title'=>__('Download link setting', 'mytheme'),
            'priority'=> 100,
            'capability'=>'edit_theme_options',
            'description'=>__('Change the download link options here','mytheme')
        )
        );

    $wp_customize->add_setting('appstore_download_link',array());

    $wp_customize->add_setting('googleplay_download_link',array());

    $wp_customize->add_setting( 'appstore_download_img', array() );

    $wp_customize->add_setting( 'googleplay_download_img', array() );

    $wp_customize->add_control( new WP_Customize_Image_Control(
      $wp_customize,
      'appstore_img_control',
      array(
           'label' => __('app store Image', 'mytheme'),
           'section' => 'download_link_section',
           'settings' => 'appstore_download_img',
           'priority' => 10
      )
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'googleplay_img_control',
        array(
             'label' => __('google play Image', 'mytheme'),
             'section' => 'download_link_section',
             'settings' => 'googleplay_download_img',
             'priority' => 20
        )
      ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'appstore_download_link_control', array(
        'label'      => __( 'appstore download link', 'mytheme' ),
        'section'    => 'download_link_section',
        'settings'   => 'appstore_download_link',
        'priority' => 30,
        'type' => 'text')
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'googleplay_download_link_control', array(
        'label'      => __( 'googleplay download link', 'mytheme' ),
        'section'    => 'download_link_section',
        'settings'   => 'googleplay_download_link',
        'priority' => 40,
        'type' => 'text')
    ));
}

?>

<?php ?>