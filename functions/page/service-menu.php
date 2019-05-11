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
            * Option 1 : table-riz
            * Option 2 : fondu
        IV - FIELD CALLBACK

*/


/* ----------------------------------------------------------------------------- */
/* I - ADD MENU PAGE */
/* ----------------------------------------------------------------------------- */

// initialisation de la page ---------------------------------------------------
add_action('admin_menu', 'add_page_sercive_menu');


// construire la page ----------------------------------------------------------
function add_page_sercive_menu(){

    // Menu 1er niveau
    add_menu_page(
        'Service menu',                            // page_title
        'Service menu',                            // menu_title
        'manage_options',                           // capability
        'table-riz',                               // slug_menu
        'theme_page_sercive_menu',                    // function qui rendra la sortie
        'dashicons-welcome-widgets-menus',                                         // icon
        102                                         // position
    );
} // END ==> add_page_sercive_menu

// TAB : créer un tableau dynamique
function tabs_sercive_menu(){
    $tabs = array(
        'table-riz' => 'Table de riz',
        'fondu' => 'Fondue chinoise'
    );
    return apply_filters('tabs_sercive_menu', $tabs);
} // END ==>  tabs_sercive_menu

/* ----------------------------------------------------------------------------- */
/* II - THEME PAGE */
/* ----------------------------------------------------------------------------- */

// PAGE 1er NIVEAU -----------------------------
function theme_page_sercive_menu(){

    // TABS
    $tabs = tabs_sercive_menu();
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
                        <a href="?page=table-riz&tab=<?php echo $key; ?>" class="nav-tab<?php echo $class; ?>">
                            <?php echo $value; ?>
                        </a>
                        <?php
                    }
                }
                ?>
            </h2><!-- / .nav-tab-wrapper -->


                <form class="service-menu"  method="post" action="options.php" enctype="multipart/form-data">

                    <?php

                    if($_GET['tab'] == 'fondu'){
                        ?>
                        <h3>Fondue chinoisee</h3>
                        <!-- <div class=""> -->
                            <?php settings_fields( 'group-fondu' );?>
                            <?php do_settings_sections( 'fondu' ); ?>
                        <!-- </div> -->
                        <?php
                    } else {
                        ?>
                        <h3 class="wp-heading-inline">Table de riz</h3>
                        <!-- <div class="form-custom"> -->
                            <?php settings_fields( 'group-table-riz' );?>
                            <?php do_settings_sections( 'table-riz' ); ?>
                        <!-- </div> -->
                        <?php
                    }

                    ?>

                    <?php submit_button(); ?>
                </form><!-- / .form-custom -->


        </div>
    </div><!-- / .wrap -->


    <?php

} // END ==> theme_page_sercive_menu


/* ----------------------------------------------------------------------------- */
/* III - SETTING SECTION AND FIED */
/* ----------------------------------------------------------------------------- */

// initialisation des paramattre -----------------------------------------------
add_action('admin_init', 'custom_settings_sercive_menu');


// contruire des paramettres ---------------------------------------------------
function custom_settings_sercive_menu(){

    // Option 1 -- INFO-RESTO --------------------------------------------------
    require get_template_directory().'/functions/page/custom-settings/menu-table-riz.php';

    // Option 2 -- HORAIRE -----------------------------------------------------
    require get_template_directory().'/functions/page/custom-settings/menu-fondu.php';

} // END ==> custom_settings_sercive_menu



/* ----------------------------------------------------------------------------- */
/* IV - FIELD CALLBACK
/* ----------------------------------------------------------------------------- */

// Option 1 -- INFO-RESTO ------------------------------------------------------
require get_template_directory().'/functions/page/view-form/menu-table-riz.php';

// Option 2 -- HORAIRE ---------------------------------------------------------
require get_template_directory().'/functions/page/view-form/menu-fondu.php';
