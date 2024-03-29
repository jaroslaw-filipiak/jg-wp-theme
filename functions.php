<?php

/**
 * grafikonline functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package grafikonline
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function grafikonline_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on grafikonline, use a find and replace
		* to change 'grafikonline' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('grafikonline', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	
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
			'grafikonline_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'grafikonline_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function grafikonline_content_width()
{
	$GLOBALS['content_width'] = apply_filters('grafikonline_content_width', 640);
}
add_action('after_setup_theme', 'grafikonline_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function grafikonline_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'grafikonline'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'grafikonline'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'grafikonline_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function grafikonline_scripts()
{
	wp_enqueue_style('grafikonline-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('grafikonline-style', 'rtl', 'replace');

	// wp_enqueue_style('main-styles', get_theme_file_uri() . '/dist/swiper-bundle.css', array(), _S_VERSION);


	// wp_enqueue_script('grafikonline-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	// if (is_singular() && comments_open() && get_option('thread_comments')) {
	// 	wp_enqueue_script('comment-reply');
	// }

	// if (is_front_page() || is_home()) {
	// 	wp_enqueue_script('home-scripts', get_theme_file_uri() . '/dist/js/main.js', array(), _S_VERSION, true);
	// }
}
add_action('wp_enqueue_scripts', 'grafikonline_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * ACF rest API endpoint for pricing
 */


add_action("rest_api_init", function () {
	register_rest_route("options", "/pricing", [
		"methods" => "GET",
		"callback" => function ($request) {
			$data = get_field('pricing', 'options');
			$modified_data = array_map(function ($item, $index) {
				$item['id'] = $index; // Add ID 
				return $item;
			}, $data, array_keys($data));
			return $modified_data;
		},
		'permission_callback' => '__return_true'
	]);

	register_rest_route("options", "/rabats", [
		"methods" => "GET",
		"callback" => function ($request) {
			$data = get_field('rabat_codes', 'options');
			$modified_data = array_map(function ($item, $index) {
				$item = ['id' => $index] + $item; // Add ID as first property
				return $item;
			}, $data, array_keys($data));
			return $modified_data;
		},
		'permission_callback' => '__return_true'
	]);

	register_rest_route("options", "/rabats/(?P<code>[a-zA-Z0-9]+)", [
		"methods" => "GET",
		"callback" => function ($request) {
			$code = $request->get_param('code');
			$data = get_field('rabat_codes', 'options');
			
			$result = array_filter($data, function ($item) use ($code) {
				return $item['kod'] === $code;
			});

			if (empty($result)) {
				return new WP_Error('code_not_found', 'Code not found', array('status' => 404));
			}

			return [
				'message'=> 'ok',
				'data' => array('status'=> 200, 'result' => $result),
			];
		},
		'permission_callback' => '__return_true'
	]);
});




/**
 * ALLOW SVG
 */


function enable_svg_upload( $upload_mimes ) {

    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}

add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );



/**
 * CUSTOM POST TYPES
 */

 require get_template_directory() . '/inc/post-types.php';

 
/**
 * MENU AREAS
 */

//  require get_template_directory() . '/inc/menu-areas.php';

/**
 * BREADCRUMBS
 */

 require get_template_directory() . '/inc/breadcrumbs.php';

 /**
 * ADMIN PANEL
 */

 require get_template_directory() . '/inc/admin-panel.php';