<?php

/*
Name: MB_one_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 1 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/



// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_one_service', 1);

function add_MB_one_service() {
	add_meta_box(
        'one_service',							// ID_META_BOX
        'Service 1',							// TITLE_META_BOX
        'MB_one_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_one_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_one_service' );

function script_MB_one_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-one-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-one-service').on('click', function() {
	        		var row = $('.empty-one-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-one-service screen-reader-text');
	        		row.insertBefore('#table-one-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-one-service

	        	$('.delete-one-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-one-service

	        	// $('#table-one-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-one-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_one_service



// Construct Metabox -----------------------------------------------------------
function MB_one_service($POST){

	$titre_one_service   = get_post_meta($POST->ID, 'titre_one_service', true);
	$repeat_one_services = get_post_meta($POST->ID, 'repeat_one_services', true);

	wp_nonce_field( 'MB_one_service_nonce', 'MB_one_service_nonce' );
    ?>

        <div class="">
            <label for="titre_one_service">Titre </label>
            <input type="text" class="widefat" id="titre_one_service" name="titre_one_service" value="<?php echo $titre_one_service ?>" />
        </div>

		<!-- START : table -->
		<table id="table-one-service" width="100%">
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
				if ( $repeat_one_services ) :
					foreach ( $repeat_one_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-one-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_one_service[]" value="<?php if($field['numb_one_service'] != '') echo esc_attr( $field['numb_one_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_one_service[]" value="<?php if ($field['name_one_service'] != '') echo esc_attr( $field['name_one_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_one_service[]" value="<?php if ($field['price_one_service'] != '') echo esc_attr( $field['price_one_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank one
						?>
						<tr>
							<td><a class="button delete-one-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_one_service[]" /></td>
							<td><input type="text" class="widefat" name="name_one_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_one_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden one for jQuery -->
					<tr class="empty-row empty-one-service screen-reader-text">
						<td><a class="button delete-one-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_one_service[]" /></td>
						<td><input type="text" class="widefat" name="name_one_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_one_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-one-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-one-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-one-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-one-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_one_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_one_service');

function save_MB_one_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_one_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_one_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_one_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_one_services', true);
	$new = array();

	$numb_one_services = $_POST['numb_one_service'];
	$name_one_services = $_POST['name_one_service'];
	$price_one_services = $_POST['price_one_service'];

	$count = count( $numb_one_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_one_services[$i] != '') :
			$new[$i]['numb_one_service'] = stripslashes( strip_tags( $numb_one_services[$i]));

		if($name_one_services[$i] == '')
			$new[$i]['name_one_service'] = '';
		else
			$new[$i]['name_one_service'] = stripslashes( $name_one_services[$i]); // and however you want to sanitize

		if($price_one_services[$i] == '')
			$new[$i]['price_one_service'] = '';
		else
				$new[$i]['price_one_service'] = stripslashes( $price_one_services[$i]); // and however you want to sanitize
		endif;
	}



	if(isset($_POST['titre_one_service'])){
        update_post_meta($POST_ID, 'titre_one_service', $_POST['titre_one_service']);
    }


	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_one_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_one_services', $old);

} // END ==> save_MB_one_service
