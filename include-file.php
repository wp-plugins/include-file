<?php
/*
Plugin Name: wp-include-file
Plugin URI: http://tylerstafford.net
Description: Includes the contents of a file at a given url in a post.
Author: Tyler Stafford <tyler.stafford@gmail.com>
Author URI: http://tylerstafford.net
*/

function tsIncludeFile($atts,$content=null,$code="") {
	$content = file_get_contents($atts['url']); 
	if ($content == true) {
		return $content;
	} else {
		return "An error occured retreiving " . $atts['url'];
	}
	return $atts['url'];
}

add_shortcode('include_file','tsIncludeFile');
?>
