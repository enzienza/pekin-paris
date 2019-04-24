<?php

/*
Name:   [custom-settings] - Formule buffet SANS boissons
Description: Page pour gérer la formule SANS boisson (si qui est compris & prix) de la page formule buffet
             [ccustom_settings_formule_buffet]
             => 1er onglet de la page API formule-sans-boissons
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/


/* ----------------------------------------------------------------------------- */
/* Option 1 -- formules-sans-boissons */
/* ----------------------------------------------------------------------------- */

// SETTINGS --------------------------------------------------------------------
add_settings_section(
    'section_formule_sans_boisson',                           // ID
    __('', 'section_formule_sans_boisson'),                   // TITLE
    'display_section_formule_sans_boisson',                   // CALLBACK
    'formule-sans-boissons'                                   // PAGE
);

// FIELDS : Checklist
add_settings_field(
    'sans_checklist',                                                           // ID
    __('La formule sans boissons comprend', 'section_formule_sans_boisson'),    // LABEL
    'custom_field_checklist_sans_boissons',                                     // CALLBACK FUNCTION
    'formule-sans-boissons',                                                    // MENU PAGE SLUG
    'section_formule_sans_boisson'                                              // SECTION ID
);

// FIELDS : Tarif
add_settings_field(
    'sans_tarif',                                                       // ID
    __('Les tarifs par jour', 'section_formule_sans_boisson'),          // LABEL
    'custom_field_tarif_sans_boissons',                                 // CALLBACK FUNCTION
    'formule-sans-boissons',                                            // MENU PAGE SLUG
    'section_formule_sans_boisson'                                      // SECTION ID
);

// REGISTER

/* --- checklist --- */
register_setting('group-sans-boissons', 'sans_apero');
register_setting('group-sans-boissons', 'sans_vin');
register_setting('group-sans-boissons', 'sans_soft');
register_setting('group-sans-boissons', 'sans_cafe');
register_setting('group-sans-boissons', 'sans_digestif');

/* --- tarif - lundi --- */
register_setting('group-sans-boissons', 'sans_lundi_midi');
register_setting('group-sans-boissons', 'sans_lundi_soir');
register_setting('group-sans-boissons', 'sans_lundi_fermer');

/* --- tarif - mardi --- */
register_setting('group-sans-boissons', 'sans_mardi_midi');
register_setting('group-sans-boissons', 'sans_mardi_soir');
register_setting('group-sans-boissons', 'sans_mardi_fermer');

/* --- tarif - mercredi --- */
register_setting('group-sans-boissons', 'sans_mercredi_midi');
register_setting('group-sans-boissons', 'sans_mercredi_soir');
register_setting('group-sans-boissons', 'sans_mercredi_fermer');

/* --- tarif - jeudi --- */
register_setting('group-sans-boissons', 'sans_jeudi_midi');
register_setting('group-sans-boissons', 'sans_jeudi_soir');
register_setting('group-sans-boissons', 'sans_jeudi_fermer');

/* --- tarif - vendredi --- */
register_setting('group-sans-boissons', 'sans_vendredi_midi');
register_setting('group-sans-boissons', 'sans_vendredi_soir');
register_setting('group-sans-boissons', 'sans_vendredi_fermer');

/* --- tarif - samedi --- */
register_setting('group-sans-boissons', 'sans_samedi_midi');
register_setting('group-sans-boissons', 'sans_samedi_soir');
register_setting('group-sans-boissons', 'sans_samedi_fermer');

/* --- tarif - dimanche --- */
register_setting('group-sans-boissons', 'sans_dimanche_midi');
register_setting('group-sans-boissons', 'sans_dimanche_soir');
register_setting('group-sans-boissons', 'sans_dimanche_fermer');
