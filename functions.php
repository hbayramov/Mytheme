<?php

function learningWordPress_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

function WidgetsInit() {
    
	register_sidebar(array (
	     'name' => 'Sidebar1',
		    'id' => 'sidebar1'
	));
  register_sidebar(array (
	     'name' => 'Sidebar2',
		    'id' => 'sidebar2'
	));
   register_sidebar(array (
	     'name' => 'Sidebar3',
		    'id' => 'sidebar3'
	));
}

add_action('widgets_init','WidgetsInit'); ?>

