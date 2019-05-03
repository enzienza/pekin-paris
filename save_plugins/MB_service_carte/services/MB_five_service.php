<?php

/*
Name: MB_five_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 5 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/


// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_five_service', 1);

function add_MB_five_service() {
	add_meta_box(
        'five_service',							// ID_META_BOX
        'Service 5',							// TITLE_META_BOX
        'MB_five_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_five_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_five_service' );

function script_MB_five_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-five-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-five-service').on('click', function() {
	        		var row = $('.empty-five-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-five-service screen-reader-text');
	        		row.insertBefore('#table-five-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-five-service

	        	$('.delete-five-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-five-service

	        	// $('#table-five-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-five-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_five_service



// Construct Metabox -----------------------------------------------------------
function MB_five_service($POST){

	$titre_five_service   = get_post_meta($POST->ID, 'titre_five_service', true);
	$display_five_service = get_post_meta($POST->ID, 'display_five_service', true);
	$repeat_five_services = get_post_meta($POST->ID, 'repeat_five_services', true);

	wp_nonce_field( 'MB_five_service_nonce', 'MB_five_service_nonce' );
    ?>

		<div class="head-metabox" style="border-bottom: 1px solid #ddd; margin-bottom: 1.5rem;">
		    <div style="line-height: 5;">
		        <label for="display_five_service" style="margin-right: 15px; font-weight: bold;">Afficher le service : </label>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_five_service, 'oui'); ?> name="display_five_service" value="oui"/>Oui</span>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_five_service, 'non'); ?> name="display_five_service" value="non"/>Non</span>
		    </div>

		    <div  style="margin-bottom: 2rem;">
		        <label for="titre_five_service" style="margin-right: 1rem; font-weight: bold;">Titre </label>
		        <input type="text" id="titre_five_service" name="titre_five_service" value="<?php echo $titre_five_service ?>" style="width: 90%;" />
		    </div>
		</div>

		<!-- START : table -->
		<table id="table-five-service" width="100%">
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
				if ( $repeat_five_services ) :
					foreach ( $repeat_five_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-five-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_five_service[]" value="<?php if($field['numb_five_service'] != '') echo esc_attr( $field['numb_five_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_five_service[]" value="<?php if ($field['name_five_service'] != '') echo esc_attr( $field['name_five_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_five_service[]" value="<?php if ($field['price_five_service'] != '') echo esc_attr( $field['price_five_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank five
						?>
						<tr>
							<td><a class="button delete-five-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_five_service[]" /></td>
							<td><input type="text" class="widefat" name="name_five_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_five_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden five for jQuery -->
					<tr class="empty-row empty-five-service screen-reader-text">
						<td><a class="button delete-five-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_five_service[]" /></td>
						<td><input type="text" class="widefat" name="name_five_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_five_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-five-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-five-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-five-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-five-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_five_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_five_service');

function save_MB_five_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_five_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_five_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_five_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_five_services', true);
	$new = array();

	$numb_five_services = $_POST['numb_five_service'];
	$name_five_services = $_POST['name_five_service'];
	$price_five_services = $_POST['price_five_service'];

	$count = count( $numb_five_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_five_services[$i] != '') :
			$new[$i]['numb_five_service'] = stripslashes( strip_tags( $numb_five_services[$i]));

		if($name_five_services[$i] == '')
			$new[$i]['name_five_service'] = '';
		else
			$new[$i]['name_five_service'] = stripslashes( $name_five_services[$i]); // and however you want to sanitize

		if($price_five_services[$i] == '')
			$new[$i]['price_five_service'] = '';
		else
				$new[$i]['price_five_service'] = stripslashes( $price_five_services[$i]); // and however you want to sanitize
		endif;
	}


	// Title : titre_five service
	if(isset($_POST['titre_five_service'])){
        update_post_meta($POST_ID, 'titre_five_service', $_POST['titre_five_service']);
    }

	// Radio : affiche_five_servie
	if(isset($_POST['display_five_service'])){
	    update_post_meta($POST_ID, 'display_five_service', $_POST['display_five_service']);
	}

	// repeatable : repeat_five_service
	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_five_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_five_services', $old);

} // END ==> save_MB_five_service
