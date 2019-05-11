<?php

/*
Name:   [view-form]  - Menu Table de Riz
Description: Element formulaire pour la table-riz du 1er onglet de la page API service menu
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : info-menu
    section 2 : service_un
    section 3 : service_deux
    section 4 : service_trois
    section 5 : service_quattre

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_location --> Option 1 -- table-riz
/* ----------------------------------------------------------------------------- */

function display_element_table_riz(){}

// CALLBACK REGISTER : tableriz_img_bg
function handle_file_img_tableriz($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['tableriz_img_bg']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['tableriz_img_bg'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['tableriz_img_bg']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('tableriz_img_bg');

} // END => handle_file_img_tableriz

// FIELDS : tableriz_info ------------------------------------------------------
function field_tableriz_info(){
    $tableriz_prix = esc_attr(get_option('tableriz_prix'));
    $tableriz_couvert = esc_attr(get_option('tableriz_couvert'));
    ?>

            <div>
                <label for="">Prix</label>
                <input type="text" id="tableriz_prix" name="tableriz_prix" value="<?php echo get_option('tableriz_prix'); ?>" />
                <span>
                    Prix par personne
                </span>
            </div>
            <div class="backend-min-couvert">
                <span>Couverts minimum</span>
                <input type="text" id="tableriz_couvert" name="tableriz_couvert" value="<?php echo get_option('tableriz_couvert'); ?>" />
            </div>

            <div class="backend-card-img">
                <img src="<?php echo get_option('tableriz_img_bg'); ?>" alt="" class="backend-img-logo">
            </div>
            <div class="">
                <input type="file" name='tableriz_img_bg' id='tableriz_img_bg' value="<?php echo get_option('tableriz_img_bg'); ?>" />
                <p>
                    <input type="text" name="" value="<?php echo get_option('tableriz_img_bg'); ?>" />
                </p>

            </div>


    <?php
} // END ==> field_tableriz_info



// FIELDS : tableriz_servie_un -------------------------------------------------
function field_tableriz_servie_un(){
    $tableriz_service_un_titre = esc_attr(get_option('tableriz_service_un_titre'));
    $tableriz_service_un_txt = esc_attr(get_option('tableriz_service_un_txt'));
    ?>

        <table class="backend-item-serveice-un">
            <tr class="">
                <td><label for="">Titre service</label></td>
                <td><input type="text" id="tableriz_service_un_titre" name="tableriz_service_un_titre" value="<?php echo get_option('tableriz_service_un_titre'); ?>" /></td>
            </tr>
            <tr class="">
                <td><label for="">Texte</label></td>
                <td><input type="text" id="tableriz_service_un_txt" name="tableriz_service_un_txt" value="<?php echo get_option('tableriz_service_un_txt'); ?>" /></td>
            </tr>
        </table>

    <?php
} // END ==> field_tableriz_servie_un


// FIELDS : tableriz_servie_deux -----------------------------------------------
function field_tableriz_servie_deux(){
    $tableriz_service_deux_titre = esc_attr(get_option('tableriz_service_deux_titre'));
    $tableriz_service_deux_choice_one = esc_attr(get_option('tableriz_service_deux_choice_one'));
    $tableriz_service_deux_choice_two = esc_attr(get_option('tableriz_service_deux_choice_two'));
    $tableriz_service_deux_choice_three = esc_attr(get_option('tableriz_service_deux_choice_three'));
    $tableriz_service_deux_choice_four = esc_attr(get_option('tableriz_service_deux_choice_four'));
    ?>
        <table class="backend-item-serveice-deux">
            <tr class="">
                <td><label for="">Titre service</label></td>
                <td><input type="text" id="tableriz_service_deux_titre" name="tableriz_service_deux_titre" value="<?php echo get_option('tableriz_service_deux_titre'); ?>" /></td>
            </tr>
            <tr class="">
                <td><label for="">Choix 1</label></td>
                <td><input type="text" id="tableriz_service_deux_choice_one" name="tableriz_service_deux_choice_one" value="<?php echo get_option('tableriz_service_deux_choice_one'); ?>" /></td>
            </tr>
            <tr class="">
                <td><label for="">Choix 2</label></td>
                <td><input type="text" id="tableriz_service_deux_choice_two" name="tableriz_service_deux_choice_two" value="<?php echo get_option('tableriz_service_deux_choice_two'); ?>" /></td>
            </tr>
            <tr class="">
                <td><label for="">Choix 3</label></td>
                <td><input type="text" id="tableriz_service_deux_choice_three" name="tableriz_service_deux_choice_three" value="<?php echo get_option('tableriz_service_deux_choice_three'); ?>" /></td>
            </tr>
            <tr class="">
                <td><label for="">Choix 4</label></td>
                <td><input type="text" id="tableriz_service_deux_choice_four" name="tableriz_service_deux_choice_four" value="<?php echo get_option('tableriz_service_deux_choice_four'); ?>" /></td>
            </tr>
        </table>

    <?php
} // END ==> field_tableriz_servie_deux


// FIELDS : tableriz_servie_trois ----------------------------------------------
function field_tableriz_servie_trois(){
    $tableriz_service_trois_titre = esc_attr(get_option('tableriz_service_trois_titre'));
    $tableriz_service_trois_plat_one = esc_attr(get_option('tableriz_service_trois_plat_one'));
    $tableriz_service_trois_plat_two = esc_attr(get_option('tableriz_service_trois_plat_two'));
    $tableriz_service_trois_plat_three = esc_attr(get_option('tableriz_service_trois_plat_three'));
    $tableriz_service_trois_plat_four = esc_attr(get_option('tableriz_service_trois_plat_four'));
    $tableriz_service_trois_plat_five = esc_attr(get_option('tableriz_service_trois_plat_five'));
    ?>
    <table class="backend-item-serveice-trois">
        <tr class="">
            <td><label for="">Titre service</label></td>
            <td><input type="text" id="tableriz_service_trois_titre" name="tableriz_service_trois_titre" value="<?php echo get_option('tableriz_service_trois_titre'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">1er spécialité</label></td>
            <td><input type="text" id="tableriz_service_trois_plat_one" name="tableriz_service_trois_plat_one" value="<?php echo get_option('tableriz_service_trois_plat_one'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">2e spécialité</label></td>
            <td><input type="text" id="tableriz_service_trois_plat_two" name="tableriz_service_trois_plat_two" value="<?php echo get_option('tableriz_service_trois_plat_two'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">3e specialité</label></td>
            <td><input type="text" id="tableriz_service_trois_plat_three" name="tableriz_service_trois_plat_three" value="<?php echo get_option('tableriz_service_trois_plat_three'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">4e specialité</label></td>
            <td><input type="text" id="tableriz_service_trois_plat_four" name="tableriz_service_trois_plat_four" value="<?php echo get_option('tableriz_service_trois_plat_four'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">5e specialité</label></td>
            <td><input type="text" id="tableriz_service_trois_plat_five" name="tableriz_service_trois_plat_five" value="<?php echo get_option('tableriz_service_trois_plat_five'); ?>" /></td>
        </tr>
    </table>
    <?php
} // END ==> tableriz_servie_trois


// FIELDS : tableriz_servie_quatre ----------------------------------------------
function field_tableriz_servie_quatre(){
    $tableriz_service_quatre_titre = esc_attr(get_option('tableriz_service_quatre_titre'));
    $tableriz_service_quatre_txt = esc_attr(get_option('tableriz_service_quatre_txt'));
    ?>

        <table class="backend-item-serveice-un">
            <tr class="">
                <td><label for="">Titre service</label></td>
                <td><input type="text" id="tableriz_service_quatre_titre" name="tableriz_service_quatre_titre" value="<?php echo get_option('tableriz_service_quatre_titre'); ?>" /></td>
            </tr>
            <tr class="">
                <td><label for="">Texte</label></td>
                <td><input type="text" id="tableriz_service_quatre_txt" name="tableriz_service_quatre_txt" value="<?php echo get_option('tableriz_service_quatre_txt'); ?>" /></td>
            </tr>
        </table>

    <?php
} // END ==> field_tableriz_servie_quatre
