<?php 

add_action('admin_menu', 'mt_add_pages');

function mt_add_pages() {
    // Add a new submenu under Settings:
    add_options_page(__('Nova Settings','menu-test'), __('Nova Settings','menu-test'), 'manage_options', 'acorn-theme-options', 'acorn_settings_page');
}


// mt_settings_page() displays the page content for the Test Settings submenu
function acorn_settings_page() {

    //must check that the user has the required capability 
    if (!current_user_can('manage_options'))
    {
      wp_die( __('You do not have sufficient permissions to access this page.') );
    }

    // Primary Colour
    $primary_colour_name = 'acorn_primary_color';
    $primary_colour_field = 'acorn_primary_color';

    // Secondary Colour
    $secondary_colour_name = 'acorn_secondary_color';
    $secondary_colour_field = 'acorn_secondary_color';

    // Footer Primary Colour
    $footer_primary_colour_name = 'acorn_footer_primary_color';
    $footer_primary_colour_field = 'acorn_footer_primary_color';

    // Footer Secondary Colour
    $footer_secondary_colour_name = 'acorn_footer_secondary_color';
    $footer_secondary_colour_field = 'acorn_footer_secondary_color';

    // Logo
    $logo_name = 'logo_name';
    $logo_field = 'logo_field';

    $hidden_field_name = 'mt_submit_hidden';    

    // Read in existing option value from database
    $primary_colour_val = get_option( $primary_colour_name );
    $secondary_colour_val = get_option( $secondary_colour_name );
    $footer_primary_colour_val = get_option( $footer_primary_colour_name );
    $footer_secondary_colour_val = get_option( $footer_secondary_colour_name );
    $logo_val = get_option( $logo_name );

    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'
    if( isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
        // Read their posted value
        $primary_colour_val = $_POST[ $primary_colour_field ];
        $secondary_colour_val = $_POST[ $secondary_colour_field ];
        $footer_primary_colour_val = $_POST[ $footer_primary_colour_field ];
        $footer_secondary_colour_val = $_POST[ $footer_secondary_colour_field ];
        $logo_val = $_FILES[ $logo_field ];

        // Save the posted value in the database
        update_option( $primary_colour_name, $primary_colour_val );
        update_option( $secondary_colour_name, $secondary_colour_val );
        update_option( $footer_primary_colour_name, $footer_primary_colour_val );
        update_option( $footer_secondary_colour_name, $footer_secondary_colour_val );
        update_option( $logo_name, $logo_val );

        // Put a "settings saved" message on the screen

echo '<pre>'.print_r($_FILES);

?>


<div class="updated"><p><strong><?php _e('settings saved.', 'menu-test' ); ?></strong></p></div>
<?php

    }

    // Now display the settings editing screen

    echo '<div class="wrap">';

    // header

    echo "<h2>" . __( 'Menu Test Plugin Settings', 'menu-test' ) . "</h2>";

    // settings form
    
    ?>

<form name="form1" method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">

<div id="content">

    <h3>Colours</h3>

    <p><?php _e("Primary Color:", 'menu-test' ); ?> 
    <input type="text" name="<?php echo $primary_colour_name; ?>" value="<?php echo $primary_colour_val; ?>" size="20">
    </p><hr />

    <p><?php _e("Secondary Color:", 'menu-test' ); ?> 
    <input type="text" name="<?php echo $secondary_colour_name; ?>" value="<?php echo $secondary_colour_val; ?>" size="20">
    </p><hr />

    <p><?php _e("Footer Primary Color:", 'menu-test' ); ?> 
    <input type="text" name="<?php echo $footer_primary_colour_name; ?>" value="<?php echo $footer_primary_colour_val; ?>" size="20">
    </p><hr />

    <p><?php _e("Footer Secondary Color:", 'menu-test' ); ?> 
    <input type="text" name="<?php echo $footer_secondary_colour_name; ?>" value="<?php echo $footer_secondary_colour_val; ?>" size="20">
    </p><hr /><hr /><hr />

    <h3>Logo</h3>

    <p><?php _e("Logo:", 'menu-test' ); ?> 
    <input type="file" name="<?php echo $logo_name; ?>" value="<?php echo $logo_val; ?>">

    <p class="submit">
    <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
    </p>

</form>
</div>

<?php
 
}