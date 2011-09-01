<?php
/*
Plugin Name: include-file
Plugin URI: http://wordpress.org/extend/plugins/include-file/
Description: Includes the contents of a file at a given url in a post.
Version: 1
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
