<?php

add_action('init', 'customs_register');
 
function customs_register() {
 
	$labels = array(
		'name' => _x('Customs', 'post type general name'),
		'singular_name' => _x('Custom', 'post type singular name'),
		'add_new' => _x('Add New', 'Customs'),
		'add_new_item' => __('Add New Custom'),
		'edit_item' => __('Edit Custom Item'),
		'new_item' => __('New Custom Item'),
		'view_item' => __('View Custom Item'),
		'search_items' => __('Search Customs'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'supports' => array('title','editor','excerpt')
	  ); 

	register_post_type( 'custom' , $args );
}

?>