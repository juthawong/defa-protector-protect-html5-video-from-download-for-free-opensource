<?php
/*
Plugin Name: Defa Protector Platinum
Plugin URI: http://ww2.juthawong.com/defaprotector
Description: Protect your video from being downloaded or stolen
Version: 6.1
Author: Juthawong Naisanguansee
Author URI: http://www.juthawong.com/
License: GPL
*/
add_action('wp_head','defago');
add_action('wp_footer', 'defaset');

function defago()
{
include( plugin_dir_path( __FILE__ ) . 'includetop.php');

}
function defaset()
{

include( plugin_dir_path( __FILE__ ) . 'includebottom.php');
}



?>