<?php
/**
 * theme widgets and widget areas
 */
add_action ( 'widgets_init', 'cft_register_sidebar' );
function cft_register_sidebar( $sidebar_name = array() ) {
	foreach ( $sidebar_name as $name ) {
		/**
		 * sidebar name, make the words uppercase
		 * @var string 	: each name of the sidebar in the array
		 */
		$name = ucwords( $name );
		/**
		 * id of the sidebar, spaces are converted to "-"
		 * @var string 	: each name of the sidebar is converted to id with "-"
		 */
		$id = strtolower( str_replace( ' ', '-', $name ) );
		/**
		 * args to register a sidebar
		 * @var array 	: list of arguments to register a sidebar
		 * name 		: name of the sidebar
		 * id 			: id of the sidebar
		 * before_widget 	: html before widget area
		 * after_widget  	: html after widget area
		 * before_title	: html before widget title
		 * after_title	: html after widget title
		 * 
		 */
		$args = array(
			'name'          => $name,
			'id'            => $id,
			'before_widget' => '<div id="%1" class="widget %2">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		);
		register_sidebar( $args );
	}
}

/**
 * list of sidebars to be generated
 * @var array 	: array of sidebars
 */
$sidebars = array( 
	'footer one sidebar',
	'footer two sidebar',
	'footer three sidebar',
	'footer four sidebar',
	'events search widget'
);
cft_register_sidebar( $sidebars );