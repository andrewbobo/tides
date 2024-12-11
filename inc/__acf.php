<?php

// Create Theme Options Page
if(function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'SecretTidesLuxury Settings',
		'menu_title'	=> 'SecretTidesLuxury Settings',
		'menu_slug' 	=> 'SecretTidesLuxury-general-settings',
    'position'    => 2,
		'capability'	=> 'edit_posts',
		'icon_url' => 'dashicons-admin-generic',
		'redirect'		=> false
	));
}
