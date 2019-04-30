<?php

/*
Plugin Name: Emporter Table Repeat
Description: Métabox dynamique | Repeat table | Page-emporter
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.5
*/

// 1 - Initialer la metabox ----------------------------------------------------

add_action('admin_init', 'add_MB_repeat_emporter', 1);

function add_MB_repeat_emporter() {
	add_meta_box(
        'metabox_repeatable_titre',					// ID_META_BOX
        'Liste',									// TITLE_META_BOX
        'MB_repeat_emporter',						// CALLBACK
        'emporters',								// WP_SCREEN
        'normal',									// CONTEXT [ normal | advanced | side ]
        'default'									// PRIORITY [ hight | core | default | low ]
    );
} // END ==> add_MB_repeat_emporter

// 2 -  construction de la metabox ---------------------------------------------
function MB_repeat_emporter($POST) {
    	// global $POST;
    	$repeat_emporters = get_post_meta($POST->ID, 'repeat_emporters', true);
    	wp_nonce_field( 'MB_repeat_emporter_nonce', 'MB_repeat_emporter_nonce' );
    ?>

    <!-- Code HTML ICI -->

	<!-- START : JAVASCRIPT -->
	<script type="text/javascript">
        jQuery(document).ready(function($) {
        	$('.btn-save').click(function(e) {
        		e.preventDefault();
        		$('#publish').click();
        	}); // END -> click .btn-save

        	$('#add-row').on('click', function() {
        		var row = $('.empty-row.screen-reader-text').clone(true);
        		row.removeClass('empty-row screen-reader-text');
        		row.insertBefore('#table-repeatable-fieldset tbody>tr:last');
        		return false;
        	}); // END -> on click #add-row

        	$('.remove-row').on('click', function() {
        		$(this).parents('tr').remove();
        		return false;
        	}); // END -> on click .remove-row

        	// $('#table-repeatable-fieldset tbody').sortable({
        	// 	opacity: 0.6,
        	// 	revert: true,
        	// 	cursor: 'move',
        	// 	handle: '.sort'
        	// });// END -> sortable #table-repeatable-fieldset
        });
	</script><!-- /javascript -->


	<!-- START : table -->
	<table id="table-repeatable-fieldset" width="100%">
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
			if ( $repeat_emporters ) :
				foreach ( $repeat_emporters as $field ) {
			?>
					<tr>
						<td><a class="button remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_emporter[]" value="<?php if($field['numb_emporter'] != '') echo esc_attr( $field['numb_emporter'] ); ?>" /></td>
						<td><input type="text" class="widefat" name="name_emporter[]" value="<?php if ($field['name_emporter'] != '') echo esc_attr( $field['name_emporter'] );  ?>" /></td>
						<td><input type="text" class="widefat" name="price_emporter[]" value="<?php if ($field['price_emporter'] != '') echo esc_attr( $field['price_emporter'] );  ?>" /></td>
						<!-- <td><a class="sort">|||</a></td> -->

					</tr>
					<?php
							}
						else :
							// show a blank one
					?>
					<tr>
						<td><a class="button remove-row" href="#">-</a></td>
						<td><input type="text" class="widefat" name="numb_emporter[]" /></td>
						<td><input type="text" class="widefat" name="name_emporter[]" value="" /></td>
						<td><input type="text" class="widefat" name="price_emporter[]" value="" /></td>
						<!-- <td><a class="sort">|||</a></td> -->
					</tr>
				<?php endif; ?>

				<!-- empty hidden one for jQuery -->
				<tr class="empty-row screen-reader-text">
					<td><a class="button remove-row" href="#">-</a></td>
					<td><input type="text" class="widefat" name="numb_emporter[]" /></td>
					<td><input type="text" class="widefat" name="name_emporter[]" value="" /></td>
					<td><input type="text" class="widefat" name="price_emporter[]" value="" /></td>
					<!-- <td><a class="sort">|||</a></td> -->

				</tr><!-- / .empty-row .screen-reader-text-->
		</tbody><!-- / -->
	</table><!-- / #table-repeatable-fieldset -->

	<!-- START : bouton -->
	<p>
		<a id="add-row" class="button button-large" href="#">Ajouter</a>
		<input type="submit" class="button btn-save button-large" value="Sauvegarder" />
	</p><!-- / bouton -->

	<?php
} // END ==> MB_repeat_emporter


// 3 - Sauvegarder la metabox --------------------------------------------------
add_action('save_post', 'save_MB_repeat_emporter');
function save_MB_repeat_emporter($POST_ID) {
	if(!isset( $_POST['MB_repeat_emporter_nonce']) ||
		!wp_verify_nonce($_POST['MB_repeat_emporter_nonce'], 'MB_repeat_emporter_nonce' ))
		return;

	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;

	if(!current_user_can('edit_post', $POST_ID))
		return;

	$old = get_post_meta($POST_ID, 'repeat_emporters', true);
	$new = array();

	$numb_emporters = $_POST['numb_emporter'];
	$name_emporters = $_POST['name_emporter'];
	$price_emporters = $_POST['price_emporter'];

	$count = count( $numb_emporters );

	for($i = 0; $i < $count; $i++) {
		if($numb_emporters[$i] != '') :
			$new[$i]['numb_emporter'] = stripslashes( strip_tags( $numb_emporters[$i]));

		if($noms[$i] == '')
			$new[$i]['name_emporter'] = '';
		else
			$new[$i]['name_emporter'] = stripslashes( $name_emporters[$i]); // and however you want to sanitize

		if($prices[$i] == '')
			$new[$i]['price_emporter'] = '';
		else
				$new[$i]['price_emporter'] = stripslashes( $price_emporters[$i]); // and however you want to sanitize
		endif;
	}

	if(!empty($new) && $new != $old)
		update_post_meta($POST_ID, 'repeat_emporters', $new);
	elseif(empty($new) && $old)
		delete_post_meta( $POST_ID, 'repeat_emporters', $old);
} // END ==> save_MB_repeat_emporter
