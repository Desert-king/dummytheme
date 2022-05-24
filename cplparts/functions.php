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


if ( class_exists('Redux')) {
	require_once (dirname(__FILE__) . '/sample/sample-config.php');
	require_once (dirname(__FILE__) . '/sample/cpl-contact-settings.php');
	require_once (dirname(__FILE__) . '/sample/cpl-about-settings.php');
   //  require_once (dirname(__FILE__) . '/sample/cpl-about-page-team-settings.php');
   //  require_once (dirname(__FILE__) . '/sample/cpl-about-page-testimonials-settings.php');
   //  require_once (dirname(__FILE__) . '/sample/cpl-about-page-counter-settings.php');
	require_once (dirname(__FILE__) . '/sample/cpl-faq-settings.php');
   //  require_once (dirname(__FILE__) . '/sample/cpl-faq-first-section-settings.php');
   //  require_once (dirname(__FILE__) . '/sample/cpl-faq-second-section-settings.php');
   //  require_once (dirname(__FILE__) . '/sample/cpl-faq-third-section-settings.php');
	require_once (dirname(__FILE__) . '/sample/cpl-terms-&-conditions-settings.php');
	require_once (dirname(__FILE__) . '/sample/cpl-404-settings.php');
	require_once (dirname(__FILE__) . '/sample/cpl-product-brands-settings.php');
}


 require_once (get_template_directory() . '/inc/tgmpa.php');

 /**
 * Load Custom Comments Layout file.
 */
require get_template_directory() . '/inc/comment-helper.php';


 
 


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

	// add_action('woocommerce_before_main_content', 'remove_sidebar' );
    // function remove_sidebar()
    // {
    //     if( is_checkout() || is_cart()) { 
    //      remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    //    }
    // }

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
			'product-category-menu' => esc_html__( 'Product category menu', 'cplparts' ),
			'category-of-Products' => esc_html__( 'Categories', 'cplparts' )
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
// function cplparts_widgets_init() {
// 	
// }
// add_action( 'widgets_init', 'cplparts_widgets_init' );



add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary-new',
            'name'          => __( 'Primary Sidebar updated' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

// function cplparts_sidebar_registration() {

// 	// Arguments used in all register_sidebar() calls.
// 	$shared_args = array(
// 		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
// 		'after_title'   => '</h2>',
// 		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
// 		'after_widget'  => '</div></div>',
// 	);

// 	// Footer #1.


// 	// Footer #2.


// }

// add_action( 'widgets_init', 'cplparts_sidebar_registration' );

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

// add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
// function woocommerce_custom_product_add_to_cart_text() {
//  return __( "<img src= \"".get_template_directory_uri() . "/assets/images/cart/my_cart.png\">" , 'woocommerce' );
	
// }

// add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
// function woocommerce_custom_product_add_to_cart_text() {
// 	echo 'buy';  
	
// }

// add_action( 'woocommerce_after_add_to_cart_button', 'add_content_after_addtocart_button_func' );

// function add_content_after_addtocart_button_func() {
//     echo '<img src="'.get_template_directory_uri().'/assets/images/cart/commerce-and-shopping.png">';   
	//echo 'buy';   
// }

function remove_button_loop(){
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	}
	add_action('init','remove_button_loop');
	function add_to_cart_replace() {
		global $product;
		$link = $product->get_permalink();
		echo do_shortcode('<svg width="20" height="20">
												<circle cx="7" cy="17" r="2" />
												<circle cx="15" cy="17" r="2" />
												<path
													d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z"
												/>
											</svg>');
	}
	add_action('woocommerce_after_shop_loop_item','add_to_cart_replace');	

	
// add_filter( 'woocommerce_loop_add_to_cart_link', 'filter_loop_add_to_cart_link', 20, 3 );
// function filter_loop_add_to_cart_link( $button, $product, $args = array() ) {
//     if( $product->is_in_stock() ) return $button;

//     // HERE set your button text (when product is not on stock)
//     $button_text = __('Not available', 'woocommerce');

//     // HERE set your button STYLING (when product is not on stock)
//     $color = "#555";      // Button text color
//     $background = "#aaa"; // Button background color

//     // HERE set your fontawesome icon code and size
//     $icon = 'fa-ban';
//     $size = 'fa-lg'; // large - To disable size use an empty value like $size = '';

//     // Changing and disbling the button when products are not in stock
//     $style = 'color:'.$color.';background-color:'.$background.';cursor:not-allowed;';
//     return sprintf( '<svg width="20" height="20">
// 													<circle cx="7" cy="17" r="2" />
// 	 												<circle cx="15" cy="17" r="2" />
// 	 												<path
// 	 													d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
// 	 V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
// 	 C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z"
// 	 												/>
// 	 											</svg>', $style, $icon, $size, $button_text );
// }

add_filter( 'woocommerce_output_related_products_args', 'bbloomer_change_number_related_products', 9999 );
 
function bbloomer_change_number_related_products( $args ) {
 $args['posts_per_page'] = 6; // # of related products
 $args['columns'] = 4; // # of columns per row
 return $args;
}

//for custom post type

function custom_post_type() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'News', 'Post Type General Name', 'twentytwentyone' ),
			'singular_name'       => _x( 'Single News', 'Post Type Singular Name', 'twentytwentyone' ),
			'menu_name'           => __( 'News', 'twentytwentyone' ),
			'parent_item_colon'   => __( 'Parent Single News', 'twentytwentyone' ),
			'all_items'           => __( 'All News', 'twentytwentyone' ),
			'view_item'           => __( 'View Single News', 'twentytwentyone' ),
			'add_new_item'        => __( 'Add New Single News', 'twentytwentyone' ),
			'add_new'             => __( 'Add New', 'twentytwentyone' ),
			'edit_item'           => __( 'Edit Single News', 'twentytwentyone' ),
			'update_item'         => __( 'Update Single News', 'twentytwentyone' ),
			'search_items'        => __( 'Search Single News', 'twentytwentyone' ),
			'not_found'           => __( 'Not Found', 'twentytwentyone' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
		);
		  
	// Set other options for Custom Post Type
		  
		$args = array(
			'label'               => __( 'news', 'twentytwentyone' ),
			'description'         => __( 'Single News news and reviews', 'twentytwentyone' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array( 'genres', 'category' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type( 'news', $args );
	  
	}
	  
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	  
	add_action( 'init', 'custom_post_type', 0 );

//redux metabox
	
// Change this variable to the opt_name of YOUR project.
// $opt_name = '$opt_name';

// Standard metabox.
if ( class_exists('Redux')) {
Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'cpl-metaboxes-new',
		'title'      => esc_html__( 'Metabox Options', 'your-textdomain-here' ),
		'post_types' => array( 'product' ),
		'position'   => 'normal', // normal, advanced, side.
		'priority'   => 'high',   // high, core, default, low.
		'sections'   => array(
			array(
				'title'  => esc_html__( 'Product General Specification', 'your-textdomain-here' ),
				'id'     => 'cpl-basic-fields',
				'icon'   => 'el-icon-cogs',
				'fields' => array(
					array(
						'id'             => 'cpl-general-text',
						'type'           => 'repeater',
						'title'          => esc_html__( 'Product General Specification', 'your-textdomain-here' ),
						'subtitle'       => esc_html__( 'Enter some title and value of general speification', 'your-textdomain-here' ),
						'placeholder'    => esc_html__( 'General', 'your-textdomain-here' ),
						'bind_title'     => 'false',
						'fields'         => array(
							
							array(
								'id'          => 'cpl-general-title',
								'type'        => 'text',
								'title'       => esc_html__('General Title', 'your-textdomain-here'), 
								'placeholder' => esc_html__( 'Add your general title here', 'your-textdomain-here' ),
							),
							array(
								'id' => 'cpl-general-value',
								'type'        => 'text',
								'title'    => esc_html__('General Value', 'your-textdomain-here'),
								'placeholder'    => esc_html__('Add your general value here', 'your-textdomain-here'),
							),
						)
					),
				),
			),
			array(
				'title'      => esc_html__( 'Specification of Dimensions', 'your-textdomain-here' ),
				'type'  => 'text',
				'icon'       => 'el-icon-cog',
				'id'         => 'cpl-text-fields',
				'subsection' => true,
				'fields'     => array(
					array(
						'id'             => 'cpl-dimension-text',
						'type'           => 'repeater',
						'title'          => esc_html__( 'Product Dimensions Specification', 'your-textdomain-here' ),
						'subtitle'       => esc_html__( 'Enter some title and value of dimentions speification', 'your-textdomain-here' ),
						'placeholder'    => esc_html__( 'Dimentions', 'your-textdomain-here' ),
						'bind_title'     => 'false',
						'fields'         => array(
							
							array(
								'id'          => 'cpl-dimension-title',
								'type'        => 'text',
								'title'       => esc_html__('Dimensions Title', 'your-textdomain-here'), 
								'placeholder' => esc_html__( 'Add your dimentions title here', 'your-textdomain-here' ),
							),
							array(
								'id' => 'cpl-dimension-value',
								'type'        => 'text',
								'title'    => esc_html__('Dimensions Value', 'your-textdomain-here'),
								'placeholder'    => esc_html__('Add your dimentions value here', 'your-textdomain-here'),
							),
						)
					),
				),
				
			),
			
		),
	)
);
}

//for rating on shop page
// add_action('woocommerce_after_shop_loop_item', 'add_star_rating' );
// function add_star_rating()
// {
// global $woocommerce, $product;
// $average = $product->get_average_rating();

// echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
// }




/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	
	<a href="<?php echo esc_url( home_url( '/cart' ) ); ?>" class="indicator__button cart-customlocation">
		<span class="indicator__icon">
			<svg width="32" height="32">
				<circle cx="10.5" cy="27.5" r="2.5" />
				<circle cx="23.5" cy="27.5" r="2.5" />
				<path
					d="M26.4,21H11.2C10,21,9,20.2,8.8,19.1L5.4,4.8C5.3,4.3,4.9,4,4.4,4H1C0.4,4,0,3.6,0,3s0.4-1,1-1h3.4C5.8,2,7,3,7.3,4.3
l3.4,14.3c0.1,0.2,0.3,0.4,0.5,0.4h15.2c0.2,0,0.4-0.1,0.5-0.4l3.1-10c0.1-0.2,0-0.4-0.1-0.4C29.8,8.1,29.7,8,29.5,8H14
c-0.6,0-1-0.4-1-1s0.4-1,1-1h15.5c0.8,0,1.5,0.4,2,1c0.5,0.6,0.6,1.5,0.4,2.2l-3.1,10C28.5,20.3,27.5,21,26.4,21z"
				/>
			</svg>
			<span class="indicator__counter">
				<?php $cart_contents = WC()->cart->get_cart_contents_count();
				echo $cart_contents; ?>
			</span>
		</span>
		<span class="indicator__title">Shopping Cart</span> 
		<span class="indicator__value">
			<?php $cart_amount= WC()->cart->get_cart_contents_total() ;
			$cart_total = WC()->cart->get_total();
			//echo $cart_amount;
			echo $cart_total;
			?>
		</span>
	</a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}





