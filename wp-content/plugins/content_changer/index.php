<?php
/*/
Plugin Name: Content Changer
Plugin URI: www.pluggin.com
Description: Demonstrates how a WP plugin works
Version: 101
Author: Ali Abbas
Author URI: www.pluggin.com
/*/

function basic_content_replace ($text){
	$text = str_replace("WordPress","New",$text);
	return $text;
}
add_filter("the_content","basic_content_replace");
add_filter("the_title","basic_content_replace");

?>