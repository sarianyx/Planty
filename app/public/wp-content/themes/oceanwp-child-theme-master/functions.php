<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet.
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	wp_enqueue_style('child-full-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
	
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

function add_menu_item ( $items, $args ) {
	if (is_user_logged_in() && $args->theme_location == 'main_menu' ) {
		$items = '
			<li class="menu-item menu-item-592">
				<a class="menu-link" href="http://planty.local/about-us/">
					<span class="text-wrap">Nous rencontrer</span>
				</a>
			</li> 
			<li class="menu-item">
				<a class="menu-link" href="http://planty.local/wp-admin/">
					<span class="text-wrap">Admin</span>
				</a>
			</li>
			<li class="menu-item menu-item-593">
				<a class="menu-link" href="http://planty.local/contact-us/">
					<span class="text-wrap">Commander</span>
				</a>
			</li> 
		';
		return $items;
	}
	else {
		return $items;
	}
}
add_filter('wp_nav_menu_items' , 'add_menu_item', 10, 2);

/*
function add_menu_item ( $items ) {
	if (is_user_logged_in () ) {
		if (wp_nav_menu('theme_location' == 'Menu Principal')) {
			$items = '
			<li class="menu-item menu-item-592">
				<a class="menu-link" href="http://planty.local/about-us/">
					<span class="text-wrap">Nous rencontrer</span>
				</a>
			</li> 
			<li class="menu-item">
				<a class="menu-link" href="http://planty.local/wp-admin/">
					<span class="text-wrap">Admin</span>
				</a>
			</li>
			<li class="menu-item menu-item-593">
				<a class="menu-link" href="http://planty.local/contact-us/">
					<span class="text-wrap">Commander</span>
				</a>
			</li> 
			';
			return $items;
		}
		else {
			return $items;
		}
	}
	else {
		return $items;
	}
}
add_filter('wp_nav_menu_items' , 'add_menu_item');
*/