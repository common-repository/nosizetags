<?php
/*
Plugin Name: NoSizeTags
Description: Tired from folded or stretched images you wanted to fit into your theme with max-width css tag? This plugin solves the problem.
Version: 1.0
Author: Eugene Gargron Rochko
Author URI: http://www.animesquare.exofire.net
*/

function nosizetags($text) {
		$text = preg_replace('/ height=\"([^\"]*)\"/si', '', $text);

	return $text;
}

add_filter('the_content', 'nosizetags', 42);
?>