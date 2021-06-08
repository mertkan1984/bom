<?php 
function themeslug_enqueue_style() {
	wp_enqueue_style( 'font-1', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap', false );
	wp_enqueue_style( 'font-2', 'https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100;200;300;400;500;600;700;800;900&family=Grenze:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap', false );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css', false );
    wp_enqueue_style( 'all', get_template_directory_uri() .'/css/all.min.css', false );
    wp_enqueue_style( 'slick', get_template_directory_uri() .'/css/slick.css', false );
    wp_enqueue_style( 'simple-line-icons', get_template_directory_uri() .'/css/simple-line-icons.css', false );
    wp_enqueue_style( 'style', get_template_directory_uri() .'/css/style.css', false );

}
 
function themeslug_enqueue_script() {
    wp_enqueue_script( 'myjquery', get_template_directory_uri() . '/js/jquery.min.js', false );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', false );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', false );
    wp_enqueue_script( 'slick-sidebar', get_template_directory_uri() . '/js/jquery.sticky-sidebar.min.js', false );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', false );
}
 
 add_theme_support( 'post-thumbnails' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_footer', 'themeslug_enqueue_script' );