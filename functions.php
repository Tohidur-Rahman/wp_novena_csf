<?php
/**
 * Novena functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Novena
 */

require_once get_theme_file_path() .'/inc/novena-options.php';
require_once get_theme_file_path() .'/inc/novena-metabox.php';
require_once get_theme_file_path() .'/inc/novena-cpt.php';



if ( site_url() == "http://novena.test/" ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', time() );
}else{
	define( '_S_VERSION',wp_get_theme()->get('Version') );
}



function novena_setup() {
	
	load_theme_textdomain( 'novena', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
        'post-formats',
        array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'novena' ),
		)
	);

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
			'novena_custom_background_args',
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
add_action( 'after_setup_theme', 'novena_setup' );

function novena_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'novena_content_width', 640 );
}
add_action( 'after_setup_theme', 'novena_content_width', 0 );

function novena_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'novena' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'novena' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'novena_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function novena_scripts() {
	// Bootstrap CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/bootstrap.min.css', array(), _S_VERSION, 'all' );

	// Iconfont CSS
	wp_enqueue_style( 'iconfont', get_template_directory_uri() . '/assets/plugins/icofont/icofont.min.css', array(), _S_VERSION, 'all' );

	// Font Awesome
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css', array(), _S_VERSION, 'all');

	// Slick CSS
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/plugins/slick-carousel/slick/slick.css', array(), _S_VERSION, 'all' );

	// Main CSS
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all' );

	// Slick Theme CSS
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/plugins/slick-carousel/slick/slick-theme.css', array(), _S_VERSION, 'all' );
	// Theme css
	wp_enqueue_style( 'novena-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_style_add_data( 'novena-style', 'rtl', 'replace' );


	// Bootstrap JS
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/bootstrap.min.js', array('jquery'), _S_VERSION, true );

	// Slick JS
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/plugins/slick-carousel/slick/slick.min.js', array('jquery'), _S_VERSION, true );

	// Shuffle JS
	wp_enqueue_script( 'shuffle', get_template_directory_uri() . '/assets/plugins/shuffle/shuffle.min.js', array('jquery'), _S_VERSION, true );

	// Google Map JS
	wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA', array('jquery'), _S_VERSION, true );


	// Gmap JS
	wp_enqueue_script( 'gmap', get_template_directory_uri() . '/assets/plugins/google-map/gmap.js', array('jquery'), _S_VERSION, true );

	// Script JS
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'novena-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'novena_scripts' );



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


