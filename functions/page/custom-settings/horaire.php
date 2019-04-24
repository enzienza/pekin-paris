<?php

/*
Name:   custom-settings - horaire
Description: custom_settings_pekinparis pour les horaires du 2e onglet de la page API Pékin-paris
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : lundi --> Option 2 -- horaire
/* ----------------------------------------------------------------------------- */

// SETTING
add_settings_section(
    'section_horaire',                              // ID
    __('', 'section_horaire'),                      // TITLE
    'display_section_horaire',                      // CALLBACK
    'horaires'                                      // PAGE
); // end --> section_horaire

// FIELDS : table_horaire
add_settings_field(
    'table_horaire',                               // ID
    __('', 'section_horaire'),                 // LABEL
    'field_table_horaire',                         // CALLBACK FUNCTION
    'horaires',                                      // MENU PAGE SLUG
    'section_horaire'                                 // SECTION ID
); // end --> field : table_horaire

// REGISTER : table_horaire
/* --- horaire lundi --- */
register_setting('group-horaire', 'lundi_midi_de');
register_setting('group-horaire', 'lundi_midi_a');
register_setting('group-horaire', 'lundi_soir_de');
register_setting('group-horaire', 'lundi_soir_a');
register_setting('group-horaire', 'lundi_fermer');

/* --- horaire mardi --- */
register_setting('group-horaire', 'mardi_midi_de');
register_setting('group-horaire', 'mardi_midi_a');
register_setting('group-horaire', 'mardi_soir_de');
register_setting('group-horaire', 'mardi_soir_a');
register_setting('group-horaire', 'mardi_fermer');

/* --- horaire mercredi --- */
register_setting('group-horaire', 'mercredi_midi_de');
register_setting('group-horaire', 'mercredi_midi_a');
register_setting('group-horaire', 'mercredi_soir_de');
register_setting('group-horaire', 'mercredi_soir_a');
register_setting('group-horaire', 'mercredi_fermer');

/* --- horaire jeudi --- */
register_setting('group-horaire', 'jeudi_midi_de');
register_setting('group-horaire', 'jeudi_midi_a');
register_setting('group-horaire', 'jeudi_soir_de');
register_setting('group-horaire', 'jeudi_soir_a');
register_setting('group-horaire', 'jeudi_fermer');

/* --- horaire vendredi --- */
register_setting('group-horaire', 'vendredi_midi_de');
register_setting('group-horaire', 'vendredi_midi_a');
register_setting('group-horaire', 'vendredi_soir_de');
register_setting('group-horaire', 'vendredi_soir_a');
register_setting('group-horaire', 'vendredi_fermer');

/* --- horaire samedi --- */
register_setting('group-horaire', 'samedi_midi_de');
register_setting('group-horaire', 'samedi_midi_a');
register_setting('group-horaire', 'samedi_soir_de');
register_setting('group-horaire', 'samedi_soir_a');
register_setting('group-horaire', 'samedi_fermer');

/* --- horaire dimanche --- */
register_setting('group-horaire', 'dimanche_midi_de');
register_setting('group-horaire', 'dimanche_midi_a');
register_setting('group-horaire', 'dimanche_soir_de');
register_setting('group-horaire', 'dimanche_soir_a');
register_setting('group-horaire', 'dimanche_fermer');
