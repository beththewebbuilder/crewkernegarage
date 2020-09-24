<?php

// Add scripts and stylesheets
function crewkerne_services_styles_scripts() {
  //register jquery, bootstrap and font-awesome
  wp_enqueue_script('jquery');
  wp_register_script( 'jScript', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js' );
	wp_register_script('moment-js', get_template_directory_uri() . '/js/moment.js', array('jquery'), '', true);
  wp_register_script('font-awesome', ("https://use.fontawesome.com/releases/v5.0.8/js/all.js"));

	//leaflet js
	wp_register_style('leafletcss', 'https://unpkg.com/leaflet@1.3.3/dist/leaflet.css', '', '', 'screen');
	wp_register_script('leafletjs', ("https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"));

  //enque jquery, bootstrap and font-awesome
  wp_enqueue_script( 'jScript' );
  wp_enqueue_script('font-awesome');
	wp_enqueue_style('leafletcss');
	wp_enqueue_script('leafletjs');

  //enqueue stylesheets
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  //register and enqueue scripts
  wp_register_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'),'',true);
  wp_enqueue_script('script');
}
add_action( 'wp_enqueue_scripts', 'crewkerne_services_styles_scripts' );

function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

//google fonts
function crewkerne_services_google_fonts() {
	wp_register_style('Raleway', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,700;1,500&display=swap');
  wp_enqueue_style('Raleway');

}
add_action('wp_print_styles', 'crewkerne_services_google_fonts');

// Add thumbnails
add_theme_support('post-thumbnails');

//WordPress Titles
add_theme_support('title-tag');

//navigation menus
register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu'),
));

add_action('wp_ajax_nopriv_bt_scf', 'bt_scf');
add_action('wp_ajax_save_bt_scf', 'bt_scf');


 ?>
