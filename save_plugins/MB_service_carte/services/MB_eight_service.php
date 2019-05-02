<?php

/*
Name: MB_eight_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 8 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/


// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_eight_service', 1);

function add_MB_eight_service() {
	add_meta_box(
        'eight_service',					  	// ID_META_BOX
        'Service 8',							// TITLE_META_BOX
        'MB_eight_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_eight_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_eight_service' );

function script_MB_eight_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-eight-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-eight-service').on('click', function() {
	        		var row = $('.empty-eight-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-eight-service screen-reader-text');
	        		row.insertBefore('#table-eight-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-eight-service

	        	$('.delete-eight-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-eight-service

	        	// $('#table-eight-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-eight-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_eight_service



// Construct Metabox -----------------------------------------------------------
function MB_eight_service($POST){

	$titre_eight_service   = get_post_meta($POST->ID, 'titre_eight_service', true);
	$repeat_eight_services = get_post_meta($POST->ID, 'repeat_eight_services', true);

	wp_nonce_field( 'MB_eight_service_nonce', 'MB_eight_service_nonce' );
    ?>

        <div class="">
            <label for="titre_eight_service">Titre </label>
            <input type="text" class="widefat" id="titre_eight_service" name="titre_eight_service" value="<?php echo $titre_eight_service ?>" />
        </div>

		<!-- START : table -->
		<table id="table-eight-service" width="100%">
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
				if ( $repeat_eight_services ) :
					foreach ( $repeat_eight_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-eight-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_eight_service[]" value="<?php if($field['numb_eight_service'] != '') echo esc_attr( $field['numb_eight_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_eight_service[]" value="<?php if ($field['name_eight_service'] != '') echo esc_attr( $field['name_eight_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_eight_service[]" value="<?php if ($field['price_eight_service'] != '') echo esc_attr( $field['price_eight_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank eight
						?>
						<tr>
							<td><a class="button delete-eight-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_eight_service[]" /></td>
							<td><input type="text" class="widefat" name="name_eight_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_eight_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden eight for jQuery -->
					<tr class="empty-row empty-eight-service screen-reader-text">
						<td><a class="button delete-eight-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_eight_service[]" /></td>
						<td><input type="text" class="widefat" name="name_eight_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_eight_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-eight-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-eight-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-eight-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-eight-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_eight_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_eight_service');

function save_MB_eight_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_eight_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_eight_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_eight_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_eight_services', true);
	$new = array();

	$numb_eight_services = $_POST['numb_eight_service'];
	$name_eight_services = $_POST['name_eight_service'];
	$price_eight_services = $_POST['price_eight_service'];

	$count = count( $numb_eight_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_eight_services[$i] != '') :
			$new[$i]['numb_eight_service'] = stripslashes( strip_tags( $numb_eight_services[$i]));

		if($name_eight_services[$i] == '')
			$new[$i]['name_eight_service'] = '';
		else
			$new[$i]['name_eight_service'] = stripslashes( $name_eight_services[$i]); // and however you want to sanitize

		if($price_eight_services[$i] == '')
			$new[$i]['price_eight_service'] = '';
		else
				$new[$i]['price_eight_service'] = stripslashes( $price_eight_services[$i]); // and however you want to sanitize
		endif;
	}



	if(isset($_POST['titre_eight_service'])){
        update_post_meta($POST_ID, 'titre_eight_service', $_POST['titre_eight_service']);
    }


	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_eight_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_eight_services', $old);

} // END ==> save_MB_eight_service
