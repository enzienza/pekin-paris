<?php

/*
Name: MB_eleven_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 11 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/


// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_eleven_service', 1);

function add_MB_eleven_service() {
	add_meta_box(
        'eleven_service',						// ID_META_BOX
        'Service 11',							// TITLE_META_BOX
        'MB_eleven_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_eleven_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_eleven_service' );

function script_MB_eleven_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-eleven-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-eleven-service').on('click', function() {
	        		var row = $('.empty-eleven-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-eleven-service screen-reader-text');
	        		row.insertBefore('#table-eleven-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-eleven-service

	        	$('.delete-eleven-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-eleven-service

	        	// $('#table-eleven-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-eleven-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_eleven_service



// Construct Metabox -----------------------------------------------------------
function MB_eleven_service($POST){

	$titre_eleven_service   = get_post_meta($POST->ID, 'titre_eleven_service', true);
	$repeat_eleven_services = get_post_meta($POST->ID, 'repeat_eleven_services', true);

	wp_nonce_field( 'MB_eleven_service_nonce', 'MB_eleven_service_nonce' );
    ?>

        <div class="">
            <label for="titre_eleven_service">Titre </label>
            <input type="text" class="widefat" id="titre_eleven_service" name="titre_eleven_service" value="<?php echo $titre_eleven_service ?>" />
        </div>

		<!-- START : table -->
		<table id="table-eleven-service" width="100%">
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
				if ( $repeat_eleven_services ) :
					foreach ( $repeat_eleven_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-eleven-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_eleven_service[]" value="<?php if($field['numb_eleven_service'] != '') echo esc_attr( $field['numb_eleven_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_eleven_service[]" value="<?php if ($field['name_eleven_service'] != '') echo esc_attr( $field['name_eleven_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_eleven_service[]" value="<?php if ($field['price_eleven_service'] != '') echo esc_attr( $field['price_eleven_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank eleven
						?>
						<tr>
							<td><a class="button delete-eleven-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_eleven_service[]" /></td>
							<td><input type="text" class="widefat" name="name_eleven_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_eleven_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden eleven for jQuery -->
					<tr class="empty-row empty-eleven-service screen-reader-text">
						<td><a class="button delete-eleven-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_eleven_service[]" /></td>
						<td><input type="text" class="widefat" name="name_eleven_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_eleven_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-eleven-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-eleven-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-eleven-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-eleven-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_eleven_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_eleven_service');

function save_MB_eleven_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_eleven_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_eleven_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_eleven_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_eleven_services', true);
	$new = array();

	$numb_eleven_services = $_POST['numb_eleven_service'];
	$name_eleven_services = $_POST['name_eleven_service'];
	$price_eleven_services = $_POST['price_eleven_service'];

	$count = count( $numb_eleven_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_eleven_services[$i] != '') :
			$new[$i]['numb_eleven_service'] = stripslashes( strip_tags( $numb_eleven_services[$i]));

		if($name_eleven_services[$i] == '')
			$new[$i]['name_eleven_service'] = '';
		else
			$new[$i]['name_eleven_service'] = stripslashes( $name_eleven_services[$i]); // and however you want to sanitize

		if($price_eleven_services[$i] == '')
			$new[$i]['price_eleven_service'] = '';
		else
				$new[$i]['price_eleven_service'] = stripslashes( $price_eleven_services[$i]); // and however you want to sanitize
		endif;
	}



	if(isset($_POST['titre_eleven_service'])){
        update_post_meta($POST_ID, 'titre_eleven_service', $_POST['titre_eleven_service']);
    }


	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_eleven_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_eleven_services', $old);

} // END ==> save_MB_eleven_service
