<?php 

add_action( 'customize_register', 'header_options' );

function header_options( $wp_customize ) {


	$wp_customize->add_section(
		'novaproject_header_section',
		array(
			'title' 		=> __( 'Header Section', 'mytheme' ),
			'priority' 		=> 10,
			'description' 	=> __('Change header options', 'mytheme')
		)
	);


	$wp_customize->add_setting( 'mobile_padding', 
		array(
			'default' 			=> '0 0 0 0'
		) 
	);
	$wp_customize->add_setting( 'mobile_logo', array() );

	$wp_customize->add_control( new WP_Customize_Control (
		$wp_customize,
		'mobile_padding_control',
		array(
			'label'			=> __( 'Mobile Padding', 'mytheme' ),
			'section'		=> 'novaproject_header_section',
			'settings'		=> 'mobile_padding',
			'priority'		=> 20,
			'type'			=> 'text'
		)
	));
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'mobile_logo_control',
		array(
			'label'			=> __('Mobile Logo', 'mytheme'),
			'section'		=> 'novaproject_header_section',
			'settings'		=> 'mobile_logo',
			'priority'		=> 30
		)
	));

} 

add_action( 'wp_head' , 'my_dynamic_css' );

function my_dynamic_css() {
?>

<style type="text/css">
#header { padding: <?php echo get_theme_mod('mobile_padding'); ?> ; }
</style>

<?php
}
  ?>

  <?php ?>