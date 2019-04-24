<?php

/*
Name:   [view-form]  - Menu Table de Riz
Description: Element formulaire pour la fondu du 1er onglet de la page API service menu
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : info-menu
    section 2 : service_un
    section 3 : service_un
    section 4 : service_deux
    section 5 : service_quattre

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_location --> Option 1 -- fondu
/* ----------------------------------------------------------------------------- */

function display_element_fondu(){}

// CALLBACK REGISTER : fondu_img_bg
function handle_file_img_fondu($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['fondu_img_bg']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['fondu_img_bg'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['fondu_img_bg']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('fondu_img_bg');

} // END => handle_file_img_fondu

// FIELDS : fondu_info ------------------------------------------------------
function field_fondu_info(){
    $fondu_prix = esc_attr(get_option('fondu_prix'));
    $fondu_couvert = esc_attr(get_option('fondu_couvert'));
    ?>

            <div>
                <label for="">Prix</label>
                <input type="text" id="fondu_prix" name="fondu_prix" value="<?php echo get_option('fondu_prix'); ?>" />
                <span>
                    Prix par personne
                </span>
            </div>
            <div class="backend-min-couvert">
                <span>Couvert minimum</span>
                <input type="text" id="fondu_couvert" name="fondu_couvert" value="<?php echo get_option('fondu_couvert'); ?>" />
            </div>

            <div class="backend-card-img">
                <img src="<?php echo get_option('fondu_img_bg'); ?>" alt="" class="backend-img-logo">
            </div>
            <div class="">
                <input type="file" name='fondu_img_bg' id='fondu_img_bg' value="<?php echo get_option('fondu_img_bg'); ?>" />
                <p>
                    <input type="text" name="" value="<?php echo get_option('fondu_img_bg'); ?>" />
                </p>

            </div>


    <?php
} // END ==> field_fondu_info

// FIELDS : fondu_servie_un -----------------------------------------------
function field_fondu_servie_un(){
    $fondu_service_un_titre = esc_attr(get_option('fondu_service_un_titre'));
    $fondu_service_un_choice_one = esc_attr(get_option('fondu_service_un_choice_one'));
    $fondu_service_un_choice_two = esc_attr(get_option('fondu_service_un_choice_two'));
    ?>
        <table class="backend-item-serveice-deux">
            <tr class="">
                <td><label for="">Titre service</label></td>
                <td><input type="text" id="fondu_service_un_titre" name="fondu_service_un_titre" value="<?php echo get_option('fondu_service_un_titre'); ?>" /></td>
            </tr>
            <tr class="">
                <td><label for="">Choix 1</label></td>
                <td><input type="text" id="fondu_service_un_choice_one" name="fondu_service_un_choice_one" value="<?php echo get_option('fondu_service_un_choice_one'); ?>" /></td>
            </tr>
            <tr class="">
                <td><label for="">Choix 2</label></td>
                <td><input type="text" id="fondu_service_un_choice_two" name="fondu_service_un_choice_two" value="<?php echo get_option('fondu_service_un_choice_two'); ?>" /></td>
            </tr>
        </table>

    <?php
} // END ==> field_fondu_servieun

// FIELDS : fondu_servie_deux ----------------------------------------------
function field_fondu_servie_deux(){
    $fondu_service_deux_titre = esc_attr(get_option('fondu_service_deux_titre'));
    $fondu_service_deux_plat_one = esc_attr(get_option('fondu_service_deux_plat_one'));
    $fondu_service_deux_plat_two = esc_attr(get_option('fondu_service_deux_plat_two'));
    $fondu_service_deux_plat_three = esc_attr(get_option('fondu_service_deux_plat_three'));
    $fondu_service_deux_plat_four = esc_attr(get_option('fondu_service_deux_plat_four'));
    $fondu_service_deux_plat_five = esc_attr(get_option('fondu_service_deux_plat_five'));
    $fondu_service_deux_plat_six = esc_attr(get_option('fondu_service_deux_plat_six'));
    $fondu_service_deux_plat_seven = esc_attr(get_option('fondu_service_deux_plat_seven'));
    $fondu_service_deux_plat_eight = esc_attr(get_option('fondu_service_deux_plat_eight'));
    $fondu_service_deux_plat_nine = esc_attr(get_option('fondu_service_deux_plat_nine'));
    $fondu_service_deux_plat_ten = esc_attr(get_option('fondu_service_deux_plat_ten'));
    ?>
    <table class="backend-item-serveice-deux">
        <tr class="">
            <td><label for="">Titre service</label></td>
            <td><input type="text" id="fondu_service_deux_titre" name="fondu_service_deux_titre" value="<?php echo get_option('fondu_service_deux_titre'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">1er ingrédient</label></td>
            <td><input type="text" id="fondu_service_deux_plat_one" name="fondu_service_deux_plat_one" value="<?php echo get_option('fondu_service_deux_plat_one'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">2e ingrédient</label></td>
            <td><input type="text" id="fondu_service_deux_plat_two" name="fondu_service_deux_plat_two" value="<?php echo get_option('fondu_service_deux_plat_two'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">3e ingrédient</label></td>
            <td><input type="text" id="fondu_service_deux_plat_three" name="fondu_service_deux_plat_three" value="<?php echo get_option('fondu_service_deux_plat_three'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">4e ingrédient</label></td>
            <td><input type="text" id="fondu_service_deux_plat_four" name="fondu_service_deux_plat_four" value="<?php echo get_option('fondu_service_deux_plat_four'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">5e ingrédient</label></td>
            <td><input type="text" id="fondu_service_deux_plat_five" name="fondu_service_deux_plat_five" value="<?php echo get_option('fondu_service_deux_plat_five'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">6e ingrédient</label></td>
            <td><input type="text" id="fondu_service_deux_plat_six" name="fondu_service_deux_plat_six" value="<?php echo get_option('fondu_service_deux_plat_six'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">7e ingrédient</label></td>
            <td><input type="text" id="fondu_service_deux_plat_seven" name="fondu_service_deux_plat_seven" value="<?php echo get_option('fondu_service_deux_plat_seven'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">8e ingrédient</label></td>
            <td><input type="text" id="fondu_service_deux_plat_eight" name="fondu_service_deux_plat_eight" value="<?php echo get_option('fondu_service_deux_plat_eight'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">9e ingrédient</label></td>
            <td><input type="text" id="fondu_service_deux_plat_nine" name="fondu_service_deux_plat_nine" value="<?php echo get_option('fondu_service_deux_plat_nine'); ?>" /></td>
        </tr>
        <tr class="">
            <td><label for="">10e ingrédient</label></td>
            <td><input type="text" id="fondu_service_deux_plat_ten" name="fondu_service_deux_plat_ten" value="<?php echo get_option('fondu_service_deux_plat_ten'); ?>" /></td>
        </tr>
    </table>
    <?php
} // END ==> fondu_servie_deux

// FIELDS : fondu_servie_tre ----------------------------------------------
function field_fondu_servie_tre(){
    $fondu_service_tre_titre = esc_attr(get_option('fondu_service_tre_titre'));
    $fondu_service_tre_txt = esc_attr(get_option('fondu_service_tre_txt'));
    ?>

        <table class="backend-item-serveice-un">
            <tr class="">
                <td><label for="">Titre service</label></td>
                <td><input type="text" id="fondu_service_tre_titre" name="fondu_service_tre_titre" value="<?php echo get_option('fondu_service_tre_titre'); ?>" /></td>
            </tr>
            <tr class="">
                <td><label for="">Texte</label></td>
                <td><input type="text" id="fondu_service_tre_txt" name="fondu_service_tre_txt" value="<?php echo get_option('fondu_service_tre_txt'); ?>" /></td>
            </tr>
        </table>

    <?php
} // END ==> field_fondu_servie_tre
