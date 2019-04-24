<?php

/*
Name:   [view-form] -> Page contact
Description: Element de formulaire pour les sections de la page d'accueil
             => 5e onglet 'page-contact' de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : cover
    section 2 : horaire
    section 3 : description buffet


*/


/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 5 -- page-contact
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_contactpage_cover(){}

// CALLBACK REGISTER : contactpage_cover_bg_img ---------------------------------
function handle_file_bg_contactpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['contactpage_cover_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['contactpage_cover_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['contactpage_cover_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('contactpage_cover_bg_img');

} // END => handle_file_bg_contactpage


// CALLBACK FIELDS : contactpage_cover_hidden -----------------------------------
function field_contactpage_cover_hidden(){
    $contactpage_cover_hidden = esc_attr(get_option('contactpage_cover_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="contactpage_cover_hidden" name="contactpage_cover_hidden" value="1" <?php checked(1, get_option('contactpage_cover_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page buffet</span>
        </div>
    <?php
} // END => field_contactpage_cover_hidden

// CALLBACK FIELDS : contactpage_cover_bg_img -----------------------------------
function field_contactpage_cover_bg_img(){
    //echo form element for file upload

    $contactpage_cover_affiche_img = esc_attr(get_option('contactpage_cover_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="contactpage_cover_affiche_img" name="contactpage_cover_affiche_img" value="1" <?php checked(1, get_option('contactpage_cover_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='contactpage_cover_bg_img' id='contactpage_cover_bg_img' value="<?php echo get_option('contactpage_cover_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('contactpage_cover_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('contactpage_cover_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_contactpage_cover_bg_img


// CALLBARCK FIELD : field_contactpage_cover_titre ------------------------------
function field_contactpage_cover_titre(){
    $contactpage_cover_titre = esc_attr(get_option('contactpage_cover_titre'));
    ?>
        <div class="">
            <input type="text" id="contactpage_cover_titre" name="contactpage_cover_titre" value="<?php echo(get_option('contactpage_cover_titre')); ?>">
        </div>
    <?php
} // END => field_contactpage_cover_titre

// CALLBARCK FIELD : field_contactpage_cover_texte ------------------------------
function field_contactpage_cover_texte(){
    $contactpage_cover_texte = esc_attr(get_option('contactpage_cover_texte'));
    ?>
    <div class="">
        <textarea id="contactpage_cover_texte" name="contactpage_cover_texte" ><?php echo(get_option('contactpage_cover_texte')); ?></textarea>
    </div>
    <?php
} // END => field_contactpage_cover_texte


/* ----------------------------------------------------------------------------- */
// SECTION 3 : section_horaire --> Option 5 -- page-contact
/* ----------------------------------------------------------------------------- */
function display_section_contactpage_horaire(){}

// CALLBACK REGISTER : contactpage_avatar_horaire -------------------------------
function handle_file_avattar_horaire_contactpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['contactpage_avatar_horaire']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['contactpage_avatar_horaire'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['contactpage_avatar_horaire']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('contactpage_avatar_horaire');

} // END => handle_file_avattar_horaire_contactpage

// CALLBACK FIELDS : contactpage_avatar_horaire ---------------------------------
function field_contactpage_avatar_horaire(){
    //echo form element for file upload

    $contactpage_horaire_affiche_avatar = esc_attr(get_option('contactpage_horaire_affiche_avatar'));
    ?>
    <div class="backend-card-img">
        <img src="<?php echo get_option('contactpage_avatar_horaire'); ?>" alt="" class="backend-img-bg">
    </div>
    <div class="">
        <span>
            <input type="checkbox" id="contactpage_horaire_affiche_avatar" name="contactpage_horaire_affiche_avatar" value="1" <?php checked(1, get_option('contactpage_horaire_affiche_avatar'), true); ?> />
            <span class="info">Ajouter l'avatar pour cette section</span>
        </span>
        <input type="file" name='contactpage_avatar_horaire' id='contactpage_avatar_horaire' value="<?php echo get_option('contactpage_avatar_horaire'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('contactpage_avatar_horaire'); ?>" />
        </p>
    </div>
    <?php
} // END => field_contactpage_avatar_horaire
