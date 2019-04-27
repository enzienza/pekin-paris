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
                'posts_per_page' => 5,
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
                            <h2 class="titre-service"><?php echo get_option('tableriz_service_un_titre'); ?></h2>
                            <p class="content-servive"><?php echo get_option('tableriz_service_un_txt'); ?></p>
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
                            <h2 class="titre-service"><?php echo get_option('fondu_service_un_titre'); ?></h2>
                            <div class="content-servive">
                                <ul>
                                    <li class="item-choix"><?php echo get_option('fondu_service_un_choice_one'); ?></li>
                                    <li class="item-choix"><?php echo get_option('fondu_service_un_choice_two'); ?></li>
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
                'posts_per_page' => 5,
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

                            <!-- stat : service-1 -->
                            <div class="service-1">
                                <h2 class="titre-service">Entree</h2>
                                <table class="table-service">
                                    <tr class="item-service">
                                        <td class="num">50</td>
                                        <td class="nom">Lorem ipsum dolor sit.</td>
                                        <td class="prix">10,00€</td>
                                    </tr>
                                    <tr class="item-service">
                                        <td class="num">50</td>
                                        <td class="nom">Lorem ipsum dolor sit.</td>
                                        <td class="prix">10,00€</td>
                                    </tr>
                                    <tr class="item-service">
                                        <td class="num">50</td>
                                        <td class="nom">Lorem ipsum dolor sit.</td>
                                        <td class="prix">10,00€</td>
                                    </tr>
                                    <tr class="item-service">
                                        <td class="num">50</td>
                                        <td class="nom">Lorem ipsum dolor sit.</td>
                                        <td class="prix">10,00€</td>
                                    </tr>
                                </table>
                            </div><!-- / .service-1 -->


                            <!-- stat : service-1 -->
                            <div class="service-1">
                                <h2 class="titre-service">Entree</h2>
                                <table class="table-service">
                                    <tr class="item-service">
                                        <td class="num">50</td>
                                        <td class="nom">Lorem ipsum dolor sit.</td>
                                        <td class="prix">10,00€</td>
                                    </tr>
                                    <tr class="item-service">
                                        <td class="num">50</td>
                                        <td class="nom">Lorem ipsum dolor sit.</td>
                                        <td class="prix">10,00€</td>
                                    </tr>
                                    <tr class="item-service">
                                        <td class="num">50</td>
                                        <td class="nom">Lorem ipsum dolor sit.</td>
                                        <td class="prix">10,00€</td>
                                    </tr>
                                    <tr class="item-service">
                                        <td class="num">50</td>
                                        <td class="nom">Lorem ipsum dolor sit.</td>
                                        <td class="prix">10,00€</td>
                                    </tr>
                                </table>
                            </div><!-- / .service-1 -->


                            <!-- stat : service-1 -->
                            <div class="service-1">
                                <h2 class="titre-service">Entree</h2>
                                <table class="table-service">
                                    <tr class="item-service">
                                        <td class="num">50</td>
                                        <td class="nom">Lorem ipsum dolor sit.</td>
                                        <td class="prix">10,00€</td>
                                    </tr>
                                    <tr class="item-service">
                                        <td class="num">50</td>
                                        <td class="nom">Lorem ipsum dolor sit.</td>
                                        <td class="prix">10,00€</td>
                                    </tr>
                                    <tr class="item-service">
                                        <td class="num">50</td>
                                        <td class="nom">Lorem ipsum dolor sit.</td>
                                        <td class="prix">10,00€</td>
                                    </tr>
                                    <tr class="item-service">
                                        <td class="num">50</td>
                                        <td class="nom">Lorem ipsum dolor sit.</td>
                                        <td class="prix">10,00€</td>
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
