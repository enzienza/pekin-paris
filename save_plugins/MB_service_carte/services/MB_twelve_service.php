<?php

/*
Name: MB_twelve_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 12 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/


// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_twelve_service', 1);

function add_MB_twelve_service() {
	add_meta_box(
        'twelve_service',						// ID_META_BOX
        'Service 12',							// TITLE_META_BOX
        'MB_twelve_service',					// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_twelve_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_twelve_service' );

function script_MB_twelve_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-twelve-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-twelve-service').on('click', function() {
	        		var row = $('.empty-twelve-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-twelve-service screen-reader-text');
	        		row.insertBefore('#table-twelve-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-twelve-service

	        	$('.delete-twelve-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-twelve-service

	        	// $('#table-twelve-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-twelve-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_twelve_service



// Construct Metabox -----------------------------------------------------------
function MB_twelve_service($POST){

	$titre_twelve_service   = get_post_meta($POST->ID, 'titre_twelve_service', true);
	$display_twelve_service = get_post_meta($POST->ID, 'display_twelve_service', true);
	$repeat_twelve_services = get_post_meta($POST->ID, 'repeat_twelve_services', true);

	wp_nonce_field( 'MB_twelve_service_nonce', 'MB_twelve_service_nonce' );
    ?>

		<div class="head-metabox" style="border-bottom: 1px solid #ddd; margin-bottom: 1.5rem;">
		    <div style="line-height: 5;">
		        <label for="display_twelve_service" style="margin-right: 15px; font-weight: bold;">Afficher le service : </label>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_twelve_service, 'oui'); ?> name="display_twelve_service" value="oui"/>Oui</span>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_twelve_service, 'non'); ?> name="display_twelve_service" value="non"/>Non</span>
		    </div>

		    <div  style="margin-bottom: 2rem;">
		        <label for="titre_twelve_service" style="margin-right: 1rem; font-weight: bold;">Titre </label>
		        <input type="text" id="titre_twelve_service" name="titre_twelve_service" value="<?php echo $titre_twelve_service ?>" style="width: 90%;" />
		    </div>
		</div>

		<!-- START : table -->
		<table id="table-twelve-service" width="100%">
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
				if ( $repeat_twelve_services ) :
					foreach ( $repeat_twelve_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-twelve-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_twelve_service[]" value="<?php if($field['numb_twelve_service'] != '') echo esc_attr( $field['numb_twelve_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_twelve_service[]" value="<?php if ($field['name_twelve_service'] != '') echo esc_attr( $field['name_twelve_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_twelve_service[]" value="<?php if ($field['price_twelve_service'] != '') echo esc_attr( $field['price_twelve_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank twelve
						?>
						<tr>
							<td><a class="button delete-twelve-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_twelve_service[]" /></td>
							<td><input type="text" class="widefat" name="name_twelve_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_twelve_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden twelve for jQuery -->
					<tr class="empty-row empty-twelve-service screen-reader-text">
						<td><a class="button delete-twelve-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_twelve_service[]" /></td>
						<td><input type="text" class="widefat" name="name_twelve_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_twelve_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-twelve-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-twelve-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-twelve-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-twelve-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_twelve_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_twelve_service');

function save_MB_twelve_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_twelve_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_twelve_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_twelve_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_twelve_services', true);
	$new = array();

	$numb_twelve_services = $_POST['numb_twelve_service'];
	$name_twelve_services = $_POST['name_twelve_service'];
	$price_twelve_services = $_POST['price_twelve_service'];

	$count = count( $numb_twelve_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_twelve_services[$i] != '') :
			$new[$i]['numb_twelve_service'] = stripslashes( strip_tags( $numb_twelve_services[$i]));

		if($name_twelve_services[$i] == '')
			$new[$i]['name_twelve_service'] = '';
		else
			$new[$i]['name_twelve_service'] = stripslashes( $name_twelve_services[$i]); // and however you want to sanitize

		if($price_twelve_services[$i] == '')
			$new[$i]['price_twelve_service'] = '';
		else
				$new[$i]['price_twelve_service'] = stripslashes( $price_twelve_services[$i]); // and however you want to sanitize
		endif;
	}


	// Title : titre_twelve service
	if(isset($_POST['titre_twelve_service'])){
        update_post_meta($POST_ID, 'titre_twelve_service', $_POST['titre_twelve_service']);
    }

	// Radio : affiche_twelve_servie
	if(isset($_POST['display_twelve_service'])){
	    update_post_meta($POST_ID, 'display_twelve_service', $_POST['display_twelve_service']);
	}

	// repeatable : repeat_twelve_service
	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_twelve_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_twelve_services', $old);

} // END ==> save_MB_twelve_service
