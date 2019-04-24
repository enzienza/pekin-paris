<?php

/*
Name:   Page formule buffet
Description: Page pour gérer les différente formule du buffet
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.2
*/


/* ----------------------------------------------------------------------------- */
/* ADD MENU PAGE */
/* ----------------------------------------------------------------------------- */

// initialisation de la page ---------------------------------------------------
add_action('admin_menu', 'add_page_formule_buffet');


// construire la page ----------------------------------------------------------
function add_page_formule_buffet(){

    // Menu 1er niveau
    add_menu_page(
        'Formules Buffet',                             // page_title
        'Formules Buffet',                             // menu_title
        'manage_options',                       // capability
        'formule-sans-boissons',                // slug_menu
        'theme_page_formule_buffet',            // function qui rendra la sortie
        'dashicons-admin-page',                 // icon
        100                                     // position
    );
} // END => add_page_formule_buffet

// TAB : créer un tableau dynamique
function tabs_formule_buffet(){
    $tabs = array(
        'formule-sans-boissons' => 'Sans Boissons',
        'formule-avec-boissons' => 'Avec Boissons',
        'formule-full-boissons'	=> 'Full Boissons'
    );
    return apply_filters('tabs_formule_buffet', $tabs);
} // END =>  tabs_formule_buffet

/* ----------------------------------------------------------------------------- */
/* THEME PAGE */
/* ----------------------------------------------------------------------------- */

// PAGE 1er NIVEAU -------------------------------------------------------------
function theme_page_formule_buffet(){

    // TABS
    $tabs = tabs_formule_buffet();
    $current = sanitize_text_field($_GET['tab']);

    ?>

    <div class="wrap">
        <h1 class="wp-heading-inline">Formules Buffet</h1>
        <p class="description"></p>
        <div>
            <h2 class="nav-tab-wrapper">
                <?php
                if(!empty($tabs)){
                    foreach($tabs as $key => $value){
                        $class = ( $key == $current ) ? ' nav-tab-active' : '';
                        ?>
                        <a href="?page=formule-sans-boissons&tab=<?php echo $key; ?>" class="nav-tab<?php echo $class; ?>">
                            <?php echo $value; ?>
                        </a>
                        <?php
                    }
                }
                ?>
            </h2><!-- / .nav-tab-wrapper -->


            <form class=""  method="post" action="options.php">

                <?php

                    if($_GET['tab'] == 'formule-avec-boissons'){
                        ?>
                            <h3>Buffet avec boissons</h3>
                            <div class="" >
                                <?php settings_fields( 'group-avec-boissons' );?>
                                <?php do_settings_sections( 'formule-avec-boissons' ); ?>
                            </div>
                        <?php
                    } elseif($_GET['tab'] == 'formule-full-boissons'){
                        ?>
                            <h3>Buffet full boissons</h3>
                            <div class="" >
                                <?php settings_fields( 'group-full-boissons' );?>
                                <?php do_settings_sections( 'formule-full-boissons' ); ?>
                            </div>
                        <?php
                    } else {
                        ?>
                        <h3>Buffet sans boissons</h3>
                        <div class="" >
                            <?php settings_fields( 'group-sans-boissons' );?>
                            <?php do_settings_sections( 'formule-sans-boissons' ); ?>
                        </div>
                        <?php
                    }

                 ?>

                <?php submit_button(); ?>
            </form><!-- / -->


        </div>
    </div><!-- / .wrap -->

    <?php

} // END => theme_page_formule_buffet


/* ----------------------------------------------------------------------------- */
/* III - SETTING SECTION AND FIED */
/* ----------------------------------------------------------------------------- */

// initialisation des paramattre -----------------------------------------------
add_action('admin_init', 'custom_settings_formule_buffet');


// contruire des paramettres ---------------------------------------------------
function custom_settings_formule_buffet(){

    // Option 1 -- formules-sans-boisson ---------------------------------------
    require get_template_directory().'/functions/page/custom-settings/formule-sans-boissons.php';

    // Option 2 -- formules-avec-boisson ---------------------------------------
    require get_template_directory().'/functions/page/custom-settings/formule-avec-boissons.php';

    // Option 3 -- formules-full-boisson ---------------------------------------
    require get_template_directory().'/functions/page/custom-settings/formule-full-boissons.php';

} // END => custom_settings_formule_buffet

/* ----------------------------------------------------------------------------- */
/* IV - FIELD CALLBACK
/* ----------------------------------------------------------------------------- */

// Option 1 -- formules-sans-boisson ---------------------------------------
require get_template_directory().'/functions/page/view-form/formule-sans-boissons.php';

// Option 2 -- formules-avec-boisson ---------------------------------------
require get_template_directory().'/functions/page/view-form/formule-avec-boissons.php';

// Option 3 -- formules-full-boisson ---------------------------------------
require get_template_directory().'/functions/page/view-form/formule-full-boissons.php';
