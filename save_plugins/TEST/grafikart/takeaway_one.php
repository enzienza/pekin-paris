<?php

/*
Plugin Name: TAKEAWAY - TUTTO GRAFIKART
Plugin URI: https://www.youtube.com/watch?v=bTiAR4kMfwc
Description:
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.85
*/




class takeaway_enza{



    // CONSTRUCT ---------------------------------------------------------------
    public function __construct(){
        add_action( 'add_meta_boxes', array( $this, 'add_MB_takeaway' ) );
        // add_action( 'admin_footer', array( $this, 'script_MB_takeaway' ) );
        add_action( 'save_post', array( $this, 'save_MB_takeaway' ) );
    } // END ==> __construct




    // Create Metabox ----------------------------------------------------------
    public function add_MB_takeaway(){

    } // END ==> add_MB_takeaway


    // Script Metabox ----------------------------------------------------------
    // public function script_MB_takeaway(){
    //
    // } // END ==> script_MB_takeaway


    // Save Metabox ------------------------------------------------------------
    public function save_MB_takeaway(){

    } // END ==> save_MB_takeaway



} // END ==> takeaway_enza

if (class_exists('takeaway_enza')) {
    new takeaway_enza;
}; // END => if (class_exists('takeaway_enza')























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
