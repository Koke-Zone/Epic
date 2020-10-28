<?php
// Register Custom Post Type service
// Register Custom Post Type service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'services', 'Post Type General Name', 'wpepic' ),
		'singular_name' => _x( 'service', 'Post Type Singular Name', 'wpepic' ),
		'menu_name' => _x( 'services', 'Admin Menu text', 'wpepic' ),
		'name_admin_bar' => _x( 'service', 'Add New on Toolbar', 'wpepic' ),
		'archives' => __( 'service Archives', 'wpepic' ),
		'attributes' => __( 'service Attributes', 'wpepic' ),
		'parent_item_colon' => __( 'Parent service:', 'wpepic' ),
		'all_items' => __( 'All services', 'wpepic' ),
		'add_new_item' => __( 'Add New service', 'wpepic' ),
		'add_new' => __( 'Add New', 'wpepic' ),
		'new_item' => __( 'New service', 'wpepic' ),
		'edit_item' => __( 'Edit service', 'wpepic' ),
		'update_item' => __( 'Update service', 'wpepic' ),
		'view_item' => __( 'View service', 'wpepic' ),
		'view_items' => __( 'View services', 'wpepic' ),
		'search_items' => __( 'Search service', 'wpepic' ),
		'not_found' => __( 'Not found', 'wpepic' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpepic' ),
		'featured_image' => __( 'Featured Image', 'wpepic' ),
		'set_featured_image' => __( 'Set featured image', 'wpepic' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpepic' ),
		'use_featured_image' => __( 'Use as featured image', 'wpepic' ),
		'insert_into_item' => __( 'Insert into service', 'wpepic' ),
		'uploaded_to_this_item' => __( 'Uploaded to this service', 'wpepic' ),
		'items_list' => __( 'services list', 'wpepic' ),
		'items_list_navigation' => __( 'services list navigation', 'wpepic' ),
		'filter_items_list' => __( 'Filter services list', 'wpepic' ),
	);
	$rewrite = array(
		'slug' => '',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'service', 'wpepic' ),
		'description' => __( 'This is custom post of type service', 'wpepic' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-list-view',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats'),
		'taxonomies' => array( 'category','post_tag' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'service', $args );
}
add_action( 'init', 'create_service_cpt', 0 );
?>