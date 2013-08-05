<?php
/*
 Plugin Name: Davina
 Description: A horror story involving post content, filters, and anonymous objects
 Version: 1.0
 Author: Tom J Nowell
 Author URI: http://www.tomjn.com
*/

class Davina_Plugin {
	function __construct() {
		add_filter( 'the_content', array( $this, 'swear' ), -1 );
	}
	function swear( $content ) {
		return "http://www.youtube.com/watch?v=59EiPxJsXmY\n\n<p>Hello big brother house, you are live on channel 4, do not say sh*t f*ck or b*gger</p>";
	}
}
// try and remove the swear filter
// without changing this line:
new Davina_Plugin();