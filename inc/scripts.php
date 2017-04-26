<?php
function scripts_padrao(){
    $td = get_template_directory_uri();

    wp_deregister_script( 'jquery' );
	wp_deregister_script( 'wp-embed' );

    $var_global_js = array(
		'url_home' => home_url(),
		'loading' => '<div class="cssload-jumping"><span></span><span></span><span></span><span></span><span></span></div>',
	);


    wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.1.1.min.js', '', '3.1.1', true );
    wp_enqueue_script( 'tether','https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', '', '1.4.0', true );
    wp_enqueue_script( 'bootstrap','https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js', '', '4.0.0', true );
	wp_enqueue_script( 'helpclass', $td . '/js/helpclass.js', '', '1.0.0', true );

	wp_enqueue_style( 'helpclass', $td . '/css/default.css');
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'font-raleway', 'https://fonts.googleapis.com/css?family=Raleway:900');
	

    wp_localize_script( 'helpclass', 'ob_global_js', $var_global_js );
}

add_action('wp_enqueue_scripts', 'scripts_padrao');




function scripts_admin_helpclass_cb(){
	global $security_nonce;
	$td = get_template_directory_uri();
	wp_enqueue_script( 'helpclass_admin', $td . '/admin/scripts.js', '', '1.0.0', true );
	$var_global_js = array(
		'url_home' => home_url(),
		'loading' => '<div class="cssload-jumping"><span></span><span></span><span></span><span></span><span></span></div>',
		'security' => $security_nonce,
	);
	if(isset($_GET['ficha'])){
		 wp_enqueue_script( 'tether','https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', '', '1.4.0', true );
		wp_enqueue_style( 'helpclass-admin', $td . '/css/admin-ficha-professor.css');
		wp_enqueue_script( 'bootstrap','https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js', '', '4.0.0', true );
	}
	wp_enqueue_style( 'helpclass-admin', $td . '/css/admin.css');
	wp_localize_script( 'helpclass_admin', 'ob_global_js', $var_global_js );
}

add_action( 'admin_enqueue_scripts', 'scripts_admin_helpclass_cb' );