<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function admin_init_hc(){
	global $security_nonce;
	$security_nonce = wp_create_nonce( 'secret_action_noonce' );
	
}
add_action( 'admin_init', 'admin_init_hc');

require_once('meta_box.php');

