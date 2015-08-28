<?php

function learningWordPress_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

function WidgetsInit() {
    
	register_sidebar(array (
	     'name' => 'Sidebar',
		    'id' => 'sidebar1'
	));
}

add_action('widgets_init','WidgetsInit');
