<?php

/*
Name:   view-form - horaire
Description: Element formulaire pour les horaire du 2e onglet de la page API Pékin-paris
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/


function display_section_horaire(){}

function field_table_horaire(){
    /* --- horaire lundi --- */
    $lundi_midi_de = esc_attr(get_option('lundi_midi_de'));
    $lundi_midi_a  = esc_attr(get_option('lundi_midi_a'));
    $lundi_soir_de = esc_attr(get_option('lundi_soir_de'));
    $lundi_soir_a  = esc_attr(get_option('lundi_soir_a'));
    $lundi_fermer  = esc_attr(get_option('lundi_fermer'));

    /* --- horaire mardi --- */
    $mardi_midi_de = esc_attr(get_option('mardi_midi_de'));
    $mardi_midi_a  = esc_attr(get_option('mardi_midi_a'));
    $mardi_soir_de = esc_attr(get_option('mardi_soir_de'));
    $mardi_soir_a  = esc_attr(get_option('mardi_soir_a'));
    $mardi_fermer  = esc_attr(get_option('mardi_fermer'));

    /* --- horaire mercredi --- */
    $mercredi_midi_de = esc_attr(get_option('mercredi_midi_de'));
    $mercredi_midi_a  = esc_attr(get_option('mercredi_midi_a'));
    $mercredi_soir_de = esc_attr(get_option('mercredi_soir_de'));
    $mercredi_soir_a  = esc_attr(get_option('mercredi_soir_a'));
    $mercredi_fermer  = esc_attr(get_option('mercredi_fermer'));

    /* --- horaire jeudi --- */
    $jeudi_midi_de = esc_attr(get_option('jeudi_midi_de'));
    $jeudi_midi_a  = esc_attr(get_option('jeudi_midi_a'));
    $jeudi_soir_de = esc_attr(get_option('jeudi_soir_de'));
    $jeudi_soir_a  = esc_attr(get_option('jeudi_soir_a'));
    $jeudi_fermer  = esc_attr(get_option('jeudi_fermer'));

    /* --- horaire vendredi --- */
    $vendredi_midi_de = esc_attr(get_option('vendredi_midi_de'));
    $vendredi_midi_a  = esc_attr(get_option('vendredi_midi_a'));
    $vendredi_soir_de = esc_attr(get_option('vendredi_soir_de'));
    $vendredi_soir_a  = esc_attr(get_option('vendredi_soir_a'));
    $vendredi_fermer  = esc_attr(get_option('vendredi_fermer'));

    /* --- horaire samedi --- */
    $samedi_midi_de = esc_attr(get_option('samedi_midi_de'));
    $samedi_midi_a  = esc_attr(get_option('samedi_midi_a'));
    $samedi_soir_de = esc_attr(get_option('samedi_soir_de'));
    $samedi_soir_a  = esc_attr(get_option('samedi_soir_a'));
    $samedi_fermer  = esc_attr(get_option('samedi_fermer'));

    /* --- horaire dimanche --- */
    $dimanche_midi_de = esc_attr(get_option('dimanche_midi_de'));
    $dimanche_midi_a  = esc_attr(get_option('dimanche_midi_a'));
    $dimanche_soir_de = esc_attr(get_option('dimanche_soir_de'));
    $dimanche_soir_a  = esc_attr(get_option('dimanche_soir_a'));
    $dimanche_fermer  = esc_attr(get_option('dimanche_fermer'));

    ?>
        <table class="table-hour">
            <thead>
                <th scope="col" class="day">Jour</th>
                <th scope="col" class="service">Service du midi</th>
                <th scope="col" class="service">Service du soir</th>
                <th scope="col" class="open"></th>
            </thead>
            <tbody>
                <!-- lundi -->
                <tr class="item-hour-day">
                    <td>Lundi</td>
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="lundi_midi_de" name="lundi_midi_de" value="<?php echo(get_option('lundi_midi_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="lundi_midi_a" name="lundi_midi_a" value="<?php echo(get_option('lundi_midi_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="lundi_soir_de" name="lundi_soir_de" value="<?php echo(get_option('lundi_soir_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="lundi_soir_a" name="lundi_soir_a" value="<?php echo(get_option('lundi_soir_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-open">
                        <input type="checkbox" id="lundi_fermer" name="lundi_fermer" value="1" <?php checked(1, get_option('lundi_fermer'), true); ?> />
                        <span>Fermer</span>
                    </td><!-- / .item-open -->
                </tr><!-- / .item-hour-day -->

                <!-- mardi -->
                <tr class="item-hour-day">
                    <td>Mardi</td>
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="mardi_midi_de" name="mardi_midi_de" value="<?php echo(get_option('mardi_midi_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="mardi_midi_a" name="mardi_midi_a" value="<?php echo(get_option('mardi_midi_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="mardi_soir_de" name="mardi_soir_de" value="<?php echo(get_option('mardi_soir_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="mardi_soir_a" name="mardi_soir_a" value="<?php echo(get_option('mardi_soir_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-open">
                        <input type="checkbox" id="mardi_fermer" name="mardi_fermer" value="1" <?php checked(1, get_option('mardi_fermer'), true); ?> />
                        <span>Fermer</span>
                    </td><!-- / .item-open -->
                </tr><!-- / .item-hour-day -->

                <!-- mercredi -->
                <tr class="item-hour-day">
                    <td>Mercredi</td>
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="mercredi_midi_de" name="mercredi_midi_de" value="<?php echo(get_option('mercredi_midi_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="mercredi_midi_a" name="mercredi_midi_a" value="<?php echo(get_option('mercredi_midi_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="mercredi_soir_de" name="mercredi_soir_de" value="<?php echo(get_option('mercredi_soir_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="mercredi_soir_a" name="mercredi_soir_a" value="<?php echo(get_option('mercredi_soir_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-open">
                        <input type="checkbox" id="mercredi_fermer" name="mercredi_fermer" value="1" <?php checked(1, get_option('mercredi_fermer'), true); ?> />
                        <span>Fermer</span>
                    </td><!-- / .item-open -->
                </tr><!-- / .item-hour-day -->

                <!-- jeudi -->
                <tr class="item-hour-day">
                    <td>Jeudi</td>
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="jeudi_midi_de" name="jeudi_midi_de" value="<?php echo(get_option('jeudi_midi_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="jeudi_midi_a" name="jeudi_midi_a" value="<?php echo(get_option('jeudi_midi_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="jeudi_soir_de" name="jeudi_soir_de" value="<?php echo(get_option('jeudi_soir_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="jeudi_soir_a" name="jeudi_soir_a" value="<?php echo(get_option('jeudi_soir_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-open">
                        <input type="checkbox" id="jeudi_fermer" name="jeudi_fermer" value="1" <?php checked(1, get_option('jeudi_fermer'), true); ?> />
                        <span>Fermer</span>
                    </td><!-- / .item-open -->
                </tr><!-- / .item-hour-day -->

                <!-- vendredi -->
                <tr class="item-hour-day">
                    <td>Vendredi</td>
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="vendredi_midi_de" name="vendredi_midi_de" value="<?php echo(get_option('vendredi_midi_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="vendredi_midi_a" name="vendredi_midi_a" value="<?php echo(get_option('vendredi_midi_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="vendredi_soir_de" name="vendredi_soir_de" value="<?php echo(get_option('vendredi_soir_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="vendredi_soir_a" name="vendredi_soir_a" value="<?php echo(get_option('vendredi_soir_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-open">
                        <input type="checkbox" id="vendredi_fermer" name="vendredi_fermer" value="1" <?php checked(1, get_option('vendredi_fermer'), true); ?> />
                        <span>Fermer</span>
                    </td><!-- / .item-open -->
                </tr><!-- / .item-hour-day -->

                <!-- samedi -->
                <tr class="item-hour-day">
                    <td>Samedi</td>
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="samedi_midi_de" name="samedi_midi_de" value="<?php echo(get_option('samedi_midi_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="samedi_midi_a" name="samedi_midi_a" value="<?php echo(get_option('samedi_midi_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="samedi_soir_de" name="samedi_soir_de" value="<?php echo(get_option('samedi_soir_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="samedi_soir_a" name="samedi_soir_a" value="<?php echo(get_option('samedi_soir_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-open">
                        <input type="checkbox" id="samedi_fermer" name="samedi_fermer" value="1" <?php checked(1, get_option('samedi_fermer'), true); ?> />
                        <span>Fermer</span>
                    </td><!-- / .item-open -->
                </tr><!-- / .item-hour-day -->

                <!-- dimanche -->
                <tr class="item-hour-day">
                    <td>Dimanche</td>
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="dimanche_midi_de" name="dimanche_midi_de" value="<?php echo(get_option('dimanche_midi_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="dimanche_midi_a" name="dimanche_midi_a" value="<?php echo(get_option('dimanche_midi_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-service">
                        <span>
                            <span>de</span>
                            <input type="time" id="dimanche_soir_de" name="dimanche_soir_de" value="<?php echo(get_option('dimanche_soir_de')); ?>">
                        </span>
                        <span>
                            <span>à</span>
                            <input type="time" id="dimanche_soir_a" name="dimanche_soir_a" value="<?php echo(get_option('dimanche_soir_a')); ?>">
                        </span>
                    </td><!-- / .item-service -->
                    <td class="item-open">
                        <input type="checkbox" id="dimanche_fermer" name="dimanche_fermer" value="1" <?php checked(1, get_option('dimanche_fermer'), true); ?> />
                        <span>Fermer</span>
                    </td><!-- / .item-open -->
                </tr><!-- / .item-hour-day -->

            </tbody>
        </table>
    <?php
}// END => field_horaire_lundi
