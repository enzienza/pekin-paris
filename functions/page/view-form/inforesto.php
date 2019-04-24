<?php

/*
Name:   view-form - inforesto
Description: Element formulaire pour les info-resto du 1er onglet de la page API Pékin-paris
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/


/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_location --> Option 1 -- info-resto
/* ----------------------------------------------------------------------------- */

function display_section_location(){}

function field_inforesto_adresse(){
    $inforesto_adresse = esc_attr(get_option('inforesto_adresse'));
    ?>
        <input type="text" id="inforesto_adresse" name="inforesto_adresse" value="<?php echo(get_option('inforesto_adresse')); ?>" />
    <?php
} //END => field_inforesto_adresse

function field_inforesto_map(){
    $inforesto_map = esc_attr(get_option('inforesto_map'));
    ?>
        <textarea name="inforesto_map" id="inforesto_map" cols="80"><?php echo esc_attr(get_option('inforesto_map')); ?></textarea>
    <?php
} //END => field_inforesto_map

function field_inforesto_phone(){
    $inforesto_phone = esc_attr(get_option('inforesto_phone'));
    ?>
        <input type="text" id="inforesto_phone" name="inforesto_phone" value="<?php echo(get_option('inforesto_phone')); ?>" />
    <?php
} //END => field_inforesto_phone



/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_social --> Option 1 -- info-resto
/* ----------------------------------------------------------------------------- */

function display_section_social(){}

function field_inforesto_facebook(){
    $yes_facebbok = esc_attr(get_option('yes_facebbok'));
    $inforesto_facebook = esc_attr(get_option('inforesto_facebook'));
    ?>
        <input type="checkbox" id="yes_facebbok" name="yes_facebbok" value="1" <?php checked(1, get_option('yes_facebbok'), true); ?> />
        <input type="text" id="inforesto_facebook" name="inforesto_facebook" value="<?php echo(get_option('inforesto_facebook')); ?>" />
    <?php
} // END => field_inforesto_facebook

function field_inforesto_twitter(){
    $yes_twitter = esc_attr(get_option('yes_twitter'));
    $inforesto_twitter = esc_attr(get_option('inforesto_twitter'));
    ?>
        <input type="checkbox" id="yes_twitter" name="yes_twitter" value="1" <?php checked(1, get_option('yes_twitter'), true); ?> />
        <input type="text" id="inforesto_twitter" name="inforesto_twitter" value="<?php echo(get_option('inforesto_twitter')); ?>" />
    <?php
} // END => field_inforesto_twitter

function field_inforesto_instagram(){
    $yes_instagram = esc_attr(get_option('yes_instagram'));
    $inforesto_instagram = esc_attr(get_option('inforesto_instagram'));
    ?>
        <input type="checkbox" id="yes_instagram" name="yes_instagram" value="1" <?php checked(1, get_option('yes_instagram'), true); ?> />
        <input type="text" id="inforesto_instagram" name="inforesto_instagram" value="<?php echo(get_option('inforesto_instagram')); ?>" />
    <?php
} // END => field_inforesto_instagram


/* ----------------------------------------------------------------------------- */
// SECTION 3 : section_creditcard --> Option 1 -- info-resto
/* ----------------------------------------------------------------------------- */
function display_section_creditcard(){

}
function field_inforesto_carte(){
    $inforesto_carte_visa = esc_attr(get_option('inforesto_carte_visa'));
    $inforesto_carte_mastercard = esc_attr(get_option('inforesto_carte_mastercard'));
    $inforesto_carte_american = esc_attr(get_option('inforesto_carte_american'));
    $inforesto_carte_maestro = esc_attr(get_option('inforesto_carte_maestro'));

    ?>
    <div>
        <input type="checkbox" id="inforesto_carte_visa" name="inforesto_carte_visa" value="1" <?php checked(1, get_option('inforesto_carte_visa'), true); ?> />
        <span>Visa</span>
    </div>

    <div>
        <input type="checkbox" id="inforesto_carte_mastercard" name="inforesto_carte_mastercard" value="1" <?php checked(1, get_option('inforesto_carte_mastercard'), true); ?> />
        <span>MasterCard</span>
    </div>

    <div>
        <input type="checkbox" id="inforesto_carte_american" name="inforesto_carte_american" value="1" <?php checked(1, get_option('inforesto_carte_american'), true); ?> />
        <span>American Express</span>
    </div>

    <div>
        <input type="checkbox" id="inforesto_carte_maestro" name="inforesto_carte_maestro" value="1" <?php checked(1, get_option('inforesto_carte_maestro'), true); ?> />
        <span>Maestro</span>
    </div>



    <?php
} // END => field_inforesto_carte

/* ----------------------------------------------------------------------------- */
// SECTION 4 : section_uptload_inforesto --> Option 1 -- info-resto
/* ----------------------------------------------------------------------------- */
function handle_file_logo($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['logo_resto']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['logo_resto'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['logo_resto']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('logo_resto');

} // END => handle_file_logo


function display_section_uptload_inforesto(){

}
function field_inforesto_logo(){
    //echo form element for file upload

    ?>
    <div class="backend-card-img">
        <img src="<?php echo get_option('logo_resto'); ?>" alt="" class="backend-img-logo">
    </div>
    <div class="">
        <input type="file" name='logo_resto' id='logo_resto' value="<?php echo get_option('logo_resto'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('logo_resto'); ?>" />
        </p>

    </div>
    <?php
} // END => field_inforesto_logo
