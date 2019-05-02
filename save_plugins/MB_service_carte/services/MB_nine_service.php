<?php

/*
Name: MB_nine_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 9 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/


// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_nine_service', 1);

function add_MB_nine_service() {
	add_meta_box(
        'nine_service',							// ID_META_BOX
        'Service 9',							// TITLE_META_BOX
        'MB_nine_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_nine_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_nine_service' );

function script_MB_nine_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-nine-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-nine-service').on('click', function() {
	        		var row = $('.empty-nine-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-nine-service screen-reader-text');
	        		row.insertBefore('#table-nine-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-nine-service

	        	$('.delete-nine-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-nine-service

	        	// $('#table-nine-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-nine-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_nine_service



// Construct Metabox -----------------------------------------------------------
function MB_nine_service($POST){

	$titre_nine_service   = get_post_meta($POST->ID, 'titre_nine_service', true);
	$repeat_nine_services = get_post_meta($POST->ID, 'repeat_nine_services', true);

	wp_nonce_field( 'MB_nine_service_nonce', 'MB_nine_service_nonce' );
    ?>

        <div class="">
            <label for="titre_nine_service">Titre </label>
            <input type="text" class="widefat" id="titre_nine_service" name="titre_nine_service" value="<?php echo $titre_nine_service ?>" />
        </div>

		<!-- START : table -->
		<table id="table-nine-service" width="100%">
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
				if ( $repeat_nine_services ) :
					foreach ( $repeat_nine_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-nine-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_nine_service[]" value="<?php if($field['numb_nine_service'] != '') echo esc_attr( $field['numb_nine_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_nine_service[]" value="<?php if ($field['name_nine_service'] != '') echo esc_attr( $field['name_nine_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_nine_service[]" value="<?php if ($field['price_nine_service'] != '') echo esc_attr( $field['price_nine_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank nine
						?>
						<tr>
							<td><a class="button delete-nine-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_nine_service[]" /></td>
							<td><input type="text" class="widefat" name="name_nine_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_nine_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden nine for jQuery -->
					<tr class="empty-row empty-nine-service screen-reader-text">
						<td><a class="button delete-nine-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_nine_service[]" /></td>
						<td><input type="text" class="widefat" name="name_nine_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_nine_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-nine-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-nine-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-nine-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-nine-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_nine_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_nine_service');

function save_MB_nine_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_nine_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_nine_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_nine_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_nine_services', true);
	$new = array();

	$numb_nine_services = $_POST['numb_nine_service'];
	$name_nine_services = $_POST['name_nine_service'];
	$price_nine_services = $_POST['price_nine_service'];

	$count = count( $numb_nine_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_nine_services[$i] != '') :
			$new[$i]['numb_nine_service'] = stripslashes( strip_tags( $numb_nine_services[$i]));

		if($name_nine_services[$i] == '')
			$new[$i]['name_nine_service'] = '';
		else
			$new[$i]['name_nine_service'] = stripslashes( $name_nine_services[$i]); // and however you want to sanitize

		if($price_nine_services[$i] == '')
			$new[$i]['price_nine_service'] = '';
		else
				$new[$i]['price_nine_service'] = stripslashes( $price_nine_services[$i]); // and however you want to sanitize
		endif;
	}



	if(isset($_POST['titre_nine_service'])){
        update_post_meta($POST_ID, 'titre_nine_service', $_POST['titre_nine_service']);
    }


	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_nine_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_nine_services', $old);

} // END ==> save_MB_nine_service
