<?php

/*
Name:   [view-form] -> Page carte
Description: Element de formulaire pour les sections de la page d'accueil
             => 2e onglet 'page-carte' de la page API option-theme
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


*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 3 -- page-carte
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_cartepage_cover(){}

// CALLBACK REGISTER : cartepage_cover_bg_img ---------------------------------
function handle_file_bg_cartepage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['cartepage_cover_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['cartepage_cover_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['cartepage_cover_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('cartepage_cover_bg_img');

} // END => handle_file_bg_cartepage


// CALLBACK FIELDS : cartepage_cover_hidden -----------------------------------
function field_cartepage_cover_hidden(){
    $cartepage_cover_hidden = esc_attr(get_option('cartepage_cover_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="cartepage_cover_hidden" name="cartepage_cover_hidden" value="1" <?php checked(1, get_option('cartepage_cover_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page buffet</span>
        </div>
    <?php
} // END => field_cartepage_cover_hidden

// CALLBACK FIELDS : cartepage_cover_bg_img -----------------------------------
function field_cartepage_cover_bg_img(){
    //echo form element for file upload

    $cartepage_cover_affiche_img = esc_attr(get_option('cartepage_cover_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="cartepage_cover_affiche_img" name="cartepage_cover_affiche_img" value="1" <?php checked(1, get_option('cartepage_cover_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='cartepage_cover_bg_img' id='cartepage_cover_bg_img' value="<?php echo get_option('cartepage_cover_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('cartepage_cover_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('cartepage_cover_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_cartepage_cover_bg_img


// CALLBARCK FIELD : field_cartepage_cover_titre ------------------------------
function field_cartepage_cover_titre(){
    $cartepage_cover_titre = esc_attr(get_option('cartepage_cover_titre'));
    ?>
        <div class="">
            <input type="text" id="cartepage_cover_titre" name="cartepage_cover_titre" value="<?php echo(get_option('cartepage_cover_titre')); ?>">
        </div>
    <?php
} // END => field_cartepage_cover_titre

// CALLBARCK FIELD : field_cartepage_cover_texte ------------------------------
function field_cartepage_cover_texte(){
    $cartepage_cover_texte = esc_attr(get_option('cartepage_cover_texte'));
    ?>
    <div class="">
        <textarea id="cartepage_cover_texte" name="cartepage_cover_texte" ><?php echo(get_option('cartepage_cover_texte')); ?></textarea>
    </div>
    <?php
} // END => field_cartepage_cover_texte

/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_message --> Option 3 -- page-carte
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_cartepage_message(){}

// CALLBACK REGISTER : cartepage_msg_img_avatar -------------------------------
function handle_file_avatar_msg_cartepage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['cartepage_msg_img_avatar']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['cartepage_msg_img_avatar'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['cartepage_msg_img_avatar']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('cartepage_msg_img_avatar');

} // END => handle_file_avatar_msg_cartepage

// CALLBACK FIELDS : cartepage_msg_hidden -------------------------------------
function field_cartepage_msg_hidden(){
    $cartepage_msg_hidden = esc_attr(get_option('cartepage_msg_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="cartepage_msg_hidden" name="cartepage_msg_hidden" value="1" <?php checked(1, get_option('cartepage_msg_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page d'acceuil</span>
        </div>
    <?php
} // END => field_cartepage_msg_hidden

// CALLBACK FIELDS : cartepage_msg_img_avatar ---------------------------------
function field_cartepage_msg_img_avatar(){
    //echo form element for file upload

    $cartepage_msg_affiche_avatar = esc_attr(get_option('cartepage_msg_affiche_avatar'));
    ?>
    <div class="backend-card-img">
        <img src="<?php echo get_option('cartepage_msg_img_avatar'); ?>" alt="" class="backend-img-bg">
    </div>
    <div class="">
        <span>
            <input type="checkbox" id="cartepage_msg_affiche_avatar" name="cartepage_msg_affiche_avatar" value="1" <?php checked(1, get_option('cartepage_msg_affiche_avatar'), true); ?> />
            <span class="info">Ajouter l'avatar pour cette section</span>
        </span>
        <input type="file" name='cartepage_msg_img_avatar' id='cartepage_msg_img_avatar' value="<?php echo get_option('cartepage_msg_img_avatar'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('cartepage_msg_img_avatar'); ?>" />
        </p>
    </div>
    <?php
} // END => field_cartepage_msg_img_avatar

// CALLBARCK FIELD : field_cartepage_message_texte ----------------------------
function field_cartepage_msg_titre(){
    $cartepage_msg_titre = esc_attr(get_option('cartepage_msg_titre'));
    ?>
    <div class="">
        <input type="text" id="cartepage_msg_titre" name="cartepage_msg_titre" value="<?php echo(get_option('cartepage_msg_titre')); ?>" />
    </div>
    <?php
} // END => field_cartepage_msg_titre

// CALLBARCK FIELD : field_cartepage_msg_cuisine ------------------------------
function field_cartepage_msg_cuisine(){

    $cartepage_mgs_chinois = esc_attr(get_option('cartepage_mgs_chinois'));
    $cartepage_mgs_france = esc_attr(get_option('cartepage_mgs_france'));
    $cartepage_mgs_thai = esc_attr(get_option('cartepage_mgs_thai'));

    ?>
        <p>
            <input type="checkbox" id="cartepage_mgs_chinois" name="cartepage_mgs_chinois" value="1" <?php checked(1, get_option('cartepage_mgs_chinois'), true); ?> />
            Chinoise
        </p>

        <p>
            <input type="checkbox" id="cartepage_mgs_france" name="cartepage_mgs_france" value="1" <?php checked(1, get_option('cartepage_mgs_france'), true); ?> />
            Française
        </p>

        <p>
            <input type="checkbox" id="cartepage_mgs_thai" name="cartepage_mgs_thai" value="1" <?php checked(1, get_option('cartepage_mgs_thai'), true); ?> />
            Thaïlandaise
        </p>

    <?php
} // END => field_cartepage_msg_cuisine


/* ----------------------------------------------------------------------------- */
// SECTION 3 : section_description_buffet --> Option 2 -- page-carte
/* ----------------------------------------------------------------------------- */
function display_section_cartepage_desc(){}

// CALLBACK FIELDS : cartepage_desc_hidden ------------------------------------
function field_cartepage_desc_hidden(){
    $cartepage_desc_hidden = esc_attr(get_option('cartepage_desc_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="cartepage_desc_hidden" name="cartepage_desc_hidden" value="1" <?php checked(1, get_option('cartepage_desc_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page buffet</span>
        </div>
    <?php
} // END => field_cartepage_desc_hidden

// CALLBACK FLIELDS : field_cartepage_desc_txt_content ------------------------
function field_cartepage_desc_txt_content(){
    $cartepage_desc_txt_content = esc_attr(get_option('cartepage_desc_txt_content'));
    ?>
    <div class="">
        <textarea id="cartepage_desc_txt_content" name="cartepage_desc_txt_content" ><?php echo(get_option('cartepage_desc_txt_content')); ?></textarea>
    </div>

    <?php
} // END => field_cartepage_desc_txt_content


/* ----------------------------------------------------------------------------- */
// SECTION 5 : section-reservation --> Option 2 -- page-carte
/* ----------------------------------------------------------------------------- */
function display_section_cartepage_reservation(){}

// CALLBACK FILTER : cartepage_reservation_hidden -----------------------------
function field_cartepage_reservation_hidden(){
    $cartepage_reservation_hidden = esc_attr(get_option('cartepage_reservation_hidden'));
    ?>
    <div class="">
        <input type="checkbox" id="cartepage_reservation_hidden" name="cartepage_reservation_hidden" value="1" <?php checked(1, get_option('cartepage_reservation_hidden'), true); ?> />
        <span class="info">Masquer cette section sur la page buffet</span>
    </div>
    <?php
} // END => field_cartepage_reservation_hidden
