<?php
/*
Plugin Name: Create with code
Plugin URI: https://github.com/pddring/create-withcode
Description: Share and run python code from create.withcode.uk with a shortcode
Version: 1.0
Author: Pete Dring
Author URI: http://blog.withcode.uk
License: GPL2
*/
if ( !function_exists( 'add_action' ) ) {
	exit;
}

add_shortcode("withcode", 'withcode_sc');
function withcode_sc($atts){
    $a = shortcode_atts( array(
        'id' => 'T',
        'mode' => 'embed',
        'width' => '100%',
        'height' => '400px'
    ), $atts );
    
    $mode = 'embed';
    if($a['mode'] == 'run') {
    	$mode = 'run';
    }
    
    $html = '<iframe frameborder="0" width="' . $a['width'] . '" height="' . $a['height'] . '" src="https://create.withcode.uk/' . $mode . '/' . $a['id'] . '"><a target="_blank" href="https://create.withcode.uk/python/' . $a['id'] . '">create.withcode.uk</a></iframe>';
    return $html;
}
