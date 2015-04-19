<?php
/**
 * policypeople functions and definitions
 *
 * @package policypeople
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 800; /* pixels */
}

if ( ! function_exists( 'policypeople_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function policypeople_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on policypeople, use a find and replace
	 * to change 'policypeople' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'policypeople', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main-nav' => 'Nav Menu, Bottom of Header',
		'sub-nav' => 'Policy Menu, Top of Header'
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'policypeople_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // policypeople_setup
add_action( 'after_setup_theme', 'policypeople_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function policypeople_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'policypeople' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'policypeople_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function policypeople_scripts() {
	wp_enqueue_style( 'policypeople-style', get_stylesheet_uri() );

	wp_enqueue_script( 'policypeople-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'policypeople-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	wp_enqueue_style( 'open sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700', false, false, false );
	
	wp_enqueue_style( 'Gentium', 'http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,700,400italic', false, false, false );
	wp_enqueue_style( 'font awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'policypeople_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/*
ADDED CUSTOM POST TYPES
*/

add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
	
	register_post_type( 'report', 
		array(
			'labels' => array(
				'name' => __( 'Report' ),
				'singular_name' => __( 'Report' ),
				'add_new' => __( 'Add New Report' ),
				'add_new_item' => __( 'New Report' ),
				'view' => __( 'View Report' ),
      			'view_item' => __( 'View Reports' ),	
			),
			'supports' => array( 'title', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
			'public' => true,
		)
	);

register_post_type( 'bio', 
		array(
			'labels' => array(
				'name' => __( 'Author Bio' ),
				'singular_name' => __( 'Bio' ),
				'add_new' => __( 'Add New Bio' ),
				'add_new_item' => __( 'New Bio' ),
				'view' => __( 'View Bio' ),
      			'view_item' => __( 'View Bio' ),	
			),
			'supports' => array( 'title', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
			'public' => true,
		)
	);
}



