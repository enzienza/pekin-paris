<?php

/*
Name:   cpt-carte
Description: Custom Post Type pour gérer le service à la carte
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.2
*/

/*
    ----- SOMMAIR -----

    1. cpt-cartes
    2. metabox : slug
    3. metabox : upload image
    4. metabox : services


*/


/* ----------------------------------------------------------------------------- */
/* cpt_cartes Post Type */
/* ----------------------------------------------------------------------------- */
// construire le Custom Post Type ----------------------------------------------
function CPT_cartes() {
    $labels = array(
        'name'                  => __('Services à la carte', 'cartes'),
        'singuar_name'          => __('Service à la carte', 'cartes'),
        'menu_name'             => __('Service à la carte', 'cartes'),
        'name_admin_bar'        => __('Service à la carte', 'cartes'),
        'add_new'               => __('Ajouter', 'service à cartes'),
        'add_new_item'          => __('Ajouter un service à carte', 'cartes'),
        'new_item'              => __('Nouveau service carte', 'cartes'),
        'edit_item'             => __('Editer un service carte', 'cartes'),
        'view_item'             => __('Voir les services à carte', 'cartes'),
        'all_items'             => __('Toutes les service à cartes', 'cartes'),
        'search_items'          => __('Rechercher parmi les services à carte', 'cartes'),
        'not_found'             => __('Pas de service à carte trouvées', 'cartes'),
        'not_fount_in_trash'    => __('Pas de service à carte dans la corbeille', 'cartes')
    );
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array(
            'slug' => 'cartes'
        ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 103,
        'menu_icon'             => 'dashicons-excerpt-view',
        'supports' => array(
            'title',           // titre
            'editor'
        )
    );
    register_post_type('cartes', $args);
}
// initialisation le Custom Post Type ------------------------------------------
add_action('init',  'CPT_cartes');

/* ----------------------------------------------------------------------------- */
/* Metabox - slug */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_metabox_slug_cartes');

function add_metabox_slug_cartes(){
    add_meta_box(
        'id_metabox_slug_cartes',                       // ID_META_BOX
        'Slug',                                         // TITLE_META_BOX
        'MB_slug_cartes',                               // CALLBACK
        'cartes',                                       // WP_SCREEN
        'side',                                         // CONTEXT [ normal | advanced | side ]
        'high'                                          // PRIORITY [ high | core | default | low ]
    );
} // END => add_metabox_slug_cartes


// Construction de la Metabox --------------------------------------------------
function MB_slug_cartes($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_slug_cartes_nonce');
    $slug_carte = get_post_meta($POST->ID, 'slug_carte', true);

    ?>
    <p>
        <label for="slug_carte">Slug</label>
        <input type="text" id="slug_carte" name="slug_carte" value="<?php echo $slug_carte; ?>">
        <p class="info">
            Attention pas de majuscule, ni accent, ni d'espace, etc.
            Les trait d'union son autorisé.
            <strong>Tout doit être en un mot</strong><br />
            <span style="line-height: 2;">ex : pekin-paris <strong>OU</strong> pekinparis</span>
        </p>
    </p>

    <?php

} // END => MB_sticky_cartes


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_metabox_slug_cartes');

function save_metabox_slug_cartes($POST_ID){
    if(isset($_POST['slug_carte'])){
        update_post_meta($POST_ID, 'slug_carte', $_POST['slug_carte']);
    }
} // END => save_metabox_slug_cartes
