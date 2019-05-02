<?php

/*
Plugin Name: TEST KOALA
Description:
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.23
*/


/* ----------------------------------------------------------------------------- */
/* Metabox - upload image */
/* ----------------------------------------------------------------------------- */


class MB_service_one {
    // Definire WP_SCREEN -------------------------------------------------------
    private $screen = array(
        'cartes'
    ); // end ->  $screen

    // Définir les champs (élément formulaire) ---------------------------------
    private $meta_fields = array(
        array(
            'label' => 'Numéro',
            'id'    => 'numb_carte',
            'type'  => 'text',
        ),

        array(
            'label' => 'Nom',
            'id'    => 'name_carte',
            'type'  => 'text',
        ),

        array(
            'label' => 'Prix',
            'id'    => 'price_numb',
            'type'  => 'text',
        ),

    ); // end -> $meta_fields

    // Initialisation de la Metabox (TOUS) -------------------------------------
    public function __construct() {
        add_action( 'add_meta_boxes', array( $this, 'add_MB_service_one' ) );
        add_action( 'admin_footer', array( $this, 'script_MB_service_one' ) );
        add_action( 'save_post', array( $this, 'save_MB_service_one' ) );
    } // end -> __construct

    // Création de la Metabox --------------------------------------------------
    public function add_MB_service_one() {
        foreach ( $this->screen as $single_screen ) {
            add_meta_box(
                'MB_service_one',                    // ID_META_BOX
                __( 'Images'),                          // TITLE_META_BOX
                array( $this, 'meta_box_callback' ),    // CALLBACK
                $single_screen,                         // WP_SCREEN
                'normal',                               // CONTEXT [ normal | advanced | side ]
                'core'                                  // PRIORITY [ high | core | default | low ]
            );
        }
    } // end -> add_meta_boxes


    public function meta_box_callback( $POST ) {
        wp_nonce_field( 'MB_service_one_data', 'MB_service_one_nonce' );
        $this->champ_genere( $POST );
    } // end -> meta_box_callback

    // Construction Srcipt -----------------------------------------------------
    public function script_MB_service_one() {
        ?>
        <!-- START -> script -->
        <script>
            jQuery(document).ready(function($) {
                // $('.btn-save').click(function(e) {
                //     e.preventDefault();
                //     $('#publish').click();
                // }); // END -> click .btn-save

                $('#add-row').on('click', function() {
                    var row = $('.empty-row.screen-reader-text').clone(true);
                    row.removeClass('empty-row screen-reader-text');
                    row.insertBefore('#table-carte tbody>tr:last');
                    return false;
                }); // END -> on click #add-row

                $('.remove-row').on('click', function() {
                    $(this).parents('tr').remove();
                    return false;
                }); // END -> on click .remove-row

                // $('#table-carte tbody').sortable({
                // 	opacity: 0.6,
                // 	revert: true,
                // 	cursor: 'move',
                // 	handle: '.sort'
                // });// END -> sortable #table-carte
            });
        </script>
        <?php
    } // end -> script_MB_service_one

    // Construction de la Metabox ----------------------------------------------
    public function champ_genere( $POST ) {
        $service_one_repeat = get_post_meta($POST->ID, 'service_one_repeat', true);


        ?>

            <table id="table-carte" width="100%">
                <thead>
                    <tr>
                        <th width="5%"></th>
        				<th width="15%">Numéro</th>
        				<th width="60%">Nom</th>
        				<th width="15%">Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- DEBUT FOREACH -->
                    <?php if($service_one_repeat) : ?>
                        <?php foreach ( $service_one_repeat as $meta_fields ) { ?>
                            <tr>
                                <td><a class="button remove-row" href="#">-</a></td>
                                <td><input class="widefat" type="text" id="$meta_fields['numb_carte']" name="$meta_fields['numb_carte']" value="<?php if($meta_fields['numb_carte'] != '') echo esc_attr($meta_fields['numb_carte']); ?>" /></td>
                                <td><input class="widefat" type="text" id="$meta_fields['name_carte']" name="$meta_fields['name_carte']" value="<?php if($meta_fields['name_carte'] != '') echo esc_attr($meta_fields['name_carte']); ?>" /></td>
                                <td><input class="widefat" type="text" id="$meta_fields['price_numb']" name="$meta_fields['price_numb']" value="<?php if($meta_fields['price_numb'] != '') echo esc_attr($meta_fields['price_numb']); ?>" /></td>
                            </tr>

                        <?php } ?>
                    <?php else : ?>
                        <tr>
                            <td><a class="button remove-row" href="#">-</a></td>
                            <td><input class="widefat" type="text" id="$meta_fields['numb_carte']" name="$meta_fields['numb_carte']" value=""></td>
                            <td><input class="widefat" type="text" id="$meta_fields['name_carte']" name="$meta_fields['name_carte']" value=""></td>
                            <td><input class="widefat" type="text" id="$meta_fields['price_numb']" name="$meta_fields['price_numb']" value=""></td>
                        </tr>

                    <?php endif; ?>

                    <!-- FIN FOREACH -->

                    <!-- empty hidden one for jQuery -->
    				<tr class="empty-row screen-reader-text">
    					<td><a class="button remove-row" href="#">-</a></td>
    					<td><input type="text" class="widefat" id="$meta_fields['numb_carte']" name="$meta_fields['numb_carte']" /></td>
    					<td><input type="text" class="widefat" id="$meta_fields['name_carte']" name="$meta_fields['name_carte']" value="" /></td>
    					<td><input type="text" class="widefat" id="$meta_fields['price_numb']" name="$meta_fields['price_numb']" value="" /></td>
    					<!-- <td><a class="sort">|||</a></td> -->
    				</tr><!-- / .empty-row .screen-reader-text-->

                </tbody>

            </table>


            <!-- START : bouton -->
	<p>
		<a id="add-row" class="button button-large" href="#">Ajouter</a>
		<!-- <input type="submit" class="button btn-save button-large" value="Sauvegarder" /> -->
	</p><!-- / bouton -->


        <?php

    } // end -> champ_genere


    // public function format_rows( $label, $input ) {
    //     return '<p>'.$label.'</p><p>'.$input.'</p>';
    // } // end -> format_rows

    // Sauvegarde des données de la Metabox ------------------------------------
    public function save_MB_service_one( $POST_ID ) {

        if ( ! isset( $_POST['MB_service_one_nonce'] ) )
        return $POST_ID;

        $nonce = $_POST['MB_service_one_nonce'];
        if ( !wp_verify_nonce( $nonce, 'MB_service_one_data' ) )
        return $POST_ID;

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return $POST_ID;

        foreach ( $this->meta_fields as $meta_field ) {
            if ( isset( $_POST[ $meta_field['id'] ] ) ) {
                switch ( $meta_field['type'] ) {
                    case 'email':
                    $_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
                    break;
                    case 'text':
                    $_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
                    break;
                } // end -> switch ( $meta_field['type'] )

                update_post_meta( $POST_ID, $meta_field['id'], $_POST[ $meta_field['id'] ] );

            } else if ( $meta_field['type'] === 'checkbox' ) {
                update_post_meta( $POST_ID, $meta_field['id'], '0' );
            } // end ->  else if ( $meta_field['type'] === 'checkbox' )

        } // end -> foreach ( $this->meta_fields as $meta_field )

    } // end -> save_MB_service_one

} // END => class MB_service_one

// verification de ma metabox --------------------------------------------------
if (class_exists('MB_service_one')) {
    new MB_service_one;
}; // END => if (class_exists('MB_service_one')
