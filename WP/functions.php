<?php

function custome_theme_init (){

	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	register_nav_menu('mainmenu', "Main Manu");
	
	$labels = array(
	    'name' => _x('Member', 'post type general name'),
	    'singular_name' => _x('Member', 'post type singular name'),
	    'add_new' => _x('Add New', 'Member'),
	    'add_new_item' => __('Add New Member'),
	    'edit_item' => __('Edit Member'),
	    'new_item' => __('New Member'),
	    'view_item' => __('View Member'),
	    'search_items' => __('Search Member'),
	    'not_found' =>  __('No Member found'),
	    'not_found_in_trash' => __('No Member found in Trash'),
	    'parent_item_colon' => '',
	    'menu_name' => _x('Member', 'post type general name')
	);

	$args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'query_var' => true,
	    'rewrite' => true,
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => false,
	    'menu_position' => 20,
	    //'menu_icon' => get_bloginfo('template_url') . '/images/menu.png', // 16x16
	    'supports' => array('title','editor','thumbnail','excerpt','custom-fields')
	);

	register_post_type ('Member',$args);
}

add_action('init', 'custome_theme_init');

function add_custom_box() {
  add_meta_box('Roleid', 'role', 'role_box', 'Member','side');

  function role_box() {
  $role = "";
  if ( isset($_REQUEST['post']) ) {
    $postID = (int)$_REQUEST['post'];
    $role = get_post_meta($postID,'role',true);
    $role = $role;
  }

  echo "<label for='role'>نقش کاری شخص: </label>";
  echo "<input id='role' title='role' class='widefat' name='role' size='20' type='text' value='$role'>";
  }
}

function save_meta($postID) {
  if ( is_admin() ) {
    if ( isset($_POST['role']) ) {
      $role = $_POST['role'];
      update_post_meta($postID,'role', $role);
    }
  }
}

add_action('save_post','save_meta');
add_action('add_meta_boxes', 'add_custom_box');