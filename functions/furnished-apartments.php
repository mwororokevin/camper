<?php

add_action( 'init', 'furnished_apartments_register' );
function furnished_apartments_register() {
  $labels = array(
    'name' 					=> _x('Furnished Apartments', 'post type general name'),
    'singular_name' 		=> _x('Furnished Apartment', 'post type singular name'),
    'add_new' 				=> _x('Add New', 'Furnished Apartment'),
    'add_new_item' 			=> __('Add New Furnished Apartment'),
    'edit_item' 			=> __('Edit Furnished Apartment'),
    'new_item' 				=> __('New Furnished Apartment'),
    'all_items' 			=> __('All Furnished Apartments'),
    'view_item' 			=> __('View Furnished Apartments'),
    'search_items' 			=> __('Search Furnished Apartments'),
    'not_found' 			=>  __('No Furnished Apartments found'),
    'not_found_in_trash' 	=> __('No Furnished Apartments found in Trash'), 
    'parent_item_colon' 	=> '',
    'menu_name' 			=> 'Furnished Apartments'
 
  );
  $args = array(
    'labels' 				=> $labels,
    'public' 				=> true,
    'publicly_queryable' 	=> true,
    'show_ui' 				=> true, 
    'show_in_menu' 			=> true, 
    'query_var' 			=> true,
    'rewrite' 				=> true,
    'capability_type' 		=> 'post',
    'hierarchical' 			=> false,
    'supports' 				=> array( 'title', 'editor', 'thumbnail', 'page-attributes' )
  ); 
  register_post_type('furnished-apartments',$args);
}

?>