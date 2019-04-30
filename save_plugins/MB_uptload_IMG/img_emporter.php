<?php
/*
Plugin Name: Upload Image - emporters
Description: Metabox ajouter l'image du filtre et l'image de backgroud
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.4
*/

/* ----------------------------------------------------------------------------- */
/* Metabox - upload image */
/* ----------------------------------------------------------------------------- */


class metabox_img_emporter {
    // Definire WP_SCREEN -------------------------------------------------------
    private $screen = array(
		'emporters'
    ); // end ->  $screen

    // Définir les champs (élément formulaire) ---------------------------------
    private $meta_fields = array(
        array(
            'label' => 'Icon pour la navigation par Filtre',
            'id'    => 'icon-emporter',
            'type'  => 'media',
        ),

        array(
            'label' => 'image d\'arrière plan',
            'id'    => 'bg-emporter',
            'type'  => 'media',
        ),

    ); // end -> $meta_fields

    // Initialisation de la Metabox (TOUS) -------------------------------------
    public function __construct() {
        add_action( 'add_meta_boxes', array( $this, 'add_metaboxe_image_emporter' ) );
        add_action( 'admin_footer', array( $this, 'media_field_image_emporter' ) );
        add_action( 'save_post', array( $this, 'save_metabox_image_emporter' ) );
    } // end -> __construct

    // Création de la Metabox --------------------------------------------------
    public function add_metaboxe_image_emporter() {
        foreach ( $this->screen as $single_screen ) {
            add_meta_box(
                'metabox_img_emporter',                    // ID_META_BOX
                __( 'Images'),                          // TITLE_META_BOX
                array( $this, 'meta_box_callback' ),    // CALLBACK
                $single_screen,                         // WP_SCREEN
                'normal',                               // CONTEXT [ normal | advanced | side ]
                'core'                                  // PRIORITY [ high | core | default | low ]
            );
        }
    } // end -> add_meta_boxes


    public function meta_box_callback( $POST ) {
        wp_nonce_field( 'img_emporter_data', 'img_emporter_nonce' );
        $this->champ_genere( $POST );
    } // end -> meta_box_callback

    // Construction Srcipt -----------------------------------------------------
    public function media_field_image_emporter() {
        ?>
        <!-- START -> script -->
        <script>
            jQuery(document).ready(function($){

                // condition
                if ( typeof wp.media !== 'undefined' ) {

                    var _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                    $('.img_emporter-media').click(function(e) {
                        var send_attachment_bkp = wp.media.editor.send.attachment;
                        var button = $(this);
                        var id = button.attr('id').replace('_button', '');
                        _custom_media = true;
                        wp.media.editor.send.attachment = function(props, attachment){
                            // condition
                            if ( _custom_media ) {
                                $('input#'+id).val(attachment.url);
                            } else {
                                return _orig_send_attachment.apply( this, [props, attachment] );
                            };
                        } // end -> wp.media.editor.send.attachment

                        wp.media.editor.open(button);
                        return false;
                    }); // end -> click .img_emporter-media

                    $('.add_media').on('click', function(){
                        _custom_media = false;
                    }); // end -> on click .add_media

                } // end -> if ( typeof wp.media !== 'undefined' )

            }); // end -> ready document
        </script>
        <?php
    } // end -> media_field_image_emporter

    // Construction de la Metabox ----------------------------------------------
    public function champ_genere( $POST ) {

        $output = '';
        foreach ( $this->meta_fields as $meta_field ) {
            $label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
            $meta_value = get_post_meta( $POST->ID, $meta_field['id'], true );
            if ( empty( $meta_value ) ) {
                $meta_value = $meta_field['default'];
            } // end -> if ( empty( $meta_value )
            switch ( $meta_field['type'] ) {
                case 'media':
                $input = sprintf(
                    '<input style="width: 80%%" id="%s" name="%s" type="text" value="%s"> <input style="width: 19%%" class="button img_emporter-media" id="%s_button" name="%s_button" type="button" value="Upload" />',
                    $meta_field['id'],
                    $meta_field['id'],
                    $meta_value,
                    $meta_field['id'],
                    $meta_field['id']
                );
                break;
                default:
                $input = sprintf(
                    '<input %s id="%s" name="%s" type="%s" value="%s">',
                    $meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
                    $meta_field['id'],
                    $meta_field['id'],
                    $meta_field['type'],
                    $meta_value
                );
            } // end -> switch ( $meta_field['type'] )
            $output .= $this->format_rows( $label, $input );
        } // end -> foreach ( $this->meta_fields as $meta_field )

        echo '<div>' . $output . '</div>';
    } // end -> champ_genere


    public function format_rows( $label, $input ) {
        return '<p>'.$label.'</p><p>'.$input.'</p>';
    } // end -> format_rows

    // Sauvegarde des données de la Metabox ------------------------------------
    public function save_metabox_image_emporter( $POST_ID ) {

        if ( ! isset( $_POST['img_emporter_nonce'] ) )
        return $POST_ID;

        $nonce = $_POST['img_emporter_nonce'];
        if ( !wp_verify_nonce( $nonce, 'img_emporter_data' ) )
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

    } // end -> save_metabox_image_emporter

} // END => class metabox_img_emporter

// verification de ma metabox --------------------------------------------------
if (class_exists('metabox_img_emporter')) {
    new metabox_img_emporter;
}; // END => if (class_exists('metabox_img_emporter')
