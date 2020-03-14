<?php 
 
add_action('wp_enqueue_scripts', 'index_style_theme');
add_action('wp_footer',          'index_scripts_theme');
add_action('after_setup_theme',  'theme_register_nav_menu' );

function index_style_theme() {
	wp_enqueue_style( 'base', get_template_directory_uri() . '/assets/css/base.css');
	wp_enqueue_style( 'base1', get_template_directory_uri() . '/assets/css/base1.css');
	wp_enqueue_style( 'vendor', get_template_directory_uri() . '/assets/css/vendor.min.css');

}

function index_scripts_theme() {
	wp_enqueue_script('jquery-1.11.3.min.js', get_template_directory_uri() . '/assets/js/jquery-1.11.3.min.js');
	wp_enqueue_script('jquery-migrate-1.2.1.min.js', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js');
	wp_enqueue_script('jquery.flexslider-min.js', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js');
	wp_enqueue_script('jquery.waypoints.min.js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js');
	wp_enqueue_script('jquery.validate.min.js', get_template_directory_uri() . '/assets/js/jquery.validate.min.js');
	wp_enqueue_script('jquery.fittext.js', get_template_directory_uri() . '/assets/js/jquery.fittext.js');
	wp_enqueue_script('jquery.placeholder.min.js', get_template_directory_uri() . '/assets/js/jquery.placeholder.min.js');
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_script('main1', get_template_directory_uri() . '/assets/js/main1.js');
}
function theme_register_nav_menu() {
	register_nav_menu( 'top-right', 'выезжающее меню' );
}
?>