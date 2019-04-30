<?php

/*
Plugin Name: Emporter
Description: Métabox pour la carte à emporter | Tableau Statique | page-emporter
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.11
*/



// Création la Metabox ---------------------------------------------------------

add_action('admin_init', 'add_MB_takeaway');

function add_MB_takeaway(){
    if(function_exists('add_meta_box')){
        add_meta_box(
            'takeaway',             // ID_META_BOX
            'Liste à emporter',     // TITLE_META_BOX
            'MB_render_takeaway',   // CALLBACK
            'post',                 // WP_SCREEN
            'normal',               // CONTEXT [ normal | advanced | side ]
            'default'               // PRIORITY [ hight | core | default | low ]
        );
    }
} // END => add_MB_takeaway


// Construction de la Metabox --------------------------------------------------
function MB_render_takeaway(){

    ?>

        <div class="meta-box-item-title">
            Hello
        </div>

        <div class="meta-box-item-content">
            <input type="text" id="" name="" value="" />
        </div>

    <?php
} // END => MB_render_takeaway



// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_MB_takeaway');

function save_MB_takeaway(){

} // END => save_MB_takeaway
