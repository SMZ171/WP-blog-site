<?php
add_action( 'admin_menu', 'digital_services_agency_getting_started' );
function digital_services_agency_getting_started() {
	add_theme_page( esc_html__('Get Started', 'digital-services-agency'), esc_html__('Get Started', 'digital-services-agency'), 'edit_theme_options', 'digital-services-agency-guide-page', 'digital_services_agency_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function digital_services_agency_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'digital_services_agency_admin_theme_style');

//guidline for about theme
function digital_services_agency_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'digital-services-agency' );
?>
	<div class="wrapper-outer">
		<div class="intro">
			<h3><?php echo esc_html( $theme->Name ); ?></h3>
			<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'digital-services-agency' ); ?></p>
			<div class="banner-buttons">
				<a href="<?php echo esc_url( DIGITAL_SERVICES_AGENCY_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Theme Documentation', 'digital-services-agency'); ?></a>
			</div>
		</div>
		<div class="left-main-box">
			<div class="about-wrapper">
				<div class="col-left">
					<p><?php echo esc_html( $theme->get( 'Description' ) ); ?></p>
				</div>
				<div class="col-right">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
				</div>
			</div>
			<div class="support-wrapper">
				<div class="review-box">
					<i class="dashicons dashicons-star-filled"></i>
					<h4><?php esc_html_e('Leave Us A Review', 'digital-services-agency'); ?></h4>
					<p><?php esc_html_e('Are you enjoying our theme? We would love to hear your feedback.', 'digital-services-agency'); ?></p>
					<div class="support-button">
						<a class="button button-primary" href="<?php echo esc_url( DIGITAL_SERVICES_AGENCY_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'digital-services-agency'); ?></a>
					</div>
				</div>
				<div class="support-box">
					<i class="dashicons dashicons-microphone"></i>
					<h4><?php esc_html_e('Need Help?', 'digital-services-agency'); ?></h4>
					<p><?php esc_html_e('Go to our support forum to help you out in case of queries.', 'digital-services-agency'); ?></p>
					<div class="support-button">
						<a class="button button-primary" href="<?php echo esc_url( DIGITAL_SERVICES_AGENCY_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'digital-services-agency'); ?></a>
					</div>
				</div>
				<div class="editor-box">
					<i class="dashicons dashicons-admin-appearance"></i>
					<h4><?php esc_html_e('Theme Customization', 'digital-services-agency'); ?></h4>
					<p><?php esc_html_e('Effortlessly modify and maintain your site using editor.', 'digital-services-agency'); ?></p>
					<div class="support-button">
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'digital-services-agency'); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="right-main-box">
			<div class="pro-box">
				<i class="dashicons dashicons-cover-image"></i>
				<h4><?php esc_html_e('Go For Premium', 'digital-services-agency'); ?></h4>
				<p><?php esc_html_e('Are you exited for our theme? Proceed for pro version of theme.', 'digital-services-agency'); ?></p>
				<div class="pro-buttons">
					<a class="button button-primary doc-btn" href="<?php echo esc_url( DIGITAL_SERVICES_AGENCY_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'digital-services-agency'); ?></a>
					<a class="button button-primary buy-btn" href="<?php echo esc_url( DIGITAL_SERVICES_AGENCY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'digital-services-agency'); ?></a>
					<a class="button button-primary demo-btn" href="<?php echo esc_url( DIGITAL_SERVICES_AGENCY_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Pro Demo', 'digital-services-agency'); ?></a>
				</div>
				<ul class="pro-list">
					<li><?php esc_html_e('Responsive Design', 'digital-services-agency');?></li>
					<li><?php esc_html_e('Demo Content Import', 'digital-services-agency');?></li>
					<li><?php esc_html_e('Aditional plugins', 'digital-services-agency');?></li>
					<li><?php esc_html_e('Background sliders', 'digital-services-agency');?></li>
					<li><?php esc_html_e('Video popups', 'digital-services-agency');?></li>
					<li><?php esc_html_e('More Fonts and Colors', 'digital-services-agency');?></li>
					<li><?php esc_html_e('Multiple templates', 'digital-services-agency');?></li>
					<li><?php esc_html_e('Multiple front page sections', 'digital-services-agency');?></li>
					<li><?php esc_html_e('Woocommerce support', 'digital-services-agency');?></li>
					<li><?php esc_html_e('Premium support', 'digital-services-agency');?></li>
					<li><?php esc_html_e('SEO optimization', 'digital-services-agency');?></li>
					<li><?php esc_html_e('Speed optimization', 'digital-services-agency');?></li>
					<li><?php esc_html_e('Browser compatibility', 'digital-services-agency');?></li>
			</div>
		</div>
	</div>
<?php } ?>