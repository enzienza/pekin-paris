<?php

/*
Name:   Pékin - Paris
Description: Page settings Theme Pékin
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
    -----    SOMMAIRES    -----

        I- ADD MENU PAGE
        II - THEME PAGE
        III - SETTING SECTION AND FIED
            * Option 1 : info-resto
            * Option 2 : horaire
        IV - FIELD CALLBACK

*/


/* ----------------------------------------------------------------------------- */
/* I - ADD MENU PAGE */
/* ----------------------------------------------------------------------------- */

// initialisation de la page ---------------------------------------------------
add_action('admin_menu', 'add_page_pekinparis');


// construire la page ----------------------------------------------------------
function add_page_pekinparis(){

    // Menu 1er niveau
    add_menu_page(
        'Pékin - Paris',                            // page_title
        'Pékin - Paris',                            // menu_title
        'manage_options',                           // capability
        'info-resto',                               // slug_menu
        'theme_page_pekinparis',                    // function qui rendra la sortie
        '',                                         // icon
        100                                         // position
    );
} // END ==> add_page_pekinparis

// TAB : créer un tableau dynamique
function tabs_pekinparis(){
    $tabs = array(
        'infos-resto' => 'Infos Resto',
        'horaires' => 'Horaires'
    );
    return apply_filters('tabs_pekinparis', $tabs);
} // END ==>  tabs_pekinparis

/* ----------------------------------------------------------------------------- */
/* II - THEME PAGE */
/* ----------------------------------------------------------------------------- */

// PAGE 1er NIVEAU -----------------------------
function theme_page_pekinparis(){

    // TABS
    $tabs = tabs_pekinparis();
    $current = sanitize_text_field($_GET['tab']);

    ?>

    <div class="wrap">
        <h1 class="wp-heading-inline">Pékin-Paris</h1>
        <p class="description"></p>
        <div>
            <h2 class="nav-tab-wrapper">
                <?php
                if(!empty($tabs)){
                    foreach($tabs as $key => $value){
                        $class = ( $key == $current ) ? ' nav-tab-active' : '';
                        ?>
                        <a href="?page=info-resto&tab=<?php echo $key; ?>" class="nav-tab<?php echo $class; ?>">
                            <?php echo $value; ?>
                        </a>
                        <?php
                    }
                }
                ?>
            </h2><!-- / .nav-tab-wrapper -->


                <form class=""  method="post" action="options.php" enctype="multipart/form-data">

                    <?php

                    if($_GET['tab'] == 'horaires'){
                        ?>
                        <h3>Horaire</h3>
                        <div class="">
                            <?php settings_fields( 'group-horaire' );?>
                            <?php do_settings_sections( 'horaires' ); ?>
                        </div>
                        <?php
                    } else {
                        ?>
                        <h3 class="wp-heading-inline">Info Resto</h3>
                        <div class="form-custom">
                            <?php settings_fields( 'group-info-resto' );?>
                            <?php do_settings_sections( 'info-resto' ); ?>
                        </div>
                        <?php
                    }

                    ?>

                    <?php submit_button(); ?>
                </form><!-- / .form-custom -->


        </div>
    </div>


    <?php

} // END ==> theme_page_pekinparis


/* ----------------------------------------------------------------------------- */
/* III - SETTING SECTION AND FIED */
/* ----------------------------------------------------------------------------- */

// initialisation des paramattre -----------------------------------------------
add_action('admin_init', 'custom_settings_pekinparis');


// contruire des paramettres ---------------------------------------------------
function custom_settings_pekinparis(){


    /* ----------------------------------------------------------------------- */
    /* Option 1 -- INFO-RESTO */
    /* ----------------------------------------------------------------------- */
    require get_template_directory().'/functions/page/custom-settings/inforesto.php';


    /* ----------------------------------------------------------------------- */
    /* Option 2 -- HORAIRE */
    /* ----------------------------------------------------------------------- */
    require get_template_directory().'/functions/page/custom-settings/horaire.php';


} // END ==> custom_settings_pekinparis



/* ----------------------------------------------------------------------------- */
/* IV - FIELD CALLBACK
/* ----------------------------------------------------------------------------- */

// Option 1 -- INFO-RESTO ------------------------------------------------------
require get_template_directory().'/functions/page/view-form/inforesto.php';

// Option 2 -- HORAIRE ---------------------------------------------------------
require get_template_directory().'/functions/page/view-form/horaire.php';
