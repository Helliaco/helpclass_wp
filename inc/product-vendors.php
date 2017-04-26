<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

require_once('class/form-professores.php');

//add_filter( 'product_vendors_vendor_slug', 'change_vendor_url_slug' );
function change_vendor_url_slug( $slug ) {
  $slug = 'professor';
  return $slug;
}




function rpw_actions_cb_vendors($actions, $user_object) {
    if($user_object->roles[0] == 'wc_product_vendors_pending_vendor'){
	$actions['approve_professor'] = '<a class="ativar_professor" data-id="'. $user_object->ID .'" href="javascript:void(0)" >'. __( "Aprovar Professor", "helpclass" )  .'</a>';
    }elseif(in_array('wc_product_vendors_admin_vendor', $user_object->roles) || in_array('wc_product_vendors_manager_vendor', $user_object->roles)){
        $actions['fica_professor'] = '<a href="' . admin_url('/user-edit.php?user_id='. $user_object->ID .'&ficha=1') .'" >'. __( "Ficha do Professor", "helpclass" )  .'</a>';
    }
	return $actions;
}
add_filter('user_row_actions', 'rpw_actions_cb_vendors', 10, 2);







// Ficha do professor:
function form_ficha_professor_cb($user){
    if((in_array('wc_product_vendors_admin_vendor', $user->roles) || in_array('wc_product_vendors_manager_vendor', $user->roles) ) && isset($_GET['ficha']) ){
        $forms = new FormsXD($user->ID);
        echo '<div id="ficha_professor">' . $forms->inputs_ficha_professor() . '</div>';
    }
}

add_action('show_user_profile', 'form_ficha_professor_cb',999);
add_action('edit_user_profile', 'form_ficha_professor_cb',999);