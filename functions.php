<?php

/* ==========================================
	Dashboard 
========================================== */


//  Define New Custom Tabs on the sidebar 
if( function_exists('acf_add_options_page') ) {
	// My Account 
	acf_add_options_page(array(
		'page_title' 	=> 'Site Options',
		'menu_title'	=> 'Site Options',
		'menu_slug' 	=> 'site-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}



/* ==========================================
	Front End 
========================================== */
	

// register menus	
function register_my_menus() {
	register_nav_menus(
		array(
			'header' => __('Header'),
			'solutions' => __('Solutions')
		)
	);
}
add_action('init', 'register_my_menus');

// register custom navigation walker
require_once('wp_bootstrap_navwalker.php');
