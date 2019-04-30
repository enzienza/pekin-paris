<?php

/*
Plugin Name: Service à la carte
Description: Métabox pour les services à la carte | Tableau Statique | page-carte
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.5
*/

/*
----- SOMMAIR -----

1. MB_service_one
2. MB_sercice_two
3. MB_service_three
4. MB_service_four


*/

/* ----------------------------------------------------------------------------- */
/* Metabox - one_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_one_service_carte');

function add_MB_one_service_carte(){
    add_meta_box(
        'id_MB_one_service_carte',                    // ID_META_BOX
        'Service un',                                // TITLE_META_BOX
        'MB_one_service_carte',                       // CALLBACK
        'cartes',                                    // WP_SCREEN
        'normal',                                    // CONTEXT [ normal | advanced | side ]
        'default'                                    // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/service-un.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_one_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/service-un.php' );


/* ----------------------------------------------------------------------------- */
/* Metabox - two_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_two_service_carte');

function add_MB_two_service_carte(){
    add_meta_box(
        'id_MB_two_service_carte',                    // ID_META_BOX
        'Service deux',                                // TITLE_META_BOX
        'MB_two_service_carte',                       // CALLBACK
        'cartes',                                    // WP_SCREEN
        'normal',                                    // CONTEXT [ normal | advanced | side ]
        'default'                                    // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/service-two.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_two_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/service-two.php' );
