<?php

/*
Name: MB_six_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 6 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/


// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_six_service', 1);

function add_MB_six_service() {
	add_meta_box(
        'six_service',							// ID_META_BOX
        'Service 6',							// TITLE_META_BOX
        'MB_six_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_six_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_six_service' );

function script_MB_six_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-six-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-six-service').on('click', function() {
	        		var row = $('.empty-six-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-six-service screen-reader-text');
	        		row.insertBefore('#table-six-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-six-service

	        	$('.delete-six-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-six-service

	        	// $('#table-six-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-six-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_six_service



// Construct Metabox -----------------------------------------------------------
function MB_six_service($POST){

	$titre_six_service   = get_post_meta($POST->ID, 'titre_six_service', true);
	$display_six_service = get_post_meta($POST->ID, 'display_six_service', true);
	$repeat_six_services = get_post_meta($POST->ID, 'repeat_six_services', true);

	wp_nonce_field( 'MB_six_service_nonce', 'MB_six_service_nonce' );
    ?>

		<div class="head-metabox" style="border-bottom: 1px solid #ddd; margin-bottom: 1.5rem;">
		    <div style="line-height: 5;">
		        <label for="display_six_service" style="margin-right: 15px; font-weight: bold;">Afficher le service : </label>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_six_service, 'oui'); ?> name="display_six_service" value="oui"/>Oui</span>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_six_service, 'non'); ?> name="display_six_service" value="non"/>Non</span>
		    </div>

		    <div  style="margin-bottom: 2rem;">
		        <label for="titre_six_service" style="margin-right: 1rem; font-weight: bold;">Titre </label>
		        <input type="text" id="titre_six_service" name="titre_six_service" value="<?php echo $titre_six_service ?>" style="width: 90%;" />
		    </div>
		</div>

		<!-- START : table -->
		<table id="table-six-service" width="100%">
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
				if ( $repeat_six_services ) :
					foreach ( $repeat_six_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-six-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_six_service[]" value="<?php if($field['numb_six_service'] != '') echo esc_attr( $field['numb_six_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_six_service[]" value="<?php if ($field['name_six_service'] != '') echo esc_attr( $field['name_six_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_six_service[]" value="<?php if ($field['price_six_service'] != '') echo esc_attr( $field['price_six_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank six
						?>
						<tr>
							<td><a class="button delete-six-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_six_service[]" /></td>
							<td><input type="text" class="widefat" name="name_six_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_six_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden six for jQuery -->
					<tr class="empty-row empty-six-service screen-reader-text">
						<td><a class="button delete-six-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_six_service[]" /></td>
						<td><input type="text" class="widefat" name="name_six_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_six_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-six-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-six-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-six-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-six-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_six_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_six_service');

function save_MB_six_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_six_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_six_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_six_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_six_services', true);
	$new = array();

	$numb_six_services = $_POST['numb_six_service'];
	$name_six_services = $_POST['name_six_service'];
	$price_six_services = $_POST['price_six_service'];

	$count = count( $numb_six_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_six_services[$i] != '') :
			$new[$i]['numb_six_service'] = stripslashes( strip_tags( $numb_six_services[$i]));

		if($name_six_services[$i] == '')
			$new[$i]['name_six_service'] = '';
		else
			$new[$i]['name_six_service'] = stripslashes( $name_six_services[$i]); // and however you want to sanitize

		if($price_six_services[$i] == '')
			$new[$i]['price_six_service'] = '';
		else
				$new[$i]['price_six_service'] = stripslashes( $price_six_services[$i]); // and however you want to sanitize
		endif;
	}


	// Title : titre_six service
	if(isset($_POST['titre_six_service'])){
        update_post_meta($POST_ID, 'titre_six_service', $_POST['titre_six_service']);
    }

	// Radio : affiche_six_servie
	if(isset($_POST['display_six_service'])){
	    update_post_meta($POST_ID, 'display_six_service', $_POST['display_six_service']);
	}

	// repeatable : repeat_six_service
	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_six_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_six_services', $old);

} // END ==> save_MB_six_service
