<?php

/*
Name:   [view-form] -> Page carte
Description: Element de formulaire pour les sections de la page d'accueil
             => 2e onglet 'page-event' de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : cover
    section 2 : message
    section 3 :
    section 4 : reservation

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 4 -- page-event
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_eventpage_cover(){}

// CALLBACK REGISTER : eventpage_cover_bg_img -------------------------------
function handle_file_bg_eventpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['eventpage_cover_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['eventpage_cover_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['eventpage_cover_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('eventpage_cover_bg_img');

} // END => handle_file_bg_eventpage

// CALLBACK FIELDS : eventpage_cover_hidden ---------------------------------
function field_eventpage_cover_hidden(){
    $eventpage_cover_hidden = esc_attr(get_option('eventpage_cover_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="eventpage_cover_hidden" name="eventpage_cover_hidden" value="1" <?php checked(1, get_option('eventpage_cover_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page buffet</span>
        </div>
    <?php
} // END => field_eventpage_cover_hidden

// CALLBACK FIELDS : eventpage_cover_bg_img ---------------------------------
function field_eventpage_cover_bg_img(){
    //echo form element for file upload

    $eventpage_cover_affiche_img = esc_attr(get_option('eventpage_cover_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="eventpage_cover_affiche_img" name="eventpage_cover_affiche_img" value="1" <?php checked(1, get_option('eventpage_cover_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='eventpage_cover_bg_img' id='eventpage_cover_bg_img' value="<?php echo get_option('eventpage_cover_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('eventpage_cover_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('eventpage_cover_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_eventpage_cover_bg_img

// CALLBARCK FIELD : field_eventpage_cover_titre ----------------------------
function field_eventpage_cover_titre(){
    $eventpage_cover_titre = esc_attr(get_option('eventpage_cover_titre'));
    ?>
        <div class="">
            <input type="text" id="eventpage_cover_titre" name="eventpage_cover_titre" value="<?php echo(get_option('eventpage_cover_titre')); ?>">
        </div>
    <?php
} // END => field_eventpage_cover_titre

// CALLBARCK FIELD : field_eventpage_cover_texte ----------------------------
function field_eventpage_cover_texte(){
    $eventpage_cover_texte = esc_attr(get_option('eventpage_cover_texte'));
    ?>
    <div class="">
        <textarea id="eventpage_cover_texte" name="eventpage_cover_texte" ><?php echo(get_option('eventpage_cover_texte')); ?></textarea>
    </div>
    <?php
} // END => field_eventpage_cover_texte



/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_message --> Option 4 -- page-event
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_eventpage_message(){}

// CALLBACK REGISTER : eventpage_msg_img_avatar -----------------------------
function handle_file_avatar_msg_eventpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['eventpage_msg_img_avatar']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['eventpage_msg_img_avatar'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['eventpage_msg_img_avatar']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('eventpage_msg_img_avatar');

} // END => handle_file_avatar_msg_eventpage

// CALLBACK FIELDS : eventpage_msg_hidden -----------------------------------
function field_eventpage_msg_hidden(){
    $eventpage_msg_hidden = esc_attr(get_option('eventpage_msg_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="eventpage_msg_hidden" name="eventpage_msg_hidden" value="1" <?php checked(1, get_option('eventpage_msg_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page d'acceuil</span>
        </div>
    <?php
} // END => field_eventpage_msg_hidden

// CALLBACK FIELDS : eventpage_msg_img_avatar -------------------------------
function field_eventpage_msg_img_avatar(){
    //echo form element for file upload

    $eventpage_msg_affiche_avatar = esc_attr(get_option('eventpage_msg_affiche_avatar'));
    ?>
    <div class="backend-card-img">
        <img src="<?php echo get_option('eventpage_msg_img_avatar'); ?>" alt="" class="backend-img-bg">
    </div>
    <div class="">
        <span>
            <input type="checkbox" id="eventpage_msg_affiche_avatar" name="eventpage_msg_affiche_avatar" value="1" <?php checked(1, get_option('eventpage_msg_affiche_avatar'), true); ?> />
            <span class="info">Ajouter l'avatar pour cette section</span>
        </span>
        <input type="file" name='eventpage_msg_img_avatar' id='eventpage_msg_img_avatar' value="<?php echo get_option('eventpage_msg_img_avatar'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('eventpage_msg_img_avatar'); ?>" />
        </p>
    </div>
    <?php
} // END => field_eventpage_msg_img_avatar

// CALLBARCK FIELD : field_eventpage_message_texte --------------------------
function field_eventpage_msg_txt(){
    $eventpage_msg_txt = esc_attr(get_option('eventpage_msg_txt'));
    ?>
    <div class="">
        <input type="text" id="eventpage_msg_txt" name="eventpage_msg_txt" value="<?php echo(get_option('eventpage_msg_txt')); ?>" />
    </div>
    <?php
} // END => field_eventpage_msg_txt

/* ----------------------------------------------------------------------------- */
// SECTION 4 : section-reservation --> Option 2 -- page-event
/* ----------------------------------------------------------------------------- */
function display_section_eventpage_reservation(){}

// CALLBACK FILTER : eventpage_reservation_hidden -----------------------------
function field_eventpage_reservation_hidden(){
    $eventpage_reservation_hidden = esc_attr(get_option('eventpage_reservation_hidden'));
    ?>
    <div class="">
        <input type="checkbox" id="eventpage_reservation_hidden" name="eventpage_reservation_hidden" value="1" <?php checked(1, get_option('eventpage_reservation_hidden'), true); ?> />
        <span class="info">Masquer cette section sur la page des évènements</span>
    </div>
    <?php
} // END => field_eventpage_reservation_hidden
