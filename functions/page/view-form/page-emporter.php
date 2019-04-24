<?php

/*
Name:   [view-form] -> Page carte
Description: Element de formulaire pour les sections de la page d'accueil
             => 2e onglet 'page-emporter' de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : cover
    section 2 : message
    section 3 : carte-emporter
    section 4 : info commande
    section 5 : buffet-emporter

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 3 -- page-emporter
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_emporterpage_cover(){}

// CALLBACK REGISTER : emporterpage_cover_bg_img -------------------------------
function handle_file_bg_emporterpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['emporterpage_cover_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['emporterpage_cover_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['emporterpage_cover_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('emporterpage_cover_bg_img');

} // END => handle_file_bg_emporterpage


// CALLBACK FIELDS : emporterpage_cover_hidden ---------------------------------
function field_emporterpage_cover_hidden(){
    $emporterpage_cover_hidden = esc_attr(get_option('emporterpage_cover_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="emporterpage_cover_hidden" name="emporterpage_cover_hidden" value="1" <?php checked(1, get_option('emporterpage_cover_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page buffet</span>
        </div>
    <?php
} // END => field_emporterpage_cover_hidden

// CALLBACK FIELDS : emporterpage_cover_bg_img ---------------------------------
function field_emporterpage_cover_bg_img(){
    //echo form element for file upload

    $emporterpage_cover_affiche_img = esc_attr(get_option('emporterpage_cover_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="emporterpage_cover_affiche_img" name="emporterpage_cover_affiche_img" value="1" <?php checked(1, get_option('emporterpage_cover_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='emporterpage_cover_bg_img' id='emporterpage_cover_bg_img' value="<?php echo get_option('emporterpage_cover_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('emporterpage_cover_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('emporterpage_cover_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_emporterpage_cover_bg_img


// CALLBARCK FIELD : field_emporterpage_cover_titre ----------------------------
function field_emporterpage_cover_titre(){
    $emporterpage_cover_titre = esc_attr(get_option('emporterpage_cover_titre'));
    ?>
        <div class="">
            <input type="text" id="emporterpage_cover_titre" name="emporterpage_cover_titre" value="<?php echo(get_option('emporterpage_cover_titre')); ?>">
        </div>
    <?php
} // END => field_emporterpage_cover_titre

// CALLBARCK FIELD : field_emporterpage_cover_texte ----------------------------
function field_emporterpage_cover_texte(){
    $emporterpage_cover_texte = esc_attr(get_option('emporterpage_cover_texte'));
    ?>
    <div class="">
        <textarea id="emporterpage_cover_texte" name="emporterpage_cover_texte" ><?php echo(get_option('emporterpage_cover_texte')); ?></textarea>
    </div>
    <?php
} // END => field_emporterpage_cover_texte


/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_message --> Option 3 -- page-emporter
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_emporterpage_message(){}

// CALLBACK REGISTER : emporterpage_msg_img_avatar -----------------------------
function handle_file_avatar_msg_emporterpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['emporterpage_msg_img_avatar']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['emporterpage_msg_img_avatar'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['emporterpage_msg_img_avatar']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('emporterpage_msg_img_avatar');

} // END => handle_file_avatar_msg_emporterpage

// CALLBACK FIELDS : emporterpage_msg_hidden -----------------------------------
function field_emporterpage_msg_hidden(){
    $emporterpage_msg_hidden = esc_attr(get_option('emporterpage_msg_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="emporterpage_msg_hidden" name="emporterpage_msg_hidden" value="1" <?php checked(1, get_option('emporterpage_msg_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page d'acceuil</span>
        </div>
    <?php
} // END => field_emporterpage_msg_hidden

// CALLBACK FIELDS : emporterpage_msg_img_avatar -------------------------------
function field_emporterpage_msg_img_avatar(){
    //echo form element for file upload

    $emporterpage_msg_affiche_avatar = esc_attr(get_option('emporterpage_msg_affiche_avatar'));
    ?>
    <div class="backend-card-img">
        <img src="<?php echo get_option('emporterpage_msg_img_avatar'); ?>" alt="" class="backend-img-bg">
    </div>
    <div class="">
        <span>
            <input type="checkbox" id="emporterpage_msg_affiche_avatar" name="emporterpage_msg_affiche_avatar" value="1" <?php checked(1, get_option('emporterpage_msg_affiche_avatar'), true); ?> />
            <span class="info">Ajouter l'avatar pour cette section</span>
        </span>
        <input type="file" name='emporterpage_msg_img_avatar' id='emporterpage_msg_img_avatar' value="<?php echo get_option('emporterpage_msg_img_avatar'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('emporterpage_msg_img_avatar'); ?>" />
        </p>
    </div>
    <?php
} // END => field_emporterpage_msg_img_avatar

// CALLBARCK FIELD : field_emporterpage_message_texte --------------------------
function field_emporterpage_msg_txt(){
    $emporterpage_msg_txt = esc_attr(get_option('emporterpage_msg_txt'));
    ?>
    <div class="">
        <input type="text" id="emporterpage_msg_txt" name="emporterpage_msg_txt" value="<?php echo(get_option('emporterpage_msg_txt')); ?>" />
    </div>
    <?php
} // END => field_emporterpage_msg_txt


/* ----------------------------------------------------------------------------- */
// SECTION 3 : section_emporterpage_info --> Option 3 -- page-emporter
/* ----------------------------------------------------------------------------- */
function display_section_emporterpage_info(){}

// CALLBACK REGISTER : emporterpage_info_avatar --------------------------------
function handle_file_avatar_info_emporterpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['emporterpage_info_avatar']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['emporterpage_info_avatar'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['emporterpage_info_avatar']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('emporterpage_info_avatar');

} // END => handle_file_avatar_info_emporterpage

function field_emporterpage_info_avatar(){
    ?>
    <div class="backend-card-img">
        <img src="<?php echo get_option('emporterpage_info_avatar'); ?>" alt="" class="backend-img-logo">
    </div>
    <div class="">
        <input type="file" name='emporterpage_info_avatar' id='emporterpage_info_avatar' value="<?php echo get_option('emporterpage_info_avatar'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('emporterpage_info_avatar'); ?>" />
        </p>

    </div>
    <?php
} // END => field_emporterpage_info_avatar

// FIELDS : emporterpage_info_promo --------------------------------------------
function field_emporterpage_info_promo(){
    $emporterpage_promo_reduction = esc_attr(get_option('emporterpage_promo_reduction'));
    $emporterpage_promo_offert = esc_attr(get_option('emporterpage_promo_offert'));
    $emporterpage_promo_minimum = esc_attr(get_option('emporterpage_promo_minimum'));
    ?>
        <div class="backend-reduction">
            <label for="">Réduction de</label>
            <input type="text" id="emporterpage_promo_reduction" name="emporterpage_promo_reduction" value="<?php echo get_option('emporterpage_promo_reduction'); ?>" />
            <span>sur tout les plats à emporter</span>
        </div>

        <table class="backend-offert">
            <tr>
                <td><label for="">Offert</label></td>
                <td><input type="text" id="emporterpage_promo_offert" name="emporterpage_promo_offert" value="<?php echo get_option('emporterpage_promo_offert'); ?>" /></td>
            </tr>
            <tr>
                <td><label for="">A partie de</label></td>
                <td><input type="text" id="emporterpage_promo_minimum" name="emporterpage_promo_minimum" value="<?php echo get_option('emporterpage_promo_minimum'); ?>" /></td>
            </tr>
        </table>

    <?php
} // END => field_emporterpage_info_promo


/* ----------------------------------------------------------------------------- */
// SECTION 4 : section-commander --> Option 3 -- page-emporter
/* ----------------------------------------------------------------------------- */
function display_section_emporterpage_commander(){}

// CALLBACK FILTER : emporterpage_commander_hidden -----------------------------
function field_emporterpage_commander_hidden(){
    $emporterpage_commander_hidden = esc_attr(get_option('emporterpage_commander_hidden'));
    ?>
    <div class="">
        <input type="checkbox" id="emporterpage_commander_hidden" name="emporterpage_commander_hidden" value="1" <?php checked(1, get_option('emporterpage_commander_hidden'), true); ?> />
        <span class="info">Masquer cette section sur la page emporter</span>
    </div>
    <?php
} // END => field_emporterpage_commander_hidden


/* ----------------------------------------------------------------------------- */
// SECTION 5 : section-buffet --> Option 3 -- page-emporter
/* ----------------------------------------------------------------------------- */
function display_section_emporterpage_buffet(){}


// CALLBACK REGISTER : emporter_buffet_avatar
function handle_file_avatar_buffet_emporterpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['emporter_buffet_avatar']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['emporter_buffet_avatar'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['emporter_buffet_avatar']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('emporter_buffet_avatar');

} // END => handle_file_avatar_buffet_emporterpage

// FIELDS : emporterpage_avatar_buffet -----------------------------------------
function field_emporterpage_avatar_buffet(){
    ?>
    <div class="backend-card-img">
        <img src="<?php echo get_option('emporter_buffet_avatar'); ?>" alt="" class="backend-img-logo">
    </div>
    <div class="">
        <input type="file" name='emporter_buffet_avatar' id='emporter_buffet_avatar' value="<?php echo get_option('emporter_buffet_avatar'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('emporter_buffet_avatar'); ?>" />
        </p>

    </div>
    <?php
} // END => field_emporterpage_avatar_buffet

// CALLBACK REGISTER : emporterpage_formule_uno ---------------------------------
function handle_file_formule_one_emporterpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['emporterpage_formule_uno']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['emporterpage_formule_uno'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['emporterpage_formule_uno']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('emporterpage_formule_uno');

} // END => handle_file_formule_one_emporterpage

// CALLBACK REGISTER : emporterpage_formule_due ---------------------------------
function handle_file_formule_due_emporterpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['emporterpage_formule_due']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['emporterpage_formule_due'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['emporterpage_formule_due']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('emporterpage_formule_due');

} // END => handle_file_formule_due_emporterpage

// CALLBACK REGISTER : emporterpage_formule_tre ---------------------------------
function handle_file_formule_tre_emporterpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['emporterpage_formule_tre']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['emporterpage_formule_tre'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['emporterpage_formule_tre']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('emporterpage_formule_tre');

} // END => handle_file_formule_tre_emporterpage

// FIELDS : emporterpage_barquette_buffet --------------------------------------
function field_emporterpage_barquette_buffet(){
    $txt_barquette_uno = esc_attr(get_option('txt_barquette_uno'));
    $prix_barquete_uno = esc_attr(get_option('prix_barquete_uno'));
    $txt_barquette_due = esc_attr(get_option('txt_barquette_due'));
    $prix_barquette_due = esc_attr(get_option('prix_barquette_due'));
    $txt_barquette_tre = esc_attr(get_option('txt_barquette_tre'));
    $prix_barquette_tre = esc_attr(get_option('prix_barquette_tre'));

    ?>

    <div class="backend-item-barquette">
        <h4>1ère formule</h4>
        <div class="backend-info-barqquette">
            <label for="">Texte</label>
            <input type="text" id="txt_barquette_uno" name="txt_barquette_uno" value="<?php echo get_option('txt_barquette_uno'); ?>" />
        </div>

        <div class="backend-info-barqquette">
            <label for="">Prix</label>
            <input type="text" id="prix_barquete_uno" name="prix_barquete_uno" value="<?php echo get_option('prix_barquete_uno'); ?>" />
        </div>

        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('emporterpage_formule_uno'); ?>" alt="" class="backend-img-buffet">
        </div>

        <div class="backend-path-img-buffet">
            <input type="file" name='emporterpage_formule_uno' id='emporterpage_formule_uno' value="<?php echo get_option('emporterpage_formule_uno'); ?>" />
            <p>
                <input type="text" name="" value="<?php echo get_option('emporterpage_formule_uno'); ?>" />
            </p>
        </div>
    </div><!-- / .backend-item-barquette -->

    <div class="backend-item-barquette">
        <h4>2e formule</h4>
        <div class="backend-info-barqquette">
            <label for="">Texte</label>
            <input type="text" id="txt_barquette_due" name="txt_barquette_due" value="<?php echo get_option('txt_barquette_due'); ?>" />
        </div>

        <div class="backend-info-barqquette">
            <label for="">Prix</label>
            <input type="text" id="prix_barquette_due" name="prix_barquette_due" value="<?php echo get_option('prix_barquette_due'); ?>" />
        </div>

        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('emporterpage_formule_due'); ?>" alt="" class="backend-img-buffet">
        </div>

        <div class="backend-path-img-buffet">
            <input type="file" name='emporterpage_formule_due' id='emporterpage_formule_due' value="<?php echo get_option('emporterpage_formule_due'); ?>" />
            <p>
                <input type="text" name="" value="<?php echo get_option('emporterpage_formule_due'); ?>" />
            </p>
        </div>
    </div><!-- / .backend-item-barquette -->

    <div class="backend-item-barquette">
        <h4>3e formule</h4>

        <div class="backend-info-barqquette">
            <label for="">Texte</label>
            <input type="text" id="txt_barquette_tre" name="txt_barquette_tre" value="<?php echo get_option('txt_barquette_tre'); ?>" />
        </div>

        <div class="backend-info-barqquette">
            <label for="">Prix</label>
            <input type="text" id="prix_barquette_tre" name="prix_barquette_tre" value="<?php echo get_option('prix_barquette_tre'); ?>" />
        </div>

        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('emporterpage_formule_tre'); ?>" alt="" class="backend-img-buffet">
        </div>

        <div class="backend-path-img-buffet">
            <input type="file" name='emporterpage_formule_tre' id='emporterpage_formule_tre' value="<?php echo get_option('emporterpage_formule_tre'); ?>" />
            <p>
                <input type="text" name="" value="<?php echo get_option('emporterpage_formule_tre'); ?>" />
            </p>
        </div>
    </div><!-- / .backend-item-barquette -->

    <?php
} // END => field_emporterpage_barquette_buffet
