<?php
/*
 * Register our sidebars and widgetized areas.
 */
function acha_sidebar1() {

	register_sidebar( array(
		'name' => 'Right Sidebar One',
		'id' => 'sidebar-1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'acha_sidebar1' );

function acha_sidebar2() {

	register_sidebar( array(
		'name' => 'Right Sidebar Two',
		'id' => 'sidebar-2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'acha_sidebar2' );

function acha_sidebar3() {

	register_sidebar( array(
		'name' => 'Right Sidebar Three',
		'id' => 'sidebar-3',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'acha_sidebar3' );

function acha_sidebar4() {

	$before_widget='<div><input type="text">';
	register_sidebar( array(
		'name' => 'Right Sidebar Four',
		'id' => 'sidebar-4',
		'before_widget' => ''.$before_widget.'',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	
	
}
add_action( 'widgets_init', 'acha_sidebar4' );

function acha_woocommerce() {

	register_sidebar( array(
		'name' => 'Woo Commerce',
		'id' => 'woo',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'acha_woocommerce' );

?>
