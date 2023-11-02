<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

add_action( 'wp_enqueue_scripts', 'thepro_child_style' );
function thepro_child_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}




/**
 * Your code goes below.
 */

function custom_homepage_header() {
        get_header();
}
add_action('wp_head', 'custom_homepage_header');
function custom_homepage_footer() {
	get_footer();
}
add_action('wp_head', 'custom_homepage_header');


// register boostrap style sheet in child
add_action('widgets_init', 'register_custom_widget');
function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/styles/bootstrap.css');
}

// register boostrap js sheet in child
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
function enqueue_custom_scripts() {
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/styles/bootstrap.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// register menu in dashboard menu in child
function register_menus() { 
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu'
        )
    ); 
}
add_action( 'init', 'register_menus' );


// register widget in child
function custom_widget_area() {
    register_sidebar(array(
        'name'          => __('Custom Widget Area', 'your-theme-textdomain'),
        'id'            => 'custom-widget-area',
        'description'   => __('Add widgets here to display in your custom widget area.', 'your-theme-textdomain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'custom_widget_area');





?>