<?php

/*
Plugin Name: Emporter | Solution Provisoir
Description: Métabox pour les emporters | Tableau STATIQUE | page-emporter
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.5.2
*/

// Créer la metabox ------------------------------------------------------------
add_action('admin_init', 'add_MB_static_emporter');

function add_MB_static_emporter() {
	add_meta_box(
		'metabox_repeatable_titre',					// ID_META_BOX
		'Liste',									// TITLE_META_BOX
		'MB_static_emporter',						// CALLBACK
		'emporters',								// WP_SCREEN
		'normal',									// CONTEXT [ normal | advanced | side ]
		'default'									// PRIORITY [ hight | core | default | low ]
	);
} // END ==> add_MB_static_emporter


// Construction de la metabox --------------------------------------------------
function MB_static_emporter($POST){
	wp_nonce_field( 'MB_static_emporter_nonce', 'MB_static_emporter_nonce' );

	$L1_numb_takeaway   = get_post_meta($POST->ID, 'L1_numb_takeaway', true);
    $L1_name_takeaway     = get_post_meta($POST->ID, 'L1_name_takeaway', true);
    $L1_price_takeaway   = get_post_meta($POST->ID, 'L1_price_takeaway', true);

	?>
	<table id="table-emporter" width:"100%">
		<thead>
			<tr>
				<th width="5%"></th>
				<th width="15%">Numéro</th>
				<th width="60%">Nom</th>
				<th width="15%">Prix</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td><input type="text" class="widefat" id="L1_numb_takeaway" name="L1_numb_takeaway" value="<?php echo $L1_numb_takeaway ?>" /></td>
				<td><input type="text" class="widefat" id="L1_name_takeaway" name="L1_name_takeaway" value="<?php echo $L1_name_takeaway ?>" /></td>
				<td><input type="text" class="widefat" id="L1_price_takeaway" name="L1_price_takeaway" value="<?php echo $L1_price_takeaway ?>" /></td>
			</tr>
		</tbody>
	</table>


	<?php
} // END ==> MB_static_emporter


// Sauvegarder la metabox ------------------------------------------------------
add_action('save_post', 'save_MB_static_emporter');

function save_MB_static_emporter($POST_ID) {
	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_static_emporter_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_static_emporter_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_static_emporter_nonce' ) )
		return $POST_ID;


	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return $POST_ID;

	// Check the user's permissions.
	if ( 'emporters' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $POST_ID ) )
			return $POST_ID;

	} else {

		if ( ! current_user_can( 'edit_post', $POST_ID ) )
			return $POST_ID;
	}


	// OK, its safe for us to save the data now. -------------------------------


	if(isset($_POST['L1_numb_takeaway'])){
        update_post_meta($POST_ID, 'L1_numb_takeaway', $_POST['L1_numb_takeaway']);
    }

	if(isset($_POST['L1_name_takeaway'])){
        update_post_meta($POST_ID, 'L1_name_takeaway', $_POST['L1_name_takeaway']);
    }

	if(isset($_POST['L1_price_takeaway'])){
        update_post_meta($POST_ID, 'L1_price_takeaway', $_POST['L1_price_takeaway']);
    }


} // END ==> save_MB_static_emporter
