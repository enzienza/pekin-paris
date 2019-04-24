<?php

/*
Name:   [custom-settings] - Menu Table de Riz
Description: Page pour gérer le menu Table de Riz de la page service menu
             [custom_settings_sercive_menu]
             => 1er onglet de la page API fondu
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : info_menu
    section 2 : service_un
    section 3 : service_deux
    section 4 : service_deux
    section 5 : service_quattre

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : info_menu --> Option 1 -- fondu
/* ----------------------------------------------------------------------------- */
// SETTING
add_settings_section(
    'element_fondu',                                // ID
    __('', 'element_fondu'),                        // TITLE
    'display_element_fondu',                        // CALLBACK
    'fondu'                                 // PAGE
); // end --> section : info_menu

// FIELDS : fondu_info ------------------------------------------------------
add_settings_field(
    'fondu_info',                               // ID
    __('Info Menu', 'element_fondu'),                 // LABEL
    'field_fondu_info',                         // CALLBACK FUNCTION
    'fondu',                                      // MENU PAGE SLUG
    'element_fondu'                                 // SECTION ID
); // end --> field : inforesto_adresse

// FIELDS : fondu_servie_un -------------------------------------------------
add_settings_field(
    'fondu_servie_un',                               // ID
    __('Service 1', 'element_fondu'),                 // LABEL
    'field_fondu_servie_un',                         // CALLBACK FUNCTION
    'fondu',                                      // MENU PAGE SLUG
    'element_fondu'                                 // SECTION ID
); // end --> field : fondu_servie_un

// FIELDS : fondu_servie_deux -----------------------------------------------
add_settings_field(
    'fondu_servie_deux',                               // ID
    __('Service 2', 'element_fondu'),                 // LABEL
    'field_fondu_servie_deux',                         // CALLBACK FUNCTION
    'fondu',                                      // MENU PAGE SLUG
    'element_fondu'                                 // SECTION ID
); // end --> field : fondu_servie_deux

// FIELDS : fondu_servie_tre ---------------------------------------------
add_settings_field(
    'fondu_servie_tre',                               // ID
    __('Service 3', 'element_fondu'),                 // LABEL
    'field_fondu_servie_tre',                         // CALLBACK FUNCTION
    'fondu',                                      // MENU PAGE SLUG
    'element_fondu'                                 // SECTION ID
); // end --> field : fondu_servie_tre


// REGISTER : element_fondu ------------------------------------------------
/* --- fondu_info ---*/
register_setting('group-fondu','fondu_prix');
register_setting('group-fondu','fondu_couvert');

/* --- fondu_servie_un ---*/
register_setting('group-fondu','fondu_service_un_titre');
register_setting('group-fondu','fondu_service_un_choice_one');
register_setting('group-fondu','fondu_service_un_choice_two');

/* --- fondu_servie_deux ---*/
register_setting('group-fondu','fondu_service_deux_titre');
register_setting('group-fondu','fondu_service_deux_plat_one');
register_setting('group-fondu','fondu_service_deux_plat_two');
register_setting('group-fondu','fondu_service_deux_plat_three');
register_setting('group-fondu','fondu_service_deux_plat_four');
register_setting('group-fondu','fondu_service_deux_plat_five');
register_setting('group-fondu','fondu_service_deux_plat_six');
register_setting('group-fondu','fondu_service_deux_plat_seven');
register_setting('group-fondu','fondu_service_deux_plat_eight');
register_setting('group-fondu','fondu_service_deux_plat_nine');
register_setting('group-fondu','fondu_service_deux_plat_ten');


/* --- fondu_servie_tre ---*/
register_setting('group-fondu','fondu_service_tre_titre');
register_setting('group-fondu','fondu_service_tre_txt');

// REGISTER : fondu_img_bg
register_setting(
    'group-fondu',    // group (element display in the form)
    'fondu_img_bg', // field ID
    'handle_file_img_fondu' // Callback function
); // end -> register : handle_file_img_fondu
