<?php

/**
 * WP Bootstrap Navwalker
 *
 * @package WP-Bootstrap-Navwalker
 *
 * @wordpress-plugin
 * Plugin Name: WP Bootstrap Navwalker
 * Plugin URI:  https://github.com/wp-bootstrap/wp-bootstrap-navwalker
 * Description: A custom WordPress nav walker class to implement the Bootstrap 4 navigation style in a custom theme using the WordPress built in menu manager.
 * Author: Edward McIntyre - @twittem, WP Bootstrap, William Patton - @pattonwebz, IanDelMar - @IanDelMar
 * Version: 4.3.0
 * Author URI: https://github.com/wp-bootstrap
 * GitHub Plugin URI: https://github.com/wp-bootstrap/wp-bootstrap-navwalker
 * GitHub Branch: master
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

// Check if Class Exists.
if (! class_exists('WP_Bootstrap_Navwalker')) :
	/**
	 * WP_Bootstrap_Navwalker class.
	 */
	class WP_Bootstrap_Navwalker extends Walker_Nav_Menu
	{

		/**
		 * Whether the items_wrap contains schema microdata or not.
		 *
		 * @since 4.2.0
		 * @var boolean
		 */
		private $has_schema = false;

		/**
		 * Ensure the items_wrap argument contains microdata.
		 *
		 * @since 4.2.0
		 */
		public function __construct()
		{
			if (! has_filter('wp_nav_menu_args', array($this, 'add_schema_to_navbar_ul'))) {
				add_filter('wp_nav_menu_args', array($this, 'add_schema_to_navbar_ul'));
			}
		}

		/**
		 * Starts the list before the elements are added.
		 *
		 * @since WP 3.0.0
		 *
		 * @see Walker_Nav_Menu::start_lvl()
		 *
		 * @param string           $output Used to append additional content (passed by reference).
		 * @param int              $depth  Depth of menu item. Used for padding.
		 * @param WP_Nav_Menu_Args $args   An object of wp_nav_menu() arguments.
		 */
		public function start_lvl(&$output, $depth = 0, $args = null)
		{
			if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
				$t = '';
				$n = '';
			} else {
				$t = "\t";
				$n = "\n";
			}
			$indent = str_repeat($t, $depth);
			// Default class to add to the file.
			$classes = array('dropdown-menu');
			/**
			 * Filters the CSS class(es) applied to a menu list element.
			 *
			 * @since WP 4.8.0
			 *
			 * @param array    $classes The CSS classes that are applied to the menu `<ul>` element.
			 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
			 * @param int      $depth   Depth of menu item. Used for padding.
			 */
			$class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
			$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

			/*
			 * The `.dropdown-menu` container needs to have a labelledby
			 * attribute which points to it's trigger link.
			 *
			 * Form a string for the labelledby attribute from the the latest
			 * link with an id that was added to the $output.
			 */
			$labelledby = '';
			// Find all links with an id in the output.
			preg_match_all('/(<a.*?id=\"|\')(.*?)\"|\'.*?>/im', $output, $matches);
			// With pointer at end of array check if we got an ID match.
			if (end($matches[2])) {
				// Build a string to use as aria-labelledby.
				$labelledby = 'aria-labelledby="' . esc_attr(end($matches[2])) . '"';
			}
			$output .= "{$n}{$indent}<ul$class_names $labelledby>{$n}";
		}

		/**
		 * Starts the element output.
		 *
		 * @since WP 3.0.0
		 * @since WP 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
		 *
		 * @see Walker_Nav_Menu::start_el()
		 *
		 * @param string           $output Used to append additional content (passed by reference).
		 * @param WP_Nav_Menu_Item $item   Menu item data object.
		 * @param int              $depth  Depth of menu item. Used for padding.
		 * @param WP_Nav_Menu_Args $args   An object of wp_nav_menu() arguments.
		 * @param int              $id     Current item ID.
		 */
		public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
		{
			if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
				$t = '';
				$n = '';
			} else {
				$t = "\t";
				$n = "\n";
			}
			$indent = ($depth) ? str_repeat($t, $depth) : '';

			if (false !== strpos($args->items_wrap, 'itemscope') && false === $this->has_schema) {
				$this->has_schema  = true;
				$args->link_before = '<span itemprop="name">' . $args->link_before;
				$args->link_after .= '</span>';
			}

			$classes = empty($item->classes) ? array() : (array) $item->classes;

			$split_on_spaces = function ($class) {
				return preg_split('/\s+/', $class);
			};
			$classes = $this->flatten(array_map($split_on_spaces, $classes));

			$linkmod_classes = array();
			$icon_classes = array();
			$classes = $this->separate_linkmods_and_icons_from_classes($classes, $linkmod_classes, $icon_classes, $depth);

			$icon_class_string = join(' ', $icon_classes);

			$args = apply_filters('nav_menu_item_args', $args, $item, $depth);

			if ($this->has_children) {
				$classes[] = 'dropdown';
			}
			if (in_array('current-menu-item', $classes, true) || in_array('current-menu-parent', $classes, true)) {
				$classes[] = 'active';
			}

			$classes[] = 'menu-item-' . $item->ID;
			$classes[] = 'nav-item';

			$classes = apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth);

			$class_names = join(' ', $classes);
			$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

			$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
			$id = $id ? ' id="' . esc_attr($id) . '"' : '';

			$output .= $indent . '<li ' . $id . $class_names . '>';

			$atts = array();
			$atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
			$atts['target'] = !empty($item->target) ? $item->target : '';
			if ('_blank' === $item->target && empty($item->xfn)) {
				$atts['rel'] = 'noopener noreferrer';
			} else {
				$atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
			}

			if ($this->has_children && 0 === $depth) {
				$atts['href'] = '#';
				$atts['data-toggle'] = 'dropdown';
				$atts['aria-expanded'] = 'false';
				$atts['class'] = 'dropdown-toggle nav-link';
				$atts['id'] = 'menu-item-dropdown-' . $item->ID;
			} else {
				if (true === $this->has_schema) {
					$atts['itemprop'] = 'url';
				}

				$atts['href'] = !empty($item->url) ? $item->url : '#';
				$atts['class'] = $depth > 0 ? 'dropdown-item' : 'nav-link';
			}

			$atts['aria-current'] = $item->current ? 'page' : '';

			$atts = $this->update_atts_for_linkmod_type($atts, $linkmod_classes);

			$atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

			$attributes = '';
			foreach ($atts as $attr => $value) {
				if (!empty($value)) {
					$value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			$linkmod_type = $this->get_linkmod_type($linkmod_classes);

			$item_output = isset($args->before) ? $args->before : '';

			if ('' !== $linkmod_type) {
				$item_output .= $this->linkmod_element_open($linkmod_type, $attributes);
			} else {
				$item_output .= '<a' . $attributes . '>';
			}

			$icon_html = '';
			$icon = get_field('icon', $item->object . '_' . $item->object_id);
			if (!empty($icon)) {
				$icon_html = '<img src="' . esc_url($icon['url']) . '" alt="' . esc_attr($item->title) . '"> ';
			}

			$title = apply_filters('the_title', $item->title, $item->ID);
			$title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

			$item_output .= isset($args->link_before) ? $args->link_before . $icon_html . $title . $args->link_after : '';

			// Добавляем <span class="arrow"></span> только для дочерних элементов внутри ссылки.
			if ($depth > 0) {
				$item_output .= '<span class="arrow">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 9.99998C14.9959 10.4384 14.8193 10.8576 14.5083 11.1666L10.9333 14.75C10.7772 14.9052 10.566 14.9923 10.3458 14.9923C10.1257 14.9923 9.91445 14.9052 9.75831 14.75C9.68021 14.6725 9.61821 14.5803 9.5759 14.4788C9.5336 14.3772 9.51182 14.2683 9.51182 14.1583C9.51182 14.0483 9.5336 13.9394 9.5759 13.8378C9.61821 13.7363 9.68021 13.6441 9.75831 13.5666L12.5 10.8333H4.16665C3.94563 10.8333 3.73367 10.7455 3.57739 10.5892C3.42111 10.433 3.33331 10.221 3.33331 9.99998C3.33331 9.77897 3.42111 9.56701 3.57739 9.41073C3.73367 9.25445 3.94563 9.16665 4.16665 9.16665H12.5L9.75831 6.42498C9.60139 6.26917 9.5128 6.0574 9.51202 5.83626C9.51124 5.61512 9.59833 5.40273 9.75415 5.24581C9.90996 5.0889 10.1217 5.0003 10.3429 4.99952C10.564 4.99874 10.7764 5.08583 10.9333 5.24165L14.5083 8.82498C14.8213 9.13611 14.9981 9.55867 15 9.99998Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>';
			}

			if ('' !== $linkmod_type) {
				$item_output .= $this->linkmod_element_close($linkmod_type);
			} else {
				$item_output .= '</a>';
			}

			$item_output .= isset($args->after) ? $args->after : '';

			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
		}


		/**
		 * Menu fallback.
		 *
		 * If this function is assigned to the wp_nav_menu's fallback_cb variable
		 * and a menu has not been assigned to the theme location in the WordPress
		 * menu manager the function will display nothing to a non-logged in user,
		 * and will add a link to the WordPress menu manager if logged in as an admin.
		 *
		 * @param array $args passed from the wp_nav_menu function.
		 * @return string|void String when echo is false.
		 */
		public static function fallback($args)
		{
			if (! current_user_can('edit_theme_options')) {
				return;
			}

			// Initialize var to store fallback html.
			$fallback_output = '';

			// Menu container opening tag.
			$show_container = false;
			if ($args['container']) {
				/**
				 * Filters the list of HTML tags that are valid for use as menu containers.
				 *
				 * @since WP 3.0.0
				 *
				 * @param array $tags The acceptable HTML tags for use as menu containers.
				 *                    Default is array containing 'div' and 'nav'.
				 */
				$allowed_tags = apply_filters('wp_nav_menu_container_allowedtags', array('div', 'nav'));
				if (is_string($args['container']) && in_array($args['container'], $allowed_tags, true)) {
					$show_container   = true;
					$class            = $args['container_class'] ? ' class="menu-fallback-container ' . esc_attr($args['container_class']) . '"' : ' class="menu-fallback-container"';
					$id               = $args['container_id'] ? ' id="' . esc_attr($args['container_id']) . '"' : '';
					$fallback_output .= '<' . $args['container'] . $id . $class . '>';
				}
			}

			// The fallback menu.
			$class            = $args['menu_class'] ? ' class="menu-fallback-menu ' . esc_attr($args['menu_class']) . '"' : ' class="menu-fallback-menu"';
			$id               = $args['menu_id'] ? ' id="' . esc_attr($args['menu_id']) . '"' : '';
			$fallback_output .= '<ul' . $id . $class . '>';
			$fallback_output .= '<li class="nav-item"><a href="' . esc_url(admin_url('nav-menus.php')) . '" class="nav-link" title="' . esc_attr__('Add a menu', 'wp-bootstrap-navwalker') . '">' . esc_html__('Add a menu', 'wp-bootstrap-navwalker') . '</a></li>';
			$fallback_output .= '</ul>';

			// Menu container closing tag.
			if ($show_container) {
				$fallback_output .= '</' . $args['container'] . '>';
			}

			// if $args has 'echo' key and it's true echo, otherwise return.
			if (array_key_exists('echo', $args) && $args['echo']) {
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo $fallback_output;
			} else {
				return $fallback_output;
			}
		}

		/**
		 * Filter to ensure the items_Wrap argument contains microdata.
		 *
		 * @since 4.2.0
		 *
		 * @param  array $args The nav instance arguments.
		 * @return array $args The altered nav instance arguments.
		 */
		public function add_schema_to_navbar_ul($args)
		{
			if (isset($args['items_wrap'])) {
				$wrap = $args['items_wrap'];
				if (strpos($wrap, 'SiteNavigationElement') === false) {
					$args['items_wrap'] = preg_replace('/(>).*>?\%3\$s/', ' itemscope itemtype="http://www.schema.org/SiteNavigationElement"$0', $wrap);
				}
			}
			return $args;
		}

		/**
		 * Find any custom linkmod or icon classes and store in their holder
		 * arrays then remove them from the main classes array.
		 *
		 * Supported linkmods: .disabled, .dropdown-header, .dropdown-divider, .sr-only
		 * Supported iconsets: Font Awesome 4/5, Glypicons
		 *
		 * NOTE: This accepts the linkmod and icon arrays by reference.
		 *
		 * @since 4.0.0
		 *
		 * @param array   $classes         an array of classes currently assigned to the item.
		 * @param array   $linkmod_classes an array to hold linkmod classes.
		 * @param array   $icon_classes    an array to hold icon classes.
		 * @param integer $depth           an integer holding current depth level.
		 *
		 * @return array  $classes         a maybe modified array of classnames.
		 */
		private function separate_linkmods_and_icons_from_classes($classes, &$linkmod_classes, &$icon_classes, $depth)
		{
			// Loop through $classes array to find linkmod or icon classes.
			foreach ($classes as $key => $class) {
				/*
				 * If any special classes are found, store the class in it's
				 * holder array and and unset the item from $classes.
				 */
				if (preg_match('/^disabled|^sr-only/i', $class)) {
					// Test for .disabled or .sr-only classes.
					$linkmod_classes[] = $class;
					unset($classes[$key]);
				} elseif (preg_match('/^dropdown-header|^dropdown-divider|^dropdown-item-text/i', $class) && $depth > 0) {
					/*
					 * Test for .dropdown-header or .dropdown-divider and a
					 * depth greater than 0 - IE inside a dropdown.
					 */
					$linkmod_classes[] = $class;
					unset($classes[$key]);
				} elseif (preg_match('/^fa-(\S*)?|^fa(s|r|l|b)?(\s?)?$/i', $class)) {
					// Font Awesome.
					$icon_classes[] = $class;
					unset($classes[$key]);
				} elseif (preg_match('/^glyphicon-(\S*)?|^glyphicon(\s?)$/i', $class)) {
					// Glyphicons.
					$icon_classes[] = $class;
					unset($classes[$key]);
				}
			}

			return $classes;
		}

		/**
		 * Return a string containing a linkmod type and update $atts array
		 * accordingly depending on the decided.
		 *
		 * @since 4.0.0
		 *
		 * @param array $linkmod_classes array of any link modifier classes.
		 *
		 * @return string                empty for default, a linkmod type string otherwise.
		 */
		private function get_linkmod_type($linkmod_classes = array())
		{
			$linkmod_type = '';
			// Loop through array of linkmod classes to handle their $atts.
			if (! empty($linkmod_classes)) {
				foreach ($linkmod_classes as $link_class) {
					if (! empty($link_class)) {

						// Check for special class types and set a flag for them.
						if ('dropdown-header' === $link_class) {
							$linkmod_type = 'dropdown-header';
						} elseif ('dropdown-divider' === $link_class) {
							$linkmod_type = 'dropdown-divider';
						} elseif ('dropdown-item-text' === $link_class) {
							$linkmod_type = 'dropdown-item-text';
						}
					}
				}
			}
			return $linkmod_type;
		}

		/**
		 * Update the attributes of a nav item depending on the limkmod classes.
		 *
		 * @since 4.0.0
		 *
		 * @param array $atts            array of atts for the current link in nav item.
		 * @param array $linkmod_classes an array of classes that modify link or nav item behaviors or displays.
		 *
		 * @return array                 maybe updated array of attributes for item.
		 */
		private function update_atts_for_linkmod_type($atts = array(), $linkmod_classes = array())
		{
			if (! empty($linkmod_classes)) {
				foreach ($linkmod_classes as $link_class) {
					if (! empty($link_class)) {
						/*
						 * Update $atts with a space and the extra classname
						 * so long as it's not a sr-only class.
						 */
						if ('sr-only' !== $link_class) {
							$atts['class'] .= ' ' . esc_attr($link_class);
						}
						// Check for special class types we need additional handling for.
						if ('disabled' === $link_class) {
							// Convert link to '#' and unset open targets.
							$atts['href'] = '#';
							unset($atts['target']);
						} elseif ('dropdown-header' === $link_class || 'dropdown-divider' === $link_class || 'dropdown-item-text' === $link_class) {
							// Store a type flag and unset href and target.
							unset($atts['href']);
							unset($atts['target']);
						}
					}
				}
			}
			return $atts;
		}

		/**
		 * Wraps the passed text in a screen reader only class.
		 *
		 * @since 4.0.0
		 *
		 * @param string $text the string of text to be wrapped in a screen reader class.
		 * @return string      the string wrapped in a span with the class.
		 */
		private function wrap_for_screen_reader($text = '')
		{
			if ($text) {
				$text = '<span class="sr-only">' . $text . '</span>';
			}
			return $text;
		}

		/**
		 * Returns the correct opening element and attributes for a linkmod.
		 *
		 * @since 4.0.0
		 *
		 * @param string $linkmod_type a sting containing a linkmod type flag.
		 * @param string $attributes   a string of attributes to add to the element.
		 *
		 * @return string              a string with the openign tag for the element with attribibutes added.
		 */
		private function linkmod_element_open($linkmod_type, $attributes = '')
		{
			$output = '';
			if ('dropdown-item-text' === $linkmod_type) {
				$output .= '<span class="dropdown-item-text"' . $attributes . '>';
			} elseif ('dropdown-header' === $linkmod_type) {
				/*
				 * For a header use a span with the .h6 class instead of a real
				 * header tag so that it doesn't confuse screen readers.
				 */
				$output .= '<span class="dropdown-header h6"' . $attributes . '>';
			} elseif ('dropdown-divider' === $linkmod_type) {
				// This is a divider.
				$output .= '<div class="dropdown-divider"' . $attributes . '>';
			}
			return $output;
		}

		/**
		 * Return the correct closing tag for the linkmod element.
		 *
		 * @since 4.0.0
		 *
		 * @param string $linkmod_type a string containing a special linkmod type.
		 *
		 * @return string              a string with the closing tag for this linkmod type.
		 */
		private function linkmod_element_close($linkmod_type)
		{
			$output = '';
			if ('dropdown-header' === $linkmod_type || 'dropdown-item-text' === $linkmod_type) {
				/*
				 * For a header use a span with the .h6 class instead of a real
				 * header tag so that it doesn't confuse screen readers.
				 */
				$output .= '</span>';
			} elseif ('dropdown-divider' === $linkmod_type) {
				// This is a divider.
				$output .= '</div>';
			}
			return $output;
		}

		/**
		 * Flattens a multidimensional array to a simple array.
		 *
		 * @param array $array a multidimensional array.
		 *
		 * @return array a simple array
		 */
		public function flatten($array)
		{
			$result = array();
			foreach ($array as $element) {
				if (is_array($element)) {
					array_push($result, ...$this->flatten($element));
				} else {
					$result[] = $element;
				}
			}
			return $result;
		}
	}

endif;
