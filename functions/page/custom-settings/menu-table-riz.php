<?php

/*
Name:   [custom-settings] - Menu Table de Riz
Description: Page pour gérer le menu Table de Riz de la page service menu
             [custom_settings_sercive_menu]
             => 1er onglet de la page API table-riz
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
    section 4 : service_trois
    section 5 : service_quattre

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : info_menu --> Option 1 -- table-riz
/* ----------------------------------------------------------------------------- */
// SETTING
add_settings_section(
    'element_table_riz',                                // ID
    __('', 'element_table_riz'),                        // TITLE
    'display_element_table_riz',                        // CALLBACK
    'table-riz'                                 // PAGE
); // end --> section : info_menu

// FIELDS : tableriz_info ------------------------------------------------------
add_settings_field(
    'tableriz_info',                               // ID
    __('Info Menu', 'element_table_riz'),                 // LABEL
    'field_tableriz_info',                         // CALLBACK FUNCTION
    'table-riz',                                      // MENU PAGE SLUG
    'element_table_riz'                                 // SECTION ID
); // end --> field : inforesto_adresse

// FIELDS : tableriz_servie_un -------------------------------------------------
add_settings_field(
    'tableriz_servie_un',                               // ID
    __('Service 1', 'element_table_riz'),                 // LABEL
    'field_tableriz_servie_un',                         // CALLBACK FUNCTION
    'table-riz',                                      // MENU PAGE SLUG
    'element_table_riz'                                 // SECTION ID
); // end --> field : tableriz_servie_un

// FIELDS : tableriz_servie_deux -----------------------------------------------
add_settings_field(
    'tableriz_servie_deux',                               // ID
    __('Service 2', 'element_table_riz'),                 // LABEL
    'field_tableriz_servie_deux',                         // CALLBACK FUNCTION
    'table-riz',                                      // MENU PAGE SLUG
    'element_table_riz'                                 // SECTION ID
); // end --> field : tableriz_servie_deux

// FIELDS : tableriz_servie_trois ----------------------------------------------
add_settings_field(
    'tableriz_servie_trois',                               // ID
    __('Service 3', 'element_table_riz'),                 // LABEL
    'field_tableriz_servie_trois',                         // CALLBACK FUNCTION
    'table-riz',                                      // MENU PAGE SLUG
    'element_table_riz'                                 // SECTION ID
); // end --> field : tableriz_servie_trois

// FIELDS : tableriz_servie_quatre ---------------------------------------------
add_settings_field(
    'tableriz_servie_quatre',                               // ID
    __('Service 4', 'element_table_riz'),                 // LABEL
    'field_tableriz_servie_quatre',                         // CALLBACK FUNCTION
    'table-riz',                                      // MENU PAGE SLUG
    'element_table_riz'                                 // SECTION ID
); // end --> field : tableriz_servie_quatre

// REGISTER : element_table_riz ------------------------------------------------
/* --- tableriz_info ---*/
register_setting('group-table-riz','tableriz_prix');
register_setting('group-table-riz','tableriz_couvert');

/* --- tableriz_servie_un ---*/
register_setting('group-table-riz','tableriz_service_un_titre');
register_setting('group-table-riz','tableriz_service_un_txt');

/* --- tableriz_servie_deux ---*/
register_setting('group-table-riz','tableriz_service_deux_titre');
register_setting('group-table-riz','tableriz_service_deux_choice_one');
register_setting('group-table-riz','tableriz_service_deux_choice_two');
register_setting('group-table-riz','tableriz_service_deux_choice_three');
register_setting('group-table-riz','tableriz_service_deux_choice_four');

/* --- tableriz_servie_trois ---*/
register_setting('group-table-riz','tableriz_service_trois_titre');
register_setting('group-table-riz','tableriz_service_trois_plat_one');
register_setting('group-table-riz','tableriz_service_trois_plat_two');
register_setting('group-table-riz','tableriz_service_trois_plat_three');
register_setting('group-table-riz','tableriz_service_trois_plat_four');
register_setting('group-table-riz','tableriz_service_trois_plat_five');

/* --- tableriz_servie_quatre ---*/
register_setting('group-table-riz','tableriz_service_quatre_titre');
register_setting('group-table-riz','tableriz_service_quatre_txt');


// REGISTER : tableriz_img_bg
register_setting(
    'group-table-riz',    // group (element display in the form)
    'tableriz_img_bg', // field ID
    'handle_file_img_tableriz' // Callback function
); // end -> register : handle_file_img_tableriz
