<?php

/*
Name:   custom-settings - Page carte
Description: Fonction pour controllé les sections de la page d'accueil
             [custom_settings_option_theme]
             => 2e onglet 'page-event' de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : cover
    section 2 : message
    section 3 :
    section 4 : reservation

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 4 -- page-event
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_eventpage_cover',                               // ID
    __('Section 1 - Cover', 'section_eventpage_cover'),      // TITLE
    'display_section_eventpage_cover',                       // CALLBACK
    'page-event'                                             // PAGE
); // end --> section : section_eventpage_cover


// FIELDS : eventpage_cover_hidden ------------------------------------------
add_settings_field(
    'eventpage_cover_hidden',                                // ID
    __('Cacher la section', 'section_eventpage_cover'),      // LABEL
    'field_eventpage_cover_hidden',                          // CALLBACK FUNCTION
    'page-event',                                            // MENU PAGE SLUG
    'section_eventpage_cover'                                // SECTION ID
); // end --> field : eventpage_cover_hidden

// FIELDS : eventpage_cover_bg_img ------------------------------------------
add_settings_field(
    'eventpage_cover_bg_img',                                  // ID
    __('Image d\'arrière plan', 'section_eventpage_cover'),    // LABEL
    'field_eventpage_cover_bg_img',                            // CALLBACK FUNCTION
    'page-event',                                              // MENU PAGE SLUG
    'section_eventpage_cover'                                  // SECTION ID
); // end -> field : eventpage_cover_bg_img



// FIELDS : eventpage_cover_titre -------------------------------------------
add_settings_field(
    'eventpage_cover_titre',                                 // ID
    __('Titre de la section', 'section_eventpage_cover'),    // LABEL
    'field_eventpage_cover_titre',                           // CALLBACK FUNCTION
    'page-event',                                            // MENU PAGE SLUG
    'section_eventpage_cover'                                // SECTION ID
); // end --> field : eventpage_cover_titre

// FIELDS : eventpage_cover_texte -------------------------------------------
add_settings_field(
    'eventpage_cover_texte',                                 // ID
    __('Texte', 'section_eventpage_cover'),                  // LABEL
    'field_eventpage_cover_texte',                           // CALLBACK FUNCTION
    'page-event',                                            // MENU PAGE SLUG
    'section_eventpage_cover'                                // SECTION ID
); // end --> field : eventpage_cover_texte


// REGISTER : section_eventpage_cover ---------------------------------------
register_setting('group-page-event', 'eventpage_cover_hidden');
register_setting('group-page-event', 'eventpage_cover_affiche_img');
register_setting('group-page-event', 'eventpage_cover_titre');
register_setting('group-page-event', 'eventpage_cover_texte');

// REGISTER : eventpage_cover_bg_img
register_setting(
    'group-page-event',                    // group (element display in the form)
    'eventpage_cover_bg_img',              // field ID
    'handle_file_bg_eventpage'             // Callback function
); // end -> register : handle_file_bg_eventpage


/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_message --> Option 4 -- page-event
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_eventpage_message',                                   // ID
    __('Section 2 -  Message', 'section_eventpage_message'),       // TITLE
    'display_section_eventpage_message',                           // CALLBACK
    'page-event'                                                   // PAGE
); // end --> section : section_eventpage_message

// FIELDS : eventpage_msg_hidden --------------------------------------------
add_settings_field(
    'eventpage_msg_hidden',                                    // ID
    __('Cacher la section', 'section_eventpage_message'),      // LABEL
    'field_eventpage_msg_hidden',                              // CALLBACK FUNCTION
    'page-event',                                              // MENU PAGE SLUG
    'section_eventpage_message'                                // SECTION ID
); // end --> field : eventpage_msg_hidden

// FIELDS : eventpage_msg_img_avatar ----------------------------------------
add_settings_field(
    'eventpage_msg_img_avatar',                                // ID
    __('Avatar', 'section_eventpage_message'),                 // LABEL
    'field_eventpage_msg_img_avatar',                          // CALLBACK FUNCTION
    'page-event',                                              // MENU PAGE SLUG
    'section_eventpage_message'                                // SECTION ID
); // end -> field : eventpage_msg_img_avatar

// FIELDS : eventpage_msg_txt -----------------------------------------------
add_settings_field(
    'eventpage_msg_txt',                                     // ID
    __('Texte accroche', 'section_eventpage_message'),       // LABEL
    'field_eventpage_msg_txt',                               // CALLBACK FUNCTION
    'page-event',                                            // MENU PAGE SLUG
    'section_eventpage_message'                              // SECTION ID
); // end --> field : eventpage_msg_txt


// REGISTER : section_eventpage_message -------------------------------------
register_setting('group-page-event', 'eventpage_msg_hidden');
register_setting('group-page-event', 'eventpage_msg_affiche_avatar');
register_setting('group-page-event', 'eventpage_msg_txt');

// REGISTER : eventpage_msg_img_avatar
register_setting(
    'group-page-event',                             // group (element display in the form)
    'eventpage_msg_img_avatar',                     // field ID
    'handle_file_avatar_msg_eventpage'              // Callback function
); // end -> register : handle_file_avatar_msg_eventpage


/* ----------------------------------------------------------------------------- */
// SECTION 5 : section-reservation --> Option 4 -- page-event
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_eventpage_reservation',                               // ID
    __('Section 5 - Réservation', 'section_eventpage_reservation'),      // TITLE
    'display_section_eventpage_reservation',                       // CALLBACK
    'page-event'                                             // PAGE
); // end --> section : section_eventpage_cover

// FIELDS : eventpage_reservation_hidden ----------------------------------------------
add_settings_field(
    'eventpage_reservation_hidden',                                // ID
    __('Cacher la section', 'section_eventpage_reservation'),      // LABEL
    'field_eventpage_reservation_hidden',                          // CALLBACK FUNCTION
    'page-event',                                            // MENU PAGE SLUG
    'section_eventpage_reservation'                                // SECTION ID
); // end --> field : eventpage_cover_hidden


// REGISTER : section-reservation
register_setting('group-page-event', 'eventpage_reservation_hidden');
