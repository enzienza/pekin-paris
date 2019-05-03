<?php

/*
Name: MB_three_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 3 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/


// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_three_service', 1);

function add_MB_three_service() {
	add_meta_box(
        'three_service',						// ID_META_BOX
        'Service 3',							// TITLE_META_BOX
        'MB_three_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_three_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_three_service' );

function script_MB_three_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-three-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-three-service').on('click', function() {
	        		var row = $('.empty-three-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-three-service screen-reader-text');
	        		row.insertBefore('#table-three-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-three-service

	        	$('.delete-three-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-three-service

	        	// $('#table-three-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-three-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_three_service



// Construct Metabox -----------------------------------------------------------
function MB_three_service($POST){

	$titre_three_service   = get_post_meta($POST->ID, 'titre_three_service', true);
	$display_three_service = get_post_meta($POST->ID, 'display_three_service', true);
	$repeat_three_services = get_post_meta($POST->ID, 'repeat_three_services', true);

	wp_nonce_field( 'MB_three_service_nonce', 'MB_three_service_nonce' );
    ?>

		<div class="head-metabox" style="border-bottom: 1px solid #ddd; margin-bottom: 1.5rem;">
		    <div style="line-height: 5;">
		        <label for="display_three_service" style="margin-right: 15px; font-weight: bold;">Afficher le service : </label>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_three_service, 'oui'); ?> name="display_three_service" value="oui"/>Oui</span>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_three_service, 'non'); ?> name="display_three_service" value="non"/>Non</span>
		    </div>

		    <div  style="margin-bottom: 2rem;">
		        <label for="titre_three_service" style="margin-right: 1rem; font-weight: bold;">Titre </label>
		        <input type="text" id="titre_three_service" name="titre_three_service" value="<?php echo $titre_three_service ?>" style="width: 90%;" />
		    </div>
		</div>

		<!-- START : table -->
		<table id="table-three-service" width="100%">
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
				if ( $repeat_three_services ) :
					foreach ( $repeat_three_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-three-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_three_service[]" value="<?php if($field['numb_three_service'] != '') echo esc_attr( $field['numb_three_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_three_service[]" value="<?php if ($field['name_three_service'] != '') echo esc_attr( $field['name_three_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_three_service[]" value="<?php if ($field['price_three_service'] != '') echo esc_attr( $field['price_three_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank three
						?>
						<tr>
							<td><a class="button delete-three-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_three_service[]" /></td>
							<td><input type="text" class="widefat" name="name_three_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_three_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden three for jQuery -->
					<tr class="empty-row empty-three-service screen-reader-text">
						<td><a class="button delete-three-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_three_service[]" /></td>
						<td><input type="text" class="widefat" name="name_three_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_three_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-three-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-three-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-three-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-three-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_three_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_three_service');

function save_MB_three_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_three_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_three_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_three_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_three_services', true);
	$new = array();

	$numb_three_services = $_POST['numb_three_service'];
	$name_three_services = $_POST['name_three_service'];
	$price_three_services = $_POST['price_three_service'];

	$count = count( $numb_three_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_three_services[$i] != '') :
			$new[$i]['numb_three_service'] = stripslashes( strip_tags( $numb_three_services[$i]));

		if($name_three_services[$i] == '')
			$new[$i]['name_three_service'] = '';
		else
			$new[$i]['name_three_service'] = stripslashes( $name_three_services[$i]); // and however you want to sanitize

		if($price_three_services[$i] == '')
			$new[$i]['price_three_service'] = '';
		else
				$new[$i]['price_three_service'] = stripslashes( $price_three_services[$i]); // and however you want to sanitize
		endif;
	}


	// Title : titre_three service
	if(isset($_POST['titre_three_service'])){
        update_post_meta($POST_ID, 'titre_three_service', $_POST['titre_three_service']);
    }

	// Radio : affiche_three_servie
	if(isset($_POST['display_three_service'])){
	    update_post_meta($POST_ID, 'display_three_service', $_POST['display_three_service']);
	}

	// repeatable : repeat_three_service
	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_three_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_three_services', $old);

} // END ==> save_MB_three_service
