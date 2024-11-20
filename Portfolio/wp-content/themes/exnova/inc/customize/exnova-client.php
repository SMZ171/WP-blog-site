<?php
function exnova_client_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
/*=========================================
	client Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'client_panel', 
		array(
			'priority'      => 128,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Client Section', 'specia'),
		) 
	);
	
	// client Settings Section // 
	$wp_customize->add_section(
        'client_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Settings','specia'),
			'panel'  		=> 'client_panel',
		)
    );
	
	$wp_customize->add_setting( 
		'hide_show_client' , 
			array(
			'default' => 'on',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
			'transport'         => $selective_refresh,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_client' , 
		array(
			'label'          => __( 'Hide / Show Section', 'specia' ),
			'section'        => 'client_setting',
			'type'           => 'radio',
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			)
		) 
	);
}

add_action( 'customize_register', 'exnova_client_setting' );

// client section selective refresh
function exnova_home_client_section_partials( $wp_customize ){
	
	// hide_show_client
	$wp_customize->selective_refresh->add_partial(
		'hide_show_client', array(
			'selector' => '.client-version-one',
			'container_inclusive' => true,
			'render_callback' => 'client_setting',
			'fallback_refresh' => true,
		)
	);
	}

add_action( 'customize_register', 'exnova_home_client_section_partials' );