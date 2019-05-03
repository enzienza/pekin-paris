<?php

/*
Name: MB_fourteen_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 14 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/


// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_fourteen_service', 1);

function add_MB_fourteen_service() {
	add_meta_box(
        'fourteen_service',						// ID_META_BOX
        'Service 14',							// TITLE_META_BOX
        'MB_fourteen_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_fourteen_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_fourteen_service' );

function script_MB_fourteen_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-fourteen-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-fourteen-service').on('click', function() {
	        		var row = $('.empty-fourteen-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-fourteen-service screen-reader-text');
	        		row.insertBefore('#table-fourteen-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-fourteen-service

	        	$('.delete-fourteen-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-fourteen-service

	        	// $('#table-fourteen-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-fourteen-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_fourteen_service



// Construct Metabox -----------------------------------------------------------
function MB_fourteen_service($POST){

	$titre_fourteen_service   = get_post_meta($POST->ID, 'titre_fourteen_service', true);
	$display_fourteen_service = get_post_meta($POST->ID, 'display_fourteen_service', true);
	$repeat_fourteen_services = get_post_meta($POST->ID, 'repeat_fourteen_services', true);

	wp_nonce_field( 'MB_fourteen_service_nonce', 'MB_fourteen_service_nonce' );
    ?>

		<div class="head-metabox" style="border-bottom: 1px solid #ddd; margin-bottom: 1.5rem;">
		    <div style="line-height: 5;">
		        <label for="display_fourteen_service" style="margin-right: 15px; font-weight: bold;">Afficher le service : </label>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_fourteen_service, 'oui'); ?> name="display_fourteen_service" value="oui"/>Oui</span>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_fourteen_service, 'non'); ?> name="display_fourteen_service" value="non"/>Non</span>
		    </div>

		    <div  style="margin-bottom: 2rem;">
		        <label for="titre_fourteen_service" style="margin-right: 1rem; font-weight: bold;">Titre </label>
		        <input type="text" id="titre_fourteen_service" name="titre_fourteen_service" value="<?php echo $titre_fourteen_service ?>" style="width: 90%;" />
		    </div>
		</div>

		<!-- START : table -->
		<table id="table-fourteen-service" width="100%">
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
				if ( $repeat_fourteen_services ) :
					foreach ( $repeat_fourteen_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-fourteen-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_fourteen_service[]" value="<?php if($field['numb_fourteen_service'] != '') echo esc_attr( $field['numb_fourteen_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_fourteen_service[]" value="<?php if ($field['name_fourteen_service'] != '') echo esc_attr( $field['name_fourteen_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_fourteen_service[]" value="<?php if ($field['price_fourteen_service'] != '') echo esc_attr( $field['price_fourteen_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank fourteen
						?>
						<tr>
							<td><a class="button delete-fourteen-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_fourteen_service[]" /></td>
							<td><input type="text" class="widefat" name="name_fourteen_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_fourteen_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden fourteen for jQuery -->
					<tr class="empty-row empty-fourteen-service screen-reader-text">
						<td><a class="button delete-fourteen-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_fourteen_service[]" /></td>
						<td><input type="text" class="widefat" name="name_fourteen_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_fourteen_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-fourteen-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-fourteen-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-fourteen-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-fourteen-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_fourteen_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_fourteen_service');

function save_MB_fourteen_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_fourteen_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_fourteen_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_fourteen_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_fourteen_services', true);
	$new = array();

	$numb_fourteen_services = $_POST['numb_fourteen_service'];
	$name_fourteen_services = $_POST['name_fourteen_service'];
	$price_fourteen_services = $_POST['price_fourteen_service'];

	$count = count( $numb_fourteen_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_fourteen_services[$i] != '') :
			$new[$i]['numb_fourteen_service'] = stripslashes( strip_tags( $numb_fourteen_services[$i]));

		if($name_fourteen_services[$i] == '')
			$new[$i]['name_fourteen_service'] = '';
		else
			$new[$i]['name_fourteen_service'] = stripslashes( $name_fourteen_services[$i]); // and however you want to sanitize

		if($price_fourteen_services[$i] == '')
			$new[$i]['price_fourteen_service'] = '';
		else
				$new[$i]['price_fourteen_service'] = stripslashes( $price_fourteen_services[$i]); // and however you want to sanitize
		endif;
	}


	// Title : titre_fourteen service
	if(isset($_POST['titre_fourteen_service'])){
        update_post_meta($POST_ID, 'titre_fourteen_service', $_POST['titre_fourteen_service']);
    }

	// Radio : affiche_fourteen_servie
	if(isset($_POST['display_fourteen_service'])){
	    update_post_meta($POST_ID, 'display_fourteen_service', $_POST['display_fourteen_service']);
	}

	// repeatable : repeat_fourteen_service
	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_fourteen_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_fourteen_services', $old);

} // END ==> save_MB_fourteen_service
