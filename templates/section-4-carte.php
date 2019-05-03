<!-- START section 4 : carte-content -->


<section id="carte-content" class="container">
    <ul class="nav nav-tabs" >
        <li class="nav-item">
            <a class="nav-link active" id="carte-memu" data-toggle="tab" href="#menu" role="tab" aria-controls="menu" aria-selected="true">
                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="">
                <p>Menu</p>
            </a>
        </li><!-- /.nav-item -->

        <!-- ICI region repete ==> cartes -->
        <?php
            wp_reset_postdata();

            $args = array(
                'post_type'      => 'cartes',
                'posts_per_page' => -1,
                'orderby'        => 'id',
                'order'          => 'ASC'
            );
            $my_query = new WP_query($args);
            if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();


            //echo get_post_meta($post->ID, 'slug_carte', true);
            // id => ...-tab
            // href => #...
            // aria-controls

         ?>

            <li class="nav-item">
                <a class="nav-link " id="<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>-tab" data-toggle="tab" href="#<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>" role="tab" aria-controls="<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>" aria-selected="true">
                    <img src="<?php echo get_post_meta($post->ID, 'icon-carte', true); ?>" alt="">
                    <p><?php the_title(); ?></p>
                </a>
            </li>

        <?php endwhile; endif;  wp_reset_postdata(); ?>
        <!-- FIN region repete -->


    </ul><!-- /.nav .nav-tabs -->

    <div class="tab-content" id="myTabContent">

        <div id="menu" class="tab-pane fade show active" role="tabpanel" aria-labelledby="carte-memu" style="background-image:url(<?php echo get_option('tableriz_img_bg'); ?>);">
            <div class="bg-opacity">
                <h1 class="titre-section">Menu</h1>

                <div class="row justify-content-md-center">

                    <div id="table-riz" class="card card-menu col-md-9 col-12">

                        <!-- stat : titre -->
                        <div class="titre-card">
                            <h1>Table de riz</h1>
                        </div><!-- /.titre -->

                        <!-- stat :  info-menu-->
                        <div class="info-menu">
                            <p class="prix"><?php echo get_option('tableriz_prix'); ?></p>
                            <ul>
                                <li>Prix par personnne</li>
                                <li>Minimum <?php echo get_option('tableriz_couvert'); ?> couvert</li>
                            </ul>
                        </div><!-- /.info-menu -->

                        <!-- stat : service-1 -->
                        <div class="service-1">
                            <h2 class="titre-service"><?php echo get_option('tableriz_S1_titre_titre'); ?></h2>
                            <p class="content-servive"><?php echo get_option('tableriz_S1_titre_txt'); ?></p>
                        </div><!-- / .service-1 -->

                        <!-- stat : service-2 -->
                        <div class="service-2">
                            <h2 class="titre-service"><?php echo get_option('tableriz_service_deux_titre'); ?></h2>
                            <div class="content-servive">
                                <ul>
                                    <li class="item-choix"><?php echo get_option('tableriz_service_deux_choice_one'); ?></li>
                                    <li class="item-choix"><?php echo get_option('tableriz_service_deux_choice_two'); ?></li>
                                    <li class="item-choix"><?php echo get_option('tableriz_service_deux_choice_three'); ?></li>
                                    <li class="item-choix"><?php echo get_option('tableriz_service_deux_choice_four'); ?></li>
                                </ul>
                            </div>
                        </div><!-- / .service-2 -->

                        <!-- stat : service-3 -->
                        <div class="service-3">
                            <h2 class="titre-service"><?php echo get_option('tableriz_service_trois_titre'); ?></h2>
                            <div class="content-servive">
                                <ul>
                                    <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_one'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_two'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_three'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_four'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('tableriz_service_trois_plat_five'); ?></li>
                                </ul>
                            </div>
                        </div><!-- / .service-3 -->

                        <!-- stat : service-4 -->
                        <div class="service-4">
                            <h2 class="titre-service"><?php echo get_option('tableriz_service_quatre_titre'); ?></h2>
                            <p class="content-servive"><?php echo get_option('tableriz_service_quatre_txt'); ?></p>
                        </div><!-- / .service-4 -->

                    </div><!-- / #table-riz .card .card-menu .col-md-9 .col-12 -->

                    <div id="fondu-chinoise" class="card card-menu col-md-9 col-12">

                        <!-- stat : titre -->
                        <div class="titre-card">
                            <h1>Fondu chinoise</h1>
                        </div><!-- /.titre -->

                        <!-- stat :  info-menu-->
                        <div class="info-menu">
                            <p class="prix"><?php echo get_option('fondu_prix'); ?></p>
                            <ul>
                                <li>Prix par personnne</li>
                                <li>Minimum <?php echo get_option('fondu_couvert'); ?> couvert</li>
                            </ul>
                        </div><!-- /.info-menu -->

                        <!-- stat : service-1 -->
                        <div class="service-1">
                            <h2 class="titre-service"><?php echo get_option('fondu_S1_titre_titre'); ?></h2>
                            <div class="content-servive">
                                <ul>
                                    <li class="item-choix"><?php echo get_option('fondu_S1_titre_choice_one'); ?></li>
                                    <li class="item-choix"><?php echo get_option('fondu_S1_titre_choice_two'); ?></li>
                                </ul>
                            </div>
                        </div><!-- / .service-1 -->

                        <!-- stat : service-2 -->
                        <div class="service-2">
                            <h2 class="titre-service"><?php echo get_option('fondu_service_deux_titre'); ?></h2>
                            <div class="content-servive">
                                <ul>
                                    <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_one'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_two'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_three'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_four'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_five'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_six'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_seven'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_eight'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_nine'); ?></li>
                                    <li class="item-specialite"><?php echo get_option('fondu_service_deux_plat_ten'); ?></li>
                                </ul>
                            </div>
                        </div><!-- / .service-2 -->

                        <!-- stat : service-3 -->
                        <div class="service-3">
                            <h2 class="titre-service"><?php echo get_option('fondu_service_tre_titre'); ?></h2>
                            <div class="content-servive">
                                <?php echo get_option('fondu_service_tre_txt'); ?>
                            </div>
                        </div><!-- / .service-3 -->



                    </div><!-- / #table-riz .card .card-menu .col-md-9 .col-12 -->

                </div><!-- / .row .justify-content-md-center -->

            </div><!-- /.bg-opacity -->
        </div><!-- / #menu . tab-pane .fade .show .active-->

        <!-- ICI region retete -->
        <?php
            wp_reset_postdata();

            $args = array(
                'post_type'      => 'cartes',
                'posts_per_page' => -1,
                'orderby'        => 'id',
                'order'          => 'ASC'
            );
            $my_query = new WP_query($args);
            if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
         ?>

            <div class="tab-pane fade" id="<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>" role="tabpanel" aria-labelledby="<?php echo get_post_meta($post->ID, 'slug_carte', true); ?>-tab" style="background-image: url(<?php echo get_post_meta($post->ID, 'bg-carte', true); ?>);">
                <div class="bg-opacity">
                    <h1 class="titre-section"><?php the_title(); ?></h1>
                    <div class="row justify-content-md-center">
                        <div id="" class="card card-carte col-md-9 col-12">


                            <?php // start : service 1 ------------
                                $display = get_post_meta( $post->ID,'display_one_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_one_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                                $repeat_one_services = get_post_meta($post->ID, 'repeat_one_services', true);
                                                foreach ($repeat_one_services as $field) :

                                                    ?>
                                                        <tr class="item-service">
                                                            <td class="num"><?php echo $field['numb_one_service']; ?></td>
                                                            <td class="nom"><?php echo $field['name_one_service']; ?></td>
                                                            <td class="prix"><?php echo $field['price_one_service'];  ?></td>
                                                        </tr>
                                                    <?php
                                                endforeach;
                                             ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-2 ------------
                                $display = get_post_meta( $post->ID,'display_two_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_two_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_two_services = get_post_meta($post->ID, 'repeat_two_services', true);
                                            foreach ($repeat_two_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_two_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_two_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_two_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-3 ------------
                                $display = get_post_meta( $post->ID,'display_three_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_three_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_three_services = get_post_meta($post->ID, 'repeat_three_services', true);
                                            foreach ($repeat_three_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_three_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_three_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_three_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-4 ------------
                                $display = get_post_meta( $post->ID,'display_four_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_four_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_four_services = get_post_meta($post->ID, 'repeat_four_services', true);
                                            foreach ($repeat_four_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_four_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_four_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_four_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-5 ------------
                                $display = get_post_meta( $post->ID,'display_five_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_five_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_five_services = get_post_meta($post->ID, 'repeat_five_services', true);
                                            foreach ($repeat_five_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_five_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_five_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_five_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-6 ------------
                                $display = get_post_meta( $post->ID,'display_six_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_six_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_six_services = get_post_meta($post->ID, 'repeat_six_services', true);
                                            foreach ($repeat_six_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_six_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_six_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_six_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-7 ------------
                                $display = get_post_meta( $post->ID,'display_seven_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_seven_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_seven_services = get_post_meta($post->ID, 'repeat_seven_services', true);
                                            foreach ($repeat_seven_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_seven_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_seven_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_seven_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-8 ------------
                                $display = get_post_meta( $post->ID,'display_eight_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_eight_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_eight_services = get_post_meta($post->ID, 'repeat_eight_services', true);
                                            foreach ($repeat_eight_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_eight_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_eight_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_eight_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-9 ------------
                                $display = get_post_meta( $post->ID,'display_nine_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_nine_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_nine_services = get_post_meta($post->ID, 'repeat_nine_services', true);
                                            foreach ($repeat_nine_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_nine_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_nine_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_nine_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-10 ------------
                                $display = get_post_meta( $post->ID,'display_ten_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_ten_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_ten_services = get_post_meta($post->ID, 'repeat_ten_services', true);
                                            foreach ($repeat_ten_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_ten_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_ten_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_ten_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-11 ------------
                                $display = get_post_meta( $post->ID,'display_eleven_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_eleven_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_eleven_services = get_post_meta($post->ID, 'repeat_eleven_services', true);
                                            foreach ($repeat_eleven_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_eleven_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_eleven_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_eleven_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-12 ------------
                                $display = get_post_meta( $post->ID,'display_twelve_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_twelve_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_twelve_services = get_post_meta($post->ID, 'repeat_twelve_services', true);
                                            foreach ($repeat_twelve_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_twelve_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_twelve_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_twelve_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-13 ------------
                                $display = get_post_meta( $post->ID,'display_thirteen_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_thirteen_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_thirteen_services = get_post_meta($post->ID, 'repeat_thirteen_services', true);
                                            foreach ($repeat_thirteen_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_thirteen_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_thirteen_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_thirteen_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-14 ------------
                                $display = get_post_meta( $post->ID,'display_fourteen_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_fourteen_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_fourteen_services = get_post_meta($post->ID, 'repeat_fourteen_services', true);
                                            foreach ($repeat_fourteen_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_fourteen_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_fourteen_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_fourteen_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                            <?php // start : service-15 ------------
                                $display = get_post_meta( $post->ID,'display_fifteen_service',true );
                                if ($display == "oui") {
                            ?>
                                <div class="service">
                                    <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'titre_fifteen_service', true); ?></h2>
                                    <table class="table-service">

                                        <tbody>
                                            <?php
                                            $repeat_fifteen_services = get_post_meta($post->ID, 'repeat_fifteen_services', true);
                                            foreach ($repeat_fifteen_services as $field) :

                                                ?>
                                                <tr class="item-service">
                                                    <td class="num"><?php echo $field['numb_fifteen_service']; ?></td>
                                                    <td class="nom"><?php echo $field['name_fifteen_service']; ?></td>
                                                    <td class="prix"><?php echo $field['price_fifteen_service'];  ?></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                            ?>
                                        </tbody>

                                    </table>
                                </div><!-- / .service-1 -->
                            <?php } elseif ($display == "non") { ?>
                                <div class="" style="visibility: hidden;"></div>
                            <?php } ?>


                        </div><!-- / # .card .card-menu .col-md-9 .col-12 -->

                    </div><!-- / .row .justify-content-md-center -->

                </div><!-- /.bg-opacity -->
            </div><!-- / #france -->

        <?php endwhile; endif;  wp_reset_postdata(); ?>

    </div><!-- /#myTabContent .tab-content -->
</section><!-- /#carte-content -->
