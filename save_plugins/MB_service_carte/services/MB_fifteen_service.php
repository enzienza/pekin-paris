<?php

/*
Name: MB_fifteen_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 15 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/


// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_fifteen_service', 1);

function add_MB_fifteen_service() {
	add_meta_box(
        'fifteen_service',						// ID_META_BOX
        'Service 15',							// TITLE_META_BOX
        'MB_fifteen_service',						// CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_fifteen_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_fifteen_service' );

function script_MB_fifteen_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-fifteen-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-fifteen-service').on('click', function() {
	        		var row = $('.empty-fifteen-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-fifteen-service screen-reader-text');
	        		row.insertBefore('#table-fifteen-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-fifteen-service

	        	$('.delete-fifteen-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-fifteen-service

	        	// $('#table-fifteen-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-fifteen-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_fifteen_service



// Construct Metabox -----------------------------------------------------------
function MB_fifteen_service($POST){

	$titre_fifteen_service   = get_post_meta($POST->ID, 'titre_fifteen_service', true);
	$display_fifteen_service = get_post_meta($POST->ID, 'display_fifteen_service', true);
	$repeat_fifteen_services = get_post_meta($POST->ID, 'repeat_fifteen_services', true);

	wp_nonce_field( 'MB_fifteen_service_nonce', 'MB_fifteen_service_nonce' );
    ?>

		<div class="head-metabox" style="border-bottom: 1px solid #ddd; margin-bottom: 1.5rem;">
		    <div style="line-height: 5;">
		        <label for="display_fifteen_service" style="margin-right: 15px; font-weight: bold;">Afficher le service : </label>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_fifteen_service, 'oui'); ?> name="display_fifteen_service" value="oui"/>Oui</span>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_fifteen_service, 'non'); ?> name="display_fifteen_service" value="non"/>Non</span>
		    </div>

		    <div  style="margin-bottom: 2rem;">
		        <label for="titre_fifteen_service" style="margin-right: 1rem; font-weight: bold;">Titre </label>
		        <input type="text" id="titre_fifteen_service" name="titre_fifteen_service" value="<?php echo $titre_fifteen_service ?>" style="width: 90%;" />
		    </div>
		</div>

		<!-- START : table -->
		<table id="table-fifteen-service" width="100%">
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
				if ( $repeat_fifteen_services ) :
					foreach ( $repeat_fifteen_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-fifteen-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_fifteen_service[]" value="<?php if($field['numb_fifteen_service'] != '') echo esc_attr( $field['numb_fifteen_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_fifteen_service[]" value="<?php if ($field['name_fifteen_service'] != '') echo esc_attr( $field['name_fifteen_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_fifteen_service[]" value="<?php if ($field['price_fifteen_service'] != '') echo esc_attr( $field['price_fifteen_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank fifteen
						?>
						<tr>
							<td><a class="button delete-fifteen-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_fifteen_service[]" /></td>
							<td><input type="text" class="widefat" name="name_fifteen_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_fifteen_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden fifteen for jQuery -->
					<tr class="empty-row empty-fifteen-service screen-reader-text">
						<td><a class="button delete-fifteen-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_fifteen_service[]" /></td>
						<td><input type="text" class="widefat" name="name_fifteen_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_fifteen_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-fifteen-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-fifteen-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-fifteen-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-fifteen-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_fifteen_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_fifteen_service');

function save_MB_fifteen_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_fifteen_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_fifteen_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_fifteen_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_fifteen_services', true);
	$new = array();

	$numb_fifteen_services = $_POST['numb_fifteen_service'];
	$name_fifteen_services = $_POST['name_fifteen_service'];
	$price_fifteen_services = $_POST['price_fifteen_service'];

	$count = count( $numb_fifteen_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_fifteen_services[$i] != '') :
			$new[$i]['numb_fifteen_service'] = stripslashes( strip_tags( $numb_fifteen_services[$i]));

		if($name_fifteen_services[$i] == '')
			$new[$i]['name_fifteen_service'] = '';
		else
			$new[$i]['name_fifteen_service'] = stripslashes( $name_fifteen_services[$i]); // and however you want to sanitize

		if($price_fifteen_services[$i] == '')
			$new[$i]['price_fifteen_service'] = '';
		else
				$new[$i]['price_fifteen_service'] = stripslashes( $price_fifteen_services[$i]); // and however you want to sanitize
		endif;
	}


	// Title : titre_fifteen service
	if(isset($_POST['titre_fifteen_service'])){
        update_post_meta($POST_ID, 'titre_fifteen_service', $_POST['titre_fifteen_service']);
    }

	// Radio : affiche_fifteen_servie
	if(isset($_POST['display_fifteen_service'])){
	    update_post_meta($POST_ID, 'display_fifteen_service', $_POST['display_fifteen_service']);
	}

	// repeatable : repeat_fifteen_service
	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_fifteen_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_fifteen_services', $old);

} // END ==> save_MB_fifteen_service
