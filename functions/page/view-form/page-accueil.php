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
function display_section_homepage_cover(){}

// CALLBACK REGISTER : homepage_bg_img -----------------------------------
function handle_file_bg_cover_homepage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['homepage_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['homepage_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['homepage_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('homepage_bg_img');

} // END => handle_file_bg_cover_homepage


// CALLBACK FIELDS : homepage_bg_img -------------------------------------
function field_homepage_bg_img(){
    //echo form element for file upload

    $homepage_affiche_img = esc_attr(get_option('homepage_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="homepage_affiche_img" name="homepage_affiche_img" value="1" <?php checked(1, get_option('homepage_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='homepage_bg_img' id='homepage_bg_img' value="<?php echo get_option('homepage_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('homepage_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('homepage_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_homepage_bg_img

// CALLBACK REGISTER : homepage_file_video ---------------------------------
function handle_file_filevideo_homepage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['homepage_file_video']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['homepage_file_video'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['homepage_file_video']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('homepage_file_video');

} // END => handle_file_filevideo_homepage



// CALLBACK FIELD : homepage_bg_video ------------------------------------
function field_homepage_bg_video(){
    $homepage_affiche_video = esc_attr(get_option('homepage_affiche_video'));
    $homepage_url_video = esc_attr(get_option('homepage_url_video'))
    ?>
        <div class="">
            <p>
                <input type="checkbox" id="homepage_affiche_video" name="homepage_affiche_video" value="1" <?php checked(1, get_option('homepage_affiche_video'), true); ?> />
                <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
            </p>

        </div>


        <div class="">
            <input type="file" id="homepage_file_video" name="homepage_file_video" value="<?php echo get_option('homepage_file_video'); ?>" />

            <p>
                <input type="text" name="" value="<?php echo get_option('homepage_file_video'); ?>" />
            </p>
        </div>

    <?php
} // END => field_homepage_bg_video

// CALLBACK FIELD :
function field_homepage_logo(){
    $affiche_logo = esc_attr(get_option('affiche_logo'));
    ?>
    <span>
        <input type="checkbox" id="affiche_logo" name="affiche_logo" value="1" <?php checked(1, get_option('affiche_logo'), true); ?> />
        <span class="info">Ajouter le logo sur la page</span>
    </span>
    <div class="">
        <img src="<?php echo get_option('logo_resto'); ?>" alt="" class="backend-img-logo">
    </div>
    <?php
} // END => field_homepage_logo



// CALLBACK REGISTER : homepage_btn_img_buffet ---------------------------------
function handle_file_buffetimg_homepage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['homepage_btn_img_buffet']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['homepage_btn_img_buffet'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['homepage_btn_img_buffet']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('homepage_btn_img_buffet');

} // END => handle_file_buffetimg_homepage


// CALLBACK REGISTER : homepage_btn_img_carte ---------------------------------
function handle_file_carteimg_homepage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['homepage_btn_img_carte']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['homepage_btn_img_carte'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['homepage_btn_img_carte']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('homepage_btn_img_carte');

} // END => handle_file_carteimg_homepage


// CALLBACK FIELD : homepage_btn
function field_homepage_btn(){

    /* --- btn-buffet --- */
    $btn_buffet_hidden = esc_attr(get_option('btn_buffet_hidden'));
    $btn_buffet_txt = esc_attr(get_option('btn_buffet_txt'));
    $btn_buffet_url = esc_attr(get_option('btn_buffet_url'));

    /* --- btn-carte --- */
    $btn_carte_hidden = esc_attr(get_option('btn_carte_hidden'));
    $btn_carte_txt = esc_attr(get_option('btn_carte_txt'));
    $btn_carte_url = esc_attr(get_option('btn_carte_url'));


    ?>
    <div class="backend-item-btn-img">
        <h4>Bouton buffet</h4>
        <!-- START : btn-info -->
        <div class="backend-hiden-btn">
            <input type="checkbox" id="btn_buffet_hidden" name="btn_buffet_hidden" value="1" <?php checked(1, get_option('btn_buffet_hidden'), true); ?> />
            <span>Afficher le bouton</span>
        </div><!-- / .backend-hiden-btn -->

        <div class="backend-btn-txt">
            <label for="">Texte</label>
            <input type="text" id="btn_buffet_txt" name="btn_buffet_txt" value="<?php echo(get_option('btn_buffet_txt')); ?>" />
        </div><!-- / .backend-btn-txt -->

        <div class="backend-btn-txt">
            <label for="">Lien (url)</label>
            <input type="text" id="btn_buffet_url" name="btn_buffet_url" value="<?php echo(get_option('btn_buffet_url')); ?>" />
        </div><!-- / .backend-btn-txt -->

        <!-- START : btn-img -->
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('homepage_btn_img_buffet'); ?>" alt="" class="backend-img-accueil">
        </div>

        <div class="backend-patg-img-accueil">
            <input type="file" name='homepage_btn_img_buffet' id='homepage_btn_img_buffet' value="<?php echo get_option('homepage_btn_img_buffet'); ?>" />
            <p>
                <input type="text" name="" value="<?php echo get_option('homepage_btn_img_buffet'); ?>" />
            </p>
        </div>
    </div><!-- / .backend-item-btn-img -->

    <div class="backend-item-btn-img">
        <h4>Bouton carte</h4>

        <!-- START : btn-info -->
        <div class="backend-hiden-btn">
            <input type="checkbox" id="btn_carte_hidden" name="btn_carte_hidden" value="1" <?php checked(1, get_option('btn_carte_hidden'), true); ?> />
            <span>Afficher le bouton</span>
        </div><!-- / .backend-hiden-btn -->

        <div class="backend-btn-txt">
            <label for="">Texte</label>
            <input type="text" id="btn_carte_txt" name="btn_carte_txt" value="<?php echo(get_option('btn_carte_txt')); ?>" />
        </div><!-- / .backend-btn-txt -->

        <div class="backend-btn-txt">
            <label for="">Lien (url)</label>
            <input type="text" id="btn_carte_url" name="btn_carte_url" value="<?php echo(get_option('btn_carte_url')); ?>" />
        </div><!-- / .backend-btn-txt -->

        <!-- START : bnt-img -->
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('homepage_btn_img_carte'); ?>" alt="" class="backend-img-accueil">
        </div>

        <div class="backend-patg-img-accueil">
            <input type="file" name='homepage_btn_img_carte' id='homepage_btn_img_carte' value="<?php echo get_option('homepage_btn_img_carte'); ?>" />
            <p>
                <input type="text" name="" value="<?php echo get_option('homepage_btn_img_carte'); ?>" />
            </p>
        </div>
    </div><!-- / .backend-item-btn-img -->
    <?php
} // END => field_homepage_btn
