<?php

/*
Plugin Name: TUTTO GRAFIKART
Plugin URI: https://www.youtube.com/watch?v=bTiAR4kMfwc
Description: Métabox pour la carte à emporter | Tableau Statique | page-emporter
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.11
*/




class takeaway_one{

    // Definire WP_SCREEN -------------------------------------------------------
    private $screen = array(
        'cartes'
    ); // END ==>  $screen


    // Définir les champs (élément formulaire) ---------------------------------
    private $meta_fields = array(
        array(
            'label' => 'Titre service',
            'id'    => 'titre_cart',
            'type'  => 'text',
        ),

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

    ); // END ==> $meta_fields

    // Initialisation de la Metabox (TOUS) -------------------------------------
    public function __construct() {
        add_action( 'add_meta_boxes', array( $this, 'add_MB_takeaway_one' ) );
        // add_action( 'admin_footer', array( $this, 'script_MB_takeaway_one' ) );
        add_action( 'save_post', array( $this, 'save_MB_takeaway_one' ) );
    } // END ==> __construct


    // Création de la Metabox --------------------------------------------------
    public function add_MB_takeaway(){
        if(function_exists('add_meta_box')){
            add_meta_box(
                'takeaway',             // ID_META_BOX
                'Liste à emporter',     // TITLE_META_BOX
                'MB_render_takeaway',   // CALLBACK
                 $screen,                 // WP_SCREEN
                'normal',               // CONTEXT [ normal | advanced | side ]
                'default'               // PRIORITY [ hight | core | default | low ]
            );
        }
    } // END ==> add_MB_takeaway


    // Construction Srcipt -----------------------------------------------------
    // function script_MB_takeaway_one(){
    //
    // } // END ==> script_MB_takeaway_one



    // Construction de la Metabox ----------------------------------------------
    public function MB_render_takeaway($POST){

    } // END ==> MB_render_takeaway


    // Sauvegarde des données de la métabox ------------------------------------
    public function save_MB_takeaway_one($POST){

    } // END ==> save_MB_takeaway_one


} // END ==> takeaway_one

if (class_exists('takeaway_one')) {
    new takeaway_one;
}; // END => if (class_exists('takeaway_one')























// Construction de la Metabox --------------------------------------------------
function MB_render_takeaway($POST){
    wp_nonce_field(basename(__FILE__), 'MB_slug_takeaways_nonce');

    $slug_takeaway = get_post_meta($POST->ID, 'slug_takeaway', true);

    ?>

        <div class="meta-box-item-title">
            Hello
        </div>

        <div class="meta-box-item-content">
            <label for="slug_takeaway">Slug</label>
            <input type="text" id="slug_takeaway" name="slug_takeaway" value="<?php echo $slug_takeaway; ?>">
        </div>

    <?php
} // END => MB_render_takeaway


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_takeaway');

function save_MB_takeaway($POST_ID){

    /* --- vérifier nonce --- */
    if (!wp_verify_nonce( $nonce, 'MB_slug_takeaways_nonce' )){
        return false;
    }

    /* --- Vérifier permisons --- */
    if(!current_user_can('edit_post', $POST_ID)){
        return false;
    }

    if(!isset($POST['slug_takeaway'])){
        return false;
    }

    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return false;
    }



    if(isset($_POST['slug_takeaway'])){
        update_post_meta($POST_ID, 'slug_takeaway', $_POST['slug_takeaway']);
    } else {
        add_post_meta($POST_ID, 'slug_takeaway', $_POST['slug_takeaway']);
    }

} // END => save_MB_takeaway
