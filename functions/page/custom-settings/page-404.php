<?php

/*
Name:   custom-settings - Page 404
Description: Fonction pour controllé les sections de la page des erreurs 404
             [custom_settings_option_theme]
             => 7e onglet 'page-404' de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : section_cover


*/


/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 1 -- page-404
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_page404_cover',                               // ID
    __('Section 1 - Cover', 'section_page404_cover'),      // TITLE
    'display_section_page404_cover',                       // CALLBACK
    'page-404'                                          // PAGE
); // end --> section : section_page404_cover


// FIELDS : page404_bg_img ----------------------------------------------
add_settings_field(
    'page404_bg_img', // ID
    __('Image d\'arrière plan', 'section_page404_cover'), // LABEL
    'field_page404_bg_img', // CALLBACK FUNCTION
    'page-404', // MENU PAGE SLUG
    'section_page404_cover' // SECTION ID
); // end -> field : page404_bg_img



// FIELDS : affiche_logo -------------------------------------------------------
add_settings_field(
    'affiche_logo',                                // ID
    __('Afficher le logo', 'section_page404_cover'),    // LABEL
    'field_page404_logo',                          // CALLBACK FUNCTION
    'page-404',                                           // MENU PAGE SLUG
    'section_page404_cover'                                  // SECTION ID
); // end -->


// REGISTER : section_page404_cover -------------------------------------------
register_setting('group-page-404', 'page404_affiche_img');
register_setting('group-page-404', 'affiche_logo');



// REGISTER : page404_bg_img
register_setting(
    'group-page-404',    // group (element display in the form)
    'page404_bg_img', // field ID
    'handle_file_bg_cover_page404' // Callback function
); // end -> register : handle_file_bg_cover_page404



/*------------------------------------------------------------------------------*/
// SECTION 2 :  message
/*------------------------------------------------------------------------------*/
// SETTINGS
add_settings_section(
    'section_page404_msg',                                   // ID
    __('Section 2 -  Message', 'section_page404_msg'),       // TITLE
    'display_section_page404_msg',                           // CALLBACK
    'page-404'                                                   // PAGE
); // end --> section : section_page404_msg

// FIELDS : page404_avatar_msg ----------------------------------------------
add_settings_field(
    'page404_avatar_msg',                                // ID
    __('Avatar de la section', 'section_page404_msg'),                 // LABEL
    'field_page404_avatar_msg',                          // CALLBACK FUNCTION
    'page-404',                                              // MENU PAGE SLUG
    'section_page404_msg'                                // SECTION ID
); // end -> field : page404_avatar_msg

register_setting('group-page-404', 'avatar_msg_h1');
register_setting('group-page-404', 'avatar_msg_txt');

// REGISTER : page404_avatar_msg
register_setting(
    'group-page-404',                             // group (element display in the form)
    'page404_avatar_msg',                     // field ID
    'handle_file_avattar_page404'              // Callback function
); // end -> register : handle_file_avattar_page404

register_setting('group-page-404', 'page404_affiche_avatar');
