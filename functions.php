<?php

/**
 * Custom functions and things will live here
 */

function youandi_wp_title( $title, $sep ) {
	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	return $title;
}
add_filter( 'wp_title', 'youandi_wp_title', 10, 2 );


class ResourceManager {
	private static $store;

	const IMAGE_PATH = 'wp-content/themes/youandi/images/';

	public static function add($name, $type) {
		if (!isset(self::$store)) {
			self::$store = array(
				'js' => array(),
				'css' => array(),
			);
		}

		if (!in_array($type, array('js', 'css'))) {
			// print warning message function
			// youandi_warn("$name not passed valid js or css type: $type");
		}

		$root_path = get_bloginfo('template_directory');
		self::$store[$type][] = "$root_path/$name";
	}

	public static function getTags($type) {
		$tag_string = '';
		foreach (self::$store[$type] as $path) {
			if ($type === 'css') {
				$tag_string .= "<link rel='stylesheet' type='text/css' href='$path'>";
			} else if ($type === 'js') {
				$tag_string .= "<script type='text/javascript' src='$path'></script>";
			}
		}
		return $tag_string;
	}
}

ResourceManager::add('style.css', 'css');
ResourceManager::add('css/colors.css', 'css');
ResourceManager::add('css/header.css', 'css');