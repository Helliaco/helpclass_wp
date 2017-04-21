<?php


function cadastrar_professor_cb(){
    check_ajax_referer( 'secret_action_noonce', 'security' );
    $response = $values = array();
	parse_str($_REQUEST['inputs'], $values);

    if(!filter_var($values['email'], FILTER_VALIDATE_EMAIL)){
        $response['msg'] = 'E-mail inválido';
    }else{

        $assinante = isset($values['assinante']) ? true : false;
        $userdata = array(
                'user_login' => $values['email'],
                'user_email' => $values['email'],
                'first_name' => $values['name'],
                'last_name' => $assinante ? '' : $values['sobrenome'],
                'description' => $assinante ? '' : $values['sobre'],
                'role' => $assinante ? 'subscriber' : 'wc_product_vendors_pending_vendor',
            );
        $new_user = wp_insert_user($userdata );

        if($new_user){

            if(isset($new_user->errors['existing_user_login'])){
                 $response['msg'] = $new_user->errors['existing_user_login'][0];
                 $response['error'] = $new_user->errors;

            }else{
                if(!$assinante){
                    update_user_meta( $new_user, 'billing_state', $values['estado'] );
                    $redirect_to = !empty( $values['redirect_to'] ) ? $values['redirect_to'] : get_permalink(31);
                    $response['msg'] = 'Professor registrado com sucesso.';

                }else{
                     $redirect_to = !empty( $values['redirect_to'] ) ? $values['redirect_to'] : get_permalink(37);
                     $response['msg'] = 'Cadastro realizado com sucesso.';
                }
                update_user_meta( $new_user, 'billing_phone', $values['phone'] );
                update_user_meta( $new_user, 'billing_city', $values['cidade'] );

            $response['redirect'] = $redirect_to;
            }

        }else{
            $response['msg'] = 'Erro ao criar usuário. Tente novamente mais tarde.';
            $response['error'] = $new_user;
        }
    }
    
    wp_send_json( $response );
    die;
}
add_action( 'wp_ajax_c_prof', 'cadastrar_professor_cb' );
add_action( 'wp_ajax_nopriv_c_prof', 'cadastrar_professor_cb' );







function aprovar_vendedor_cb(){

    // Essa função vai gerar a página do professor (vendor), adicionar os meta dados necessarios para ter acesso ao admin.
    check_ajax_referer( 'secret_action_noonce', 'security' );
	$id = intval($_REQUEST['id']);

    $user = get_user_by('ID', $id);

    if($user){

        $user_pagina = get_user_meta($user->ID, 'pagina_do_vendedor', true );

        if(!$user_pagina){

            $term = wp_insert_term( $user->first_name . ' '. $user->last_name , 'wcpv_product_vendors', array('description' => ' ') );
            if(isset($term['term_id'])){
                update_term_meta( $term['term_id'], 'vendor_data', array('admins' => $user->ID) );
                update_user_meta( $user->ID, 'pagina_do_vendedor', $term['term_id'] );
            }

        }
        
        if($user->roles[0] == 'wc_product_vendors_pending_vendor'){
            wp_update_user( array(
                'ID' => $user->ID,
                'roles' => array(
                    ''
                )

            ) );



        }

    }


}

add_action( 'wp_ajax_approve_vendor', 'aprovar_vendedor_cb' );




