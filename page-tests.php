<?php
/* Template Name: tests */
?>

<?php get_header(); ?>

<!-- START section 1 : cover-page-buffet -->
<?php
    // SI buffetpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('buffetpage_cover_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="cover-page-buffet" class="carousel slide" data-ride="carousel" style="" >
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php if(checked(1, get_option('buffetpage_cover_affiche_img'), false)){ ?>
                    <!-- SI buffetpage_cover_affiche_img EST COCHE => Alors on affiche l'image en background -->
                    <div class="carousel-item active" style="background-image: url(<?php echo get_option('buffetpage_cover_bg_img'); ?>);">
                        <div class="jumbotron">
                            <h1><?php echo get_option('buffetpage_cover_titre'); ?></h1>
                            <p><?php echo get_option('buffetpage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } else { ?>
                    <div class="carousel-item active" style="background-color:#333;">
                        <div class="jumbotron">
                            <h1><?php echo get_option('buffetpage_cover_titre'); ?></h1>
                            <p><?php echo get_option('buffetpage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } ?>

            </div><!-- /.carousel -->
        </section>
        <?php
    }
?>

<!-- START section 2 : section-buffetpage_message -->
<?php
    // SI buffetpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('buffetpage_msg_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="page-buffet-msg" class="container">
            <div class="row justify-content-md-center">
                <div class="card box-msg col-md-8 col-12">
                    <h2><?php echo get_option('buffetpage_msg_titre'); ?></h2>
                    <div class="row">
                        <?php if(checked(1, get_option('buffetpage_msg_affiche_avatar'), false)){ ?>
                            <!-- SI buffetpage_msg_affiche_avatar EST COCHE => Alors on affiche l'avatar -->
                            <div class="col-4">
                                <img src="<?php echo get_option('buffetpage_msg_img_avatar'); ?>" alt="" class="msg-avatar" />
                            </div><!-- /.col-4 -->

                            <div class="col-8">

                                <ul>
                                    <li>
                                        <?php echo(get_option('buffetpage_msg_element_entrefroide')); ?>
                                        <span class="info-element-buffet">entrées froides</span>
                                    </li>
                                    <li>
                                        <?php echo(get_option('buffetpage_msg_element_potage')); ?>
                                        <span class="info-element-buffet">potages</span>
                                    </li>
                                    <li>
                                        <?php echo(get_option('buffetpage_msg_element_entrechaude')); ?>
                                        <span class="info-element-buffet">entrées chaude</span>
                                    </li>
                                    <li>
                                        <?php echo(get_option('buffetpage_msg_element_plats')); ?>
                                        <span>
                                            sortes de plats <br/>
                                            (viandes, volailles, légumes, etc...)
                                        </span class="info-element-buffet">
                                    </li>
                                </ul>

                                <?php if(checked(1, get_option('buffetpage_msn_button'), false)){ ?>
                                     <!-- SI buffetpage_msn_button_img EST COCHE => Alors renvois à la section-tarif-buffet -->
                                    <div class="row justify-content-md-center">
                                        <a href="#section-tarif-buffet" class="btn btn-outline col-9">
                                            Voir nos tarif buffet
                                        </a>
                                    </div>
                                <?php } ?>

                            </div><!-- / .col-5 -->
                        <?php } else { ?>
                            <div class="col-12" style="padding: 0 13rem;">
                                        <ul>
                                            <li>
                                                <?php echo(get_option('buffetpage_msg_element_entrefroide')); ?>
                                                <span class="info-element-buffet">entrées froides</span>
                                            </li>
                                            <li>
                                                <?php echo(get_option('buffetpage_msg_element_potage')); ?>
                                                <span class="info-element-buffet">potages</span>
                                            </li>
                                            <li>
                                                <?php echo(get_option('buffetpage_msg_element_entrechaude')); ?>
                                                <span class="info-element-buffet">entrées chaude</span>
                                            </li>
                                            <li>
                                                <?php echo(get_option('buffetpage_msg_element_plats')); ?>
                                                <span>
                                                    sortes de plats <br/>
                                                    (viandes, volailles, légumes, etc...)
                                                </span class="info-element-buffet">
                                            </li>
                                        </ul>

                                        <?php
                                            // SI buffetpage_msn_button_img EST COCHE
                                            // => Alors renvois à la section-tarif-buffet

                                            if(checked(1, get_option('buffetpage_msn_button'), false)){
                                                ?>
                                                    <div class="row justify-content-md-center">
                                                        <a href="#section-tarif-buffet" class="btn btn-outline col-9">
                                                            Voir nos tarif buffet
                                                        </a>
                                                    </div><!-- /.row .justify-content-md-center -->
                                                <?php
                                            }
                                        ?>
                                    </div><!-- /.col-12 -->
                        <?php } ?>
                    </div><!-- /.row" -->
                </div><!-- /.card .box-msg .col-md-8 .col-12 -->
            </div><!-- /.row .justify-content-md-center -->
        </section><!-- / #page-test-msg -->
        <?php
    }
?>


<!-- START section 3 : section-description-buffet -->
<?php
    // SI buffetpage_desc_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('buffetpage_desc_hidden'), false)) {
        ?><?php
    } else {
        // SINON
        // => Afficher la section
        ?>

        <section id="section-description-buffet" class="container">
            <h2 class="text-center">Description Buffet</h2>
            <div class="row">
                <div class="col-lg-6 col-12 box-left">
                    <div class="description-buffet">
                        <?php echo get_option('buffetpage_desc_txt_content'); ?>
                    </div><!-- ./ description-buffet -->
                </div><!-- ./ box-left -->
                <div class="col-lg-6 col-12 box-right">
                    <div class="row">
                        <div class="col-md-6 col-12 img-buffet">
                            <img src="<?php echo get_option('buffetpage_image_uno'); ?>" alt="">
                        </div>
                        <div class="col-md-6 col-12 img-buffet">
                            <img src="<?php echo get_option('buffetpage_image_due'); ?>" alt="Buffet">
                        </div>
                        <div class="col-md-6 col-12 img-buffet">
                            <img src="<?php echo get_option('buffetpage_image_tre'); ?>" alt="Buffet">
                        </div>
                        <div class="col-md-6 col-12 img-buffet">
                            <img src="<?php echo get_option('buffetpage_image_quattro'); ?>" alt="Buffet">
                        </div>
                    </div>
                </div><!-- ./ box-right -->
            </div><!-- ./ row -->
        </section><!-- ./ section #buffet -->

        <?php
    }
?>















<!-- START section 5 : section-reservation -->
<?php if(checked(1, get_option('buffetpage_reservation_hidden'), false)){ ?>
     <!-- SI buffetpage_reservation_hidden EST COCHE => Alors il n'y a pas de section -->
    <section class="box-phone text-center">
        <h1>Réserver maintenant</h1>
        <p>
            <?php echo get_option('inforesto_phone'); ?>
        </p>

    </section><!-- /  .bg-buffet-->
<?php } ?>

<?php get_footer(); ?>
