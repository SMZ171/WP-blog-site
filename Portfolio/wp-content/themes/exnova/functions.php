<?php

define( 'EXNOVA_THEME_VERSION', '1.5' );

function exnova_css() {
    $parent_style = 'specia-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'exnova-main', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('exnova-default',get_stylesheet_directory_uri() .'/css/colors/default.css');
	wp_dequeue_style('specia-default');
	
	wp_enqueue_style('exnova-media-query',get_stylesheet_directory_uri() .'/css/media-query.css');
	wp_dequeue_style('specia-media-query');
	
	wp_enqueue_script('exnova-custom-js',get_stylesheet_directory_uri() .'/js/custom.js');
	wp_dequeue_script('specia-custom-js');
}
add_action( 'wp_enqueue_scripts', 'exnova_css',999);

require( get_stylesheet_directory() . '/inc/customize/exnova-call-action.php');
require( get_stylesheet_directory() . '/inc/customize/exnova-client.php');
require_once( get_stylesheet_directory() . '/inc/customize/exnova-premium.php');

function exnova_remove_parent_setting( $wp_customize ) {
	    $wp_customize->remove_control('cta_bg_head');		
	    $wp_customize->remove_control('call_action_overlay');		
	    $wp_customize->remove_control('call_action_button_label');		
	    $wp_customize->remove_control('call_action_button_link');		
	    $wp_customize->remove_control('call_action_btn_middle_text');		
	    $wp_customize->remove_control('call_action_button_label2');		
	    $wp_customize->remove_control('call_action_button_link2');		
	    $wp_customize->remove_control('call_action_button_target');		
	    $wp_customize->remove_control('call_action_page');		
	    $wp_customize->remove_control('cta_btn_first_head');		
	    $wp_customize->remove_control('cta_btn_second_head');		
	    $wp_customize->remove_control('dribble_link');
	    $wp_customize->remove_control('github_link');
	    $wp_customize->remove_control('bitbucket_link');
	    $wp_customize->remove_control('email_link');
	    $wp_customize->remove_control('skype_link');
	    $wp_customize->remove_control('skype_action_link');
	    $wp_customize->remove_control('vk_link');
	    $wp_customize->remove_control('pinterest_link');
	    $wp_customize->remove_control('call_action_background_setting');
	}
	add_action( 'customize_register', 'exnova_remove_parent_setting',99 );

/**
 * Import Options From Specia Theme
 *
 */
function exnova_parent_theme_options() {
	$specia_mods = get_option( 'theme_mods_specia' );
	if ( ! empty( $specia_mods ) ) {
		foreach ( $specia_mods as $specia_mod_k => $specia_mod_v ) {
			set_theme_mod( $specia_mod_k, $specia_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'exnova_parent_theme_options' );

add_theme_support( "title-tag" );
add_theme_support( 'automatic-feed-links' );