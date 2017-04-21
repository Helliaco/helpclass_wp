<?php

//add_filter( 'product_vendors_vendor_slug', 'change_vendor_url_slug' );
function change_vendor_url_slug( $slug ) {
  $slug = 'professor';
  return $slug;
}




function rpw_actions_cb_vendors($actions, $user_object) {
    if($user_object->roles[0] == 'wc_product_vendors_pending_vendor'){
	$actions['approve_professor'] = '<a class="ativar_professor" data-id="'. $user_object->ID .'" href="#" >'. __( "Aprovar Professor", "helpclass" )  .'</a>';
    }
	return $actions;
}
add_filter('user_row_actions', 'rpw_actions_cb_vendors', 10, 2);