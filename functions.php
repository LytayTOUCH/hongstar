<?php
require_once('libs/wp_bootstrap_navwalker.php');
//Load default style and script of theme
function load_main_script()  
{ 
	wp_enqueue_style( 'default_style', get_stylesheet_uri());
	//Load custom javascript at the bottom of the body tag
	wp_enqueue_script('boostrap-script',get_stylesheet_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script('hongstar_script-script',get_stylesheet_directory_uri().'/js/hongstar_script.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'load_main_script');

// hide the meta tag generator from head and rss
function remove_wp_version_tag() {
	return null;
}
add_filter( 'the_generator', 'remove_wp_version_tag' );
//Remove version of styl link and script link
function remove_wp_version_strings( $src ) {
	global $wp_version;
		parse_str(parse_url($src, PHP_URL_QUERY), $query);
	if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter( 'script_loader_src', 'remove_wp_version_strings' );
add_filter( 'style_loader_src', 'remove_wp_version_strings' );


// function register_my_menu() {
//   register_nav_menu('header-menu',__( 'Header Menu' ));
// }
// add_action( 'init', 'register_my_menu' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );