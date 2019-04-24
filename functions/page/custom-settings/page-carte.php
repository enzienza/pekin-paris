<?php

/*
Name:   custom-settings - Page carte
Description: Fonction pour controllé les sections de la page d'accueil
             [custom_settings_option_theme]
             => 2e onglet 'page-carte' de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : cover
    section 2 : message
    section 3 : description carte
    section 4 : !!! pas de section 4 !!!
    section 5 : info reservation

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 2 -- page-carte
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_cartepage_cover',                               // ID
    __('Section 1 - Cover', 'section_cartepage_cover'),      // TITLE
    'display_section_cartepage_cover',                       // CALLBACK
    'page-carte'                                             // PAGE
); // end --> section : section_cartepage_cover

// FIELDS : cartepage_cover_hidden ----------------------------------------------
add_settings_field(
    'cartepage_cover_hidden',                                // ID
    __('Cacher la section', 'section_cartepage_cover'),      // LABEL
    'field_cartepage_cover_hidden',                          // CALLBACK FUNCTION
    'page-carte',                                            // MENU PAGE SLUG
    'section_cartepage_cover'                                // SECTION ID
); // end --> field : cartepage_cover_hidden

// FIELDS : cartepage_cover_bg_img ----------------------------------------------
add_settings_field(
    'cartepage_cover_bg_img',                                  // ID
    __('Image d\'arrière plan', 'section_cartepage_cover'),    // LABEL
    'field_cartepage_cover_bg_img',                            // CALLBACK FUNCTION
    'page-carte',                                              // MENU PAGE SLUG
    'section_cartepage_cover'                                  // SECTION ID
); // end -> field : cartepage_cover_bg_img



// FIELDS : cartepage_cover_titre -----------------------------------------------
add_settings_field(
    'cartepage_cover_titre',                                 // ID
    __('Titre de la section', 'section_cartepage_cover'),    // LABEL
    'field_cartepage_cover_titre',                           // CALLBACK FUNCTION
    'page-carte',                                            // MENU PAGE SLUG
    'section_cartepage_cover'                                // SECTION ID
); // end --> field : cartepage_cover_titre

// FIELDS : cartepage_cover_texte -----------------------------------------------
add_settings_field(
    'cartepage_cover_texte',                                 // ID
    __('Texte', 'section_cartepage_cover'),                  // LABEL
    'field_cartepage_cover_texte',                           // CALLBACK FUNCTION
    'page-carte',                                            // MENU PAGE SLUG
    'section_cartepage_cover'                                // SECTION ID
); // end --> field : cartepage_cover_texte


// REGISTER : section_cartepage_cover -------------------------------------------
register_setting('group-page-carte', 'cartepage_cover_hidden');
register_setting('group-page-carte', 'cartepage_cover_affiche_img');
register_setting('group-page-carte', 'cartepage_cover_titre');
register_setting('group-page-carte', 'cartepage_cover_texte');

// REGISTER : cartepage_cover_bg_img
register_setting(
    'group-page-carte',                    // group (element display in the form)
    'cartepage_cover_bg_img',              // field ID
    'handle_file_bg_cartepage'      // Callback function
); // end -> register : handle_file_bg_cartepage


/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_message --> Option 2 -- page-carte
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_cartepage_message',                                   // ID
    __('Section 2 -  Message', 'section_cartepage_message'),       // TITLE
    'display_section_cartepage_message',                           // CALLBACK
    'page-carte'                                                   // PAGE
); // end --> section : section_cartepage_message

// FIELDS : cartepage_msg_hidden ----------------------------------------------
add_settings_field(
    'cartepage_msg_hidden',                                    // ID
    __('Cacher la section', 'section_cartepage_message'),      // LABEL
    'field_cartepage_msg_hidden',                              // CALLBACK FUNCTION
    'page-carte',                                              // MENU PAGE SLUG
    'section_cartepage_message'                                // SECTION ID
); // end --> field : cartepage_msg_hidden

// FIELDS : cartepage_msg_img_avatar ----------------------------------------------
add_settings_field(
    'cartepage_msg_img_avatar',                                // ID
    __('Avatar', 'section_cartepage_message'),                 // LABEL
    'field_cartepage_msg_img_avatar',                          // CALLBACK FUNCTION
    'page-carte',                                              // MENU PAGE SLUG
    'section_cartepage_message'                                // SECTION ID
); // end -> field : cartepage_msg_img_avatar

// FIELDS : cartepage_msg_titre -----------------------------------------------
add_settings_field(
    'cartepage_msg_titre',                                     // ID
    __('Titre', 'section_cartepage_message'),                  // LABEL
    'field_cartepage_msg_titre',                               // CALLBACK FUNCTION
    'page-carte',                                              // MENU PAGE SLUG
    'section_cartepage_message'                                // SECTION ID
); // end --> field : cartepage_msg_titre

// FIELDS : cartepage_msg_cuisine -----------------------------------------------
add_settings_field(
    'cartepage_msg_cuisine',                                   // ID
    __('Type cuisine', 'section_cartepage_message'),         // LABEL
    'field_cartepage_msg_cuisine',                             // CALLBACK FUNCTION
    'page-carte',                                              // MENU PAGE SLUG
    'section_cartepage_message'                                // SECTION ID
); // end --> field : cartepage_msg_cuisine



// REGISTER : section_cartepage_message -------------------------------------------
register_setting('group-page-carte', 'cartepage_msg_hidden');
register_setting('group-page-carte', 'cartepage_msg_affiche_avatar');
register_setting('group-page-carte', 'cartepage_msg_titre');
register_setting('group-page-carte', 'cartepage_mgs_chinois');
register_setting('group-page-carte', 'cartepage_mgs_france');
register_setting('group-page-carte', 'cartepage_mgs_thai');

// REGISTER : cartepage_msg_img_avatar
register_setting(
    'group-page-carte',                             // group (element display in the form)
    'cartepage_msg_img_avatar',                     // field ID
    'handle_file_avatar_msg_cartepage'              // Callback function
); // end -> register : handle_file_avatar_msg_cartepage


/* ----------------------------------------------------------------------------- */
// SECTION 3 : section_description_carte --> Option 2 -- page-carte
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_cartepage_desc',                                           // ID
    __('Section 3 - Description carte', 'section_cartepage_desc'),     // TITLE
    'display_section_cartepage_desc',                                   // CALLBACK
    'page-carte'                                                        // PAGE
); // end --> section : section_cartepage_desc

// FIELDS : cartepage_desc_hidden ----------------------------------------------
add_settings_field(
    'cartepage_desc_hidden',                                 // ID
    __('Cacher la section', 'section_cartepage_desc'),       // LABEL
    'field_cartepage_desc_hidden',                           // CALLBACK FUNCTION
    'page-carte',                                            // MENU PAGE SLUG
    'section_cartepage_desc'                                 // SECTION ID
); // end --> field : cartepage_desc_hidden

// FIELDS : cartepage_desc_txt_content ----------------------------------------------
add_settings_field(
    'cartepage_desc_txt_content',                              // ID
    __('Texte description', 'section_cartepage_desc'),         // LABEL
    'field_cartepage_desc_txt_content',                        // CALLBACK FUNCTION
    'page-carte',                                              // MENU PAGE SLUG
    'section_cartepage_desc'                                   // SECTION ID
); // end --> field : cartepage_desc_txt_content


// REGISTER : section_cartepage_desc
register_setting('group-page-carte', 'cartepage_desc_hidden');
register_setting('group-page-carte', 'cartepage_desc_txt_content');


/* ----------------------------------------------------------------------------- */
// SECTION 5 : section-reservation --> Option 2 -- page-carte
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_cartepage_reservation',                               // ID
    __('Section 5 - Réservation', 'section_cartepage_reservation'),      // TITLE
    'display_section_cartepage_reservation',                       // CALLBACK
    'page-carte'                                             // PAGE
); // end --> section : section_cartepage_cover

// FIELDS : cartepage_reservation_hidden ----------------------------------------------
add_settings_field(
    'cartepage_reservation_hidden',                                // ID
    __('Cacher la section', 'section_cartepage_reservation'),      // LABEL
    'field_cartepage_reservation_hidden',                          // CALLBACK FUNCTION
    'page-carte',                                            // MENU PAGE SLUG
    'section_cartepage_reservation'                                // SECTION ID
); // end --> field : cartepage_cover_hidden


// REGISTER : section-reservation
register_setting('group-page-carte', 'cartepage_reservation_hidden');
