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


function create_villa_post_type() {
    $labels = array(
        'name'                  => _x('Villas', 'Post Type General Name', 'textdomain'),
        'singular_name'         => _x('Villa', 'Post Type Singular Name', 'textdomain'),
        'menu_name'             => __('Villas', 'textdomain'),
        'name_admin_bar'        => __('Villa', 'textdomain'),
        'archives'              => __('Villa Archives', 'textdomain'),
        'attributes'            => __('Villa Attributes', 'textdomain'),
        'parent_item_colon'     => __('Parent Villa:', 'textdomain'),
        'all_items'             => __('All Villas', 'textdomain'),
        'add_new_item'          => __('Add New Villa', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'new_item'              => __('New Villa', 'textdomain'),
        'edit_item'             => __('Edit Villa', 'textdomain'),
        'update_item'           => __('Update Villa', 'textdomain'),
        'view_item'             => __('View Villa', 'textdomain'),
        'view_items'            => __('View Villas', 'textdomain'),
        'search_items'          => __('Search Villa', 'textdomain'),
        'not_found'             => __('Not found', 'textdomain'),
        'not_found_in_trash'    => __('Not found in Trash', 'textdomain'),
        'featured_image'        => __('Featured Image', 'textdomain'),
        'set_featured_image'    => __('Set featured image', 'textdomain'),
        'remove_featured_image' => __('Remove featured image', 'textdomain'),
        'use_featured_image'    => __('Use as featured image', 'textdomain'),
        'insert_into_item'      => __('Insert into villa', 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this villa', 'textdomain'),
        'items_list'            => __('Villas list', 'textdomain'),
        'items_list_navigation' => __('Villas list navigation', 'textdomain'),
        'filter_items_list'     => __('Filter villas list', 'textdomain'),
    );

    $args = array(
        'label'                 => __('Villa', 'textdomain'),
        'description'           => __('Custom post type for Villas', 'textdomain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt', 'revisions'),
        'taxonomies'            => array('category'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-home',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type('villa', $args);
}
add_action('init', 'create_villa_post_type');


function create_review_post_type() {
    $labels = array(
        'name'               => 'Reviews',
        'singular_name'      => 'Review',
        'menu_name'          => 'Reviews',
        'name_admin_bar'     => 'Review',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Review',
        'new_item'           => 'New Review',
        'edit_item'          => 'Edit Review',
        'view_item'          => 'View Review',
        'all_items'          => 'All Reviews',
        'search_items'       => 'Search Reviews',
        'not_found'          => 'No reviews found.',
        'not_found_in_trash' => 'No reviews found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'reviews' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-star-filled',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'show_in_rest'       => true, 
    );

    register_post_type( 'review', $args );
}
add_action( 'init', 'create_review_post_type' );
