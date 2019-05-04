<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


<!-- START section 1 : cover-page-event -->
<?php
    // SI eventpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('eventpage_cover_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="cover-page-event" class="carousel slide" data-ride="carousel" style="" >
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php if(checked(1, get_option('eventpage_cover_affiche_img'), false)){  ?>
                    <div class="carousel-item active" style="background-image: url(<?php echo get_option('eventpage_cover_bg_img'); ?>);">
                        <div class="jumbotron">
                            <h1><?php the_title(); ?></h1>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php } else {  ?>
                    <div class="carousel-item active" style="background-color:#333;">
                        <div class="jumbotron">
                            <h1><?php the_title(); ?></h1>
                        </div><!-- /.jumbotron -->
                    </div><!-- /.carousel-item .active -->
                <?php  } ?>
            </div><!-- /.carousel -->
        </section>
        <?php
    }
?>


<!-- START section 2 : section-single-event -->
<section id="section-single-event" class="container">
	<?php the_content(); ?>
</section><!-- / #section-single-event -->

<?php endwhile; endif; ?>



<!-- START section 3 : section-reservation -->
<?php
    // SI eventpage_reservation_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('eventpage_reservation_hidden'), false)){
        ?>
        <section class="box-phone text-center">
            <h1>Réserver maintenant</h1>
            <p>
                <?php echo get_option('inforesto_phone'); ?>
            </p>

        </section><!-- /  .bg-event-->
        <?php
    }
?>

<?php get_footer(); ?>
