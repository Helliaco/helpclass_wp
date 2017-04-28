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
   
    if( (in_array('wc_product_vendors_admin_vendor', $user->roles) || in_array('wc_product_vendors_manager_vendor', $user->roles) ) && isset($_GET['ficha']) ){
        $forms = new FormsXD($user->ID);
        echo '<div id="ficha_professor"><div class="row"><div class="col-md-12"><strong>Email:</strong> '. $user->user_email .'</div></div>' . $forms->inputs_ficha_professor() . '</div>';
    }else{
        if($user->roles[0] == 'wc_product_vendors_pending_vendor'){
            echo '<a class="ativar_professor" data-id="'. $user->ID .'" href="javascript:void(0)" style="position: fixed;top: 80px;right: 20px;background: #1b9e25;color: #fff;padding: 5px 10px;text-decoration: none;border-radius: 5px;">'. __( "Aprovar Professor", "helpclass" )  .'</a>';
        }elseif( in_array('wc_product_vendors_admin_vendor', $user->roles) || in_array('wc_product_vendors_manager_vendor', $user->roles) ){
            echo '<a href="' . admin_url('/user-edit.php?user_id='. $user->ID .'&ficha=1') .'" id="btb_float btn btn-primary" style="position: fixed;top: 80px;right: 20px;background: #5590da;color: #fff;padding: 5px 10px;text-decoration: none;border-radius: 5px;">Ficha do professor</a>';
        }
    }
}

add_action('show_user_profile', 'form_ficha_professor_cb',999);
add_action('edit_user_profile', 'form_ficha_professor_cb',999);


add_action('edit_user_profile', 'top_in_admin_header',-999);



//add_action( 'in_admin_header', 'top_in_admin_header' );

function top_in_admin_header($user) {
   
}

 add_action('edit_user_profile_update', 'update_form_professores');
 
 function update_form_professores($user_id) {

     if ( current_user_can('edit_user',$user_id) ){
         $formxd = new FormsXD();
         $inputs = $formxd->inputs_form();
         $i = 0;
         $meta = array();
         foreach($inputs as $sec){
            foreach($sec as $input){
                if($input[0] == 'niveis_ensino'){
                    $name = 'nivel_ensino';
                }else{
                    $name = $input[0];
                }
                $meta_post = ( $input[0] == 'experiencias'|| $input[0] == 'niveis_ensino' ) ? $_POST[$name] :  sanitize_text_field( $_POST[$name] );
                $meta[$i][$input[0]] = $meta_post;
            }
            update_user_meta($user_id, 'hc_meta_sec_'.$i, $meta[$i]);
            $i++;
         }
     }

 }