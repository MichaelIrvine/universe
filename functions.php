<?php
/**
 * Universe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Universe
 */

if ( ! function_exists( 'universe_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function universe_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Universe, use a find and replace
		 * to change 'universe' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'universe', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'universe' ),
			'missing-links' => esc_html__( 'Missing Links', 'universe' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'universe_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'universe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function universe_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'universe_content_width', 640 );
}
add_action( 'after_setup_theme', 'universe_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function universe_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'universe' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'universe' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'universe' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'universe' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'universe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function universe_scripts() {
	wp_enqueue_style( 'universe-style', get_stylesheet_uri() );

	wp_enqueue_script( 'universe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'universe-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	// Google Font for Temporary Coming Soon Page
	wp_enqueue_style('universe-googlefonts', "https://fonts.googleapis.com/css?family=Roboto");
	// Jquery Enqueue
	wp_enqueue_script('jquery');
	// Waypoint Enqueue
	// wp_enqueue_script( 'waypoints', get_stylesheet_directory_uri() . '/js/waypoints/lib/jquery.waypoints.min.js', array( 'jquery' ), '1.0', false );
	// Main JS Enqueue
	wp_enqueue_script( 'universe_script', get_stylesheet_directory_uri() . '/js/universe-script.js', array('jquery'), '1.1', false );
	// Scroll to top JS
	wp_enqueue_script( 'scroll_up', get_stylesheet_directory_uri() . '/js/scroll-top.js', array('jquery'), '1.1', false );
	// Missing Links - Jump to ID
	wp_enqueue_script( 'jump_link', get_stylesheet_directory_uri() . '/js/jump-link.js', array('jquery'), '1.1', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'universe_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


/** 
 * Font Awesome
*/
function loadFontAwesome() {

    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.0.13/css/all.css' );

}

add_action( 'wp_enqueue_scripts', 'loadFontAwesome' );

/**
 * SVG Support
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Footer Details - Copyright & Dev Info
 */
if( function_exists('acf_add_options_page') ) {
    $args = array(
          'page_title' => 'Footer',
		  'menu_title' => 'Footer',
		  'menu_slug'  => 'footer',
          'icon_url' => 'dashicons-edit'
          //other args
      );
    acf_add_options_page($args);

}

/**
 * Mobile Logo
 */
if( function_exists('acf_add_options_page') ) {
    $args = array(
          'page_title' => 'Mobile Logo',
		  'menu_title' => 'Mobile Logo',
		  'menu_slug'  => 'mobile_logo',
          'icon_url' => 'dashicons-format-image'
          //other args
      );
    acf_add_options_page($args);

}
