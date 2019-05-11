<?php get_header(); ?>

<main role="main">

    <section id="page-accueil" class="bg-cover">


        <!-- START : BG-Video  -  Si bg-video cocher -->
        <?php if(checked(1, get_option('homepage_affiche_video'), false)){ ?>

            <video autoplay loop id="video-background" poster="<?php echo get_template_directory_uri().'/img/accueil.png' ?>" muted>
                <source src="<?php echo get_option('homepage_file_video'); ?>" type="video/mp4">
            </video>

            <div class="container">
                <?php if(checked(1, get_option('affiche_logo'), false)){ ?>
                    <div class="logo-center">
                        <img src="<?php echo get_option('logo_resto'); ?>" alt="Pékin-Paris Buffet à volonté, buffet wok">
                    </div>
                <?php } ?>


                <div class="row button-accueil">

                    <!-- Si btn-buffet cocher -->
                    <?php if(checked(1, get_option('btn_buffet_hidden'), false)){ ?>
                        <div class="col-md-6 col-12 btn-left">
                            <a href="<?php echo get_option('btn_buffet_url'); ?>" class="">

                                <img src="<?php echo get_option('homepage_btn_img_buffet'); ?>" class="inm-circle" alt="">
                                <p class="btn-txt"><?php echo get_option('btn_buffet_txt'); ?></p>
                            </a>
                        </div>
                    <?php } ?>

                    <!-- SI btn-carte cocher -->
                    <?php if(checked(1, get_option('btn_carte_hidden'), false)){ ?>
                        <div class="col-md-6 col-12 btn-right">
                            <a href="<?php echo get_option('btn_carte_url'); ?>" class="">

                                <img src="<?php echo get_option('homepage_btn_img_carte'); ?>" class="inm-circle" alt="">
                                <p class="btn-txt"><?php echo get_option('btn_carte_txt'); ?></p>
                            </a>
                        </div>
                    <?php } ?>

                </div><!-- /.button-accueil -->

                <div class="homepage-info-contact">
                    <ul>
                        <li class="info-accueil">
                            <span class="icons flaticon-placeholder"></span>
                            <p><?php echo get_option('inforesto_adresse'); ?></p>
                        </li><!-- /.info-accueil -->
                        <li class="info-accueil separation">
                            <p> | </p>
                        </li>
                        <li class="info-accueil">
                            <span class="icons flaticon-phone-call"></span>
                            <p><?php echo get_option('inforesto_phone'); ?></p>
                        </li><!-- /.info-accueil -->
                    </ul>
                </div><!-- /.homepage-info-contact -->

            </div><!-- /.container -->

        <?php } ?>


        <!-- START : BG-Image   -   Si bg-image cocher -->
        <?php if(checked(1, get_option('homepage_affiche_img'), false)){ ?>
            <div class="img-cover">
                <img src="<?php echo get_option('homepage_bg_img'); ?>" alt="">
            </div><!-- .img-cover -->

            <div class="container">


                <?php if(checked(1, get_option('affiche_logo'), false)){ ?>

                    <div class="logo-center">
                        <img src="<?php echo get_option('logo_resto'); ?>" alt="Pékin-Paris Buffet à volonté, buffet wok">
                    </div>
                <?php } ?>

                <div class="row button-accueil">

                    <!-- Si btn-buffet cocher -->
                    <?php if(checked(1, get_option('btn_buffet_hidden'), false)){ ?>
                        <div class="col-md-6 col-12 btn-left">
                            <a href="<?php echo get_option('btn_buffet_url'); ?>" class="">

                                <img src="<?php echo get_option('homepage_btn_img_buffet'); ?>" class="inm-circle" alt="">
                                <p class="btn-txt"><?php echo get_option('btn_buffet_txt'); ?></p>
                            </a>
                        </div>
                    <?php } ?>

                    <!-- SI btn-carte cocher -->
                    <?php if(checked(1, get_option('btn_carte_hidden'), false)){ ?>
                        <div class="col-md-6 col-12 btn-right">
                            <a href="<?php echo get_option('btn_carte_url'); ?>" class="">

                                <img src="<?php echo get_option('homepage_btn_img_carte'); ?>" class="inm-circle" alt="">
                                <p class="btn-txt"><?php echo get_option('btn_carte_txt'); ?></p>
                            </a>
                        </div>
                    <?php } ?>

                </div><!-- /.button-accueil -->

                <div class="homepage-info-contact">
                    <ul>
                        <li class="info-accueil">
                            <span class="icons flaticon-placeholder"></span>
                            <p><?php echo get_option('inforesto_adresse'); ?></p>
                        </li><!-- /.info-accueil -->
                        <li class="info-accueil separation">
                            <p> | </p>
                        </li>
                        <li class="info-accueil">
                            <span class="icons flaticon-phone-call"></span>
                            <p><?php echo get_option('inforesto_phone'); ?></p>
                        </li><!-- /.info-accueil -->
                    </ul>
                </div><!-- /.homepage-info-contact -->

            <?php } ?>

        </div><!-- / .container -->

    </section><!-- /#page-accueil -->

</main>

<div style="display:none;">
    <?php get_footer(); ?>
</div>
