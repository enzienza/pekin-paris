<?php

/*
Name:   Option Pékin - Paris
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
            * Option 1 : page-accueil
            * Option 2 : page-buffet
            * Option 3 : page-carte
            * Option 4 : page-emporter
            * Option 5 : page-event
            * Option 6 : page-contact
        IV - FIELD CALLBACK

*/


/* ----------------------------------------------------------------------------- */
/* I - ADD MENU PAGE */
/* ----------------------------------------------------------------------------- */

// initialisation de la page ---------------------------------------------------
add_action('admin_menu', 'add_page_option_theme');


// construire la page ----------------------------------------------------------
function add_page_option_theme(){

    // Menu 2e niveau
    add_submenu_page(
        'info-resto',                              // slug parent
        'Option Theme',                            // page_title
        'Option Theme',                            // menu_title
        'manage_options',                           // capability
        'option_theme',                            // slug_menu
        'theme_page_option_theme'                    // function qui rendra la sortie
    );
} // END ==> add_page_option_theme

// TAB : créer un tableau dynamique
function tabs_option_theme(){
    $tabs = array(
        'page-accueil'   => 'Page accueil',
        'page-buffet'    => 'Page buffet',
        'page-carte'     => 'Page à la carte',
        'page-emporter'  => 'Page emporter',
        'page-event'     => 'Page évenement',
        'page-contact'   => 'Page contact'
    );
    return apply_filters('tabs_option_theme', $tabs);
} // END ==>  tabs_option_theme

/* ----------------------------------------------------------------------------- */
/* II - THEME PAGE */
/* ----------------------------------------------------------------------------- */

// PAGE 2e NIVEAU -----------------------------
function theme_page_option_theme(){

    // TABS
    $tabs = tabs_option_theme();
    $current = sanitize_text_field($_GET['tab']);

    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">Options thème Pékin-Paris</h1>
        <p class="description"></p>
        <div>
            <h2 class="nav-tab-wrapper">
                <?php
                if(!empty($tabs)){
                    foreach($tabs as $key => $value){
                        $class = ( $key == $current ) ? ' nav-tab-active' : '';
                        ?>
                        <a href="?page=option_theme&tab=<?php echo $key; ?>" class="nav-tab<?php echo $class; ?>">
                            <?php echo $value; ?>
                        </a>
                        <?php
                    }
                }
                ?>
            </h2><!-- / .nav-tab-wrapper -->


                <form class=""  method="post" action="options.php" enctype="multipart/form-data">

                    <?php

                    if($_GET['tab'] == 'page-buffet'){
                        ?>
                        <h3 class="wp-heading-inline">Page Buffet</h3>
                        <div class="form-custom">
                            <?php settings_fields( 'group-page-buffet' );?>
                            <?php do_settings_sections( 'page-buffet' ); ?>
                        </div><!-- / .form-custom -->
                        <?php

                    } elseif($_GET['tab'] == 'page-carte'){
                        ?>
                            <h3 class="wp-heading-inline">Page service à la carte</h3>
                            <div class="form-custom" >
                                <?php settings_fields( 'group-page-carte' );?>
                                <?php do_settings_sections( 'page-carte' ); ?>
                            </div><!-- / .form-custom -->
                        <?php

                    } elseif($_GET['tab'] == 'page-emporter'){
                        ?>
                            <h3 class="wp-heading-inline">Page à emporter</h3>
                            <div class="form-custom" >
                                <?php settings_fields( 'group-page-emporter' );?>
                                <?php do_settings_sections( 'page-emporter' ); ?>
                            </div><!-- / .form-custom -->
                        <?php

                    } elseif($_GET['tab'] == 'page-event'){
                        ?>
                            <h3 class="wp-heading-inline">Page des évènements</h3>
                            <div class="form-custom" >
                                <?php settings_fields( 'group-page-event' );?>
                                <?php do_settings_sections( 'page-event' ); ?>
                            </div><!-- / .form-custom -->
                        <?php

                    } elseif($_GET['tab'] == 'page-contact'){
                        ?>
                            <h3 class="wp-heading-inline">Page de contact</h3>
                            <div class="form-custom" >
                                <?php settings_fields( 'group-page-contact' );?>
                                <?php do_settings_sections( 'page-contact' ); ?>
                            </div><!-- / .form-custom -->
                        <?php

                    } else {
                        ?>
                        <h3 class="wp-heading-inline">Page Accueil</h3>
                        <div class="form-custom">
                            <?php settings_fields( 'group-page-accueil' );?>
                            <?php do_settings_sections( 'page-accueil' ); ?>
                        </div><!-- / .form-custom -->
                        <?php
                    }

                    ?>

                    <?php submit_button(); ?>
                </form>


        </div>
    </div><!-- / .wrap -->
    <?php
}


/* ----------------------------------------------------------------------------- */
/* III - SETTING SECTION AND FIED */
/* ----------------------------------------------------------------------------- */

// initialisation des paramattre -----------------------------------------------
add_action('admin_init', 'custom_settings_option_theme');


// contruire des paramettres ---------------------------------------------------
function custom_settings_option_theme(){

    // Option 1 -- page-accueil ------------------------------------------------
    require get_template_directory().'/functions/page/custom-settings/page-accueil.php';

    // Option 2 -- page-buffet  ------------------------------------------------
    require get_template_directory().'/functions/page/custom-settings/page-buffet.php';

    // Option 3 -- page-carte  -------------------------------------------------
    require get_template_directory().'/functions/page/custom-settings/page-carte.php';

    // Option 4 -- page-emporter  ----------------------------------------------
    require get_template_directory().'/functions/page/custom-settings/page-emporter.php';

    // Option 5 -- page-event  -------------------------------------------------
    require get_template_directory().'/functions/page/custom-settings/page-event.php';

    // Option 6 -- page-contact  -----------------------------------------------
    require get_template_directory().'/functions/page/custom-settings/page-contact.php';


} // END => custom_settings_option_theme


/* ----------------------------------------------------------------------------- */
/* IV - FIELD CALLBACK
/* ----------------------------------------------------------------------------- */

// Option 1 -- page-accueil ----------------------------------------------------
require get_template_directory().'/functions/page/view-form/page-accueil.php';

// Option 2 -- page-buffet  ----------------------------------------------------
require get_template_directory().'/functions/page/view-form/page-buffet.php';

// Option 3 -- page-carte  -----------------------------------------------------
require get_template_directory().'/functions/page/view-form/page-carte.php';

// Option 4 -- page-emporter  --------------------------------------------------
require get_template_directory().'/functions/page/view-form/page-emporter.php';

// Option 5 -- page-event  -----------------------------------------------------
require get_template_directory().'/functions/page/view-form/page-event.php';

// Option 6 -- page-contact  ---------------------------------------------------
require get_template_directory().'/functions/page/view-form/page-contact.php';
