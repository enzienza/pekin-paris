<section id="test" class="container">


    <div class="cards">

        <!-- START : SANS boissons -->
        <div class="card card-tarif [ is-collapsed ] ">
            <h3 class="text-center">Sans boissons</h3>
            <div class="card-body">
                <h4>La formule comprend :</h4>
                <ul>
                    <!-- item-drink-apero -->
                    <?php if(checked(1, get_option('sans_apero'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                            <span class="info-formule">1 Apéritif par personne</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                            <span class="info-formule nope">--</span>
                        </li><!-- / .item-drink -->
                    <?php } ?>

                    <!-- item-drink-vin -->
                    <?php if(checked(1, get_option('sans_vin'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                            <span class="info-formule">1/2l de vin par personne</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                            <span class="info-formule nope">--</span>
                        </li><!-- / .item-drink -->
                    <?php } ?>

                    <!-- item-drink-soft -->
                    <?php if(checked(1, get_option('sans_soft'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                            <span class="info-formule">Soft à volonter</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                            <span class="info-formule nope">--</span>
                        </li><!-- / .item-drink -->
                    <?php } ?>

                    <!-- item-drink-cafe -->
                    <?php if(checked(1, get_option('sans_cafe'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                            <span class="info-formule">Thé ou Café</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                            <span class="info-formule nope">--</span>
                        </li><!-- / .item-drink -->
                    <?php } ?>

                    <!-- item-drink-digestif -->
                    <?php if(checked(1, get_option('sans_digestif'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                            <span class="info-formule">1 digestif par personne</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                            <span class="info-formule nope">--</span>
                        </li>
                    <?php } ?>
                </ul>
            </div><!-- / .card-body -->

            <div class="card__inner [ js-expander ]">
                Tarif
            </div><!-- .btn-tarif -->

            <div class="card__expander">
                <i class="fa fa-close [ js-collapser ]"></i>

                <div class="row box-formule">
                    <div class="col-md-4 col-12 box-info">
                        <h3 class="titre-formule">Sans boisson</h3>
                        <div class="">
                            <h4>La formule comprend :</h4>
                            <ul>
                                <!-- item-drink-apero -->
                                <?php if(checked(1, get_option('sans_apero'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                        <span class="info-formule">1 Apéritif par personne</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                        <span class="info-formule nope">--</span>
                                    </li><!-- / .item-drink -->
                                <?php } ?>

                                <!-- item-drink-vin -->
                                <?php if(checked(1, get_option('sans_vin'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                        <span class="info-formule">1/2l de vin par personne</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                        <span class="info-formule nope">--</span>
                                    </li><!-- / .item-drink -->
                                <?php } ?>

                                <!-- item-drink-soft -->
                                <?php if(checked(1, get_option('sans_soft'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                        <span class="info-formule">Soft à volonter</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                        <span class="info-formule nope">--</span>
                                    </li><!-- / .item-drink -->
                                <?php } ?>

                                <!-- item-drink-cafe -->
                                <?php if(checked(1, get_option('sans_cafe'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                        <span class="info-formule">Thé ou Café</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                        <span class="info-formule nope">--</span>
                                    </li><!-- / .item-drink -->
                                <?php } ?>

                                <!-- item-drink-digestif -->
                                <?php if(checked(1, get_option('sans_digestif'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                        <span class="info-formule">1 digestif par personne</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                        <span class="info-formule nope">--</span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 box-info">
                        <h3 class="titre-formule">Tarif du midi</h3>
                        <table class="table-tarif">
                            <tbody>
                                <!-- tarif-day : lundi -->
                                <tr class="tarif-day">
                                    <td class="jour">Lundi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_lundi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_lundi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : mardi -->
                                <tr class="tarif-day">
                                    <td class="jour">Mardi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_mardi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_mardi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : mercredi -->
                                <tr class="tarif-day">
                                    <td class="jour">Mercredi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_mercredi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_mercredi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : jeudi -->
                                <tr class="tarif-day">
                                    <td class="jour">Jeudi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_jeudi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_jeudi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : vendredi -->
                                <tr class="tarif-day">
                                    <td class="jour">Vendredi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_vendredi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_vendredi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : samedi -->
                                <tr class="tarif-day">
                                    <td class="jour">Samedi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_samedi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_samedi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : dimanche -->
                                <tr class="tarif-day">
                                    <td class="jour">Dimanche</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_dimanche_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_dimanche_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->
                            </tbody>
                        </table><!-- / .table-tarif -->
                    </div>
                    <div class="col-md-4 col-12 box-info">
                        <h3 class="titre-formule">Tarif du Soir</h3>
                        <table class="table-tarif">
                            <tbody>
                                <!-- tarif-day : lundi -->
                                <tr class="tarif-day">
                                    <td class="jour">Lundi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_lundi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_lundi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : mardi -->
                                <tr class="tarif-day">
                                    <td class="jour">Mardi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_mardi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_mardi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : mercredi -->
                                <tr class="tarif-day">
                                    <td class="jour">Mercredi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_mercredi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_mercredi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : jeudi -->
                                <tr class="tarif-day">
                                    <td class="jour">Jeudi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_jeudi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_jeudi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : vendredi -->
                                <tr class="tarif-day">
                                    <td class="jour">Vendredi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_vendredi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_vendredi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : samedi -->
                                <tr class="tarif-day">
                                    <td class="jour">Samedi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_samedi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_samedi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : dimanche -->
                                <tr class="tarif-day">
                                    <td class="jour">Dimanche</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('sans_dimanche_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('sans_dimanche_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->
                            </tbody>
                        </table><!-- / .table-tarif -->
                    </div>
                </div>
            </div><!-- /.card__expander -->

        </div><!-- / .card.card-tarif | SANS boissons -->

        <!-- START : AVEC boissons -->
        <div class="card card-tarif [ is-collapsed ] ">
            <h3 class="text-center">Avec boissons</h3>
            <div class="card-body">
                <h4>La formule comprend :</h4>
                <ul>
                    <!-- item-drink-apero -->
                    <?php if(checked(1, get_option('avec_apero'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                            <span class="info-formule">1 Apéritif par personne</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                            <span class="info-formule nope">--</span>
                        </li><!-- / .item-drink -->
                    <?php } ?>

                    <!-- item-drink-vin -->
                    <?php if(checked(1, get_option('avec_vin'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                            <span class="info-formule">1/2l de vin par personne</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                            <span class="info-formule nope">--</span>
                        </li><!-- / .item-drink -->
                    <?php } ?>

                    <!-- item-drink-soft -->
                    <?php if(checked(1, get_option('avec_soft'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                            <span class="info-formule">Soft à volonter</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                            <span class="info-formule nope">--</span>
                        </li><!-- / .item-drink -->
                    <?php } ?>

                    <!-- item-drink-cafe -->
                    <?php if(checked(1, get_option('avec_cafe'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                            <span class="info-formule">Thé ou Café</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                            <span class="info-formule nope">--</span>
                        </li><!-- / .item-drink -->
                    <?php } ?>

                    <!-- item-drink-digestif -->
                    <?php if(checked(1, get_option('avec_digestif'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                            <span class="info-formule">1 digestif par personne</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                            <span class="info-formule nope">--</span>
                        </li>
                    <?php } ?>
                </ul>
            </div><!-- / .card-body -->

            <div class="card__inner [ js-expander ]">
                Tarif
            </div><!-- .btn-tarif -->

            <div class="card__expander">
                <i class="fa fa-close [ js-collapser ]"></i>

                <div class="row box-formule">
                    <div class="col-md-4 col-12 box-info">
                        <h3 class="titre-formule">avec boisson</h3>
                        <div class="">
                            <h4>La formule comprend :</h4>
                            <ul>
                                <!-- item-drink-apero -->
                                <?php if(checked(1, get_option('avec_apero'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                        <span class="info-formule">1 Apéritif par personne</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                        <span class="info-formule nope">--</span>
                                    </li><!-- / .item-drink -->
                                <?php } ?>

                                <!-- item-drink-vin -->
                                <?php if(checked(1, get_option('avec_vin'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                        <span class="info-formule">1/2l de vin par personne</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                        <span class="info-formule nope">--</span>
                                    </li><!-- / .item-drink -->
                                <?php } ?>

                                <!-- item-drink-soft -->
                                <?php if(checked(1, get_option('avec_soft'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                        <span class="info-formule">Soft à volonter</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                        <span class="info-formule nope">--</span>
                                    </li><!-- / .item-drink -->
                                <?php } ?>

                                <!-- item-drink-cafe -->
                                <?php if(checked(1, get_option('avec_cafe'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                        <span class="info-formule">Thé ou Café</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                        <span class="info-formule nope">--</span>
                                    </li><!-- / .item-drink -->
                                <?php } ?>

                                <!-- item-drink-digestif -->
                                <?php if(checked(1, get_option('avec_digestif'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                        <span class="info-formule">1 digestif par personne</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                        <span class="info-formule nope">--</span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 box-info">
                        <h3 class="titre-formule">Tarif du midi</h3>
                        <table class="table-tarif">
                            <tbody>
                                <!-- tarif-day : lundi -->
                                <tr class="tarif-day">
                                    <td class="jour">Lundi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_lundi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_lundi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : mardi -->
                                <tr class="tarif-day">
                                    <td class="jour">Mardi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_mardi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_mardi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : mercredi -->
                                <tr class="tarif-day">
                                    <td class="jour">Mercredi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_mercredi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_mercredi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : jeudi -->
                                <tr class="tarif-day">
                                    <td class="jour">Jeudi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_jeudi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_jeudi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : vendredi -->
                                <tr class="tarif-day">
                                    <td class="jour">Vendredi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_vendredi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_vendredi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : samedi -->
                                <tr class="tarif-day">
                                    <td class="jour">Samedi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_samedi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_samedi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : dimanche -->
                                <tr class="tarif-day">
                                    <td class="jour">Dimanche</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_dimanche_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_dimanche_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->
                            </tbody>
                        </table><!-- / .table-tarif -->
                    </div>
                    <div class="col-md-4 col-12 box-info">
                        <h3 class="titre-formule">Tarif du Soir</h3>
                        <table class="table-tarif">
                            <tbody>
                                <!-- tarif-day : lundi -->
                                <tr class="tarif-day">
                                    <td class="jour">Lundi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_lundi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_lundi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : mardi -->
                                <tr class="tarif-day">
                                    <td class="jour">Mardi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_mardi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_mardi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : mercredi -->
                                <tr class="tarif-day">
                                    <td class="jour">Mercredi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_mercredi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_mercredi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : jeudi -->
                                <tr class="tarif-day">
                                    <td class="jour">Jeudi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_jeudi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_jeudi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : vendredi -->
                                <tr class="tarif-day">
                                    <td class="jour">Vendredi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_vendredi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_vendredi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : samedi -->
                                <tr class="tarif-day">
                                    <td class="jour">Samedi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_samedi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_samedi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : dimanche -->
                                <tr class="tarif-day">
                                    <td class="jour">Dimanche</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('avec_dimanche_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('avec_dimanche_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->
                            </tbody>
                        </table><!-- / .table-tarif -->
                    </div>
                </div>
            </div><!-- /.card__expander -->

        </div><!-- / .card.card-tarif | AVEC boissons -->

        <!-- START : FULL boissons -->
        <div class="card card-tarif [ is-collapsed ] ">
            <h3 class="text-center">Full boissons</h3>
            <div class="card-body">
                <h4>La formule comprend :</h4>
                <ul>
                    <!-- item-drink-apero -->
                    <?php if(checked(1, get_option('full_apero'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                            <span class="info-formule">1 Apéritif par personne</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                            <span class="info-formule nope">--</span>
                        </li><!-- / .item-drink -->
                    <?php } ?>

                    <!-- item-drink-vin -->
                    <?php if(checked(1, get_option('full_vin'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                            <span class="info-formule">1/2l de vin par personne</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                            <span class="info-formule nope">--</span>
                        </li><!-- / .item-drink -->
                    <?php } ?>

                    <!-- item-drink-soft -->
                    <?php if(checked(1, get_option('full_soft'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                            <span class="info-formule">Soft à volonter</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                            <span class="info-formule nope">--</span>
                        </li><!-- / .item-drink -->
                    <?php } ?>

                    <!-- item-drink-cafe -->
                    <?php if(checked(1, get_option('full_cafe'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                            <span class="info-formule">Thé ou Café</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                            <span class="info-formule nope">--</span>
                        </li><!-- / .item-drink -->
                    <?php } ?>

                    <!-- item-drink-digestif -->
                    <?php if(checked(1, get_option('full_digestif'), false)){ ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                            <span class="info-formule">1 digestif par personne</span>
                        </li><!-- / .item-drink -->
                    <?php } else { ?>
                        <li class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                            <span class="info-formule nope">--</span>
                        </li>
                    <?php } ?>
                </ul>
            </div><!-- / .card-body -->

            <div class="card__inner [ js-expander ]">
                Tarif
            </div><!-- .btn-tarif -->

            <div class="card__expander">
                <i class="fa fa-close [ js-collapser ]"></i>

                <div class="row box-formule">
                    <div class="col-md-4 col-12 box-info">
                        <h3 class="titre-formule">full boisson</h3>
                        <div class="">
                            <h4>La formule comprend :</h4>
                            <ul>
                                <!-- item-drink-apero -->
                                <?php if(checked(1, get_option('full_apero'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                        <span class="info-formule">1 Apéritif par personne</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                        <span class="info-formule nope">--</span>
                                    </li><!-- / .item-drink -->
                                <?php } ?>

                                <!-- item-drink-vin -->
                                <?php if(checked(1, get_option('full_vin'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                        <span class="info-formule">1/2l de vin par personne</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                        <span class="info-formule nope">--</span>
                                    </li><!-- / .item-drink -->
                                <?php } ?>

                                <!-- item-drink-soft -->
                                <?php if(checked(1, get_option('full_soft'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                        <span class="info-formule">Soft à volonter</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                        <span class="info-formule nope">--</span>
                                    </li><!-- / .item-drink -->
                                <?php } ?>

                                <!-- item-drink-cafe -->
                                <?php if(checked(1, get_option('full_cafe'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                        <span class="info-formule">Thé ou Café</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                        <span class="info-formule nope">--</span>
                                    </li><!-- / .item-drink -->
                                <?php } ?>

                                <!-- item-drink-digestif -->
                                <?php if(checked(1, get_option('full_digestif'), false)){ ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                        <span class="info-formule">1 digestif par personne</span>
                                    </li><!-- / .item-drink -->
                                <?php } else { ?>
                                    <li class="item-drink">
                                        <img src="<?php echo get_template_directory_uri().'/img/icon/icon-nope-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                        <span class="info-formule nope">--</span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 box-info">
                        <h3 class="titre-formule">Tarif du midi</h3>
                        <table class="table-tarif">
                            <tbody>
                                <!-- tarif-day : lundi -->
                                <tr class="tarif-day">
                                    <td class="jour">Lundi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_lundi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_lundi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : mardi -->
                                <tr class="tarif-day">
                                    <td class="jour">Mardi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_mardi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_mardi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : mercredi -->
                                <tr class="tarif-day">
                                    <td class="jour">Mercredi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_mercredi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_mercredi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : jeudi -->
                                <tr class="tarif-day">
                                    <td class="jour">Jeudi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_jeudi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_jeudi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : vendredi -->
                                <tr class="tarif-day">
                                    <td class="jour">Vendredi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_vendredi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_vendredi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : samedi -->
                                <tr class="tarif-day">
                                    <td class="jour">Samedi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_samedi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_samedi_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : dimanche -->
                                <tr class="tarif-day">
                                    <td class="jour">Dimanche</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_dimanche_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_dimanche_midi'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->
                            </tbody>
                        </table><!-- / .table-tarif -->
                    </div>
                    <div class="col-md-4 col-12 box-info">
                        <h3 class="titre-formule">Tarif du Soir</h3>
                        <table class="table-tarif">
                            <tbody>
                                <!-- tarif-day : lundi -->
                                <tr class="tarif-day">
                                    <td class="jour">Lundi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_lundi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_lundi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : mardi -->
                                <tr class="tarif-day">
                                    <td class="jour">Mardi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_mardi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_mardi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : mercredi -->
                                <tr class="tarif-day">
                                    <td class="jour">Mercredi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_mercredi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_mercredi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : jeudi -->
                                <tr class="tarif-day">
                                    <td class="jour">Jeudi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_jeudi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_jeudi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : vendredi -->
                                <tr class="tarif-day">
                                    <td class="jour">Vendredi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_vendredi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_vendredi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : samedi -->
                                <tr class="tarif-day">
                                    <td class="jour">Samedi</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_samedi_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_samedi_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->

                                <!-- tarif-day : dimanche -->
                                <tr class="tarif-day">
                                    <td class="jour">Dimanche</td>
                                    <!-- item-drink -->
                                    <?php if(checked(1, get_option('full_dimanche_fermer'), false)){ ?>
                                        <td class="prix"> - </td>
                                    <?php } else { ?>
                                        <td class="prix"><?php echo get_option('full_dimanche_soir'); ?> €</td>
                                    <?php } ?>
                                </tr><!-- / .tarif-day -->
                            </tbody>
                        </table><!-- / .table-tarif -->
                    </div>
                </div>
            </div><!-- /.card__expander -->

        </div><!-- / .card.card-tarif | FULL boissons -->

    </div><!-- /.cards -->



</section>
