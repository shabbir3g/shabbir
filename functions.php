<?php
/**
 * shabbir functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shabbir
 */

if ( ! function_exists( 'shabbir_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shabbir_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on shabbir, use a find and replace
		 * to change 'shabbir' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shabbir', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'Main Menu', 'shabbir' ),
		) );
		function default_menu(){
			
			echo '<ul class="navbar-nav ml-auto">';
			echo '<li><a href="'.home_url().'">Home</a></li>';
			echo '</ul>';
			
		}
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
		add_theme_support( 'custom-background', apply_filters( 'shabbir_custom_background_args', array(
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
		/* ACF OPTIONS PAGE */
		if(function_exists('acf_add_options_page')) {
			$option_page = acf_add_options_page(
				array(
					'page_title'  => 'Theme Settings',
					'menu_title'  => 'Theme Settings',
					'menu_slug'   => 'theme-settings',
					'capability'  => 'edit_posts',
					'redirect'    => true,
					'position' => 61,
					'icon_url'    => 'dashicons-layout'
				)
			);
		}
		/* Register Post Type with category */
		
		$labels = array(
				'name'               => __( 'Portfolio', 'shabbir' ),
				'singular_name'      => __( 'Portfolio', 'shabbir' ),
				'menu_name'          => __( 'Portfolio', 'shabbir' ),
				'name_admin_bar'     => __( 'Portfolio', 'shabbir' ),
				'add_new'            => __( 'Add Portfolio', 'shabbir' ),
				'add_new_item'       => __( 'Add New Portfolio', 'shabbir' ),
				'new_item'           => __( 'New Portfolio', 'shabbir' ),
				'edit_item'          => __( 'Edit Portfolio', 'shabbir' ),
				'view_item'          => __( 'View Portfolio', 'shabbir' ),
				'all_items'          => __( 'All Portfolio', 'shabbir' ),
				'search_items'       => __( 'Search Portfolio', 'shabbir' ),
				'parent_item_colon'  => __( 'Parent Portfolio:', 'shabbir' ),
				'not_found'          => __( 'No Portfolio found.', 'shabbir' ),
				'not_found_in_trash' => __( 'No Portfolio found in Trash.', 'shabbir' )
			);

			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.', 'shabbir' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'portfolio' ),
				'capability_type'    => 'post',
				'has_archive'        => false,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'      	 => 'dashicons-smiley',
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
			);

			register_post_type( 'portfolio', $args );
			
			
			
			/* Register New Taxonomy*/ 
			
			$labels = array(
				'name'              => __( 'Category', 'shabbir' ),
				'singular_name'     => __( 'Category', 'shabbir' ),
				'search_items'      => __( 'Search Category', 'shabbir' ),
				'all_items'         => __( 'All Categories', 'shabbir' ),
				'parent_item'       => __( 'Parent Category', 'shabbir' ),
				'parent_item_colon' => __( 'Parent Category:', 'shabbir' ),
				'edit_item'         => __( 'Edit Category', 'shabbir' ),
				'update_item'       => __( 'Update Category', 'shabbir' ),
				'add_new_item'      => __( 'Add New Category', 'shabbir' ),
				'new_item_name'     => __( 'New Category Name', 'shabbir' ),
				'menu_name'         => __( 'Category', 'shabbir' ),
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'portfolio-category' ),
			);

			register_taxonomy( 'portfoliocategory', array( 'portfolio' ), $args );
		
	}
endif;
add_action( 'after_setup_theme', 'shabbir_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shabbir_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'shabbir_content_width', 640 );
}
add_action( 'after_setup_theme', 'shabbir_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shabbir_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'shabbir' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'shabbir' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'shabbir_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shabbir_scripts() {
	
	
	wp_enqueue_style( 'shabbir-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'shabbir-materialdesignicons', get_template_directory_uri() . '/css/materialdesignicons.min.css' );
	wp_enqueue_style( 'shabbir-mobiriseicons', get_template_directory_uri() . '/css/mobiriseicons.css' );
	wp_enqueue_style( 'shabbir-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style( 'shabbir-owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'shabbir-owl.theme', get_template_directory_uri() . '/css/owl.theme.css' );
	wp_enqueue_style( 'shabbir-owl.transitions', get_template_directory_uri() . '/css/owl.transitions.css' );
	wp_enqueue_style( 'shabbir-stylems', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'shabbir-style', get_stylesheet_uri() );

	wp_enqueue_script( 'shabbir-popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'shabbir-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'shabbir-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'shabbir-scrollspy', get_template_directory_uri() . '/js/scrollspy.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'shabbir-isotope', get_template_directory_uri() . '/js/isotope.js', array('jquery'), '', true );
	wp_enqueue_script( 'shabbir-magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'shabbir-typed', get_template_directory_uri() . '/js/typed.js', array('jquery'), '', true );
	wp_enqueue_script( 'shabbir-particles', get_template_directory_uri() . '/js/particles.js', array('jquery'), '', true );
	wp_enqueue_script( 'shabbir-particles.app', get_template_directory_uri() . '/js/particles.app.js', array('jquery'), '', true );
	wp_enqueue_script( 'shabbir-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'shabbir-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
	
	
	

	wp_enqueue_script( 'shabbir-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shabbir_scripts' );

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



/* customize login screen */
function mbthirty_custom_login_page() {
    echo '<style type="text/css">
        h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo.png") !important; height: 90px !important; width: 200px !important; margin: 0 auto !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/banner.png") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before { background-color: rgba(0,0,0,0.7); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login h1 a {
			background-size: 215px;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
    </style>';
}
add_action('login_head', 'mbthirty_custom_login_page');
function mbthirty_login_logo_url_title() {
 	return 'Mostafiz Shabbir';
}
add_filter( 'login_headertitle', 'mbthirty_login_logo_url_title' );
function mbthirty_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mbthirty_login_logo_url' );
		 
		 
/* customize login screen */

require get_template_directory() . '/inc/tgm/example.php';

