<?php
/**
 * library_hudson.com functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package library.hudson.com
 */

if ( ! function_exists( 'library_hudson_com_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function library_hudson_com_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on your_domain_here.com, use a find and replace
	 * to change 'library_hudson-com' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'library_hudson-com', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	/*  Add Formats and Excerpts to Pages */
	add_post_type_support( 'page', 'post-formats' );
	add_post_type_support( 'page', 'excerpt' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'medium-width', 480 );
    add_image_size( 'square-lg', 400, 400, true );
    add_image_size( 'square-xl', 800, 800, true );
    add_image_size( 'horizontal-lg', 800, 600, true );
    add_image_size( 'horizontal-xl', 1200, 900, true );
    add_image_size( 'horizontal-xl-wide', 1200, 600, true );

	// This theme uses wp_nav_menu()
	require_once('wp_bootstrap_navwalker.php');
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'library-hudsoncreative-com' ),
	) );
	// End Navwalker Installation
    
    function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

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
	add_theme_support( 'custom-background', apply_filters( 'library_hudson_com_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'library_hudson_com_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function library_hudson_com_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'library_hudson_com_content_width', 640 );
}
add_action( 'after_setup_theme', 'library_hudson_com_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function library_hudson_com_scripts() {
	if (!is_admin()) {	
		
        wp_enqueue_style('wordpress', get_template_directory_uri() . '/css/wordpress.css', '', '1', 'screen');
        wp_enqueue_style('gravity-forms', get_template_directory_uri() . '/css/gravity-forms.css', '', '1.0.0', 'screen');
        wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', '', '1.0.0', 'screen');
     
		wp_register_style( 'Font_Awesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css' );
		wp_enqueue_style('Font_Awesome');

		// Install Bootstrap CSS from CDN
		wp_register_style( 'Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css' );
		wp_enqueue_style('Bootstrap');
		
		wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', null, null, true );
		wp_enqueue_script('jQuery');
				
		// Install Bootstrap JS from CDN
		wp_register_script( 'Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', null, null, true );
		wp_enqueue_script('Bootstrap');
		
		// Install Owl-Carousel JS from CDN
		wp_register_script( 'Owl-Carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js', null, null, true );
		wp_enqueue_script('Owl-Carousel');		

        
        
		
        
	}
    
    
    
   
	
}
add_action( 'wp_enqueue_scripts', 'library_hudson_com_scripts' );

// Move Gravity Forms Scripts to Footer - VERY IMPORTANT when jQuery is loaded in footer which it should be
add_filter("gform_init_scripts_footer", "init_scripts");
    function init_scripts() {
    return true;
}

// Enable Gravity Forms Confirmation Anchor
add_filter('gform_confirmation_anchor', create_function('','return true;'));

// Gravity Forms Hide Labels
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

/**
 * Fix Gravity Form Tabindex Conflicts
 * https://gravitywiz.com/fix-gravity-form-tabindex-conflicts/
 */
add_filter( 'gform_tabindex', 'gform_tabindexer', 10, 2 );
function gform_tabindexer( $tab_index, $form = false ) {
 $starting_index = 1000; // if you need a higher tabindex, update this number
 if( $form )
 add_filter( 'gform_tabindex_' . $form['id'], 'gform_tabindexer' );
 return GFCommon::$tab_index >= $starting_index ? GFCommon::$tab_index : $starting_index;
}

// remove width and height from embedded images
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

// Remove Wordpress emoji support from <head>
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove Yoasts Schema.org JSON-LD Code injected into <head>
function bybe_remove_yoast_json($data){
    $data = array();
    return $data;
  }
add_filter('wpseo_json_ld_output', 'bybe_remove_yoast_json', 10, 1);

/* Gravity Forms Hook to push data to Reserve Interactive */
/* Comment this out for now */
/* require_once( get_stylesheet_directory() . '/inc/reserve-interactive-hook.php' ); */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


 

