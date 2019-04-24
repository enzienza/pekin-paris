<?php

/*
Name:   [view-form] -> Formule buffet SANS boissons
Description: Element de formulaire pour la formule SANS boissons
             => 1er onglet de la page API formule-sans-boissons
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/* ----------------------------------------------------------------------------- */
/* Option 1 -- formules-sans-boissons */
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS
function display_section_formule_sans_boisson(){}

// CALLBACK FIELDS : checklis
function custom_field_checklist_sans_boissons(){

    $sans_apero = esc_attr(get_option('sans_apero'));
    $sans_vin = esc_attr(get_option('sans_vin'));
    $sans_soft = esc_attr(get_option('sans_soft'));
    $sans_cafe = esc_attr(get_option('sans_cafe'));
    $sans_digestif = esc_attr(get_option('sans_digestif'));

    ?>
        <div class="checklist">
            <input type="checkbox" id="sans_apero" name="sans_apero" value="1" <?php checked(1, get_option('sans_apero'), true); ?> /> Apérifif
        </div><!-- / .checklist -->

        <div class="checklist">
            <input type="checkbox" id="sans_vin" name="sans_vin" value="1" <?php checked(1, get_option('sans_vin'), true); ?> /> 1/2l de vin par personne
        </div><!-- / .checklist -->

        <div class="checklist">
            <input type="checkbox" id="sans_soft" name="sans_soft" value="1" <?php checked(1, get_option('sans_soft'), true); ?> /> Soft à volonter
        </div><!-- / .checklist -->

        <div class="checklist">
            <input type="checkbox" id="sans_cafe" name="sans_cafe" value="1" <?php checked(1, get_option('sans_cafe'), true); ?> /> Thé ou Café
        </div><!-- / .checklist -->

        <div class="checklist">
            <input type="checkbox" id="sans_digestif" name="sans_digestif" value="1" <?php checked(1, get_option('sans_digestif'), true); ?> /> Digestif
        </div><!-- / .checklist -->
    <?php
} // END => custom_field_checklist_sans_boissons

// CALLBACK FIELDS : Tarif
function custom_field_tarif_sans_boissons(){
    /* --- lundi --- */
    $sans_lundi_midi   = esc_attr( get_option('sans_lundi_midi') );
    $sans_lundi_soir   = esc_attr( get_option('sans_lundi_soir') );
    $sans_lundi_fermer = esc_attr( get_option('sans_lundi_fermer') );

    /* --- mardi --- */
    $sans_mardi_midi   = esc_attr( get_option('sans_mardi_midi') );
    $sans_mardi_soir   = esc_attr( get_option('sans_mardi_soir') );
    $sans_mardi_fermer = esc_attr( get_option('sans_mardi_fermer') );

    /* --- mercredi --- */
    $sans_mercredi_midi   = esc_attr( get_option('sans_mercredi_midi') );
    $sans_mercredi_soir   = esc_attr( get_option('sans_mercredi_soir') );
    $sans_mercredi_fermer = esc_attr( get_option('sans_mercredi_fermer') );

    /* --- jeudi --- */
    $sans_jeudi_midi   = esc_attr( get_option('sans_jeudi_midi') );
    $sans_jeudi_soir   = esc_attr( get_option('sans_jeudi_soir') );
    $sans_jeudi_fermer = esc_attr( get_option('sans_jeudi_fermer') );

    /* --- vendredi --- */
    $sans_vendredi_midi   = esc_attr( get_option('sans_vendredi_midi') );
    $sans_vendredi_soir   = esc_attr( get_option('sans_vendredi_soir') );
    $sans_vendredi_fermer = esc_attr( get_option('sans_vendredi_fermer') );

    /* --- samedi --- */
    $sans_samedi_midi   = esc_attr( get_option('sans_samedi_midi') );
    $sans_samedi_soir   = esc_attr( get_option('sans_samedi_soir') );
    $sans_samedi_fermer = esc_attr( get_option('sans_samedi_fermer') );

    /* --- dimanche --- */
    $sans_dimanche_midi   = esc_attr( get_option('sans_dimanche_midi') );
    $sans_dimanche_soir   = esc_attr( get_option('sans_dimanche_soir') );
    $sans_dimanche_fermer = esc_attr( get_option('sans_dimanche_fermer') );


    ?>
        <table class="backend-table-tarif">
            <thead>
                <th scope="col" class="backend-day"></th>
                <th scope="col" class="backend-tarif">Midi</th>
                <th scope="col" class="backend-tarif">Soir</th>
                <th scope="col" class="backend-fermer"></th>
            </thead>
            <tbody>
                <tr class="item-tarif-day">
                    <td class="backend-day">Lundi</td>
                    <td class="backend-tarif">
                        <input type="text" id="sans_lundi_midi" name="sans_lundi_midi" value="<?php echo( get_option('sans_lundi_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="sans_lundi_soir" name="sans_lundi_soir" value="<?php echo( get_option('sans_lundi_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="sans_lundi_fermer" name="sans_lundi_fermer" value="1" <?php checked(1, get_option('sans_lundi_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
                <tr class="item-tarif-day">
                    <td class="backend-day">Mardi</td>
                    <td class="backend-tarif">
                        <input type="text" id="sans_mardi_midi" name="sans_mardi_midi" value="<?php echo( get_option('sans_mardi_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="sans_mardi_soir" name="sans_mardi_soir" value="<?php echo( get_option('sans_mardi_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="sans_mardi_fermer" name="sans_mardi_fermer" value="1" <?php checked(1, get_option('sans_mardi_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
                <tr class="item-tarif-day">
                    <td class="backend-day">Mercredi</td>
                    <td class="backend-tarif">
                        <input type="text" id="sans_mercredi_midi" name="sans_mercredi_midi" value="<?php echo( get_option('sans_mercredi_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="sans_mercredi_soir" name="sans_mercredi_soir" value="<?php echo( get_option('sans_mercredi_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="sans_mercredi_fermer" name="sans_mercredi_fermer" value="1" <?php checked(1, get_option('sans_mercredi_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
                <tr class="item-tarif-day">
                    <td class="backend-day">Jeudi</td>
                    <td class="backend-tarif">
                        <input type="text" id="sans_jeudi_midi" name="sans_jeudi_midi" value="<?php echo( get_option('sans_jeudi_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="sans_jeudi_soir" name="sans_jeudi_soir" value="<?php echo( get_option('sans_jeudi_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="sans_jeudi_fermer" name="sans_jeudi_fermer" value="1" <?php checked(1, get_option('sans_jeudi_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
                <tr class="item-tarif-day">
                    <td class="backend-day">Vendredi</td>
                    <td class="backend-tarif">
                        <input type="text" id="sans_vendredi_midi" name="sans_vendredi_midi" value="<?php echo( get_option('sans_vendredi_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="sans_vendredi_soir" name="sans_vendredi_soir" value="<?php echo( get_option('sans_vendredi_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="sans_vendredi_fermer" name="sans_vendredi_fermer" value="1" <?php checked(1, get_option('sans_vendredi_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
                <tr class="item-tarif-day">
                    <td class="backend-day">Samedi</td>
                    <td class="backend-tarif">
                        <input type="text" id="sans_samedi_midi" name="sans_samedi_midi" value="<?php echo( get_option('sans_samedi_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="sans_samedi_soir" name="sans_samedi_soir" value="<?php echo( get_option('sans_samedi_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="sans_samedi_fermer" name="sans_samedi_fermer" value="1" <?php checked(1, get_option('sans_samedi_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
                <tr class="item-tarif-day">
                    <td class="backend-day">Dimanche</td>
                    <td class="backend-tarif">
                        <input type="text" id="sans_dimanche_midi" name="sans_dimanche_midi" value="<?php echo( get_option('sans_dimanche_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="sans_dimanche_soir" name="sans_dimanche_soir" value="<?php echo( get_option('sans_dimanche_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="sans_dimanche_fermer" name="sans_dimanche_fermer" value="1" <?php checked(1, get_option('sans_dimanche_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
            </tbody>
        </table>

    <?php
} // END => custom_field_tarif_sans_boissons
