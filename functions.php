<?php
// Remove wersion wp in head
remove_action( 'wp_head', 'wp_generator' );
// remove emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_resource_hints', 2 );
//remove links
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'rel_canonical' );
//rest api
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
//del wp_robots
remove_action( 'wp_head', 'wp_robots', 1 );
//remove br & p tags to post item
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'comment_text', 'wpautop' );
// Add acf option page
add_action( 'acf/init', 'my_acf_op_init' );

function my_acf_op_init() {
acf_add_options_page(
array(
      'page_title' => 'Загальні налаштування теми',
      'menu_title' => 'Theme option',
      'menu_slug' => 'theme_settings',
      'capability' => 'edit_posts',
)
);
}
//Register nav menu
add_action( 'after_setup_theme', 'registerMenu' );

function registerMenu() {
register_nav_menu( 'primary', 'Menu Header' );
}
//Main menu filter
add_filter( 'nav_menu_item_id', '__return_false' );
add_filter( 'nav_menu_css_class', '__return_empty_array' );
add_filter( 'nav_menu_css_class', 'ClassToLI', 10, 4 );

function ClassToLI( $classes, $item, $args, $depth ) {
if ( $args->theme_location == 'primary') {
      $classes [] = 'main__menu--item'; 
}     
return $classes;
}
add_filter( 'nav_menu_link_attributes', 'ClassToLInks', 10, 4 );
function ClassToLInks( $atts, $item, $args, $depth ) {
if ( $args->theme_location == 'primary' ) {
      $class = 'main__menu--link';
      if ( $item->current ) {
      $class = 'main__menu--link active';
      $classes[ 'class' ] = isset( $classes[ 'class' ] ) ? "{$classes['class']} $class" : $class;
      }
      $atts[ 'aria-current' ] = '';
      $atts[ 'class' ] = isset( $atts[ 'class' ] ) ? "{$atts['class']} $class" : $class;
}
return $atts;
}
//Theme Support
add_action( 'after_setup_theme', 'supportSettings' );

function supportSettings() {
      // Add supports	
	add_theme_support( 'html5' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'full-thumbnail', 2000, null, true );
	add_image_size( 'container-thumbnail', 1240, null, true );
	add_image_size( 'half-container-thumbnail', 620, null, true );
}


//Custom logo
add_action( 'after_setup_theme', 'custom__logo' );

function custom__logo() {
add_theme_support( 'custom-logo', [
      'height'      => 100,
      'width'       => 500,
      'flex-width'  => false,
      'flex-height' => false,
      'header-text' => '',
      'unlink-homepage-logo' => false,
] );
}
// Post Type( s )
require_once 'inc/post_type.php';

// Enqueue
require_once 'inc/enqueue.php';

// Functions
require_once 'inc/theme_function.php';
?>