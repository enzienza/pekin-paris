<?php

/*
Name: MB_four_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 4 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/



// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_four_service', 1);

function add_MB_four_service() {
	add_meta_box(
        'four_service',							// ID_META_BOX
        'Service 4',							// TITLE_META_BOX
        'MB_four_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_four_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_four_service' );

function script_MB_four_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-four-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-four-service').on('click', function() {
	        		var row = $('.empty-four-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-four-service screen-reader-text');
	        		row.insertBefore('#table-four-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-four-service

	        	$('.delete-four-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-four-service

	        	// $('#table-four-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-four-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_four_service



// Construct Metabox -----------------------------------------------------------
function MB_four_service($POST){

	$titre_four_service   = get_post_meta($POST->ID, 'titre_four_service', true);
	$repeat_four_services = get_post_meta($POST->ID, 'repeat_four_services', true);

	wp_nonce_field( 'MB_four_service_nonce', 'MB_four_service_nonce' );
    ?>

        <div class="">
            <label for="titre_four_service">Titre </label>
            <input type="text" class="widefat" id="titre_four_service" name="titre_four_service" value="<?php echo $titre_four_service ?>" />
        </div>

		<!-- START : table -->
		<table id="table-four-service" width="100%">
			<thead>
				<tr>
					<th width="5%"></th>
					<th width="15%">Numéro</th>
					<th width="60%">Nom</th>
					<th width="15%">Prix</th>
				</tr>
			</thead>
			<tbody>
			<?php
				if ( $repeat_four_services ) :
					foreach ( $repeat_four_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-four-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_four_service[]" value="<?php if($field['numb_four_service'] != '') echo esc_attr( $field['numb_four_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_four_service[]" value="<?php if ($field['name_four_service'] != '') echo esc_attr( $field['name_four_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_four_service[]" value="<?php if ($field['price_four_service'] != '') echo esc_attr( $field['price_four_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank four
						?>
						<tr>
							<td><a class="button delete-four-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_four_service[]" /></td>
							<td><input type="text" class="widefat" name="name_four_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_four_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden four for jQuery -->
					<tr class="empty-row empty-four-service screen-reader-text">
						<td><a class="button delete-four-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_four_service[]" /></td>
						<td><input type="text" class="widefat" name="name_four_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_four_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-four-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-four-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-four-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-four-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_four_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_four_service');

function save_MB_four_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_four_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_four_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_four_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_four_services', true);
	$new = array();

	$numb_four_services = $_POST['numb_four_service'];
	$name_four_services = $_POST['name_four_service'];
	$price_four_services = $_POST['price_four_service'];

	$count = count( $numb_four_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_four_services[$i] != '') :
			$new[$i]['numb_four_service'] = stripslashes( strip_tags( $numb_four_services[$i]));

		if($name_four_services[$i] == '')
			$new[$i]['name_four_service'] = '';
		else
			$new[$i]['name_four_service'] = stripslashes( $name_four_services[$i]); // and however you want to sanitize

		if($price_four_services[$i] == '')
			$new[$i]['price_four_service'] = '';
		else
				$new[$i]['price_four_service'] = stripslashes( $price_four_services[$i]); // and however you want to sanitize
		endif;
	}



	if(isset($_POST['titre_four_service'])){
        update_post_meta($POST_ID, 'titre_four_service', $_POST['titre_four_service']);
    }


	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_four_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_four_services', $old);

} // END ==> save_MB_four_service
