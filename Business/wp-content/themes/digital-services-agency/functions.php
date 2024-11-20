<?php
/**
 * Digital Services Agency functions and definitions
 *
 * @package digital_services_agency
 * @since 1.0
 */

if ( ! function_exists( 'digital_services_agency_support' ) ) :
	function digital_services_agency_support() {

		load_theme_textdomain( 'digital-services-agency', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	}
endif;

add_action( 'after_setup_theme', 'digital_services_agency_support' );

if ( ! function_exists( 'digital_services_agency_styles' ) ) :
	function digital_services_agency_styles() {
		// Register theme stylesheet.
		$digital_services_agency_theme_version = wp_get_theme()->get( 'Version' );

		$digital_services_agency_version_string = is_string( $digital_services_agency_theme_version ) ? $digital_services_agency_theme_version : false;
		wp_enqueue_style(
			'digital-services-agency-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$digital_services_agency_version_string
		);

		wp_enqueue_script( 'digital-services-agency-custom-script', get_theme_file_uri( '/assets/custom-script.js' ), array( 'jquery' ), true );

		wp_enqueue_style( 'dashicons' );
	}
endif;

add_action( 'wp_enqueue_scripts', 'digital_services_agency_styles' );

function digital_services_agency_google_fonts() {
 
	wp_enqueue_style( 'archivo', 'https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap', false ); 
}

add_action( 'wp_enqueue_scripts', 'digital_services_agency_google_fonts' );

/* Theme Credit link */
define('DIGITAL_SERVICES_AGENCY_BUY_NOW',__('https://www.cretathemes.com/products/digital-services-wordpress-theme','digital-services-agency'));
define('DIGITAL_SERVICES_AGENCY_PRO_DEMO',__('https://pattern.cretathemes.com/digital-services-agency/','digital-services-agency'));
define('DIGITAL_SERVICES_AGENCY_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/digital-services-agency/','digital-services-agency'));
define('DIGITAL_SERVICES_AGENCY_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/digital-services-agency-pro/','digital-services-agency'));
define('DIGITAL_SERVICES_AGENCY_SUPPORT',__('https://wordpress.org/support/theme/digital-services-agency','digital-services-agency'));
define('DIGITAL_SERVICES_AGENCY_REVIEW',__('https://wordpress.org/support/theme/digital-services-agency/reviews/#new-post','digital-services-agency'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function digital_services_agency_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'digital_services_agency_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_digital-services-agency-guide-page' ) { ?>

	    <div class="notice notice-success">
	        <h1><?php esc_html_e('Hey, Thank you for installing Digital Services Agency Theme!', 'digital-services-agency'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=digital-services-agency-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'digital-services-agency'); ?></a> <a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'digital-services-agency'); ?></a></p>
	        <p class="dismiss-link"><strong><a href="?digital_services_agency_admin_notice=1"><?php esc_html_e( 'Dismiss', 'digital-services-agency' ); ?></a></strong></p>
	    </div>
	    <?php

	}?>
	    <?php

	}
}

add_action( 'admin_notices', 'digital_services_agency_admin_notice' );

if( ! function_exists( 'digital_services_agency_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function digital_services_agency_update_admin_notice(){
    if ( isset( $_GET['digital_services_agency_admin_notice'] ) && $_GET['digital_services_agency_admin_notice'] = '1' ) {
        update_option( 'digital_services_agency_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'digital_services_agency_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'digital_services_agency_getstart_setup_options');
function digital_services_agency_getstart_setup_options () {
    update_option('digital_services_agency_admin_notice', FALSE );
}