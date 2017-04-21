<?php

function opes_de_pagina_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function opes_de_pagina_add_meta_box() {
	add_meta_box(
		'opes_de_pagina-opes-de-pagina',
		__( 'Opções de Pagina', 'opes_de_pagina' ),
		'opes_de_pagina_html',
		'post',
		'normal',
		'high'
	);
	add_meta_box(
		'opes_de_pagina-opes-de-pagina',
		__( 'Opções de Pagina', 'opes_de_pagina' ),
		'opes_de_pagina_html',
		'page',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'opes_de_pagina_add_meta_box' );

function opes_de_pagina_html( $post) {
	wp_nonce_field( '_opes_de_pagina_nonce', 'opes_de_pagina_nonce' ); ?>

	<p>
		<label for="opes_de_pagina_ttulo_destaque"><?php _e( 'Título Destaque', 'opes_de_pagina' ); ?></label><br>
		<input type="text" name="opes_de_pagina_ttulo_destaque" id="opes_de_pagina_ttulo_destaque" value="<?php echo opes_de_pagina_get_meta( 'opes_de_pagina_ttulo_destaque' ); ?>">
	</p>	<p>
		<label for="opes_de_pagina_sub_ttulo"><?php _e( 'Sub título', 'opes_de_pagina' ); ?></label><br>
		<input type="text" name="opes_de_pagina_sub_ttulo" id="opes_de_pagina_sub_ttulo" value="<?php echo opes_de_pagina_get_meta( 'opes_de_pagina_sub_ttulo' ); ?>">
	</p>	<p>
		<label for="opes_de_pagina_custom_html"><?php _e( 'Custom HTML', 'opes_de_pagina' ); ?></label><br>
		<textarea name="opes_de_pagina_custom_html" id="opes_de_pagina_custom_html" ><?php echo opes_de_pagina_get_meta( 'opes_de_pagina_custom_html' ); ?></textarea>
	
	</p><?php
}

function opes_de_pagina_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['opes_de_pagina_nonce'] ) || ! wp_verify_nonce( $_POST['opes_de_pagina_nonce'], '_opes_de_pagina_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['opes_de_pagina_ttulo_destaque'] ) )
		update_post_meta( $post_id, 'opes_de_pagina_ttulo_destaque', esc_attr( $_POST['opes_de_pagina_ttulo_destaque'] ) );
	if ( isset( $_POST['opes_de_pagina_sub_ttulo'] ) )
		update_post_meta( $post_id, 'opes_de_pagina_sub_ttulo', esc_attr( $_POST['opes_de_pagina_sub_ttulo'] ) );
	if ( isset( $_POST['opes_de_pagina_custom_html'] ) )
		update_post_meta( $post_id, 'opes_de_pagina_custom_html', esc_attr( $_POST['opes_de_pagina_custom_html'] ) );
}
add_action( 'save_post', 'opes_de_pagina_save' );

/*
	Usage: opes_de_pagina_get_meta( 'opes_de_pagina_ttulo_destaque' )
	Usage: opes_de_pagina_get_meta( 'opes_de_pagina_sub_ttulo' )
	Usage: opes_de_pagina_get_meta( 'opes_de_pagina_custom_html' )
*/
