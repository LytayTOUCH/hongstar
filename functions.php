<?php

add_theme_support('post-thumbnails', array('page'));

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

$args = array(
	'flex-width'    => true,
	'width'         => 225,
	'flex-height'    => true,
	'height'        => 180,
	'default-image' => get_template_directory_uri()
);
add_theme_support( 'custom-header', $args );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
	// $menu=explode(" ", $item->title);
	// print_r($menu);
	// echo "<br/>";
	// echo count($menu);
	// echo $item->title."<br/>";
     if($item->title == "In-Bound Tours"){ //Notice you can change the conditional from is_single() and $item->title
             $classes[] = join("-",explode(" ",$item->title));
     }
     return $classes;
}


function hongstar_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Banner Header', 'hongstar' ),
		'id' => 'sidebar-1',
		'description' => __( 'This Widget is use to show the banner of the website', 'hongstar' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => __( 'Visitor Counter', 'hongstar' ),
		'id' => 'sidebar-2',
		'description' => __( 'Widget to show the visitor counter', 'hongstar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s box box-green">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title panel-heading">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => __( 'Second Front Page Widget Area', 'hongstar' ),
		'id' => 'sidebar-3',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'hongstar' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => __( 'Airline Slide Image', 'hongstar' ),
		'id' => 'sidebar-4',
		'description' => __( 'Show the slide show image of ariline', 'hongstar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s box box-yellow">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title panel-heading">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => __( 'Address Box', 'hongstar' ),
		'id' => 'sidebar-5',
		'description' => __( 'Show the slide show image of ariline', 'hongstar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s box box-red">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title panel-heading">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => __( 'Facebook Like Page', 'hongstar' ),
		'id' => 'sidebar-6',
		'description' => __( 'Show the slide show image of ariline', 'hongstar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s box box-blue">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title panel-heading">',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'hongstar_widgets_init' );
