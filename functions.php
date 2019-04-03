<?php
/**
 * dj functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dj
 */

if ( ! function_exists( 'dj_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dj_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dj, use a find and replace
		 * to change 'dj' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dj', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'dj' ),
			'menu-3' => esc_html__( 'Secondary', 'dj' ),
			'menu-2' => esc_html__( 'social-menu', 'djs' ),
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
		add_theme_support( 'custom-background', apply_filters( 'dj_custom_background_args', array(
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
add_action( 'after_setup_theme', 'dj_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dj_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'dj_content_width', 640 );
}
add_action( 'after_setup_theme', 'dj_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dj_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dj' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dj' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dj_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dj_scripts() {
	wp_enqueue_style( 'dj-style', get_stylesheet_uri() );

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Catamaran:300,400,500,700,900', true );
		
	wp_enqueue_script( 'dj-darkbox', get_template_directory_uri() . '/js/darkbox.js', array(), '20151215', true );
	
	wp_enqueue_script( 'dj-swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), '20151215', true );
	
	wp_enqueue_script( 'dj-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '20151215', true );

	
	wp_enqueue_script( 'dj-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	wp_enqueue_style( 'dj-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css');
	
	wp_enqueue_style( 'dj-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap-grid.css');

	wp_enqueue_script( 'dj-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '20151215', true);

	wp_enqueue_script( 'dj-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	

	
	// wp_enqueue_script( 'dj-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '20151215', true );

	// wp_enqueue_script( 'dj-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dj_scripts' );

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
 * Custom post type.
 */
require get_template_directory() . '/inc/custom-post-type.php';

/**
 * Custom events type.
 */
require get_template_directory() . '/inc/custom-events-type.php';

/**
 * Custom events type.
 */
require get_template_directory() . '/inc/custom-videos-type.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// Add External Link to Featured Image with Custom Field
add_filter('post_thumbnail_html','add_external_link_on_page_post_thumbnail',10);
    function add_external_link_on_page_post_thumbnail( $html ) {
    if( is_singular() ) {
            global $post;
            $name = get_post_meta($post->ID, 'ExternalUrl', true);
            if( $name ) {
                    $html = '<a href="' . ( $name ) . '" target="_blank">' . $html . '</a>';
            }
    }
    return $html;
    }

//poster

    function grunwell_video_embed( $attr, $content='' ) {
  if ( ! isset( $attr['poster'] ) && has_post_thumbnail() ) {
    /*
     * This uses a custom, 16:9 image size named 'poster'
     * but could be any size.
     */
    $poster = wp_get_attachment_image_src(
      get_post_thumbnail_id(),
      'poster'
    );
    $attr['poster'] = $poster['0'];
  }
 
  return wp_video_shortcode( $attr, $content );
}
add_shortcode( 'video', 'grunwell_video_embed' );