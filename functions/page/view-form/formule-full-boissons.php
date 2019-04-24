<?php

/*
Name:   [view-form] -> Formule buffet FULL boissons
Description: Element de formulaire pour la formule FULL boissons
             => 1er onglet de la page API formule-full-boissons
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/* ----------------------------------------------------------------------------- */
/* Option 1 -- formules-full-boissons */
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS
function display_section_formule_full_boisson(){}

// CALLBACK FIELDS : checklis
function custom_field_checklist_full_boissons(){

    $full_apero = esc_attr(get_option('full_apero'));
    $full_vin = esc_attr(get_option('full_vin'));
    $full_soft = esc_attr(get_option('full_soft'));
    $full_cafe = esc_attr(get_option('full_cafe'));
    $full_digestif = esc_attr(get_option('full_digestif'));

    ?>
        <div class="checklist">
            <input type="checkbox" id="full_apero" name="full_apero" value="1" <?php checked(1, get_option('full_apero'), true); ?> /> Apérifif
        </div><!-- / .checklist -->

        <div class="checklist">
            <input type="checkbox" id="full_vin" name="full_vin" value="1" <?php checked(1, get_option('full_vin'), true); ?> /> 1/2l de vin par personne
        </div><!-- / .checklist -->

        <div class="checklist">
            <input type="checkbox" id="full_soft" name="full_soft" value="1" <?php checked(1, get_option('full_soft'), true); ?> /> Soft à volonter
        </div><!-- / .checklist -->

        <div class="checklist">
            <input type="checkbox" id="full_cafe" name="full_cafe" value="1" <?php checked(1, get_option('full_cafe'), true); ?> /> Thé ou Café
        </div><!-- / .checklist -->

        <div class="checklist">
            <input type="checkbox" id="full_digestif" name="full_digestif" value="1" <?php checked(1, get_option('full_digestif'), true); ?> /> Digestif
        </div><!-- / .checklist -->
    <?php
} // END => custom_field_checklist_full_boissons

// CALLBACK FIELDS : Tarif
function custom_field_tarif_full_boissons(){
    /* --- lundi --- */
    $full_lundi_midi   = esc_attr( get_option('full_lundi_midi') );
    $full_lundi_soir   = esc_attr( get_option('full_lundi_soir') );
    $full_lundi_fermer = esc_attr( get_option('full_lundi_fermer') );

    /* --- mardi --- */
    $full_mardi_midi   = esc_attr( get_option('full_mardi_midi') );
    $full_mardi_soir   = esc_attr( get_option('full_mardi_soir') );
    $full_mardi_fermer = esc_attr( get_option('full_mardi_fermer') );

    /* --- mercredi --- */
    $full_mercredi_midi   = esc_attr( get_option('full_mercredi_midi') );
    $full_mercredi_soir   = esc_attr( get_option('full_mercredi_soir') );
    $full_mercredi_fermer = esc_attr( get_option('full_mercredi_fermer') );

    /* --- jeudi --- */
    $full_jeudi_midi   = esc_attr( get_option('full_jeudi_midi') );
    $full_jeudi_soir   = esc_attr( get_option('full_jeudi_soir') );
    $full_jeudi_fermer = esc_attr( get_option('full_jeudi_fermer') );

    /* --- vendredi --- */
    $full_vendredi_midi   = esc_attr( get_option('full_vendredi_midi') );
    $full_vendredi_soir   = esc_attr( get_option('full_vendredi_soir') );
    $full_vendredi_fermer = esc_attr( get_option('full_vendredi_fermer') );

    /* --- samedi --- */
    $full_samedi_midi   = esc_attr( get_option('full_samedi_midi') );
    $full_samedi_soir   = esc_attr( get_option('full_samedi_soir') );
    $full_samedi_fermer = esc_attr( get_option('full_samedi_fermer') );

    /* --- dimanche --- */
    $full_dimanche_midi   = esc_attr( get_option('full_dimanche_midi') );
    $full_dimanche_soir   = esc_attr( get_option('full_dimanche_soir') );
    $full_dimanche_fermer = esc_attr( get_option('full_dimanche_fermer') );


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
                        <input type="text" id="full_lundi_midi" name="full_lundi_midi" value="<?php echo( get_option('full_lundi_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="full_lundi_soir" name="full_lundi_soir" value="<?php echo( get_option('full_lundi_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="full_lundi_fermer" name="full_lundi_fermer" value="1" <?php checked(1, get_option('full_lundi_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
                <tr class="item-tarif-day">
                    <td class="backend-day">Mardi</td>
                    <td class="backend-tarif">
                        <input type="text" id="full_mardi_midi" name="full_mardi_midi" value="<?php echo( get_option('full_mardi_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="full_mardi_soir" name="full_mardi_soir" value="<?php echo( get_option('full_mardi_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="full_mardi_fermer" name="full_mardi_fermer" value="1" <?php checked(1, get_option('full_mardi_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
                <tr class="item-tarif-day">
                    <td class="backend-day">Mercredi</td>
                    <td class="backend-tarif">
                        <input type="text" id="full_mercredi_midi" name="full_mercredi_midi" value="<?php echo( get_option('full_mercredi_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="full_mercredi_soir" name="full_mercredi_soir" value="<?php echo( get_option('full_mercredi_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="full_mercredi_fermer" name="full_mercredi_fermer" value="1" <?php checked(1, get_option('full_mercredi_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
                <tr class="item-tarif-day">
                    <td class="backend-day">Jeudi</td>
                    <td class="backend-tarif">
                        <input type="text" id="full_jeudi_midi" name="full_jeudi_midi" value="<?php echo( get_option('full_jeudi_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="full_jeudi_soir" name="full_jeudi_soir" value="<?php echo( get_option('full_jeudi_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="full_jeudi_fermer" name="full_jeudi_fermer" value="1" <?php checked(1, get_option('full_jeudi_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
                <tr class="item-tarif-day">
                    <td class="backend-day">Vendredi</td>
                    <td class="backend-tarif">
                        <input type="text" id="full_vendredi_midi" name="full_vendredi_midi" value="<?php echo( get_option('full_vendredi_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="full_vendredi_soir" name="full_vendredi_soir" value="<?php echo( get_option('full_vendredi_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="full_vendredi_fermer" name="full_vendredi_fermer" value="1" <?php checked(1, get_option('full_vendredi_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
                <tr class="item-tarif-day">
                    <td class="backend-day">Samedi</td>
                    <td class="backend-tarif">
                        <input type="text" id="full_samedi_midi" name="full_samedi_midi" value="<?php echo( get_option('full_samedi_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="full_samedi_soir" name="full_samedi_soir" value="<?php echo( get_option('full_samedi_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="full_samedi_fermer" name="full_samedi_fermer" value="1" <?php checked(1, get_option('full_samedi_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
                <tr class="item-tarif-day">
                    <td class="backend-day">Dimanche</td>
                    <td class="backend-tarif">
                        <input type="text" id="full_dimanche_midi" name="full_dimanche_midi" value="<?php echo( get_option('full_dimanche_midi') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-tarif">
                        <input type="text" id="full_dimanche_soir" name="full_dimanche_soir" value="<?php echo( get_option('full_dimanche_soir') ); ?>" />
                        <span>€</span>
                    </td><!-- / .backend-tarif -->
                    <td class="backend-fermer">
                        <input type="checkbox" id="full_dimanche_fermer" name="full_dimanche_fermer" value="1" <?php checked(1, get_option('full_dimanche_fermer'), true); ?> />
                        <span> Fermer</span>
                    </td><!-- / .backend-fermer -->
                </tr>
            </tbody>
        </table>

    <?php
} // END => custom_field_tarif_full_boissons
