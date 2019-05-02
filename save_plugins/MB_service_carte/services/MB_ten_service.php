<?php

/*
Name: MB_ten_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 10 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/


// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_ten_service', 1);

function add_MB_ten_service() {
	add_meta_box(
        'ten_service',							// ID_META_BOX
        'Service 10',							// TITLE_META_BOX
        'MB_ten_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_ten_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_ten_service' );

function script_MB_ten_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-ten-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-ten-service').on('click', function() {
	        		var row = $('.empty-ten-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-ten-service screen-reader-text');
	        		row.insertBefore('#table-ten-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-ten-service

	        	$('.delete-ten-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-ten-service

	        	// $('#table-ten-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-ten-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_ten_service



// Construct Metabox -----------------------------------------------------------
function MB_ten_service($POST){

	$titre_ten_service   = get_post_meta($POST->ID, 'titre_ten_service', true);
	$repeat_ten_services = get_post_meta($POST->ID, 'repeat_ten_services', true);

	wp_nonce_field( 'MB_ten_service_nonce', 'MB_ten_service_nonce' );
    ?>

        <div class="">
            <label for="titre_ten_service">Titre </label>
            <input type="text" class="widefat" id="titre_ten_service" name="titre_ten_service" value="<?php echo $titre_ten_service ?>" />
        </div>

		<!-- START : table -->
		<table id="table-ten-service" width="100%">
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
				if ( $repeat_ten_services ) :
					foreach ( $repeat_ten_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-ten-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_ten_service[]" value="<?php if($field['numb_ten_service'] != '') echo esc_attr( $field['numb_ten_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_ten_service[]" value="<?php if ($field['name_ten_service'] != '') echo esc_attr( $field['name_ten_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_ten_service[]" value="<?php if ($field['price_ten_service'] != '') echo esc_attr( $field['price_ten_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank ten
						?>
						<tr>
							<td><a class="button delete-ten-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_ten_service[]" /></td>
							<td><input type="text" class="widefat" name="name_ten_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_ten_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden ten for jQuery -->
					<tr class="empty-row empty-ten-service screen-reader-text">
						<td><a class="button delete-ten-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_ten_service[]" /></td>
						<td><input type="text" class="widefat" name="name_ten_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_ten_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-ten-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-ten-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-ten-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-ten-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_ten_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_ten_service');

function save_MB_ten_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_ten_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_ten_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_ten_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_ten_services', true);
	$new = array();

	$numb_ten_services = $_POST['numb_ten_service'];
	$name_ten_services = $_POST['name_ten_service'];
	$price_ten_services = $_POST['price_ten_service'];

	$count = count( $numb_ten_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_ten_services[$i] != '') :
			$new[$i]['numb_ten_service'] = stripslashes( strip_tags( $numb_ten_services[$i]));

		if($name_ten_services[$i] == '')
			$new[$i]['name_ten_service'] = '';
		else
			$new[$i]['name_ten_service'] = stripslashes( $name_ten_services[$i]); // and however you want to sanitize

		if($price_ten_services[$i] == '')
			$new[$i]['price_ten_service'] = '';
		else
				$new[$i]['price_ten_service'] = stripslashes( $price_ten_services[$i]); // and however you want to sanitize
		endif;
	}



	if(isset($_POST['titre_ten_service'])){
        update_post_meta($POST_ID, 'titre_ten_service', $_POST['titre_ten_service']);
    }


	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_ten_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_ten_services', $old);

} // END ==> save_MB_ten_service
