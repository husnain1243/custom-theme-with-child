<?php
// Enqueue styles and scripts
function theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Add support for post thumbnails (featured images)
add_theme_support('post-thumbnails');

// Register a custom navigation menu
function register_custom_menu() {
    register_nav_menu('custom-menu', __('Custom Menu'));
}
add_action('init', 'register_custom_menu');

// Add widget areas (sidebars)
function theme_widgets_init() {
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'your-theme-text-domain'),
        'id' => 'primary-sidebar',
        'description' => __('This is the primary sidebar.', 'your-theme-text-domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'theme_widgets_init');

// Add custom excerpt length
function custom_excerpt_length($length) {
    return 20; // Change the number to your desired excerpt length.
}
add_filter('excerpt_length', 'custom_excerpt_length');

// Include a custom template for post types
function include_custom_template($template) {
    if (is_singular('your_post_type')) {
        $template = get_template_directory() . '/single-your_post_type.php';
    }
    return $template;
}
add_filter('template_include', 'include_custom_template');

// Add custom post type
function create_custom_post_type() {
    register_post_type('your_post_type', array(
        'labels' => array(
            'name' => __('Custom Post Type'),
            'singular_name' => __('Custom Post'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    ));
}
add_action('init', 'create_custom_post_type');

// Your additional custom functions can go here.

// Define a custom widget
class Custom_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'custom_widget',
            'Custom Widget',
            array(
                'description' => 'A custom widget for your theme.'
            )
        );
    }

    public function widget($args, $instance) {
        // Output the widget content
        echo $args['before_widget'];
        echo '<h4>Custom Widget</h4>';
        echo '<p>This is your custom widget content.</p>';
        echo $args['after_widget'];
    }

    public function form($instance) {
        // Output the widget form fields for customization (optional)
    }

    public function update($new_instance, $old_instance) {
        // Save the widget settings (optional)
    }
}

// Register the custom widget
function register_custom_widget() {
    register_widget('Custom_Widget');
}

?>


