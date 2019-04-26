<!-- START section 4 : carte-content -->


<section id="carte-content" class="container">
    <ul class="nav nav-tabs" >
        <li class="nav-item">
            <a class="nav-link " id="carte-memu" data-toggle="tab" href="#menu" role="tab" aria-controls="menu" aria-selected="true">
                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" style="width: 21px; height 21px;">
                <p>Menu</p>
            </a>
        </li><!-- /.nav-item -->

        <!-- ICI region repete ==> get_post_meta -->
        <li class="nav-item">
            <a class="nav-link " id="france-tab" data-toggle="tab" href="#france" role="tab" aria-controls="france" aria-selected="true">
                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" style="width: 21px; height 21px;">
                <p>france</p>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " id="tahi-tab" data-toggle="tab" href="#thai" role="tab" aria-controls="thai" aria-selected="true">
                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" style="width: 21px; height 21px;">
                <p>thai</p>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " id="chinois-tab" data-toggle="tab" href="#chinois" role="tab" aria-controls="chinois" aria-selected="true">
                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" style="width: 21px; height 21px;">
                <p>chinois</p>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " id="maison-tab" data-toggle="tab" href="#maison" role="tab" aria-controls="maison" aria-selected="true">
                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" style="width: 21px; height 21px;">
                <p>specialite maison</p>
            </a>
        </li>

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

        <div class="tab-pane fade" id="france" role="tabpanel" aria-labelledby="france-tab" style="background-color:beige;">
            <div class="bg-opacity">
                <h1 class="titre-section">france</h1>
                <div class="row justify-content-md-center">
                    <div id="" class="card card-menu col-md-9 col-12">
                        <h1>Hello word</h1>
                    </div><!-- / # .card .card-menu .col-md-9 .col-12 -->

                </div><!-- / .row .justify-content-md-center -->

            </div><!-- /.bg-opacity -->
        </div><!-- / #france -->


        <div class="tab-pane fade" id="thai" role="tabpanel" aria-labelledby="thai-tab" style="background-color:aqua;">
            <div class="bg-opacity">
                <h1 class="titre-section">thai</h1>
                <div class="row justify-content-md-center">
                    <div id="" class="card card-menu col-md-9 col-12">
                        <h1>Hello word</h1>
                    </div><!-- / # .card .card-menu .col-md-9 .col-12 -->

                </div><!-- / .row .justify-content-md-center -->

            </div><!-- /.bg-opacity -->
        </div><!-- / #thai -->


        <div class="tab-pane fade" id="chinois" role="tabpanel" aria-labelledby="chinois-tab" style="background-color:lime;">
            <div class="bg-opacity">
                <h1 class="titre-section">chinois</h1>
                <div class="row justify-content-md-center">
                    <div id="" class="card card-menu col-md-9 col-12">
                        <h1>Hello word</h1>
                    </div><!-- / # .card .card-menu .col-md-9 .col-12 -->

                </div><!-- / .row .justify-content-md-center -->

            </div><!-- /.bg-opacity -->
        </div><!-- / #chinois -->

        <div class="tab-pane fade" id="maison" role="tabpanel" aria-labelledby="maison-tab" style="background-color:pink;">
            <div class="bg-opacity">
                <h1 class="titre-section">specialite maison</h1>
                <div class="row justify-content-md-center">
                    <div id="" class="card card-menu col-md-9 col-12">
                        <h1>Hello word</h1>
                    </div><!-- / # .card .card-menu .col-md-9 .col-12 -->

                </div><!-- / .row .justify-content-md-center -->

            </div><!-- /.bg-opacity -->
        </div><!-- / #maison -->


    </div><!-- /#myTabContent .tab-content -->
</section><!-- /#carte-content -->
