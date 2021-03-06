<!-- START section 4 : section-tarif-buffet -->
<section id="section-tarif-buffet" class="container">
    <h1 class="text-center">Tarif buffet</h1>

    <!-- start : intro-tarif -->
    <div class="row box-intro-tarif">
        <div class="col-md-7 col-12 box-left">
            <p><?php echo get_option('buffetpage_tarif_txt');?></p>
            <p class="catch"><?php echo get_option('buffetpage_tarif_catch');?></p>
        </div><!-- / .col-md-6 .col-12 .box-left -->
        <div class="col-md-5 col-12 box-right">
            <img src="<?php echo get_option('avatar_tarif');?>" alt="sans boissons, avec boissons, full boisson">
        </div><!-- / .col-md-6 .col-12 .box-right -->
    </div><!-- / .row -->

    <!-- star : card-formule -->
    <div class="row box-formule">
        <!-- START : SANS boissons -->
        <div class="col-md-4 col-12 item-card">
            <div class="card card-tarif">
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
                        <?php } ?>
                    </ul>
                </div><!-- / .card-body -->

                <div class="btn-tarif">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-left collapsed" type="button" data-toggle="collapse" data-target="#tarif_sans_midi" aria-expanded="false" aria-controls="tarif_sans_midi">
                                Midi
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-right collapsed" type="button" data-toggle="collapse" data-target="#tarif_sans_soir" aria-expanded="false" aria-controls="tarif_sans_midi">
                                Soir
                            </button>
                        </div>
                    </div>
                </div><!-- .btn-tarif -->

            </div><!-- / .card.card-tarif -->
        </div><!-- / .col-md-3.col-12 -->

        <!-- START : AVEC boissons -->
        <div class="col-md-4 col-12 item-card">
            <div class="card card-tarif">
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
                            </li><!-- / .item-drink -->
                        <?php } ?>
                    </ul>
                </div><!-- / .card-bo -->

                <div class="btn-tarif">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-left collapsed" type="button" data-toggle="collapse" data-target="#tarif_avec_midi" aria-expanded="false" aria-controls="tarif_avec_midi">
                                Midi
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-right collapsed" type="button" data-toggle="collapse" data-target="#tarif_avec_soir" aria-expanded="false" aria-controls="tarif_avec_midi">
                                Soir
                            </button>
                        </div>
                    </div>
                </div><!-- .btn-tarif -->

            </div><!-- / .card card-tarif -->
        </div><!-- / .col-md-3.col-12.card.card-tarif -->

        <!-- START : FULL boissons -->
        <div class="col-md-4 col-12 item-card">
            <div class="card card-tarif">
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
                            </li><!-- / .item-drink -->
                        <?php } ?>
                    </ul>
                </div><!-- / .card-body -->

                <div class="btn-tarif">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-left collapsed" type="button" data-toggle="collapse" data-target="#tarif_full_midi" aria-expanded="false" aria-controls="tarif_full_midi">
                                Midi
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-right collapsed" type="button" data-toggle="collapse" data-target="#tarif_full_soir" aria-expanded="false" aria-controls="tarif_full_midi">
                                Soir
                            </button>
                        </div>
                    </div>
                </div><!-- .btn-tarif -->

            </div><!-- / .card card-tarif -->
        </div><!-- / .col-md-3.col-12 -->
    </div><!-- / .row -->

    <!-- START : collapse-sans-midi -->
    <div class="collapse" id="tarif_sans_midi">
        <div class="row justify-content-md-center">
          <div class="card card-collapse col-md-7 col-12">
              <div class="row">
                  <div class="col-md-6 col-12 left">
                      <h2 class="titre-collapse">Sans Boissons</h2>
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
                          <?php } ?>
                      </ul>
                  </div><!-- /.left -->

                  <div class="col-md-6 col-12 right">
                      <h2 class="titre-collapse">Tarif du midi</h2>
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
                </div><!-- .right -->
            </div><!-- row -->
        </div><!-- /.card .card-collapse -->
      </div><!-- /.row .justify-content-md-center -->
    </div><!-- / #tarif_sans_midi .collapse -->

    <!-- START : collapse-sans-soir -->
    <div class="collapse" id="tarif_sans_soir">
        <div class="row justify-content-md-center">
          <div class="card card-collapse col-md-7 col-12">
              <div class="row">
                  <div class="col-md-6 col-12 left">
                      <h2 class="titre-collapse">Sans Boissons</h2>
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
                          <?php } ?>
                      </ul>
                  </div><!-- /.left -->

                  <div class="col-md-6 col-12 right">
                      <h2 class="titre-collapse">Tarif du midi</h2>
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
                </div><!-- /.right -->
            </div><!-- /.row -->
        </div><!-- /.card .card-collapse -->
      </div><!-- /.row .justify-content-md-center -->
    </div><!-- #tarif_sans_soir .collapse -->

    <!-- START : collapse-avec-midi -->
    <div class="collapse" id="tarif_avec_midi">
        <div class="row justify-content-md-center">
          <div class="card card-collapse col-md-7 col-12">
              <div class="row">
                  <div class="col-md-6 col-12 left">
                      <h2 class="titre-collapse">Avec Boissons</h2>
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
                          <?php } ?>
                      </ul>
                  </div><!-- /.left -->

                  <div class="col-md-6 col-12 right">
                      <h2 class="titre-collapse">Tarif du midi</h2>
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
                </div><!-- .right -->
            </div><!-- row -->
        </div><!-- /.card .card-collapse -->
      </div><!-- /.row .justify-content-md-center -->
    </div><!-- / #tarif_avec_midi .collapse -->

    <!-- START : collapse-avec-soir -->
    <div class="collapse" id="tarif_avec_soir">
        <div class="row justify-content-md-center">
          <div class="card card-collapse col-md-7 col-12">
              <div class="row">
                  <div class="col-md-6 col-12 left">
                      <h2 class="titre-collapse">Avec Boissons</h2>
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
                          <?php } ?>
                      </ul>
                  </div><!-- /.left -->

                  <div class="col-md-6 col-12 right">
                      <h2 class="titre-collapse">Tarif du midi</h2>
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
                </div><!-- /.right -->
            </div><!-- /.row -->
        </div><!-- /.card .card-collapse -->
      </div><!-- /.row .justify-content-md-center -->
    </div><!-- #tarif_avec_soir .collapse -->

    <!-- START : collapse-full-midi -->
    <div class="collapse" id="tarif_full_midi">
        <div class="row justify-content-md-center">
          <div class="card card-collapse col-md-7 col-12">
              <div class="row">
                  <div class="col-md-6 col-12 left">
                      <h2 class="titre-collapse">Full Boissons</h2>
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
                          <?php } ?>
                      </ul>
                  </div><!-- /.left -->

                  <div class="col-md-6 col-12 right">
                      <h2 class="titre-collapse">Tarif du midi</h2>
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
                </div><!-- .right -->
            </div><!-- row -->
        </div><!-- /.card .card-collapse -->
      </div><!-- /.row .justify-content-md-center -->
    </div><!-- / #tarif_full_midi .collapse -->

    <!-- START : collapse-full-soir -->
    <div class="collapse" id="tarif_full_soir">
        <div class="row justify-content-md-center">
          <div class="card card-collapse col-md-7 col-12">
              <div class="row">
                  <div class="col-md-6 col-12 left">
                      <h2 class="titre-collapse">Full Boissons</h2>
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
                          <?php } ?>
                      </ul>
                  </div><!-- /.left -->

                  <div class="col-md-6 col-12 right">
                      <h2 class="titre-collapse">Tarif du midi</h2>
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
                </div><!-- /.right -->
            </div><!-- /.row -->
        </div><!-- /.card .card-collapse -->
      </div><!-- /.row .justify-content-md-center -->
    </div><!-- #tarif_full_soir .collapse -->

</section><!-- / #section-tarif-buffet -->
