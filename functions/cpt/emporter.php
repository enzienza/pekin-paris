<?php

/*
Name:   cpt-emporter
Description: Custom Post Type pour gérer le service à la emporter
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.2
*/

/*
    ----- SOMMAIR -----

    1. cpt-emporters
    2. metabox : slug
    3. metabox : upload image
    4. metabox : services


*/


/* ----------------------------------------------------------------------------- */
/* cpt_emporters Post Type */
/* ----------------------------------------------------------------------------- */
// construire le Custom Post Type ----------------------------------------------
function CPT_emporters() {
    $labels = array(
        'name'                  => __('Emporters', 'emporters'),
        'singuar_name'          => __('Emporter', 'emporters'),
        'menu_name'             => __('Emporter', 'emporters'),
        'name_admin_bar'        => __('Emporter', 'emporters'),
        'add_new'               => __('Ajouter', 'emporters'),
        'add_new_item'          => __('Ajouter un emporter', 'emporters'),
        'new_item'              => __('Nouveau emporter', 'emporters'),
        'edit_item'             => __('Editer un emporter', 'emporters'),
        'view_item'             => __('Voir les emporters', 'emporters'),
        'all_items'             => __('Toutes les emporters', 'emporters'),
        'search_items'          => __('Rechercher parmi les emporters', 'emporters'),
        'not_found'             => __('Pas d\'emporter trouvées', 'emporters'),
        'not_fount_in_trash'    => __('Pas d\'emporter dans la corbeille', 'emporters')
    );
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array(
            'slug' => 'emporters'
        ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 104,
        'menu_icon'             => 'dashicons-list-view',
        'supports' => array(
            'title',           // titre
            'editor'
        )
    );
    register_post_type('emporters', $args);
}
// initialisation le Custom Post Type ------------------------------------------
add_action('init',  'CPT_emporters');


/* ----------------------------------------------------------------------------- */
/* Metabox - slug */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_metabox_slug_emporters');

function add_metabox_slug_emporters(){
    add_meta_box(
        'id_metabox_slug_emporters',                    // ID_META_BOX
        'Slug',                                         // TITLE_META_BOX
        'MB_slug_emporters',                            // CALLBACK
        'emporters',                                    // WP_SCREEN
        'side',                                         // CONTEXT [ normal | advanced | side ]
        'high'                                          // PRIORITY [ high | core | default | low ]
    );
} // END => add_metabox_slug_emporters


// Construction de la Metabox --------------------------------------------------
function MB_slug_emporters($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_slug_emporters_nonce');
    $slug_emporter = get_post_meta($POST->ID, 'slug_emporter', true);

    ?>
    <p>
        <label for="slug_emporter">Slug</label>
        <input type="text" id="slug_emporter" name="slug_emporter" value="<?php echo $slug_emporter; ?>">
        <p class="info">
            Attention pas de majuscule, ni accent, ni d'espace, etc.
            Les trait d'union son autorisé.
            <strong>Tout doit être en un mot</strong><br />
            <span style="line-height: 2;">ex : pekin-paris <strong>OU</strong> pekinparis</span>
        </p>
    </p>

    <?php

} // END => MB_type_emporters


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_metabox_slug_emporters');

function save_metabox_slug_emporters($POST_ID){
    if(isset($_POST['slug_emporter'])){
        update_post_meta($POST_ID, 'slug_emporter', $_POST['slug_emporter']);
    }
} // END => save_metabox_slug_emporters


/* ----------------------------------------------------------------------------- */
/* Metabox - Type Cuisine (entre/plat) */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_metabox_type_emporters');

function add_metabox_type_emporters(){
    add_meta_box(
        'id_metabox_type_emporters',     // ID_META_BOX
        'Mise en avant' ,               // TITLE_META_BOX
        'MB_type_emporters',             // CALLBACK
        'emporters',                       // WP_SCREEN
        'side',                         // CONTEXT [ normal | advanced | side ]
        'high'                          // PRIORITY [ high | core | default | low ]
    );
}


// Construction de la Metabox --------------------------------------------------
function MB_type_emporters($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_type_emporters_nonce');
    $type = get_post_meta($POST->ID, 'type', true);
    ?>
        <p>
            <label for="type">Mettre en avant </label><br />
            <input type="radio" <?php checked($type, 'entree'); ?> name="type" value="entree"/>Entrée<br />
            <input type="radio" <?php checked($type, 'plat'); ?> name="type" value="plat"/>Plat<br />
        </p>
    <?php

}


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_metabox_type_emporters');

function save_metabox_type_emporters($POST_ID){
    if(isset($_POST['type'])){
        update_post_meta($POST_ID, 'type', $_POST['type']);
    }
}
