<?php get_header(); ?>

<section id="erreur" class="bg-cover">

    <?php if(checked(1, get_option('page404_affiche_img'), false)){ ?>
        <div class="img-cover">
            <img src="<?php echo get_option('page404_bg_img'); ?>" alt="">
        </div><!-- .img-cover -->

    <?php } ?>


    <div class="container">
        <?php if(checked(1, get_option('affiche_logo'), false)){ ?>
            <div class="logo-center">
                <img src="<?php echo get_option('logo_resto'); ?>" alt="Pékin-Paris Buffet à volonté, buffet wok">
            </div><!-- /.logo-center -->
        <?php } ?>
        <div class="row msg-error">
            <div class="col-md-5 col 12 mgs-left">

                <?php if(checked(1, get_option('page404_affiche_avatar'), false)){ ?>
                    <div class="msg-avatar">
                        <img src="<?php echo get_option('page404_avatar_msg'); ?>" alt="">
                    </div>
                <?php } ?>
            </div><!-- /.mgs-left -->

            <div class="col-md-7 col-12 msg-right">
                <h2 class="titre-error">
                    <?php echo get_option('avatar_msg_h1'); ?>
                </h2>
                <p class="txt-error">
                    <?php echo get_option('avatar_msg_txt'); ?>
                </p>



                <div class="btn-homepage">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-outline-light">
                        Retour page d'accueil
                    </a>
                </div>
            </div><!-- /.msg-right -->
        </div><!-- /.msg-error -->




    </div><!-- /.container -->
</section><!-- /#erreur -->

<div style="display:none;">
    <?php get_footer(); ?>
</div>
