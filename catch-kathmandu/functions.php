<?php
/**
 * Catch Kathmandu Pro functions and definitions
 *
 * @package Catch Themes
 * @subpackage Catch Kathmandu
 * @since Catch Kathmandu 1.0
 */

 
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
 
// Replaces the excerpt "more" text by a link
function new_excerpt_more($post) {
    remove_filter('excerpt_more', 'new_excerpt_more'); 
    return ' <a class="read_more" href="'. get_permalink($post->ID) . '">' . 'read more' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {
	
	register_sidebar( array(
		'name' => 'Home Middle 1',
		'id' => 'home_middle_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	
	register_sidebar( array(
		'name' => 'Home Middle 2',
		'id' => 'home_middle_2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	
	register_sidebar( array(
		'name' => 'Home Middle 3',
		'id' => 'home_middle_3',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	
		register_sidebar( array(
		'name' => 'Home Middle 4',
		'id' => 'home_middle_4',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


add_image_size( 'small-thumb', 276, 179, true );




if ( ! function_exists( 'catchkathmandu_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Catch Kathmandu 1.0
 */
function catchkathmandu_setup() {
	
	global $content_width;
	/**
	 * Global content width.
	 */
	 if (!isset($content_width))
     	$content_width = 650;
				
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Catch Kathmandu, use a find and replace
	 * to change 'catchkathmandu' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'catchkathmandu', get_template_directory() . '/languages' );	
	
	/**
	 * Add callback for custom TinyMCE editor stylesheets. (editor-style.css)
	 * @see http://codex.wordpress.org/Function_Reference/add_editor_style
	 */
	add_editor_style();	
	
	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );
	
	/**
	 * Theme Options Defaults
	 */	
	require( get_template_directory() . '/inc/panel/catchkathmandu-theme-options-defaults.php' );	

	/**
	 * Custom Theme Options
	 */
	require( get_template_directory() . '/inc/panel/theme-options.php' );	
	
	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/catchkathmandu-functions.php' );	
	
	/**
	 * Metabox
	 */
	require( get_template_directory() . '/inc/catchkathmandu-metabox.php' );

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Register Sidebar and Widget.
	 */
	require( get_template_directory() . '/inc/catchkathmandu-widgets.php' );		
	
	/*
	 * This theme supports custom background color and image, and here
	 * 
	 */	
	if ( function_exists( 'get_custom_header') ) {
		//add_theme_support( 'custom-background' );
		add_theme_support( 'custom-background', array( 'wp-head-callback' => 'catchkathmandu_background_callback' ) );
	} 

	/**
     * This feature enables custom-menus support for a theme.
     * @see http://codex.wordpress.org/Function_Reference/register_nav_menus
     */		
	register_nav_menus(array(
		'primary' 	=> __( 'Primary Menu', 'catchkathmandu' ),
	   	'secondary'	=> __( 'Secondary Menu', 'catchkathmandu' )
	) );
	
	/**
	 * Custom Menus Functions.
	 */
	require( get_template_directory() . '/inc/catchkathmandu-menus.php' );	

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio' ) );
	
	/**
     * This feature enables Jetpack plugin Infinite Scroll
     */		
    add_theme_support( 'infinite-scroll', array(
		'type'           => 'click',										
        'container'      => 'content',
        'footer_widgets' => array( 'sidebar-2', 'sidebar-3', 'sidebar-4' ),
        'footer'         => 'page'
    ) );
	
	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'slider', 1280, 550, true); //Featured Post Slider Image
	add_image_size( 'featured', 276, 179, true); //Featured Image - defaults 750px x499px
	add_image_size( 'small-featured', 360, 240, true); //Small Featured Image		

}
endif; // catchkathmandu_setup
add_action( 'after_setup_theme', 'catchkathmandu_setup' );


/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );

if ( ! function_exists( 'catchkathmandu_background_callback' ) ) :
/**
 * Template for Custom Background
 *
 * To override this in a child theme
 * simply create your own catchkathmandu_background_callback(), and that function will be used instead.
 */
function catchkathmandu_background_callback() {

	/* Get the background image. */
	$image = get_background_image();

	/* If there's an image, just call the normal WordPress callback. We won't do anything here. */
	if ( !empty( $image ) ) {
		_custom_background_cb();
		return;
	}

	/* Get the background color. */
	$color = get_background_color();

	/* If no background color, return. */
	if ( empty( $color ) )
		return;

	/* Use 'background' instead of 'background-color'. */
	$style = "background: #{$color};";

?>
<style type="text/css">body { <?php echo trim( $style ); ?> }</style>
<?php
} 	
endif; // catchkathmandu_background_callback


/**
 * Adds support for WooCommerce Plugin
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	
	/**
	 * Add Suport for WooCommerce Plugin
	 */
	add_theme_support( 'woocommerce' );	

}