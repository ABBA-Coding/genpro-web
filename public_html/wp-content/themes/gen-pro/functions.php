<?php

/**
 * Gen Pro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gen_Pro
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.6');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gen_pro_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Gen Pro, use a find and replace
		* to change 'gen-pro' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('gen-pro', get_template_directory() . '/languages');

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'gen-pro'),
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
			'gen_pro_custom_background_args',
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
add_action('after_setup_theme', 'gen_pro_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gen_pro_content_width()
{
	$GLOBALS['content_width'] = apply_filters('gen_pro_content_width', 640);
}
add_action('after_setup_theme', 'gen_pro_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gen_pro_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'gen-pro'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'gen-pro'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'gen_pro_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function gen_pro_scripts()
{
	// wp_enqueue_style( 'gen-pro-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('gen-pro-bs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('gen-pro-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_style('gen-pro-font', get_template_directory_uri() . '/assets/fonts/Gilroy/stylesheet.css');


	wp_enqueue_script('gen-pro-jq', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('gen-pro-bs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('gen-pro-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('gen-pro-inoutmask', get_template_directory_uri() . '/assets/js/jquery.inputmask.js', array(), _S_VERSION, true);
	wp_enqueue_script('gen-pro-js', get_template_directory_uri() . '/assets/js/app.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'gen_pro_scripts');

if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'    => 'Настройки темы',
		'menu_title'    => 'Настройки сайта',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

	acf_add_options_sub_page(array(
		'page_title'    => 'Настройки элементов внутри страниц',
		'menu_title'    => 'Настройка страниц',
		'menu_slug'     => 'theme-pages-settings',
		'parent_slug'   => 'theme-general-settings',
	));
}

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

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


function disable_emojis()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

	// Remove from TinyMCE
	add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce($plugins)
{
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}


remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);




function so23698827_add_rewrite_rules($rules)
{
  $new = array();
  $new['categories/([^/]+)/(.+)/?$'] = 'index.php?products=$matches[2]';
  $new['categories/(.+)/?$'] = 'index.php?cats=$matches[1]';

  return array_merge($new, $rules); // Ensure our rules come first
}
add_filter('rewrite_rules_array', 'so23698827_add_rewrite_rules');

/**
 * Handle the '%project_category%' URL placeholder
 *
 * @param str $link The link to the post
 * @param WP_Post object $post The post object
 * @return str
 */
function so23698827_filter_post_type_link($link, $post)
{
  if ($post->post_type == 'products') {
    if ($cats = get_the_terms($post->ID, 'cats')) {
      $link = str_replace('%cats%', current($cats)->slug, $link);
    }
  }
  return $link;
}
add_filter('post_type_link', 'so23698827_filter_post_type_link', 10, 2);


if (!session_id()) {
    session_start();
}
