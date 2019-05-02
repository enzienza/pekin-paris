<?php

/*
Plugin Name: Service à la carte | Solution Provisoir
Description: Métabox pour les services à la carte | Tableau STATIQUE | page-carte
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.5.1
*/

/*
----- SOMMAIR -----

    01.  one_service_carte
    02.  two_service_carte
    03.  three_service_carte
    04.  four_service_carte
    05.  five_service_carte
    06.  six_service_carte
    07.  seven_service_carte
    08.  height_service_carte
    09.  nine_service_carte
    10.  ten_service_carte
    11.  eleven_service_carte
    12.  twelve_service_carte
    13.  thirteen_service_carte
    14.  fourteen_service_carte
    15.  fifteen_service_carte


*/

/* ----------------------------------------------------------------------------- */
/* Metabox - one_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_one_service_carte');

function add_MB_one_service_carte(){
    add_meta_box(
        'id_MB_one_service_carte',                    // ID_META_BOX
        'Service 1',                                  // TITLE_META_BOX
        'MB_one_service_carte',                       // CALLBACK
        'cartes',                                     // WP_SCREEN
        'normal',                                     // CONTEXT [ normal | advanced | side ]
        'default'                                     // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/one_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_one_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/one_service_carte.php' );


/* ----------------------------------------------------------------------------- */
/* Metabox - two_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_two_service_carte');

function add_MB_two_service_carte(){
    add_meta_box(
        'id_MB_two_service_carte',                  // ID_META_BOX
        'Service 2',                                // TITLE_META_BOX
        'MB_two_service_carte',                     // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/two_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_two_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/two_service_carte.php' );


/* ----------------------------------------------------------------------------- */
/* Metabox - three_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_three_service_carte');

function add_MB_three_service_carte(){
    add_meta_box(
        'id_MB_three_service_carte',                // ID_META_BOX
        'Service 3',                                // TITLE_META_BOX
        'MB_three_service_carte',                   // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/three_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_three_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/three_service_carte.php' );


/* ----------------------------------------------------------------------------- */
/* Metabox - four_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_four_service_carte');

function add_MB_four_service_carte(){
    add_meta_box(
        'id_MB_four_service_carte',                 // ID_META_BOX
        'Service 4',                                // TITLE_META_BOX
        'MB_four_service_carte',                    // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/four_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_four_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/four_service_carte.php' );


/* ----------------------------------------------------------------------------- */
/* Metabox - five_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_five_service_carte');

function add_MB_five_service_carte(){
    add_meta_box(
        'id_MB_five_service_carte',                 // ID_META_BOX
        'Service 5',                                // TITLE_META_BOX
        'MB_five_service_carte',                    // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/five_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_five_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/five_service_carte.php' );


/* ----------------------------------------------------------------------------- */
/* Metabox - six_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_six_service_carte');

function add_MB_six_service_carte(){
    add_meta_box(
        'id_MB_six_service_carte',                  // ID_META_BOX
        'Service 6',                                // TITLE_META_BOX
        'MB_six_service_carte',                     // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/six_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_six_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/six_service_carte.php' );

/* ----------------------------------------------------------------------------- */
/* Metabox - seven_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_seven_service_carte');

function add_MB_seven_service_carte(){
    add_meta_box(
        'id_MB_seven_service_carte',                // ID_META_BOX
        'Service 7',                                // TITLE_META_BOX
        'MB_seven_service_carte',                   // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/seven_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_seven_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/seven_service_carte.php' );


/* ----------------------------------------------------------------------------- */
/* Metabox - height_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_height_service_carte');

function add_MB_height_service_carte(){
    add_meta_box(
        'id_MB_height_service_carte',               // ID_META_BOX
        'Service 8',                                // TITLE_META_BOX
        'MB_height_service_carte',                  // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/height_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_height_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/height_service_carte.php' );


/* ----------------------------------------------------------------------------- */
/* Metabox - nine_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_nine_service_carte');

function add_MB_nine_service_carte(){
    add_meta_box(
        'id_MB_nine_service_carte',                 // ID_META_BOX
        'Service 9',                                // TITLE_META_BOX
        'MB_nine_service_carte',                    // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/nine_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_nine_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/nine_service_carte.php' );


/* ----------------------------------------------------------------------------- */
/* Metabox - ten_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_ten_service_carte');

function add_MB_ten_service_carte(){
    add_meta_box(
        'id_MB_ten_service_carte',               // ID_META_BOX
        'Service 10',                                // TITLE_META_BOX
        'MB_ten_service_carte',                  // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/ten_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_ten_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/ten_service_carte.php' );


/* ----------------------------------------------------------------------------- */
/* Metabox - eleven_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_eleven_service_carte');

function add_MB_eleven_service_carte(){
    add_meta_box(
        'id_MB_eleven_service_carte',               // ID_META_BOX
        'Service 11',                               // TITLE_META_BOX
        'MB_eleven_service_carte',                  // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/eleven_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_eleven_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/eleven_service_carte.php' );



/* ----------------------------------------------------------------------------- */
/* Metabox - twelve_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_twelve_service_carte');

function add_MB_twelve_service_carte(){
    add_meta_box(
        'id_MB_twelve_service_carte',               // ID_META_BOX
        'Service 12',                               // TITLE_META_BOX
        'MB_twelve_service_carte',                  // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/twelve_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_twelve_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/twelve_service_carte.php' );




/* ----------------------------------------------------------------------------- */
/* Metabox - thirteen_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_thirteen_service_carte');

function add_MB_thirteen_service_carte(){
    add_meta_box(
        'id_MB_thirteen_service_carte',               // ID_META_BOX
        'Service 13',                               // TITLE_META_BOX
        'MB_thirteen_service_carte',                  // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/thirteen_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_thirteen_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/thirteen_service_carte.php' );



/* ----------------------------------------------------------------------------- */
/* Metabox - fourteen_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_fourteen_service_carte');

function add_MB_fourteen_service_carte(){
    add_meta_box(
        'id_MB_fourteen_service_carte',             // ID_META_BOX
        'Service 14',                               // TITLE_META_BOX
        'MB_fourteen_service_carte',                // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/fourteen_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_fourteen_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/fourteen_service_carte.php' );


/* ----------------------------------------------------------------------------- */
/* Metabox - fifteen_service */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_MB_fifteen_service_carte');

function add_MB_fifteen_service_carte(){
    add_meta_box(
        'id_MB_fifteen_service_carte',              // ID_META_BOX
        'Service 15',                               // TITLE_META_BOX
        'MB_fifteen_service_carte',                 // CALLBACK
        'cartes',                                   // WP_SCREEN
        'normal',                                   // CONTEXT [ normal | advanced | side ]
        'default'                                   // PRIORITY [ high | core | default | low ]
    );
} // END => add_MB_one_service_carte


// Construction de la Metabox --------------------------------------------------
require_once( plugin_dir_path( __FILE__ ) . '/construction/fifteen_service_carte.php' );


// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_fifteen_service_carte');

require_once( plugin_dir_path( __FILE__ ) . '/save_post/fifteen_service_carte.php' );
