<?php
/**
 * WriterPro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WriterPro
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'writerpro_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function writerpro_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on WriterPro, use a find and replace
		 * to change 'writerpro' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'writerpro', get_template_directory() . '/languages' );

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
		add_image_size( 'write-thumb-lg', 1200, 600, true);



		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'writerpro' ),
			)
		);


		function acme_default_menu() {

			$html = '<ul id="acme-default-menu navbar-nav">';
				$html .= '<li class="menu-item menu-item-type-post_type menu-item-object-page">';
					$html .= '<a href="' . esc_url( home_url() ) . '" title="' . __( 'Home', 'acme' ) . '">';
						$html .= __( 'Home', 'acme' );
					$html .= '</a>';
				$html .= '</li>';
				$html .= '<li class="menu-item menu-item-type-post_type menu-item-object-page">';
					$html .= '<a href="' . esc_url('slonas.com') . '" title="' . __( 'product', 'acme' ) . '">';
						$html .= __( 'slonas', 'acme' );
					$html .= '</a>';
				$html .= '</li>';
				$html .= '<li class="menu-item menu-item-type-post_type menu-item-object-page">';
					$html .= '<a href="' . esc_url('devute.com/services') . '" title="' . __( 'services', 'acme' ) . '">';
						$html .= __( 'Our Services', 'acme' );
					$html .= '</a>';
				$html .= '</li>';
			$html .= '</ul>';

			echo $html;

		} // end acme_default_menu


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
				'writerpro_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'writerpro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function writerpro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'writerpro_content_width', 640 );
}
add_action( 'after_setup_theme', 'writerpro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

add_action( 'widgets_init', 'themename_widgets_init' );

function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'footer widget 1', 'theme_name' ),
        'id'            => 'footer-widget-1',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => __( 'footer widget 2', 'theme_name' ),
        'id'            => 'footer-widget-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => __( 'footer widget 3', 'theme_name' ),
        'id'            => 'footer-widget-3',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
	) );


}




/**
 * comments form
 */
/*-- Remove Website (URL) Field from*/
function writer_remove_comment_url($arg) {
    $arg['url'] = '';
    return $arg;
}
add_filter('comment_form_default_fields', 'writer_remove_comment_url');





/**
 * post view counter
 */
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// past the shortcode in single.php
function set_Post_View() {

    $message = setPostViews(get_the_ID());

    // Output needs to be return
    return $message;
}
// register shortcode
add_shortcode('setPostView', 'set_Post_View');


// past the shortcode where you can see output
function get_Post_view() {

    // Things that you want to do.
    $message = getPostViews(get_the_ID());
    // Output needs to be return
    return $message;
}
// register shortcode
add_shortcode('getPostview', 'get_Post_view');



/**
 * COLORS
 */
//  function theme_customize_register( $wp_customize ) {
//    // Text color
//    $wp_customize->add_setting( 'text_color', array(
//      'default'   => '',
//      'transport' => 'refresh',
//    ) );
//
//    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
//      'section' => 'colors',
//      'label'   => esc_html__( 'Text color', 'theme' ),
//    ) ) );
//
//    // Link color
//    $wp_customize->add_setting( 'link_color', array(
//      'default'   => '',
//      'transport' => 'refresh',
//      'sanitize_callback' => 'sanitize_hex_color',
//    ) );
//
//    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
//      'section' => 'colors',
//      'label'   => esc_html__( 'Link color', 'theme' ),
//    ) ) );
//
//    // Accent color
//    $wp_customize->add_setting( 'accent_color', array(
//      'default'   => '',
//      'transport' => 'refresh',
//      'sanitize_callback' => 'sanitize_hex_color',
//    ) );
//
//    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
//      'section' => 'colors',
//      'label'   => esc_html__( 'Accent color', 'theme' ),
//    ) ) );
//
//    // Border color
//    $wp_customize->add_setting( 'border_color', array(
//      'default'   => '',
//      'transport' => 'refresh',
//      'sanitize_callback' => 'sanitize_hex_color',
//    ) );
//
//    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_color', array(
//      'section' => 'colors',
//      'label'   => esc_html__( 'Border color', 'theme' ),
//    ) ) );
//
//    // Sidebar background
//    $wp_customize->add_setting( 'sidebar_background', array(
//      'default'   => '',
//      'transport' => 'refresh',
//      'sanitize_callback' => 'sanitize_hex_color',
//    ) );
//
//    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_background', array(
//      'section' => 'colors',
//      'label'   => esc_html__( 'Sidebar Background', 'theme' ),
//    ) ) );
//  }
//
//  add_action( 'customize_register', 'theme_customize_register' );







// Modify our styles registration like so:

//function theme_enqueue_styles() {
//  wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
//  $custom_css = theme_get_customizer_css();
//  wp_add_inline_style( 'theme-styles', $custom_css );
//}
//
//add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );





/**
 * Enqueue scripts and styles.
 */
function writerpro_scripts() {


	wp_enqueue_style( 'WriterProstyle', get_stylesheet_uri(), array(), _S_VERSION );


   /*-- google font --*/
	wp_enqueue_style( 'fontInter', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap' );
    /*-- bootstarp --*/
    wp_enqueue_style( 'Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css' );
	/*-- theme stylesheet --*/
	wp_enqueue_style( 'themeReset', get_template_directory_uri() . '/assets/css/reset.css' );
	wp_enqueue_style( 'themeCss', get_template_directory_uri() . '/assets/css/theme.css' );

	/*-- theme script --*/

    wp_enqueue_script( 'mainJs', get_template_directory_uri() . '/assets/js/main.js');

	wp_enqueue_script( 'bootstrapJS','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');
    wp_style_add_data( 'httpsdevute-comproductswordpressthemeswirterpro-style', 'rtl', 'replace' );
	wp_enqueue_script( 'httpsdevute-comproductswordpressthemeswirterpro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action( 'wp_enqueue_scripts', 'writerpro_scripts' );

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
 * redux framework
 */

    require_once( get_template_directory() . '/assets/lib/redux-framework/redux-core/framework.php');
    require_once( get_template_directory() . '/assets/lib/redux-framework/writer-options/config.php');







