<?php
/*
Plugin Name: Memolane
Plugin URI: https://memolane.uservoice.com/knowledgebase/articles/8443-a-guide-to-embedding-your-memolane
Description: Embed the awesome Memolane media timeline view in your blog page.
Version: 0.02
Author: memolane
Author URI: http://memolane.com/site/support.html
License: GPL2
*/

// [memolane lane="memolane" width="450" height="600" background="#000044" border="1px solid #9AF"]
function memolane_func( $atts ) {
	extract( shortcode_atts( array(
		'lane' => 'memolane',
		'width' => '500',
		'height' => '500',
		'background' => 'default', // set to Memolane default
		'border' => 'default' // set to Memolane default
	), $atts ) ) ;
	
	if ( $lane != preg_replace( '/[^A-Za-z0-9_]+/', '', $lane ) )
		$lane = 'memolane';
	
	$width = (int)$width;
	$height = (int)$height;
	
	$background = str_replace( '#', '', $background );
	if ( $background != preg_replace( '/[^A-Fa-f0-9]+/', '', $background ) )
		$background = 'default';
	else
		$background = urlencode( "#{$background}" );
	
	if ( $border != preg_replace( '/[^A-Za-z0-9\s#]+/', '', $border ) )
		$border = 'default';
	$border = urlencode( $border );

	return "<script src='http://memolane.com/{$lane}.js?&width={$width}&height={$height}&background={$background}&border={$border}'></script>";
}
add_shortcode( 'memolane', 'memolane_func' );
?>
