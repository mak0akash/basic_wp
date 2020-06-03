<?php 


function dedom_setup() {
 
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu',      'dedom' )
    ) );
 
}
add_action( 'after_setup_theme', 'dedom_setup' );


/*Sidebar*/
function right_sidebar_register() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'Dedom' ),
        'id' => 'right_sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'Dedom' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-3 border">',
        'after_widget'  => '</div>',

        'container_class' => 'test',
        'before_title'  => '<p class="widgettitle bg-info text-center p-2"><strong>',
        'after_title'   => '</strong></p>',
    ) );
}

add_action( 'widgets_init', 'right_sidebar_register' );

/*Sidebar*/


/**
 * Enqueue scripts and styles. 
 */
function ittrace_style() {
	

	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/resources/css/bootstrap.min.css');
	wp_enqueue_style( 'dedom-style', get_template_directory_uri() . '/resources/css/style.css' );
    
    wp_enqueue_script('jquery', '/resources/js/jqeury.js');
    wp_enqueue_script('proper', '/resources/js/proper.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/resources/js/bootstrap.min.js');

}
add_action( 'wp_enqueue_scripts', 'ittrace_style' );

/**
 * Register Theme Menus.
 */




require get_template_directory().'/inc/customizer.php';
require get_template_directory().'/inc/nav.php';