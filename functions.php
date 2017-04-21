<?php 
add_action( 'after_setup_theme', 'mx_after_setup_theme' );
function mx_after_setup_theme() {
    add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	show_admin_bar(false);
}


require_once('woocommerce.php');
require_once('inc/ajax.php');
require_once('inc/scripts.php');
require_once('inc/product-vendors.php');

if(is_admin()){
	require_once('admin/admin.php');
}
// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'dns-prefetch' );
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head',      'rest_output_link_wp_head'              );
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


register_nav_menus( array(
	'menu_principal' => 'Menu Principal para usuários deslogados.',
	'menu_principal_logado' => 'Menu para usuarios logados. Isso inclui Professores, Alunos e Professores pendentes.',
	'menu_principal_professor' => 'Menu para Professores e Admins. ',
	'footer_menu' => 'Menu Footer',
) );

//adicionar class nav-bar do bootstrap ao menu do wordpress
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
	$classes[] = 'nav-item';
    return $classes;
}
