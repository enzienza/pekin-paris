<?php

/*
Name: MB_thirteen_service
Parent : service_carte
Display on : Page-Cartes
Description: Métabox pour le service 13 [titre + tableau dynamique ]
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.6
*/


// Create la Metabox -----------------------------------------------------------
add_action('admin_init', 'add_MB_thirteen_service', 1);

function add_MB_thirteen_service() {
	add_meta_box(
        'thirteen_service',						// ID_META_BOX
        'Service 13',							// TITLE_META_BOX
        'MB_thirteen_service',				    // CALLBACK
        'cartes',								// WP_SCREEN
        'normal',								// CONTEXT [ normal | advanced | side ]
        'default'								// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_thirteen_service



// Script Metabox --------------------------------------------------------------
add_action( 'admin_footer', 'script_MB_thirteen_service' );

function script_MB_thirteen_service(){
	?>
		<script type="text/javascript">
	        jQuery(document).ready(function($) {
	        	$('.save-thirteen-service').click(function(e) {
	        		e.preventDefault();
	        		$('#publish').click();
	        	}); // END -> click .btn-save

	        	$('#add-thirteen-service').on('click', function() {
	        		var row = $('.empty-thirteen-service.screen-reader-text').clone(true);
	        		row.removeClass('empty-thirteen-service screen-reader-text');
	        		row.insertBefore('#table-thirteen-service tbody>tr:last');
	        		return false;
	        	}); // END -> on click #add-thirteen-service

	        	$('.delete-thirteen-service').on('click', function() {
	        		$(this).parents('tr').remove();
	        		return false;
	        	}); // END -> on click .delete-thirteen-service

	        	// $('#table-thirteen-service tbody').sortable({
	        	// 	opacity: 0.6,
	        	// 	revert: true,
	        	// 	cursor: 'move',
	        	// 	handle: '.sort'
	        	// });// END -> sortable #table-thirteen-service
	        });
		</script><!-- /javascript -->
	<?php
} // END ==> script_MB_thirteen_service



// Construct Metabox -----------------------------------------------------------
function MB_thirteen_service($POST){

	$titre_thirteen_service   = get_post_meta($POST->ID, 'titre_thirteen_service', true);
	$display_thirteen_service = get_post_meta($POST->ID, 'display_thirteen_service', true);
	$repeat_thirteen_services = get_post_meta($POST->ID, 'repeat_thirteen_services', true);

	wp_nonce_field( 'MB_thirteen_service_nonce', 'MB_thirteen_service_nonce' );
    ?>

		<div class="head-metabox" style="border-bottom: 1px solid #ddd; margin-bottom: 1.5rem;">
		    <div style="line-height: 5;">
		        <label for="display_thirteen_service" style="margin-right: 15px; font-weight: bold;">Afficher le service : </label>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_thirteen_service, 'oui'); ?> name="display_thirteen_service" value="oui"/>Oui</span>
		        <span style="margin-right: 15px;"><input type="radio" <?php checked($display_thirteen_service, 'non'); ?> name="display_thirteen_service" value="non"/>Non</span>
		    </div>

		    <div  style="margin-bottom: 2rem;">
		        <label for="titre_thirteen_service" style="margin-right: 1rem; font-weight: bold;">Titre </label>
		        <input type="text" id="titre_thirteen_service" name="titre_thirteen_service" value="<?php echo $titre_thirteen_service ?>" style="width: 90%;" />
		    </div>
		</div>

		<!-- START : table -->
		<table id="table-thirteen-service" width="100%">
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
				if ( $repeat_thirteen_services ) :
					foreach ( $repeat_thirteen_services as $field ) {
				?>
						<tr>
							<td><a class="button delete-thirteen-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_thirteen_service[]" value="<?php if($field['numb_thirteen_service'] != '') echo esc_attr( $field['numb_thirteen_service'] ); ?>" /></td>
							<td><input type="text" class="widefat" name="name_thirteen_service[]" value="<?php if ($field['name_thirteen_service'] != '') echo esc_attr( $field['name_thirteen_service'] );  ?>" /></td>
							<td><input type="text" class="widefat" name="price_thirteen_service[]" value="<?php if ($field['price_thirteen_service'] != '') echo esc_attr( $field['price_thirteen_service'] );  ?>" /></td>
							<!-- <td><a class="sort">|||</a></td> -->

						</tr>
						<?php
								}
							else :
								// show a blank thirteen
						?>
						<tr>
							<td><a class="button delete-thirteen-service remove-row" href="#">-</a></td>
							<td><input type="text" class="widefat" name="numb_thirteen_service[]" /></td>
							<td><input type="text" class="widefat" name="name_thirteen_service[]" value="" /></td>
							<td><input type="text" class="widefat" name="price_thirteen_service[]" value="" /></td>
							<!-- <td><a class="sort">|||</a></td> -->
						</tr>
				<?php endif; ?>

					<!-- empty hidden thirteen for jQuery -->
					<tr class="empty-row empty-thirteen-service screen-reader-text">
						<td><a class="button delete-thirteen-service remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_thirteen_service[]" /></td>
						<td><input type="text" class="widefat" name="name_thirteen_service[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_thirteen_service[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr><!-- / .empty-row empty-thirteen-service .screen-reader-text-->
			</tbody><!-- / -->
		</table><!-- / #table-thirteen-service -->

		<!-- START : bouton -->
		<p>
			<a id="add-thirteen-service" class="button add-row button-large" href="#">Ajouter</a>
			<input type="submit" class="button save-thirteen-service btn-save button-large" value="Sauvegarder" />
		</p><!-- / bouton -->

    <?php
} // END ==> MB_thirteen_service



// Save Metabox ----------------------------------------------------------------
add_action('save_post', 'save_MB_thirteen_service');

function save_MB_thirteen_service($POST_ID){

	// Check if our nonce is set.
	if ( ! isset( $_POST['MB_thirteen_service_nonce'] ) )
		return $POST_ID;

	$nonce = $_POST['MB_thirteen_service_nonce'];

	// Verify that the nonce is valid.
	if ( !wp_verify_nonce( $nonce, 'MB_thirteen_service_nonce' ) )
		return $POST_ID;

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $POST_ID;

	// Check the user's permissions.
	if(!current_user_can('edit_post', $POST_ID))
		return $POST_ID;


	$old = get_post_meta($POST_ID, 'repeat_thirteen_services', true);
	$new = array();

	$numb_thirteen_services = $_POST['numb_thirteen_service'];
	$name_thirteen_services = $_POST['name_thirteen_service'];
	$price_thirteen_services = $_POST['price_thirteen_service'];

	$count = count( $numb_thirteen_services );

	for($i = 0; $i < $count; $i++) {
		if($numb_thirteen_services[$i] != '') :
			$new[$i]['numb_thirteen_service'] = stripslashes( strip_tags( $numb_thirteen_services[$i]));

		if($name_thirteen_services[$i] == '')
			$new[$i]['name_thirteen_service'] = '';
		else
			$new[$i]['name_thirteen_service'] = stripslashes( $name_thirteen_services[$i]); // and however you want to sanitize

		if($price_thirteen_services[$i] == '')
			$new[$i]['price_thirteen_service'] = '';
		else
				$new[$i]['price_thirteen_service'] = stripslashes( $price_thirteen_services[$i]); // and however you want to sanitize
		endif;
	}


	// Title : titre_thirteen service
	if(isset($_POST['titre_thirteen_service'])){
        update_post_meta($POST_ID, 'titre_thirteen_service', $_POST['titre_thirteen_service']);
    }

	// Radio : affiche_thirteen_servie
	if(isset($_POST['display_thirteen_service'])){
	    update_post_meta($POST_ID, 'display_thirteen_service', $_POST['display_thirteen_service']);
	}

	// repeatable : repeat_thirteen_service
	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_thirteen_services', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_thirteen_services', $old);

} // END ==> save_MB_thirteen_service
