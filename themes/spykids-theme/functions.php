<?php

function university_files() {
  wp_enqueue_script('main-spy-kids-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style( 'style-name1', get_stylesheet_uri() . "/style.css" );
  wp_enqueue_style('spy-kids_extra_styles', get_theme_file_uri('/spyKidsCSS/archieve.css'));
  wp_enqueue_style('spy-kids_extra2_styles', get_theme_file_uri('/spyKidsCSS/imported.scss'));
}

add_action('wp_enqueue_scripts', 'university_files');

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


// function redirect_cpt_archive() {
//     if( is_post_type_archive( 'event' ) ) {
//         wp_redirect( home_url( '/events' ), 301 );
//         exit();
//     }
// }
// add_action( 'template_redirect', 'redirect_cpt_archive' );

// Image SIZes
add_image_size('small',200, 200, false);
add_image_size('single',400, 400, false);
