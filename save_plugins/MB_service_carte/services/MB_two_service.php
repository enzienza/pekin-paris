<?php

/*
Name: MB_two_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 2 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/



// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_two_service', 1);

function add_MB_two_service() {
	add_meta_box(
        'two_service',							// ID_META_BOX
        'Service 2',							// TITLE_META_BOX
        'MB_two_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_two_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_two_service' );

function script_MB_two_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-two-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-two-service').on('click', function() {
	        		var row = $('.empty-two-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-two-service screen-reader-text');
	        		row.insertBefore('#table-two-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-two-service

	        	$('.delete-two-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-two-service

	        	// $('#table-two-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-two-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_two_service



// Construct Metabox -----------------------------------------------------------
function MB_two_service($POST){

	$titre_two_service   = get_post_meta($POST->ID, 'titre_two_service', true);
	$display_two_service = get_post_meta($POST->ID, 'display_two_service', true);
	$repeat_two_services = get_post_meta($POST->ID, 'repeat_two_services', true);

	wp_nonce_field( 'MB_two_service_nonce', 'MB_two_service_nonce' );
    ?>

		<div class="head-metabox" style="border-bottom: 1px solid #ddd; margin-bottom: 1.5rem;">
		    <div style="line-height: 5;">
		        <label for="display_two_service" style="margin-right: 15px; font-weight: bold;">Afficher le service : </label>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_two_service, 'oui'); ?> name="display_two_service" value="oui"/>Oui</span>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_two_service, 'non'); ?> name="display_two_service" value="non"/>Non</span>
		    </div>

		    <div  style="margin-bottom: 2rem;">
		        <label for="titre_two_service" style="margin-right: 1rem; font-weight: bold;">Titre </label>
		        <input type="text" id="titre_two_service" name="titre_two_service" value="<?php echo $titre_two_service ?>" style="width: 90%;" />
		    </div>
		</div>

		<!-- START : table -->
		<table id="table-two-service" width="100%">
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
				if ( $repeat_two_services ) :
					foreach ( $repeat_two_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-two-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_two_service[]" value="<?php if($field['numb_two_service'] != '') echo esc_attr( $field['numb_two_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_two_service[]" value="<?php if ($field['name_two_service'] != '') echo esc_attr( $field['name_two_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_two_service[]" value="<?php if ($field['price_two_service'] != '') echo esc_attr( $field['price_two_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank two
						?>
						<tr>
							<td><a class="button delete-two-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_two_service[]" /></td>
							<td><input type="text" class="widefat" name="name_two_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_two_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden two for jQuery -->
					<tr class="empty-row empty-two-service screen-reader-text">
						<td><a class="button delete-two-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_two_service[]" /></td>
						<td><input type="text" class="widefat" name="name_two_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_two_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-two-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-two-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-two-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-two-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_two_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_two_service');

function save_MB_two_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_two_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_two_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_two_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_two_services', true);
	$new = array();

	$numb_two_services = $_POST['numb_two_service'];
	$name_two_services = $_POST['name_two_service'];
	$price_two_services = $_POST['price_two_service'];

	$count = count( $numb_two_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_two_services[$i] != '') :
			$new[$i]['numb_two_service'] = stripslashes( strip_tags( $numb_two_services[$i]));

		if($name_two_services[$i] == '')
			$new[$i]['name_two_service'] = '';
		else
			$new[$i]['name_two_service'] = stripslashes( $name_two_services[$i]); // and however you want to sanitize

		if($price_two_services[$i] == '')
			$new[$i]['price_two_service'] = '';
		else
				$new[$i]['price_two_service'] = stripslashes( $price_two_services[$i]); // and however you want to sanitize
		endif;
	}


	// Title : titre_two service
	if(isset($_POST['titre_two_service'])){
        update_post_meta($POST_ID, 'titre_two_service', $_POST['titre_two_service']);
    }

	// Radio : affiche_two_servie
	if(isset($_POST['display_two_service'])){
	    update_post_meta($POST_ID, 'display_two_service', $_POST['display_two_service']);
	}

	// repeatable : repeat_two_service
	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_two_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_two_services', $old);

} // END ==> save_MB_two_service
