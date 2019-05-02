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
                'posts_per_page' => 4,
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
                'posts_per_page' => 4,
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


                            <!-- start : service-1 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC1_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC1_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC1_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC1_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC1_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC1_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC1_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC1_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC1_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC1_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC1_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC1_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC1_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC1_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC1_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC1_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC1_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC1_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC1_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC1_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC1_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC1_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC1_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC1_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC1_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC1_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC1_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC1_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC1_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC1_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC1_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service-2 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC2_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC2_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC2_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC2_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC2_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC2_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC2_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC2_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC2_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC2_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC2_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC2_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC2_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC2_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC2_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC2_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC2_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC2_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC2_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC2_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC2_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC2_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC2_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC2_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC2_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC2_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC2_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC2_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC2_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC2_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC2_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service-3 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC3_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC3_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC3_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC3_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC3_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC3_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC3_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC3_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC3_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC3_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC3_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC3_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC3_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC3_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC3_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC3_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC3_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC3_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC3_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC3_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC3_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC3_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC3_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC3_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC3_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC3_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC3_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC3_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC3_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC3_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC3_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service-4 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC4_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC4_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC4_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC4_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC4_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC4_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC4_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC4_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC4_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC4_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC4_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC4_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC4_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC4_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC4_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC4_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC4_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC4_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC4_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC4_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC4_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC4_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC4_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC4_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC4_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC4_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC4_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC4_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC4_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC4_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC4_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service-5 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC5_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC5_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC5_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC5_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC5_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC5_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC5_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC5_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC5_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC5_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC5_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC5_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC5_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC5_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC5_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC5_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC5_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC5_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC5_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC5_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC5_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC5_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC5_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC5_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC5_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC5_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC5_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC5_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC5_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC5_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC5_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service-6 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC6_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC6_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC6_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC6_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC6_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC6_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC6_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC6_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC6_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC6_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC6_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC6_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC6_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC6_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC6_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC6_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC6_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC6_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC6_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC6_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC6_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC6_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC6_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC6_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC6_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC6_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC6_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC6_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC6_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC6_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC6_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service-7 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC7_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC7_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC7_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC7_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC7_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC7_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC7_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC7_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC7_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC7_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC7_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC7_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC7_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC7_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC7_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC7_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC7_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC7_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC7_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC7_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC7_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC7_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC7_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC7_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC7_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC7_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC7_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC7_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC7_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC7_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC7_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service-8 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC8_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC8_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC8_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC8_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC8_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC8_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC8_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC8_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC8_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC8_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC8_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC8_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC8_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC8_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC8_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC8_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC8_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC8_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC8_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC8_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC8_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC8_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC8_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC8_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC8_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC8_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC8_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC8_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC8_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC8_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC8_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service 9 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC9_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC9_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC9_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC9_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC9_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC9_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC9_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC9_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC9_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC9_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC9_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC9_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC9_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC9_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC9_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC9_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC9_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC9_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC9_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC9_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC9_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC9_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC9_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC9_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC9_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC9_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC9_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC9_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC9_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC9_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC9_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service 10 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC10_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC10_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC10_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC10_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC10_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC10_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC10_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC10_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC10_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC10_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC10_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC10_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC10_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC10_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC10_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC10_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC10_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC10_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC10_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC10_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC10_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC10_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC10_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC10_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC10_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC10_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC10_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC10_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC10_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC10_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC10_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service 11 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC11_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC11_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC11_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC11_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC11_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC11_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC11_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC11_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC11_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC11_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC11_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC11_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC11_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC11_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC11_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC11_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC11_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC11_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC11_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC11_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC11_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC11_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC11_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC11_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC11_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC11_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC11_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC11_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC11_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC11_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC11_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service 12 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC12_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC12_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC12_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC12_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC12_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC12_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC12_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC12_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC12_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC12_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC12_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC12_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC12_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC12_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC12_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC12_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC12_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC12_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC12_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC12_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC12_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC12_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC12_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC12_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC12_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC12_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC12_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC12_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC12_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC12_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC12_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service 13 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC13_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC13_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC13_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC13_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC13_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC13_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC13_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC13_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC13_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC13_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC13_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC13_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC13_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC13_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC13_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC13_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC13_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC13_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC13_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC13_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC13_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC13_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC13_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC13_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC13_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC13_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC13_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC13_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC13_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC13_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC13_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service 14 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC14_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC14_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC14_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC14_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC14_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC14_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC14_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC14_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC14_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC14_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC14_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC14_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC14_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC14_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC14_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC14_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC14_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC14_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC14_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC14_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC14_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC14_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC14_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC14_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC14_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC14_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC14_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC14_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC14_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC14_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC14_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->

                            <!-- start : service 15 -->
                            <div class="service-1">
                                <h2 class="titre-service"><?php echo get_post_meta($post->ID, 'SC15_titre', true); ?></h2>
                                <table class="table-service">
                                    <!-- ligne 1 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC15_L1_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC15_L1_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC15_L1_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 2 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC15_L2_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC15_L2_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC15_L2_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 3 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC15_L3_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC15_L3_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC15_L3_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 4 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC15_L4_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC15_L4_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC15_L4_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 5 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC15_L5_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC15_L5_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC15_L5_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 6 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC15_L6_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC15_L6_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC15_L6_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 7 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC15_L7_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC15_L7_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC15_L7_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 8 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC15_L8_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC15_L8_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC15_L8_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 9 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC15_L9_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC15_L9_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC15_L9_price', true); ?></td>
                                    </tr>

                                    <!-- ligne 10 -->
                                    <tr class="item-service">
                                        <td class="num"><?php echo get_post_meta($post->ID, 'SC15_L10_numb', true); ?></td>
                                        <td class="nom"><?php echo get_post_meta($post->ID, 'SC15_L10_nom', true); ?></td>
                                        <td class="prix"><?php echo get_post_meta($post->ID, 'SC15_L10_price', true); ?></td>
                                    </tr>

                                </table>
                            </div><!-- / .service-1 -->


                        </div><!-- / # .card .card-menu .col-md-9 .col-12 -->

                    </div><!-- / .row .justify-content-md-center -->

                </div><!-- /.bg-opacity -->
            </div><!-- / #france -->

        <?php endwhile; endif;  wp_reset_postdata(); ?>

    </div><!-- /#myTabContent .tab-content -->
</section><!-- /#carte-content -->
