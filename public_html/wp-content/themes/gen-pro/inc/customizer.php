<?php
/**
 * Gen Pro Theme Customizer
 *
 * @package Gen_Pro
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gen_pro_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'gen_pro_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'gen_pro_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'gen_pro_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function gen_pro_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function gen_pro_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gen_pro_customize_preview_js() {
	wp_enqueue_script( 'gen-pro-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'gen_pro_customize_preview_js' );
/*
 * custom pagination with bootstrap .pagination class
 * source: http://www.ordinarycoder.com/paginate_links-class-ul-li-bootstrap/
 */
function bootstrap_pagination($echo = true, $classes = '') {
    global $wp_query;

    $big = 999999999; // unlikely integer for replacement

    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '/page/%#%', // Исправлено для корректного формирования URL
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'array',
        'prev_next' => false,
    ));

    if (is_array($pages)) {
        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');

        // Include additional classes for <ul>
        $pagination = '<nav><ul class="pagination ' . esc_attr($classes) . '">';

        foreach ($pages as $page) {
            // Check if the current page is active
            $active_class = strpos($page, 'current') !== false ? ' active' : '';
            $pagination .= "<li class='page-item$active_class'>$page</li>";
        }

        $pagination .= '</ul></nav>';

        if ($echo) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }
}
