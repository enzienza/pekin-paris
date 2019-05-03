<?php

/*
Name: MB_seven_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 7 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/


// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_seven_service', 1);

function add_MB_seven_service() {
	add_meta_box(
        'seven_service',						// ID_META_BOX
        'Service 7',							// TITLE_META_BOX
        'MB_seven_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_seven_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_seven_service' );

function script_MB_seven_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-seven-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-seven-service').on('click', function() {
	        		var row = $('.empty-seven-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-seven-service screen-reader-text');
	        		row.insertBefore('#table-seven-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-seven-service

	        	$('.delete-seven-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-seven-service

	        	// $('#table-seven-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-seven-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_seven_service



// Construct Metabox -----------------------------------------------------------
function MB_seven_service($POST){

	$titre_seven_service   = get_post_meta($POST->ID, 'titre_seven_service', true);
	$display_seven_service = get_post_meta($POST->ID, 'display_seven_service', true);
	$repeat_seven_services = get_post_meta($POST->ID, 'repeat_seven_services', true);

	wp_nonce_field( 'MB_seven_service_nonce', 'MB_seven_service_nonce' );
    ?>

		<div class="head-metabox" style="border-bottom: 1px solid #ddd; margin-bottom: 1.5rem;">
		    <div style="line-height: 5;">
		        <label for="display_seven_service" style="margin-right: 15px; font-weight: bold;">Afficher le service : </label>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_seven_service, 'oui'); ?> name="display_seven_service" value="oui"/>Oui</span>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_seven_service, 'non'); ?> name="display_seven_service" value="non"/>Non</span>
		    </div>

		    <div  style="margin-bottom: 2rem;">
		        <label for="titre_seven_service" style="margin-right: 1rem; font-weight: bold;">Titre </label>
		        <input type="text" id="titre_seven_service" name="titre_seven_service" value="<?php echo $titre_seven_service ?>" style="width: 90%;" />
		    </div>
		</div>

		<!-- START : table -->
		<table id="table-seven-service" width="100%">
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
				if ( $repeat_seven_services ) :
					foreach ( $repeat_seven_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-seven-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_seven_service[]" value="<?php if($field['numb_seven_service'] != '') echo esc_attr( $field['numb_seven_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_seven_service[]" value="<?php if ($field['name_seven_service'] != '') echo esc_attr( $field['name_seven_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_seven_service[]" value="<?php if ($field['price_seven_service'] != '') echo esc_attr( $field['price_seven_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank seven
						?>
						<tr>
							<td><a class="button delete-seven-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_seven_service[]" /></td>
							<td><input type="text" class="widefat" name="name_seven_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_seven_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden seven for jQuery -->
					<tr class="empty-row empty-seven-service screen-reader-text">
						<td><a class="button delete-seven-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_seven_service[]" /></td>
						<td><input type="text" class="widefat" name="name_seven_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_seven_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-seven-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-seven-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-seven-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-seven-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_seven_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_seven_service');

function save_MB_seven_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_seven_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_seven_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_seven_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_seven_services', true);
	$new = array();

	$numb_seven_services = $_POST['numb_seven_service'];
	$name_seven_services = $_POST['name_seven_service'];
	$price_seven_services = $_POST['price_seven_service'];

	$count = count( $numb_seven_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_seven_services[$i] != '') :
			$new[$i]['numb_seven_service'] = stripslashes( strip_tags( $numb_seven_services[$i]));

		if($name_seven_services[$i] == '')
			$new[$i]['name_seven_service'] = '';
		else
			$new[$i]['name_seven_service'] = stripslashes( $name_seven_services[$i]); // and however you want to sanitize

		if($price_seven_services[$i] == '')
			$new[$i]['price_seven_service'] = '';
		else
				$new[$i]['price_seven_service'] = stripslashes( $price_seven_services[$i]); // and however you want to sanitize
		endif;
	}


	// Title : titre_seven service
	if(isset($_POST['titre_seven_service'])){
        update_post_meta($POST_ID, 'titre_seven_service', $_POST['titre_seven_service']);
    }

	// Radio : affiche_seven_servie
	if(isset($_POST['display_seven_service'])){
	    update_post_meta($POST_ID, 'display_seven_service', $_POST['display_seven_service']);
	}

	// repeatable : repeat_seven_service
	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_seven_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_seven_services', $old);

} // END ==> save_MB_seven_service
