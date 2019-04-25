<?php
/* Template Name: tests */
?>

<?php get_header(); ?>

<!-- START section 1 : cover-page-buffet -->
<?php
    // SI buffetpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('buffetpage_cover_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="cover-page-buffet" class="carousel slide" data-ride="carousel" style="" >
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php if(checked(1, get_option('buffetpage_cover_affiche_img'), false)){ ?>
                    <!-- SI buffetpage_cover_affiche_img EST COCHE => Alors on affiche l'image en background -->
                    <div class="carousel-item active" style="background-image: url(<?php echo get_option('buffetpage_cover_bg_img'); ?>);">
                        <div class="jumbotron">
                            <h1><?php echo get_option('buffetpage_cover_titre'); ?></h1>
                            <p><?php echo get_option('buffetpage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } else { ?>
                    <div class="carousel-item active" style="background-color:#333;">
                        <div class="jumbotron">
                            <h1><?php echo get_option('buffetpage_cover_titre'); ?></h1>
                            <p><?php echo get_option('buffetpage_cover_texte'); ?></p>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } ?>

            </div><!-- /.carousel -->
        </section>
        <?php
    }
?>

<!-- START section 2 : section-buffetpage_message -->
<?php
    // SI buffetpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('buffetpage_msg_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="page-buffet-msg" class="container">
            <div class="row justify-content-md-center">
                <div class="card box-msg col-md-8 col-12">
                    <h2><?php echo get_option('buffetpage_msg_titre'); ?></h2>
                    <div class="row">
                        <?php if(checked(1, get_option('buffetpage_msg_affiche_avatar'), false)){ ?>
                            <!-- SI buffetpage_msg_affiche_avatar EST COCHE => Alors on affiche l'avatar -->
                            <div class="col-4">
                                <img src="<?php echo get_option('buffetpage_msg_img_avatar'); ?>" alt="" class="msg-avatar" />
                            </div><!-- /.col-4 -->

                            <div class="col-8">

                                <ul>
                                    <li>
                                        <?php echo(get_option('buffetpage_msg_element_entrefroide')); ?>
                                        <span class="info-element-buffet">entrées froides</span>
                                    </li>
                                    <li>
                                        <?php echo(get_option('buffetpage_msg_element_potage')); ?>
                                        <span class="info-element-buffet">potages</span>
                                    </li>
                                    <li>
                                        <?php echo(get_option('buffetpage_msg_element_entrechaude')); ?>
                                        <span class="info-element-buffet">entrées chaude</span>
                                    </li>
                                    <li>
                                        <?php echo(get_option('buffetpage_msg_element_plats')); ?>
                                        <span>
                                            sortes de plats <br/>
                                            (viandes, volailles, légumes, etc...)
                                        </span class="info-element-buffet">
                                    </li>
                                </ul>

                                <?php if(checked(1, get_option('buffetpage_msn_button'), false)){ ?>
                                     <!-- SI buffetpage_msn_button_img EST COCHE => Alors renvois à la section-tarif-buffet -->
                                    <div class="row justify-content-md-center">
                                        <a href="#section-tarif-buffet" class="btn btn-outline col-9">
                                            Voir nos tarif buffet
                                        </a>
                                    </div>
                                <?php } ?>

                            </div><!-- / .col-5 -->
                        <?php } else { ?>
                            <div class="col-12" style="padding: 0 13rem;">
                                        <ul>
                                            <li>
                                                <?php echo(get_option('buffetpage_msg_element_entrefroide')); ?>
                                                <span class="info-element-buffet">entrées froides</span>
                                            </li>
                                            <li>
                                                <?php echo(get_option('buffetpage_msg_element_potage')); ?>
                                                <span class="info-element-buffet">potages</span>
                                            </li>
                                            <li>
                                                <?php echo(get_option('buffetpage_msg_element_entrechaude')); ?>
                                                <span class="info-element-buffet">entrées chaude</span>
                                            </li>
                                            <li>
                                                <?php echo(get_option('buffetpage_msg_element_plats')); ?>
                                                <span>
                                                    sortes de plats <br/>
                                                    (viandes, volailles, légumes, etc...)
                                                </span class="info-element-buffet">
                                            </li>
                                        </ul>

                                        <?php
                                            // SI buffetpage_msn_button_img EST COCHE
                                            // => Alors renvois à la section-tarif-buffet

                                            if(checked(1, get_option('buffetpage_msn_button'), false)){
                                                ?>
                                                    <div class="row justify-content-md-center">
                                                        <a href="#section-tarif-buffet" class="btn btn-outline col-9">
                                                            Voir nos tarif buffet
                                                        </a>
                                                    </div><!-- /.row .justify-content-md-center -->
                                                <?php
                                            }
                                        ?>
                                    </div><!-- /.col-12 -->
                        <?php } ?>
                    </div><!-- /.row" -->
                </div><!-- /.card .box-msg .col-md-8 .col-12 -->
            </div><!-- /.row .justify-content-md-center -->
        </section><!-- / #page-test-msg -->
        <?php
    }
?>




<section id="merde" class="container" style="height: 100vh; background-color:#fff;">
    <div class="" style="margin: 3rem 0;">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat mi nisl quis eros. Integer ornare libero quis risus fermentum consequat. Mauris pharetra odio sagittis, vulputate magna at, lobortis nulla. Proin efficitur, nisi vel finibus elementum, orci sem volutpat eros, eget ultrices velit mi sagittis massa. Vestibulum sagittis ullamcorper cursus. Ut turpis dolor, tempor ut tellus et, sodales ultricies elit. Ut pharetra tristique est ac dictum. Integer ac consectetur purus, vehicula efficitur urna. Donec ultrices accumsan ipsum vitae faucibus. Quisque malesuada ex nisi, a bibendum erat commodo in. Pellentesque suscipit varius gravida. Nam scelerisque est sit amet laoreet pharetra. Vivamus quis ligula sed lacus mattis mollis. Vivamus facilisis orci rutrum nulla porta dignissim. Fusce fermentum id nibh laoreet volutpat. Suspendisse venenatis, risus sed euismod finibus, risus arcu fringilla augue, nec vulputate felis nisl et enim. In ornare, massa a cursus cursus, nisl mi ornare mauris, nec porttitor risus erat ut odio. Integer malesuada hendrerit purus ullamcorper molestie. Fusce imperdiet orci vitae purus suscipit rutrum..
        </p>
    </div>
</section>


<!-- START section 5 : section-reservation -->
<?php
// SI buffetpage_reservation_hidden EST COCHE
// => Alors il n'y a pas de section

if(checked(1, get_option('buffetpage_reservation_hidden'), false)){
    ?>
    <section class="box-phone text-center">
        <h1>Réserver maintenant</h1>
        <p>
            <?php echo get_option('inforesto_phone'); ?>
        </p>

    </section><!-- /  .bg-buffet-->
    <?php
}
?>

<?php get_footer(); ?>
