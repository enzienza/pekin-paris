<?php

/*
Name:   [view-form] -> Page buffet
Description: Element de formulaire pour les sections de la page d'accueil
             => 2e onglet 'page-buffet' de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : cover
    section 2 : message
    section 3 : description buffet
    section 4 : tarif

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 3 -- page-buffet
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_buffetpage_cover(){}

// CALLBACK REGISTER : buffetpage_cover_bg_img ---------------------------------
function handle_file_bg_buffet_buffetpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['buffetpage_cover_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['buffetpage_cover_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['buffetpage_cover_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('buffetpage_cover_bg_img');

} // END => handle_file_bg_buffet_buffetpage


// CALLBACK FIELDS : buffetpage_cover_hidden -----------------------------------
function field_buffetpage_cover_hidden(){
    $buffetpage_cover_hidden = esc_attr(get_option('buffetpage_cover_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="buffetpage_cover_hidden" name="buffetpage_cover_hidden" value="1" <?php checked(1, get_option('buffetpage_cover_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page buffet</span>
        </div>
    <?php
} // END => field_buffetpage_cover_hidden

// CALLBACK FIELDS : buffetpage_cover_bg_img -----------------------------------
function field_buffetpage_cover_bg_img(){
    //echo form element for file upload

    $buffetpage_cover_affiche_img = esc_attr(get_option('buffetpage_cover_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="buffetpage_cover_affiche_img" name="buffetpage_cover_affiche_img" value="1" <?php checked(1, get_option('buffetpage_cover_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='buffetpage_cover_bg_img' id='buffetpage_cover_bg_img' value="<?php echo get_option('buffetpage_cover_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('buffetpage_cover_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('buffetpage_cover_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_buffetpage_cover_bg_img


// CALLBARCK FIELD : field_buffetpage_cover_titre ------------------------------
function field_buffetpage_cover_titre(){
    $buffetpage_cover_titre = esc_attr(get_option('buffetpage_cover_titre'));
    ?>
        <div class="">
            <input type="text" id="buffetpage_cover_titre" name="buffetpage_cover_titre" value="<?php echo(get_option('buffetpage_cover_titre')); ?>">
        </div>
    <?php
} // END => field_buffetpage_cover_titre

// CALLBARCK FIELD : field_buffetpage_cover_texte ------------------------------
function field_buffetpage_cover_texte(){
    $buffetpage_cover_texte = esc_attr(get_option('buffetpage_cover_texte'));
    ?>
    <div class="">
        <textarea id="buffetpage_cover_texte" name="buffetpage_cover_texte" ><?php echo(get_option('buffetpage_cover_texte')); ?></textarea>
    </div>
    <?php
} // END => field_buffetpage_cover_texte

/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_message --> Option 3 -- page-buffet
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_buffetpage_message(){}

// CALLBACK REGISTER : buffetpage_msg_img_avatar -------------------------------
function handle_file_avatar_msg_buffetpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['buffetpage_msg_img_avatar']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['buffetpage_msg_img_avatar'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['buffetpage_msg_img_avatar']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('buffetpage_msg_img_avatar');

} // END => handle_file_avatar_msg_buffetpage

// CALLBACK FIELDS : buffetpage_msg_hidden -------------------------------------
function field_buffetpage_msg_hidden(){
    $buffetpage_msg_hidden = esc_attr(get_option('buffetpage_msg_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="buffetpage_msg_hidden" name="buffetpage_msg_hidden" value="1" <?php checked(1, get_option('buffetpage_msg_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page d'acceuil</span>
        </div>
    <?php
} // END => field_buffetpage_msg_hidden

// CALLBACK FIELDS : buffetpage_msg_img_avatar ---------------------------------
function field_buffetpage_msg_img_avatar(){
    //echo form element for file upload

    $buffetpage_msg_affiche_avatar = esc_attr(get_option('buffetpage_msg_affiche_avatar'));
    ?>
    <div class="backend-card-img">
        <img src="<?php echo get_option('buffetpage_msg_img_avatar'); ?>" alt="" class="backend-img-bg">
    </div>
    <div class="">
        <span>
            <input type="checkbox" id="buffetpage_msg_affiche_avatar" name="buffetpage_msg_affiche_avatar" value="1" <?php checked(1, get_option('buffetpage_msg_affiche_avatar'), true); ?> />
            <span class="info">Ajouter l'avatar pour cette section</span>
        </span>
        <input type="file" name='buffetpage_msg_img_avatar' id='buffetpage_msg_img_avatar' value="<?php echo get_option('buffetpage_msg_img_avatar'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('buffetpage_msg_img_avatar'); ?>" />
        </p>
    </div>
    <?php
} // END => field_buffetpage_msg_img_avatar

// CALLBARCK FIELD : field_buffetpage_message_texte ----------------------------
function field_buffetpage_msg_titre(){
    $buffetpage_msg_titre = esc_attr(get_option('buffetpage_msg_titre'));
    ?>
    <div class="">
        <input type="text" id="buffetpage_msg_titre" name="buffetpage_msg_titre" value="<?php echo(get_option('buffetpage_msg_titre')); ?>" />
    </div>
    <?php
} // END => field_buffetpage_msg_titre

// CALLBARCK FIELD : field_buffetpage_msg_element ------------------------------
function field_buffetpage_msg_element(){

    $buffetpage_msg_element_entrefroide = esc_attr(get_option('buffetpage_msg_element_entrefroide'));
    $buffetpage_msg_element_potage = esc_attr(get_option('buffetpage_msg_element_potage'));
    $buffetpage_msg_element_entrechaude = esc_attr(get_option('buffetpage_msg_element_entrechaude'));
    $buffetpage_msg_element_plats = esc_attr(get_option('buffetpage_msg_element_plats'));

    ?>
        <p class="backend-element-buffet">
            <input type="text" id="buffetpage_msg_element_entrefroide" name="buffetpage_msg_element_entrefroide" value="<?php echo(get_option('buffetpage_msg_element_entrefroide')); ?>" />
            <span> entrées froides</span>
        </p>
        <p class="backend-element-buffet" >
            <input type="text" id="buffetpage_msg_element_potage" name="buffetpage_msg_element_potage" value="<?php echo(get_option('buffetpage_msg_element_potage')); ?>"/>
            <span> potages</span>
        </p>
        <p class="backend-element-buffet">
            <input type="text" id="buffetpage_msg_element_entrechaude" name="buffetpage_msg_element_entrechaude" value="<?php echo(get_option('buffetpage_msg_element_entrechaude')); ?>" />
            <span> entrées chaudes</span>
        </p>
        <p class="backend-element-buffet">
            <input type="text" id="buffetpage_msg_element_plats" name="buffetpage_msg_element_plats" value="<?php echo(get_option('buffetpage_msg_element_plats')); ?>" />
            <span> sortes de plats (viandes, volailles, légumes, etc...)</span>
        </p>

    <?php
} // END => field_buffetpage_msg_element

function field_buffetpage_msn_button(){
    $buffetpage_msn_button = esc_attr(get_option('buffetpage_msn_button'));
    ?>
        <input type="checkbox" id="buffetpage_msn_button" name="buffetpage_msn_button" value="1" <?php checked(1, get_option('buffetpage_msn_button'), true); ?> />
        <span>Lien la section <strong>tarif-buffet</strong></span>
    <?php
}

/* ----------------------------------------------------------------------------- */
// SECTION 3 : section_description_buffet --> Option 2 -- page-buffet
/* ----------------------------------------------------------------------------- */
function display_section_buffetpage_desc(){}

// CALLBACK FIELDS : buffetpage_desc_hidden ------------------------------------
function field_buffetpage_desc_hidden(){
    $buffetpage_desc_hidden = esc_attr(get_option('buffetpage_desc_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="buffetpage_desc_hidden" name="buffetpage_desc_hidden" value="1" <?php checked(1, get_option('buffetpage_desc_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page buffet</span>
        </div>
    <?php
} // END => field_buffetpage_desc_hidden

// CALLBACK FLIELDS : field_buffetpage_desc_txt_content ------------------------
function field_buffetpage_desc_txt_content(){
    $buffetpage_desc_txt_content = esc_attr(get_option('buffetpage_desc_txt_content'));
    ?>
    <div class="">
        <textarea id="buffetpage_desc_txt_content" name="buffetpage_desc_txt_content" ><?php echo(get_option('buffetpage_desc_txt_content')); ?></textarea>
    </div>

    <?php
} // END => field_buffetpage_desc_txt_content




/* ----------------------------------------------------------------------------- */
// SECTION 4 : section_tarif --> Option 2 -- page-buffet
/* ----------------------------------------------------------------------------- */
function display_section_buffetpage_tarif(){}

// CALLBACK FILTER : buffetpage_tarif_txt --------------------------------------
function field_buffetpage_tarif_txt(){
    $buffetpage_tarif_txt = esc_attr(get_option('buffetpage_tarif_txt'));
    ?>
        <div class="">
            <textarea id="buffetpage_tarif_txt" name="buffetpage_tarif_txt" ><?php echo(get_option('buffetpage_tarif_txt')); ?></textarea>
        </div>
    <?php
} // END => field_buffetpage_tarif_txt

// CALLBACK FILTER : buffetpage_tarif_catch ------------------------------------
function field_buffetpage_tarif_catch(){
    // $buffetpage_tarif_catch = esc_attr(get_option('buffetpage_tarif_catch'));
    ?>
        <div class="">
            <input type="text" id="buffetpage_tarif_catch" name="buffetpage_tarif_catch" value="<?php echo(get_option('buffetpage_tarif_catch')); ?>">
        </div>
    <?php
} // END => field_buffetpage_tarif_catch

// CALLBACK REGISTER : avatar_tarif --------------------------------------------
function handle_avatartarif_file($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['avatar_tarif']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['avatar_tarif'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['avatar_tarif']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('avatar_tarif');

} // END => handle_avatartarif_file

// CALLBACK FILTER : avatar_tarif ----------------------------------------------
function field_buffetpage_tarif_avatar(){
    $buffetpage_tarif_affiche_avatar = esc_attr(get_option('buffetpage_tarif_affiche_avatar'));
    ?>

    <div class="backend-card-img">
        <img src="<?php echo get_option('avatar_tarif'); ?>" alt="" class="backend-img-logo">
    </div>

    <div class="">
        <span>
            <input type="checkbox" id="buffetpage_tarif_affiche_avatar" name="buffetpage_tarif_affiche_avatar" value="1" <?php checked(1, get_option('buffetpage_tarif_affiche_avatar'), true); ?> />
            <span class="info">Ajouter l'avatar pour cette section</span>
        </span>

        <div class="">
            <input type="file" name='avatar_tarif' id='avatar_tarif' value="<?php echo get_option('avatar_tarif'); ?>" />
            <p>
                <input type="text" name="" value="<?php echo get_option('avatar_tarif'); ?>" />
            </p>

        </div>
    </div>

    <?php
} // END => field_buffetpage_tarif_avatar


/* ----------------------------------------------------------------------------- */
// SECTION 5 : section-reservation --> Option 2 -- page-buffet
/* ----------------------------------------------------------------------------- */
function display_section_buffetpage_reservation(){}

// CALLBACK FILTER : buffetpage_reservation_hidden -----------------------------
function field_buffetpage_reservation_hidden(){
    $buffetpage_reservation_hidden = esc_attr(get_option('buffetpage_reservation_hidden'));
    ?>
    <div class="">
        <input type="checkbox" id="buffetpage_reservation_hidden" name="buffetpage_reservation_hidden" value="1" <?php checked(1, get_option('buffetpage_reservation_hidden'), true); ?> />
        <span class="info">Masquer cette section sur la page buffet</span>
    </div>
    <?php
} // END => field_buffetpage_reservation_hidden
