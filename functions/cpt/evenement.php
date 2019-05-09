<?php

/*
Name:   cpt-evenement
Description: Custom Post Type pour gérer le service à la evenement
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.2
*/

/*
    ----- SOMMAIR -----

    1. cpt-evenements
    2. metabox : info-event

*/


/* ----------------------------------------------------------------------------- */
/* cpt_evenements Post Type */
/* ----------------------------------------------------------------------------- */
// construire le Custom Post Type ----------------------------------------------
function CPT_evenements() {
    $labels = array(
        'name'                  => __('Evenements', 'evenements'),
        'singuar_name'          => __('Evenement', 'evenements'),
        'menu_name'             => __('Evenement', 'evenements'),
        'name_admin_bar'        => __('Evenement', 'evenements'),
        'add_new'               => __('Ajouter', 'evenements'),
        'add_new_item'          => __('Ajouter un evenement', 'evenements'),
        'new_item'              => __('Nouveau evenement', 'evenements'),
        'edit_item'             => __('Editer un evenement', 'evenements'),
        'view_item'             => __('Voir les evenements', 'evenements'),
        'all_items'             => __('Toutes les evenements', 'evenements'),
        'search_items'          => __('Rechercher parmi les evenements', 'evenements'),
        'not_found'             => __('Pas d\'evenement trouvées', 'evenements'),
        'not_fount_in_trash'    => __('Pas d\'evenement dans la corbeille', 'evenements')
    );
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array(
            'slug' => 'evenements'
        ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 105,
        'menu_icon'             => 'dashicons-awards',
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('evenements', $args);
}
// initialisation le Custom Post Type ------------------------------------------
add_action('init',  'CPT_evenements');


/* ----------------------------------------------------------------------------- */
/* Metabox - info-event  */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_metabox_info_events');

function add_metabox_info_events(){
    add_meta_box(
        'id_metabox_info_events',                         // ID_META_BOX
        'Information',                                           // TITLE_META_BOX
        'MB_info_events',                                 // CALLBACK
        'evenements',                                     // WP_SCREEN
        'side',                                           // CONTEXT [ normal | advanced | side ]
        'high'                                            // PRIORITY [ high | core | default | low ]
    );
} // END => add_metabox_info_events


// Construction de la Metabox --------------------------------------------------

function MB_info_events($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_info_events_nonce');
    $date_event = get_post_meta($POST->ID, 'date_event', true);
    $heure_event = get_post_meta($POST->ID, 'heure_event', true);

    ?>
    <p>
        <label for="date_event">Date</label>
        <input type="date" id="date_event" name="date_event" value="<?php echo $date_event; ?>">
    </p>
    <p>
        <label for="heure_event">Heure</label>
        <input id="heure_event" type="time" name="heure_event" value="<?php echo $heure_event; ?>"/>
    </p>

    <?php

} // END => MB_info_events

// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_metabox_info_events');

function save_metabox_info_events($POST_ID){
    if(isset($_POST['date_event'])){
        update_post_meta($POST_ID, 'date_event', $_POST['date_event']);
    }
    if(isset($_POST['heure_event'])){
        update_post_meta($POST_ID, 'heure_event', esc_html($_POST['heure_event']));
    }
} // END => save_metabox_info_events
