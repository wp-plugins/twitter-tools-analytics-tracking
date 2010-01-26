<?php
/*
Plugin Name: Twitter Tools Tagger
Plugin URI: http://www.leewillis.co.uk/wordpress-plugins/?utm_source=wordpress&utm_medium=www&utm_campaign=twitter-tools-analytics-tracking
Description: Tag blog tweets with Google Analytics tracking code
Version: 1.1
Author: Lee Willis
Author URI: http://www.leewillis.co.uk/?utm_source=wordpress&utm_medium=www&utm_campaign=twitter-tools-analytics-tracking
*/

function ses_url_tagger($url) {
	if (stristr($url,'?')) {
		// URL already has query args, tag on the end
		$ses_url = $url . '&';
	} else {
		// URL doesn't have query args, tag on the end
		$ses_url = $url . '?';
	}
	$ses_url = $ses_url . 'utm_source=twitter&utm_medium=twitter&utm_campaign=twitter';
		
        return $ses_url;
}
add_filter('tweet_blog_post_url', 'ses_url_tagger');

?>
