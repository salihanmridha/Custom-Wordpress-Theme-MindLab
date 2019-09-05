<?php

function register_my_menus() { register_nav_menus( array( 'primary-menu' => __( 'mainmenu' ), 'aboutus' => __( 'Aboutus' ), 'menu_class' => 'dropdown', ) ); } add_action( 'init', 'register_my_menus' );

if ( function_exists('register_sidebar') ) register_sidebar(array('name'=>'Right sidebar', 'before_widget' => '<div id="rightcolumn"><ul class="blog-entries">
<li class="bd">', 'after_widget' => '</li></ul></div>', 'before_title' => '<h3>', 'after_title' => '</h3>', )); 


require_once ( get_template_directory() . '/theme-options.php' );


/***********************************************************************
// if you want to excerpt the post on home page , so please use this function 

function new_excerpt_more( $more ) {
	return '<a href="'. get_permalink($post->ID) . '"><br><b>Read the Rest...</b></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) { if (get_option('p2h_post_excerpt'))
	return get_option('p2h_post_excerpt'); else {return 12;}
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
************************************************************************/

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(150, 150);
?>
