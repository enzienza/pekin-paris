<!-- START section 3 : carte-emporter -->
<section id="carte-emporter" class="container">
    <h1 class="titre-section">Carte à emporter</h1>

        <div id="info-carte-emporter" class="row justify-content-md-center">
            <div class="col-md-10 col-12">

                <div class="row info-emporter">
                    <div class="col-5">
                        <img src="<?php echo get_option('emporterpage_info_avatar'); ?>" alt="">
                    </div><!-- /.col-3 -->

                    <div class="col-7">
                        <ul>
                            <li>
                                <strong class="strong-color"><?php echo get_option('emporterpage_promo_reduction'); ?></strong>
                                <span>sur tout les plats à emporter</span>
                            </li>
                            <li>
                                <strong class="strong-color">
                                    <?php echo get_option('emporterpage_promo_offert'); ?> offert
                                </strong>
                                <span>a partir de </span>
                                <span><?php echo get_option('emporterpage_promo_minimum'); ?></span>
                            </li>
                        </ul>
                    </div><!-- /.col-9 -->
                </div>

            </div><!-- /.col-md-10 col-12 -->
        </div><!-- /.row .justify-content-md-center -->


        <div id="type-emporter" class="row justify-content-md-center" style="border: 1px solid red">
            <div class="col-md-10 col-12">
                <div class="row">

                    <div class="col-5 box-entre" style="background-color: azure;">
                        <h2 class="titre-type-emporter">Entrées</h2>

                        <div class="row toolbar mb2 mt2">
                            <!-- START region repete -->

                            <button class="col-3 btn btn-filter fil-cat" data-rel="dim-sum" style="border: 1px solid red;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>Dim Sum</p>
                            </button>

                            <button class="col-3 btn btn-filter fil-cat" data-rel="potage" style="border: 1px solid red;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>Potage</p>
                            </button>

                            <button class="col-3 btn btn-filter fil-cat" data-rel="entre-3" style="border: 1px solid red;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>entre 3</p>
                            </button>

                            <button class="col-3 btn btn-filter fil-cat" data-rel="entre-4" style="border: 1px solid red;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>entre 4</p>
                            </button>

                            <button class="col-3 btn btn-filter fil-cat" data-rel="entre-5" style="border: 1px solid red;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>entre 5</p>
                            </button>

                            <!-- END region repete -->
                        </div>

                    </div><!-- /.col-5 .box-entre -->


                    <div class="col-7 box-plat" style="background-color: aliceblue;">
                        <h2 class="titre-type-emporter">Plats</h2>

                        <div class="row toolbar mb2 mt2">
                            <!-- START region repete -->
                            <button class="col-2 btn btn-filter fil-cat" data-rel="poulet" style="border: 1px solid lime;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>poulet</p>
                            </button>

                            <button class="col-2 btn btn-filter fil-cat" data-rel="canard" style="border: 1px solid lime;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>canard</p>
                            </button>

                            <button class="col-2 btn btn-filter fil-cat" data-rel="plat-3" style="border: 1px solid lime;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>plat 3</p>
                            </button>

                            <button class="col-2 btn btn-filter fil-cat" data-rel="plat-4" style="border: 1px solid lime;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>plat 4</p>
                            </button>

                            <button class="col-2 btn btn-filter fil-cat" data-rel="plat-5" style="border: 1px solid lime;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>plat 5</p>
                            </button>

                            <button class="col-2 btn btn-filter fil-cat" data-rel="plat-6" style="border: 1px solid lime;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>plat 6</p>
                            </button>

                            <button class="col-2 btn btn-filter fil-cat" data-rel="plat-7" style="border: 1px solid lime;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>plat 7</p>
                            </button>

                            <button class="col-2 btn btn-filter fil-cat" data-rel="plat-8" style="border: 1px solid lime;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>plat 8</p>
                            </button>

                            <button class="col-2 btn btn-filter fil-cat" data-rel="plat-9" style="border: 1px solid lime;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>plat 9</p>
                            </button>

                            <button class="col-2 btn btn-filter fil-cat" data-rel="poulet0" style="border: 1px solid lime;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>plat 10</p>
                            </button>

                            <button class="col-2 btn btn-filter fil-cat" data-rel="poulet1" style="border: 1px solid lime;">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="" >
                                <p>plat 11</p>
                            </button>

                            <!-- END region repete -->
                        </div>

                    </div><!-- /.col-7. box-plat -->

                </div><!-- /.row -->
            </div><!-- /.col-md-10 .col-12 -->
            <div id="portfolio" class="col-md-10 col-12">
                <!-- STAR : region repete -->
                <div class="tile scale-anm dim-sum">
                    <div class="row">
                        <div class="col-5 box-titre" style="background-color: azure;">
                            <h2>Dim Sum</h2>
                            <div class="img-choix">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="">
                            </div>
                        </div><!-- /. -->
                        <div class="col-7 box-table" style="background-color: aliceblue;">
                            <table class="table-emporter">
                                <tbody>
                                    <!-- debut foreach -->
                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <!-- end foreach -->
                                </tbody>
                            </table>
                        </div><!-- /. -->

                    </div><!-- /.row -->
                </div><!-- /.col-md-10 .col-12 -->

                <div class="tile scale-anm potage">
                    <div class="row">
                        <div class="col-5 box-titre" style="background-color: azure;">
                            <h2>Potage</h2>
                            <div class="img-choix">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="">
                            </div>
                        </div><!-- /. -->
                        <div class="col-7 box-table" style="background-color: aliceblue;">
                            <table class="table-emporter">
                                <tbody>
                                    <!-- debut foreach -->
                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <!-- end foreach -->
                                </tbody>
                            </table>
                        </div><!-- /. -->

                    </div><!-- /.row -->
                </div><!-- /.col-md-10 .col-12 -->

                <div class="tile scale-anm poulet">
                    <div class="row">
                        <div class="col-5 box-titre" style="background-color: azure;">
                            <h2>Poulet</h2>
                            <div class="img-choix">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="">
                            </div>
                        </div><!-- /. -->
                        <div class="col-7 box-table" style="background-color: aliceblue;">
                            <table class="table-emporter">
                                <tbody>
                                    <!-- debut foreach -->
                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <!-- end foreach -->
                                </tbody>
                            </table>
                        </div><!-- /. -->

                    </div><!-- /.row -->
                </div><!-- /.col-md-10 .col-12 -->

                <div class="tile scale-anm canard">
                    <div class="row">
                        <div class="col-5 box-titre" style="background-color: azure;">
                            <h2>Canard</h2>
                            <div class="img-choix">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/menu.png' ?>" alt="">
                            </div>
                        </div><!-- /. -->
                        <div class="col-7 box-table" style="background-color: aliceblue;">
                            <table class="table-emporter">
                                <tbody>
                                    <!-- debut foreach -->
                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <tr>
                                        <td class="td-numb">00</td>
                                        <td class="td-name">Lorem ipsum dolor sit.</td>
                                        <td class="td-price">5,50€</td>
                                    </tr>

                                    <!-- end foreach -->
                                </tbody>
                            </table>
                        </div><!-- /. -->

                    </div><!-- /.row -->
                </div><!-- /.col-md-10 .col-12 -->




                <!-- END : region repete -->
            </div>


        </div><!-- / #type-emporter -->


</section><!-- /#carte-empporter -->


<section class="container">
    <div class="row justify-content-md-center" style="border: 2px solid lime">
        <div class="col-md-10 col-12">
            <div class="toolbar mb2 mt2">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <!-- <button class="btn fil-cat" href="" data-rel="all">All</button> -->
                        <button class="btn fil-cat" id="web" data-rel="web">Websites</button>
                        <button class="btn fil-cat" id="flyers" data-rel="flyers">Flyers</button>

                    </div>
                    <div class="col-md-7 col-12">
                        <button class="btn fil-cat" id="bcards" data-rel="bcards">Business Cards</button>
                    </div>
                </div>
            </div>


            <div id="portfolio">

                <div class="tile scale-anm web all">
                    <div class="" style="background:pink;">
                        merde
                    </div>
                </div>

                <div class="tile scale-anm bcards all">
                    <div class="" style="background:red;">
                        merde
                    </div>
                </div>

                <div class="tile scale-anm flyers all">
                    <div class="" style="background:lime;">
                        merde
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
