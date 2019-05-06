<?php

/*
Name:   [view-form] -> Page accueil
Description: Element de formulaire pour les sections de la page d'accueil
             => 1er onglet 'page-accueil' de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : section_cover

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 1 -- page-accueil
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_page404_cover(){}

// CALLBACK REGISTER : page404_bg_img -----------------------------------
function handle_file_bg_cover_page404($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['page404_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['page404_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['page404_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('page404_bg_img');

} // END => handle_file_bg_cover_page404


// CALLBACK FIELDS : page404_bg_img -------------------------------------
function field_page404_bg_img(){
    //echo form element for file upload

    $page404_affiche_img = esc_attr(get_option('page404_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="page404_affiche_img" name="page404_affiche_img" value="1" <?php checked(1, get_option('page404_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='page404_bg_img' id='page404_bg_img' value="<?php echo get_option('page404_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('page404_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('page404_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_page404_bg_img


// CALLBACK FIELD :
function field_page404_logo(){
    $affiche_logo = esc_attr(get_option('affiche_logo'));
    ?>
    <span>
        <input type="checkbox" id="affiche_logo" name="affiche_logo" value="1" <?php checked(1, get_option('affiche_logo'), true); ?> />
        <span class="info">Ajouter le logo sur la page</span>
    </span>
    <?php
} // END => field_page404_logo



/* ----------------------------------------------------------------------------- */
// AVATAR
/* ----------------------------------------------------------------------------- */
function display_section_page404_msg(){}

// CALLBACK REGISTER : page404_avatar_msg -------------------------------
function handle_file_avattar_page404($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['page404_avatar_msg']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['page404_avatar_msg'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['page404_avatar_msg']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('page404_avatar_msg');

} // END => handle_file_avattar_page404

// CALLBACK FIELDS : page404_avatar_msg ---------------------------------
function field_page404_avatar_msg(){
    //echo form element for file upload

    $page404_affiche_avatar = esc_attr(get_option('page404_affiche_avatar'));
    $avatar_msg_h1 = esc_attr(get_option('avatar_msg_h1'));
    $avatar_msg_txt = esc_attr(get_option('avatar_msg_txt'));

    ?>
    <div class="backend-card-img">
        <img src="<?php echo get_option('page404_avatar_msg'); ?>" alt="" class="backend-img-bg">
    </div>
    <div class="">
        <span>
            <input type="checkbox" id="page404_affiche_avatar" name="page404_affiche_avatar" value="1" <?php checked(1, get_option('page404_affiche_avatar'), true); ?> />
            <span class="info">Ajouter l'avatar pour cette section</span>
        </span>
        <input type="file" name='page404_avatar_msg' id='page404_avatar_msg' value="<?php echo get_option('page404_avatar_msg'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('page404_avatar_msg'); ?>" />
        </p>
    </div>

    <tr>
        <td>Grang texte</td>
        <td><input type="text" id="avatar_msg_h1" name="avatar_msg_h1" value="<?php echo get_option('avatar_msg_h1'); ?>"></td>
    </tr>

    <tr>
        <td>Text</td>
        <td><input type="text" id="avatar_msg_txt" name="avatar_msg_txt" value="<?php echo get_option('avatar_msg_txt'); ?>"></td>
    </tr>

    <?php
} // END => field_page404_avatar_msg
