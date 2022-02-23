<?php
/**
 * cplparts functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cplparts
 */

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/sample/sample-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxFramework/sample/sample-config.php' );
}


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

// use Carbon_Fields\Container;
// use Carbon_Fields\Field;

// add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
// function crb_attach_theme_options() {
//     Container::make( 'theme_options', __( 'Theme Options' ) )
//         ->add_fields( array(
//             Field::make( 'text', 'crb_text', 'Text Field' ),
//         ) );
// }
?>
<?php
// add_action('carbon_register_fields', 'crb_register_custom_fields');
// function crb_register_custom_fields() {
//     include_once(dirname(__FILE__) . '/post-meta.php');
// }
?>
<?php
 
 require_once (dirname(__FILE__) . '/sample/sample-config.php');
 
?>
<!-- require get_template_directory_uri(__FILE__) . 'post-meta.php' -->
<?php
	//include 'post-meta.php';
?>
<?php

// add_action( 'after_setup_theme', 'crb_load' );
// function crb_load() {
//     require_once( 'vendor/autoload.php' );
//     \Carbon_Fields\Carbon_Fields::boot();
// }

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

// if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/theme_options/ReduxCore/framework.php' ) ) {
//     require_once( dirname( __FILE__ ) . '/theme_options/ReduxCore/framework.php' );
// }
// if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/theme_options/test_theme/config.php' ) ) {
//     require_once( dirname( __FILE__ ) . '/theme_options/test_theme/config.php' );
// }

function cplparts_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on cplparts, use a find and replace
		* to change 'cplparts' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'cplparts', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'cplparts' ),
			'top-menu-start' => esc_html__( 'Top menu start', 'cplparts' ),
			'main-menu' => esc_html__( 'Main menu', 'cplparts' ),
			'footer-first-menu' => esc_html__( 'Footer first menu', 'cplparts' ),
			'footer-second-menu' => esc_html__( 'Footer second menu', 'cplparts' ),
			'product-category-menu' => esc_html__( 'Product category menu', 'cplparts' )
		)
	);

	
	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'cplparts_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'cplparts_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cplparts_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cplparts_content_width', 640 );
}
add_action( 'after_setup_theme', 'cplparts_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cplparts_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cplparts' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cplparts' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cplparts_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cplparts_scripts() {
	/**  fonts */
	wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i', array(), '1.0' );

	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '1.0' );
	
	/** css */
	wp_enqueue_style( 'cplparts-bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.css', array(), '1.0' );
	
	wp_enqueue_style( 'cplparts-owl.carousel', get_template_directory_uri().'/assets/vendor/owl-carousel/assets/owl.carousel.min.css', array(), '1.0' );
	
	wp_enqueue_style( 'cplparts-photoswipe', get_template_directory_uri().'/assets/vendor/photoswipe/photoswipe.css', array(), '1.0' );
	
	wp_enqueue_style( 'cplparts-default-skin', get_template_directory_uri().'/assets/vendor/photoswipe/default-skin/default-skin.css', array(), '1.0' );
	
	wp_enqueue_style( 'cplparts-select2', get_template_directory_uri().'/assets/vendor/select2/css/select2.min.css', array(), '1.0' );
	
	wp_enqueue_style( 'cplparts-style-css', get_template_directory_uri().'/assets/css/style.css', array(), '1.0' );
	
	wp_enqueue_style( 'cplparts-spaceship-variant-one', get_template_directory_uri().'/assets/css/style.header-spaceship-variant-one.css', array(),'1.0' );
	
	wp_enqueue_style( 'cplparts-variant-one', get_template_directory_uri().'/assets/css/style.mobile-header-variant-one.css', array(), '1.0' );

	/** theme stysheet */
	// wp_enqueue_style( 'cplparts-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_style_add_data( 'cplparts-style', 'rtl', 'replace' );

	wp_enqueue_script( 'cplparts-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    
	wp_enqueue_script( 'cplparts-googletagmanager', 'https://www.googletagmanager.com/gtag/js?id=UA-97489509-8', array(), '1.0', false );
    
	/**footer script */
	/**photoswipe / end */
	//wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'cplparts-jquery.min.js', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), '1.0', true );
	
	wp_enqueue_script( 'bootstrap.bundle.min.js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0', true );
	
	wp_enqueue_script( 'cplparts-owl.carousel.min.js', get_template_directory_uri() . '/assets/vendor/owl-carousel/owl.carousel.min.js', array(), '1.0', true );
	
	wp_enqueue_script( 'cplparts-nouislider.min.js', get_template_directory_uri() . '/assets/vendor/nouislider/nouislider.min.js', array(), '1.0', true );
	
	wp_enqueue_script( 'cplparts-photoswipe.min.js', get_template_directory_uri() . '/assets/vendor/photoswipe/photoswipe.min.js', array(), '1.0', true );
	
	wp_enqueue_script( 'cplparts-photoswipe-ui-default.min.js', get_template_directory_uri() . '/assets/vendor/photoswipe/photoswipe-ui-default.min.js', array(), '1.0', true );
	
	wp_enqueue_script( 'cplparts-select2.min.js', get_template_directory_uri() . '/assets/vendor/select2/js/select2.min.js', array(), '1.0', true );
	
	wp_enqueue_script( 'cplparts-number.js', get_template_directory_uri() . '/assets/js/number.js', array(), '1.0', true );

	wp_enqueue_script( 'cplparts-main.js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	
}
add_action( 'wp_enqueue_scripts', 'cplparts_scripts' );

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

