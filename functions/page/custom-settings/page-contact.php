<?php

/*
Name:   custom-settings - Page carte
Description: Fonction pour controllé les sections de la page d'accueil
             [custom_settings_option_theme]
             => 2e onglet 'page-contact' de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : cover
    section 2 : horaire
    section 3 : description carte
    section 4 : !!! pas de section 4 !!!
    section 5 : info reservation

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 5 -- page-contact
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_contactpage_cover',                               // ID
    __('Section 1 - Cover', 'section_contactpage_cover'),      // TITLE
    'display_section_contactpage_cover',                       // CALLBACK
    'page-contact'                                             // PAGE
); // end --> section : section_contactpage_cover

// FIELDS : contactpage_cover_hidden ----------------------------------------------
add_settings_field(
    'contactpage_cover_hidden',                                // ID
    __('Cacher la section', 'section_contactpage_cover'),      // LABEL
    'field_contactpage_cover_hidden',                          // CALLBACK FUNCTION
    'page-contact',                                            // MENU PAGE SLUG
    'section_contactpage_cover'                                // SECTION ID
); // end --> field : contactpage_cover_hidden

// FIELDS : contactpage_cover_bg_img ----------------------------------------------
add_settings_field(
    'contactpage_cover_bg_img',                                  // ID
    __('Image d\'arrière plan', 'section_contactpage_cover'),    // LABEL
    'field_contactpage_cover_bg_img',                            // CALLBACK FUNCTION
    'page-contact',                                              // MENU PAGE SLUG
    'section_contactpage_cover'                                  // SECTION ID
); // end -> field : contactpage_cover_bg_img



// FIELDS : contactpage_cover_titre -----------------------------------------------
add_settings_field(
    'contactpage_cover_titre',                                 // ID
    __('Titre de la section', 'section_contactpage_cover'),    // LABEL
    'field_contactpage_cover_titre',                           // CALLBACK FUNCTION
    'page-contact',                                            // MENU PAGE SLUG
    'section_contactpage_cover'                                // SECTION ID
); // end --> field : contactpage_cover_titre

// FIELDS : contactpage_cover_texte -----------------------------------------------
add_settings_field(
    'contactpage_cover_texte',                                 // ID
    __('Texte', 'section_contactpage_cover'),                  // LABEL
    'field_contactpage_cover_texte',                           // CALLBACK FUNCTION
    'page-contact',                                            // MENU PAGE SLUG
    'section_contactpage_cover'                                // SECTION ID
); // end --> field : contactpage_cover_texte


// REGISTER : section_contactpage_cover -------------------------------------------
register_setting('group-page-contact', 'contactpage_cover_hidden');
register_setting('group-page-contact', 'contactpage_cover_affiche_img');
register_setting('group-page-contact', 'contactpage_cover_titre');
register_setting('group-page-contact', 'contactpage_cover_texte');

// REGISTER : contactpage_cover_bg_img
register_setting(
    'group-page-contact',                    // group (element display in the form)
    'contactpage_cover_bg_img',              // field ID
    'handle_file_bg_contactpage'      // Callback function
); // end -> register : handle_file_bg_contactpage


/* ----------------------------------------------------------------------------- */
// SECTION 3 : section_horaire --> Option 5 -- page-contact
/* ----------------------------------------------------------------------------- */

// SETTINGS
add_settings_section(
    'section_contactpage_horaire',                                   // ID
    __('Section 2 -  Message', 'section_contactpage_horaire'),       // TITLE
    'display_section_contactpage_horaire',                           // CALLBACK
    'page-contact'                                                   // PAGE
); // end --> section : section_contactpage_horaire

// FIELDS : contactpage_avatar_horaire ----------------------------------------------
add_settings_field(
    'contactpage_avatar_horaire',                                // ID
    __('Avatar de la section', 'section_contactpage_horaire'),                 // LABEL
    'field_contactpage_avatar_horaire',                          // CALLBACK FUNCTION
    'page-contact',                                              // MENU PAGE SLUG
    'section_contactpage_horaire'                                // SECTION ID
); // end -> field : contactpage_avatar_horaire

// REGISTER : contactpage_avatar_horaire
register_setting(
    'group-page-contact',                             // group (element display in the form)
    'contactpage_avatar_horaire',                     // field ID
    'handle_file_avattar_horaire_contactpage'              // Callback function
); // end -> register : handle_file_avattar_horaire_contactpage

register_setting('group-page-contact', 'contactpage_horaire_affiche_avatar');
