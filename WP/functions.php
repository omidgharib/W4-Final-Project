<?php

function custome_theme_init (){

	add_theme_support('menus');
	register_nav_menu('mainmenu', "Main Manu");
	add_theme_support('post-thumbnails');
}

add_action('init', 'custome_theme_init');