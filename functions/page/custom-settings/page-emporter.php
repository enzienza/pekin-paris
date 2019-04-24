<?php

/*
Name:   custom-settings - Page carte
Description: Fonction pour controllé les sections de la page d'accueil
             [custom_settings_option_theme]
             => 2e onglet 'page-emporter' de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : cover
    section 2 : message
    section 3 : carte-emporter
    section 4 : info commande
    section 5 : buffet-emporter

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 3 -- page-emporter
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_emporterpage_cover',                               // ID
    __('Section 1 - Cover', 'section_emporterpage_cover'),      // TITLE
    'display_section_emporterpage_cover',                       // CALLBACK
    'page-emporter'                                             // PAGE
); // end --> section : section_emporterpage_cover

// FIELDS : emporterpage_cover_hidden ------------------------------------------
add_settings_field(
    'emporterpage_cover_hidden',                                // ID
    __('Cacher la section', 'section_emporterpage_cover'),      // LABEL
    'field_emporterpage_cover_hidden',                          // CALLBACK FUNCTION
    'page-emporter',                                            // MENU PAGE SLUG
    'section_emporterpage_cover'                                // SECTION ID
); // end --> field : emporterpage_cover_hidden

// FIELDS : emporterpage_cover_bg_img ------------------------------------------
add_settings_field(
    'emporterpage_cover_bg_img',                                  // ID
    __('Image d\'arrière plan', 'section_emporterpage_cover'),    // LABEL
    'field_emporterpage_cover_bg_img',                            // CALLBACK FUNCTION
    'page-emporter',                                              // MENU PAGE SLUG
    'section_emporterpage_cover'                                  // SECTION ID
); // end -> field : emporterpage_cover_bg_img



// FIELDS : emporterpage_cover_titre -------------------------------------------
add_settings_field(
    'emporterpage_cover_titre',                                 // ID
    __('Titre de la section', 'section_emporterpage_cover'),    // LABEL
    'field_emporterpage_cover_titre',                           // CALLBACK FUNCTION
    'page-emporter',                                            // MENU PAGE SLUG
    'section_emporterpage_cover'                                // SECTION ID
); // end --> field : emporterpage_cover_titre

// FIELDS : emporterpage_cover_texte -------------------------------------------
add_settings_field(
    'emporterpage_cover_texte',                                 // ID
    __('Texte', 'section_emporterpage_cover'),                  // LABEL
    'field_emporterpage_cover_texte',                           // CALLBACK FUNCTION
    'page-emporter',                                            // MENU PAGE SLUG
    'section_emporterpage_cover'                                // SECTION ID
); // end --> field : emporterpage_cover_texte


// REGISTER : section_emporterpage_cover ---------------------------------------
register_setting('group-page-emporter', 'emporterpage_cover_hidden');
register_setting('group-page-emporter', 'emporterpage_cover_affiche_img');
register_setting('group-page-emporter', 'emporterpage_cover_titre');
register_setting('group-page-emporter', 'emporterpage_cover_texte');

// REGISTER : emporterpage_cover_bg_img
register_setting(
    'group-page-emporter',                    // group (element display in the form)
    'emporterpage_cover_bg_img',              // field ID
    'handle_file_bg_emporterpage'             // Callback function
); // end -> register : handle_file_bg_emporterpage

/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_message --> Option 3 -- page-emporter
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_emporterpage_message',                                   // ID
    __('Section 2 -  Message', 'section_emporterpage_message'),       // TITLE
    'display_section_emporterpage_message',                           // CALLBACK
    'page-emporter'                                                   // PAGE
); // end --> section : section_emporterpage_message

// FIELDS : emporterpage_msg_hidden --------------------------------------------
add_settings_field(
    'emporterpage_msg_hidden',                                    // ID
    __('Cacher la section', 'section_emporterpage_message'),      // LABEL
    'field_emporterpage_msg_hidden',                              // CALLBACK FUNCTION
    'page-emporter',                                              // MENU PAGE SLUG
    'section_emporterpage_message'                                // SECTION ID
); // end --> field : emporterpage_msg_hidden

// FIELDS : emporterpage_msg_img_avatar ----------------------------------------
add_settings_field(
    'emporterpage_msg_img_avatar',                                // ID
    __('Avatar', 'section_emporterpage_message'),                 // LABEL
    'field_emporterpage_msg_img_avatar',                          // CALLBACK FUNCTION
    'page-emporter',                                              // MENU PAGE SLUG
    'section_emporterpage_message'                                // SECTION ID
); // end -> field : emporterpage_msg_img_avatar

// FIELDS : emporterpage_msg_txt -----------------------------------------------
add_settings_field(
    'emporterpage_msg_txt',                                     // ID
    __('Texte accroche', 'section_emporterpage_message'),       // LABEL
    'field_emporterpage_msg_txt',                               // CALLBACK FUNCTION
    'page-emporter',                                            // MENU PAGE SLUG
    'section_emporterpage_message'                              // SECTION ID
); // end --> field : emporterpage_msg_txt


// REGISTER : section_emporterpage_message -------------------------------------
register_setting('group-page-emporter', 'emporterpage_msg_hidden');
register_setting('group-page-emporter', 'emporterpage_msg_affiche_avatar');
register_setting('group-page-emporter', 'emporterpage_msg_txt');

// REGISTER : emporterpage_msg_img_avatar
register_setting(
    'group-page-emporter',                             // group (element display in the form)
    'emporterpage_msg_img_avatar',                     // field ID
    'handle_file_avatar_msg_emporterpage'              // Callback function
); // end -> register : handle_file_avatar_msg_emporterpage


/* ----------------------------------------------------------------------------- */
// SECTION 3 : section_emporterpage_info --> Option 3 -- page-emporter
/* ----------------------------------------------------------------------------- */

// SETTINGS
add_settings_section(
    'section_emporterpage_info',                                           // ID
    __('Section 3 - Carte à emporter', 'section_emporterpage_info'),       // TITLE
    'display_section_emporterpage_info',                                   // CALLBACK
    'page-emporter'                                                        // PAGE
); // end --> section : section_emporterpage_info

// FIELDS : emporterpage_info_avatar -------------------------------------------
add_settings_field(
    'emporterpage_info_avatar',                                         // ID
    __('Avatar pour cette section', 'section_emporterpage_info'),       // LABEL
    'field_emporterpage_info_avatar',                                   // CALLBACK FUNCTION
    'page-emporter',                                                    // MENU PAGE SLUG
    'section_emporterpage_info'                                         // SECTION ID
); // end --> field : emporterpage_info_avatar

// FIELDS : emporterpage_info_promo --------------------------------------------
add_settings_field(
    'emporterpage_info_promo',                                    // ID
    __('Promo', 'section_emporterpage_info'),                     // LABEL
    'field_emporterpage_info_promo',                              // CALLBACK FUNCTION
    'page-emporter',                                              // MENU PAGE SLUG
    'section_emporterpage_info'                                   // SECTION ID
); // end --> field : emporterpage_info_promo


// REGISTER : display_section_emporterpage_info -------------------------------------
register_setting('group-page-emporter', 'emporterpage_promo_reduction');
register_setting('group-page-emporter', 'emporterpage_promo_offert');
register_setting('group-page-emporter', 'emporterpage_promo_minimum');

// REGISTER : emporterpage_info_avatar
register_setting(
    'group-page-emporter',    // group (element display in the form)
    'emporterpage_info_avatar', // field ID
    'handle_file_avatar_info_emporterpage' // Callback function
); // end -> register : handle_file_avatar_info_emporterpage


/* ----------------------------------------------------------------------------- */
// SECTION 4 : section-commander --> Option 3 -- page-emporter
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_emporterpage_commander',                               // ID
    __('Section 4 - Commander', 'section_emporterpage_commander'),  // TITLE
    'display_section_emporterpage_commander',                       // CALLBACK
    'page-emporter'                                                 // PAGE
); // end --> section : section_emporterpage_cover

// FIELDS : emporterpage_commander_hidden --------------------------------------
add_settings_field(
    'emporterpage_commander_hidden',                                // ID
    __('Cacher la section', 'section_emporterpage_commander'),      // LABEL
    'field_emporterpage_commander_hidden',                          // CALLBACK FUNCTION
    'page-emporter',                                                // MENU PAGE SLUG
    'section_emporterpage_commander'                                // SECTION ID
); // end --> field : emporterpage_cover_hidden


// REGISTER : section-commander
register_setting('group-page-emporter', 'emporterpage_commander_hidden');

/* ----------------------------------------------------------------------------- */
// SECTION 5 : section-buffet --> Option 3 -- page-emporter
/* ----------------------------------------------------------------------------- */

// SETTINGS
add_settings_section(
    'section_emporterpage_buffet',                                       // ID
    __('Section 5 - Buffet à emporter', 'section_emporterpage_buffet'),  // TITLE
    'display_section_emporterpage_buffet',                               // CALLBACK
    'page-emporter'                                                      // PAGE
); // end --> section : section_emporterpage_cover

// FIELDS : emporterpage_avatar_buffet -----------------------------------------
add_settings_field(
    'emporterpage_avatar_buffet',                                       // ID
    __('Avatar pour cette section', 'section_emporterpage_buffet'),     // LABEL
    'field_emporterpage_avatar_buffet',                                 // CALLBACK FUNCTION
    'page-emporter',                                                    // MENU PAGE SLUG
    'section_emporterpage_buffet'                                       // SECTION ID
); // end --> field : emporterpage_avatar_buffet

// FIELDS : emporterpage_barquette_buffet --------------------------------------
add_settings_field(
    'emporterpage_barquette_buffet',                                // ID
    __('Systeme de barquette', 'section_emporterpage_buffet'),      // LABEL
    'field_emporterpage_barquette_buffet',                          // CALLBACK FUNCTION
    'page-emporter',                                                // MENU PAGE SLUG
    'section_emporterpage_buffet'                                   // SECTION ID
); // end --> field : emporterpage_barquette_buffet




// REGISTER : section_emporter_buffet
/* --- formule 1 --- */
register_setting('group-page-emporter', 'txt_barquette_uno');
register_setting('group-page-emporter', 'prix_barquete_uno');
register_setting('group-page-emporter', 'txt_barquette_due');
register_setting('group-page-emporter', 'prix_barquette_due');
register_setting('group-page-emporter', 'txt_barquette_tre');
register_setting('group-page-emporter', 'prix_barquette_tre');


// REGISTER : emporter_buffet_avatar
register_setting(
    'group-page-emporter',    // group (element display in the form)
    'emporter_buffet_avatar', // field ID
    'handle_file_avatar_buffet_emporterpage' // Callback function
); // end -> register : handle_file_avatar_buffet_emporterpage


// REGISTER : emporterpage_formule_uno
register_setting(
    'group-page-emporter',                        // group (element display in the form)
    'emporterpage_formule_uno',                  // field ID
    'handle_file_formule_one_emporterpage'             // Callback function
); // end -> register : emporterpage_formule_uno

// REGISTER : emporterpage_formule_due
register_setting(
    'group-page-emporter',                        // group (element display in the form)
    'emporterpage_formule_due',                  // field ID
    'handle_file_formule_due_emporterpage'             // Callback function
); // end -> register : emporterpage_formule_due


// REGISTER : emporterpage_formule_tre
register_setting(
    'group-page-emporter',                        // group (element display in the form)
    'emporterpage_formule_tre',                  // field ID
    'handle_file_formule_tre_emporterpage'             // Callback function
); // end -> register : emporterpage_formule_tre
