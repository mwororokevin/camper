<?php
/**
 * camper functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package camper
 */

require_once('functions/furnished-apartments.php');

if ( ! function_exists( 'camper_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function camper_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on camper, use a find and replace
		 * to change 'camper' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'camper', get_template_directory() . '/languages' );

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
			'primary' 	 => esc_html__( 'Primary', 'camper' ),
			'secondary'  => esc_html__( 'Secondary', 'camper'),
			'services'	 => esc_html__( 'Services', 'camper'),
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
		add_theme_support( 'custom-background', apply_filters( 'camper_custom_background_args', array(
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
			'height'      => 90,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'camper_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function camper_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'camper_content_width', 640 );
}
add_action( 'after_setup_theme', 'camper_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function camper_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'camper' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'camper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'camper_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function camper_scripts() {
	wp_enqueue_style( 'camper-style', get_stylesheet_uri(), NULL, microtime());

	wp_enqueue_style( 'camper-bootstrap', get_template_directory_uri() . '/dist/css/bootstrap.min.css', false, microtime(), 'all');

	wp_enqueue_style('camper-fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css');

	// wp_enqueue_style('camper-style-min', get_theme_file_uri() . 'sass/style.min.css');

	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', false, '', true);
	wp_enqueue_script('popper');

	wp_enqueue_script( 'camper-tether', get_template_directory_uri() . '/src/js/tether.min.js', array(), '20170115', true );

	wp_enqueue_script( 'camper-bootstrap', get_template_directory_uri() . '/src/js/bootstrap.min.js', array('jquery'), '20170915', true );

	wp_enqueue_script( 'camper-nav-scroll', get_template_directory_uri() . '/src/js/nav-scroll.js', array('jquery'), '20170115', true );
	
	wp_enqueue_script( 'camper-mobile-nav-menu', get_template_directory_uri() . '/src/js/mobile-navbar.js', array(), '20190130', true );

	wp_enqueue_script( 'camper-bootstrap', get_template_directory_uri() . '/src/js/bootstrap-better-nav.min.js', array('jquery'), '20170915', true );

	// wp_enqueue_script( 'camper-js', get_theme_file_uri() . '/dist/js/camper.js', array('jquery'), '1.0.6', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'camper_scripts' );



function wpb_add_google_fonts() {
 
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Aguafina+Script|Aladin|Alex+Brush|Allura|Amatic+SC|Amita|Annie+Use+Your+Telescope|
	Architects+Daughter|Arizonia|Bad+Script|Berkshire+Swash|Bilbo|Bilbo+Swash+Caps|Bonbon|Butterfly+Kids|Calligraffitti|Caveat|Caveat+Brush|Cedarville+Cursive|Charmonman|
	Clicker+Script|Coming+Soon|Condiment|Cookie|Courgette|Covered+By+Your+Grace|Crafty+Girls|Damion|Dancing+Script|Dawning+of+a+New+Day|Dekko|Delius|Delius+Swash+Caps|
	Delius+Unicase|Devonshire|Dokdo|Dr+Sugiyama|Eagle+Lake|East+Sea+Dokdo|Engagement|Euphoria+Script|Felipa|Fondamento|Gaegu|Gamja+Flower|Give+You+Glory|Gloria+Hallelujah|
	Gochi+Hand|Grand+Hotel|Great+Vibes|Handlee|Herr+Von+Muellerhoff|Hi+Melody|Homemade+Apple|Indie+Flower|Italianno|Itim|Jim+Nightshade|Julee|Just+Another+Hand|Just+Me+Again+Down+Here|
	Kalam|Kaushan+Script|Kavivanar|Kristi|La+Belle+Aurore|Lakki+Reddy|League+Script|Leckerli+One|Loved+by+the+King|Lovers+Quarrel|Mali:700|Marck+Script|Meddon|Meie+Script|Merienda|
	Merienda+One|Miss+Fajardose|Molle:400i|Monsieur+La+Doulaise|Montez|Mr+Bedfort|Mr+Dafoe|Mr+De+Haviland|Mrs+Saint+Delafield|Mrs+Sheppards|Nanum+Brush+Script|Nanum+Pen+Script|
	Neucha|Niconne|Norican|Nothing+You+Could+Do|Over+the+Rainbow|Pacifico|Pangolin|Parisienne|Patrick+Hand|Patrick+Hand+SC|Permanent+Marker|Petit+Formal+Script|Pinyon+Script|
	Princess+Sofia|Quintessential|Qwigley|Rancho|Redressed|Reenie+Beanie|Rochester|Rock+Salt|Romanesco|Rouge+Script|Ruge+Boogie|Ruthie|Sacramento|Satisfy|Schoolbell|
	Sedgwick+Ave|Sedgwick+Ave+Display|Shadows+Into+Light|Shadows+Into+Light+Two|Short+Stack|Sofia|Sriracha|Stalemate|Sue+Ellen+Francisco|Sunshiney|Swanky+and+Moo+Moo|
	Tangerine|The+Girl+Next+Door|Tillana|Vibur|Waiting+for+the+Sunrise|Walter+Turncoat|Yellowtail|Yesteryear|Zeyada', false ); 

}
	 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

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
 * Bootstrap Navwalker File
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

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
