
<!-- START section 5 : buffet-emporter -->
<section id="buffet-emporter" class="container">
    <div class="box-titre">
        <h1 class="titre-section">Buffet à emporter</h1>
        <p>faites votre choix dans les entrées et plats préparés</p>
    </div>

    <div class="row">
        <div class="col-md-7 col-12 box-left">
            <ul>

                    <!-- item-takeaway -->
                <li class="item-taykeaway" style="background-image: url(<?php echo get_template_directory_uri().'/img/ruban-v2.png' ?>);">
                    <div class="row">
                        <div class="col-4 box-taykeaway">
                            <img src="<?php echo get_option('emporterpage_formule_uno'); ?>" alt="">
                        </div>

                        <div class="col-3 box-txt">
                            <p><?php echo get_option('txt_barquette_uno'); ?></p>
                        </div>

                        <div class="col-2 box-prix">
                            <p><?php echo get_option('prix_barquete_uno'); ?></p>
                        </div>
                    </div>

                </li><!-- /.item-takeaway -->

                <!-- item-takeaway -->
                <li class="item-taykeaway" style="background-image: url(<?php echo get_template_directory_uri().'/img/ruban-v2.png' ?>);">
                    <div class="row">
                        <div class="col-4 box-taykeaway">
                            <img src="<?php echo get_option('emporterpage_formule_due'); ?>" alt="">
                        </div>

                        <div class="col-3 box-txt">
                            <p><?php echo get_option('txt_barquette_due'); ?></p>
                        </div>

                        <div <div class="col-2 box-prix">
                            <p><?php echo get_option('prix_barquette_due'); ?></p>
                        </div>
                    </div>

                </li><!-- /.item-takeaway -->

                <!-- item-takeaway -->
                <li class="item-taykeaway" style="background-image: url(<?php echo get_template_directory_uri().'/img/ruban-v2.png' ?>);">
                    <div class="row">
                        <div class="col-4 box-taykeaway">
                            <img src="<?php echo get_option('emporterpage_formule_tre'); ?>" alt="">
                        </div>

                        <div class="col-3 box-txt">
                            <p><?php echo get_option('txt_barquette_tre'); ?></p>
                        </div>

                        <div <div class="col-2 box-prix">
                            <p><?php echo get_option('prix_barquette_tre'); ?></p>
                        </div>
                    </div>

                </li><!-- /.item-takeaway -->
            </ul>
        </div><!-- /.box-left -->
        <div class="col-md-5 box-right">
            <img src="<?php echo get_option('emporter_buffet_avatar'); ?>" alt="">
        </div><!-- /.box-right -->
    </div><!-- /.row -->

</section><!-- / #emporter-emporter .container -->
