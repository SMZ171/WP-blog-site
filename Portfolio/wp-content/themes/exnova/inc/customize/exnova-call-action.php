<?php
function exnova_call_action_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Call Action Section Panel
	=========================================*/
	
	
	// Call Action Page 1 //
	$wp_customize->add_setting(
	'call_action_page1',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
			
	$wp_customize->add_control(
	'call_action_page1',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Info 1','exnova'),
			'section'	=> 'call_action_content',
			'settings'        => 'call_action_page1',
			'priority'  => 1
		)
	);
	
	// Call Action Page 2 //
	$wp_customize->add_setting(
	'call_action_page2',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
			
			$wp_customize->add_control(
	'call_action_page2',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Info 2','exnova'),
			'section'	=> 'call_action_content',
			'settings'        => 'call_action_page2',
			'priority'  => 1
		)
	);
	
	// Call Action Page 3 //
	$wp_customize->add_setting(
	'call_action_page3',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
			
	$wp_customize->add_control(
	'call_action_page3',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Info 3','exnova'),
			'section'	=> 'call_action_content',
			'settings'        => 'call_action_page3',
			'priority'  => 1
		)
	);
	
	// Call Action Page 4 //
	$wp_customize->add_setting(
	'call_action_page4',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
			
	$wp_customize->add_control(
	'call_action_page4',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Info 4','exnova'),
			'section'	=> 'call_action_content',
			'settings'        => 'call_action_page4',
			'priority'  => 1
		)
	);
	
	// Call Action Page 5 //
	$wp_customize->add_setting(
	'call_action_page5',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
			
	$wp_customize->add_control(
	'call_action_page5',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Info 5','exnova'),
			'section'	=> 'call_action_content',
			'settings'        => 'call_action_page5',
			'priority'  => 1
		)
	);
	// Background Image // 
    $wp_customize->add_setting( 
    	'exnova_call_action_background_setting' , 
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
			
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'exnova_call_action_background_setting' ,
		array(
			'label'          => __( 'Background Image', 'specia' ),
			'section'        => 'call_action_content',
			'settings'        => 'exnova_call_action_background_setting',
			'priority'  => 2
		) 
	));
	
	// Background Color // 
	$wp_customize->add_setting(
	'call_action_overlay', 
	array(	
		'default' => '#EE591F',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control
		($wp_customize, 
			'call_action_overlay', 
			array(
				'label'      => __( 'Background Color', 'specia' ),
				'section'    => 'call_action_content',
				'settings'   => 'call_action_overlay',
				'priority'  => 17
			) 
		) 
	);
}
add_action( 'customize_register', 'exnova_call_action_setting' );



// Call to action selective refresh
function exnova_home_cta_section_partials( $wp_customize ){
	
	//call_action_button_title
	$wp_customize->selective_refresh->add_partial( 'call_action_button_title', array(
		'selector'            => '.call-to-action-exnova .cta-info .call-title',
		'settings'            => 'call_action_button_title',
		'render_callback'  => 'exnova_call_action_button_title_render_callback',
	) );
	
	//call_action_button3_title
	$wp_customize->selective_refresh->add_partial( 'call_action_button3_title', array(
		'selector'            => '.call-to-action-exnova .call-wrapper2 .cta-info .call-title',
		'settings'            => 'call_action_button3_title',
		'render_callback'  => 'exnova_call_action_button3_title_render_callback',
	) );
	
	//call_action_button_label3
	$wp_customize->selective_refresh->add_partial( 'call_action_button_label3', array(
		'selector'            => '.call-to-action-exnova .call-wrapper2 .call-phone a',
		'settings'            => 'call_action_button_label3',
		'render_callback'  => 'exnova_call_action_button_label3_render_callback',
	) );
	
	//call_action_review_ttl
	$wp_customize->selective_refresh->add_partial( 'call_action_review_ttl', array(
		'selector'            => '.call-to-action-exnova .ttl',
		'settings'            => 'call_action_review_ttl',
		'render_callback'  => 'exnova_call_action_review_ttl_render_callback',
	) );
	}

add_action( 'customize_register', 'exnova_home_cta_section_partials' );

// call_action_button_title
function exnova_call_action_button_title_render_callback() {
	return get_theme_mod( 'call_action_button_title' );
}


// call_action_button3_title
function exnova_call_action_button3_title_render_callback() {
	return get_theme_mod( 'call_action_button3_title' );
}

// call_action_button_label3
function exnova_call_action_button_label3_render_callback() {
	return get_theme_mod( 'call_action_button_label3' );
}

// call_action_button_label3
function exnova_call_action_review_ttl_render_callback() {
	return get_theme_mod( 'call_action_review_ttl' );
}