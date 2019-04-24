<?php get_header(); ?>

<main role="main">

    <section id="page-accueil" class="bg-cover">

        <!-- Si bg-video cocher -->
        <?php
            // SI homepage_affiche_video EST COCHE
            // => Alors on affiche la video en background

            if(checked(1, get_option('homepage_affiche_video'), false)){
                ?>

                   <video  autoplay loop id="video-background" poster="<?php echo get_template_directory_uri().'/img/accueil.png' ?>" muted>
                        <source src="<?php echo get_option('homepage_file_video'); ?>" type="video/mp4">
                   </video>

                   <div class="container">
                       <?php

                           if(checked(1, get_option('affiche_logo'), false)){
                               ?>

                                   <div class="logo-center">
                                       <img src="<?php echo get_option('logo_resto'); ?>" alt="Pékin-Paris Buffet à volonté, buffet wok">
                                   </div>
                               <?php
                           }

                        ?>

                   </div>

                   <div class="row button-accueil">

                       <!-- Si btn-buffet cocher -->
                       <?php
                           // SI btn_buffet_hidden EST COCHE
                           // => Alors on affiche le bouton

                           if(checked(1, get_option('btn_buffet_hidden'), false)){
                               ?>
                                   <div class="col-md-6 col-12">
                                       <a href="<?php echo get_option('btn_buffet_url'); ?>" class="">
                                           <p><?php echo get_option('btn_buffet_txt'); ?></p>
                                           <img src="<?php echo get_option('homepage_btn_img_buffet'); ?>" alt="">
                                       </a>
                                   </div>
                               <?php
                           }
                        ?>

                       <!-- SI btn-carte cocher -->
                       <?php
                           // SI btn_carte_hidden EST COCHE
                           // => Alors on affiche le bouton

                           if(checked(1, get_option('btn_carte_hidden'), false)){
                               ?>
                                   <div class="col-md-6 col-12">
                                       <a href="<?php echo get_option('btn_carte_txt'); ?>" class="">
                                           <p><?php echo get_option('bnt_carte_url'); ?></p>
                                           <img src="<?php echo get_option('homepage_btn_img_carte'); ?>" alt="">
                                       </a>
                                   </div>
                               <?php
                           }
                        ?>

                   </div>


                <?php
            }
         ?>



        <!-- Si bg-image cocher -->
        <?php
            // SI homepage_affiche_img EST COCHE
            // => Alors on affiche l'image en background

            if(checked(1, get_option('homepage_affiche_img'), false)){
                ?>
                <div class="img-cover">
                    <img src="<?php echo get_option('homepage_bg_img'); ?>" alt="">
                </div><!-- .img-cover -->

                <div class="container">


                    <?php

                        if(checked(1, get_option('affiche_logo'), false)){
                            ?>

                                <div class="logo-center">
                                    <img src="<?php echo get_option('logo_resto'); ?>" alt="Pékin-Paris Buffet à volonté, buffet wok">
                                </div>
                            <?php
                        }

                     ?>

                    <div class="row button-accueil">

                        <!-- Si btn-buffet cocher -->
                        <?php
                            // SI btn_buffet_hidden EST COCHE
                            // => Alors on affiche le bouton

                            if(checked(1, get_option('btn_buffet_hidden'), false)){
                                ?>
                                    <div class="col-md-6 col-12">
                                        <a href="<?php echo get_option('btn_buffet_url'); ?>" class="">
                                            <p><?php echo get_option('btn_buffet_txt'); ?></p>
                                            <img src="<?php echo get_option('homepage_btn_img_buffet'); ?>" alt="">
                                        </a>
                                    </div>
                                <?php
                            }
                         ?>

                        <!-- SI btn-carte cocher -->
                        <?php
                            // SI btn_carte_hidden EST COCHE
                            // => Alors on affiche le bouton

                            if(checked(1, get_option('btn_carte_hidden'), false)){
                                ?>
                                    <div class="col-md-6 col-12">
                                        <a href="<?php echo get_option('btn_carte_txt'); ?>" class="">
                                            <p><?php echo get_option('bnt_carte_url'); ?></p>
                                            <img src="<?php echo get_option('homepage_btn_img_carte'); ?>" alt="">
                                        </a>
                                    </div>
                                <?php
                            }
                         ?>

                    </div>
                <?php
            }
         ?>

        </div><!-- / .container -->

    </section>

</main>

<?php //get_footer(); ?>
