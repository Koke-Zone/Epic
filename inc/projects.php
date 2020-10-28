<?php
// Register Custom Post Type Project
function create_project_cpt() {

	$labels = array(
		'name' => _x( 'Projects', 'Post Type General Name', 'wpepic' ),
		'singular_name' => _x( 'Project', 'Post Type Singular Name', 'wpepic' ),
		'menu_name' => _x( 'Projects', 'Admin Menu text', 'wpepic' ),
		'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', 'wpepic' ),
		'archives' => __( 'Project Archives', 'wpepic' ),
		'attributes' => __( 'Project Attributes', 'wpepic' ),
		'parent_item_colon' => __( 'Parent Project:', 'wpepic' ),
		'all_items' => __( 'All Projects', 'wpepic' ),
		'add_new_item' => __( 'Add New Project', 'wpepic' ),
		'add_new' => __( 'Add New', 'wpepic' ),
		'new_item' => __( 'New Project', 'wpepic' ),
		'edit_item' => __( 'Edit Project', 'wpepic' ),
		'update_item' => __( 'Update Project', 'wpepic' ),
		'view_item' => __( 'View Project', 'wpepic' ),
		'view_items' => __( 'View Projects', 'wpepic' ),
		'search_items' => __( 'Search Project', 'wpepic' ),
		'not_found' => __( 'Not found', 'wpepic' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpepic' ),
		'featured_image' => __( 'Featured Image', 'wpepic' ),
		'set_featured_image' => __( 'Set featured image', 'wpepic' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpepic' ),
		'use_featured_image' => __( 'Use as featured image', 'wpepic' ),
		'insert_into_item' => __( 'Insert into Project', 'wpepic' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'wpepic' ),
		'items_list' => __( 'Projects list', 'wpepic' ),
		'items_list_navigation' => __( 'Projects list navigation', 'wpepic' ),
		'filter_items_list' => __( 'Filter Projects list', 'wpepic' ),
	);
	$args = array(
		'label' => __( 'Project', 'wpepic' ),
		'description' => __( 'this is my projects', 'wpepic' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-multisite',
		'supports' => array('title', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'create_project_cpt', 0 );
?>