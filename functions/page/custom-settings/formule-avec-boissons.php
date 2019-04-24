<?php

/*
Name:   [custom-settings] - Formule buffet AVEC boissons
Description: Page pour gérer la formule AVEC boisson (si qui est compris & prix) de la page formule buffet
             [ccustom_settings_formule_buffet]
             => 1er onglet de la page API formule-avec-boissons
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/


/* ----------------------------------------------------------------------------- */
/* Option 1 -- formules-avec-boissons */
/* ----------------------------------------------------------------------------- */

// SETTINGS --------------------------------------------------------------------
add_settings_section(
    'section_formule_avec_boisson',                           // ID
    __('', 'section_formule_avec_boisson'),                   // TITLE
    'display_section_formule_avec_boisson',                   // CALLBACK
    'formule-avec-boissons'                                   // PAGE
);

// FIELDS : Checklist
add_settings_field(
    'avec_checklist',                                                           // ID
    __('La formule avec boissons comprend', 'section_formule_avec_boisson'),    // LABEL
    'custom_field_checklist_avec_boissons',                                     // CALLBACK FUNCTION
    'formule-avec-boissons',                                                    // MENU PAGE SLUG
    'section_formule_avec_boisson'                                              // SECTION ID
);

// FIELDS : Tarif
add_settings_field(
    'avec_tarif',                                                       // ID
    __('Les tarifs par jour', 'section_formule_avec_boisson'),          // LABEL
    'custom_field_tarif_avec_boissons',                                 // CALLBACK FUNCTION
    'formule-avec-boissons',                                            // MENU PAGE SLUG
    'section_formule_avec_boisson'                                      // SECTION ID
);

// REGISTER

/* --- checklist --- */
register_setting('group-avec-boissons', 'avec_apero');
register_setting('group-avec-boissons', 'avec_vin');
register_setting('group-avec-boissons', 'avec_soft');
register_setting('group-avec-boissons', 'avec_cafe');
register_setting('group-avec-boissons', 'avec_digestif');

/* --- tarif - lundi --- */
register_setting('group-avec-boissons', 'avec_lundi_midi');
register_setting('group-avec-boissons', 'avec_lundi_soir');
register_setting('group-avec-boissons', 'avec_lundi_fermer');

/* --- tarif - mardi --- */
register_setting('group-avec-boissons', 'avec_mardi_midi');
register_setting('group-avec-boissons', 'avec_mardi_soir');
register_setting('group-avec-boissons', 'avec_mardi_fermer');

/* --- tarif - mercredi --- */
register_setting('group-avec-boissons', 'avec_mercredi_midi');
register_setting('group-avec-boissons', 'avec_mercredi_soir');
register_setting('group-avec-boissons', 'avec_mercredi_fermer');

/* --- tarif - jeudi --- */
register_setting('group-avec-boissons', 'avec_jeudi_midi');
register_setting('group-avec-boissons', 'avec_jeudi_soir');
register_setting('group-avec-boissons', 'avec_jeudi_fermer');

/* --- tarif - vendredi --- */
register_setting('group-avec-boissons', 'avec_vendredi_midi');
register_setting('group-avec-boissons', 'avec_vendredi_soir');
register_setting('group-avec-boissons', 'avec_vendredi_fermer');

/* --- tarif - samedi --- */
register_setting('group-avec-boissons', 'avec_samedi_midi');
register_setting('group-avec-boissons', 'avec_samedi_soir');
register_setting('group-avec-boissons', 'avec_samedi_fermer');

/* --- tarif - dimanche --- */
register_setting('group-avec-boissons', 'avec_dimanche_midi');
register_setting('group-avec-boissons', 'avec_dimanche_soir');
register_setting('group-avec-boissons', 'avec_dimanche_fermer');
