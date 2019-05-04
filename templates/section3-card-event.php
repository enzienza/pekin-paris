
<!-- START section 3 : carte-event -->
<section id="section-event" class="container">
    <div class="row">

        <!-- DEBUT : region repeter -->
        <?php
            wp_reset_postdata();

            $args = array(
                'post_type'      => 'evenements',    // nom du CPT
                'posts_per_page' => -1,              // limite
                'orderby'        => 'id',
                'order'          => 'ASC'
            );
            $my_query = new WP_query($args);
            if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
        ?>

        <div class="card card-event hovered">
            <div class="img-event">
                <?php the_post_thumbnail(); ?>
            </div><!-- / -->

            <div class="card-body">
                <h3 class="card-title"><?php the_title(); ?></h3>
                <ul class="info-event">
                    <li class="date">
                        <?php $date = get_post_meta($post->ID, 'date_event', true); if($date != ''){echo date_i18n("j M Y", strtotime($date));} ?>
                        <span>/</span>
                    </li>
                    <li class="heure">
                        <?php echo get_post_meta($post->ID, 'heure_event', true); ?>
                    </li>
                </ul>
                <div class="btn-event">
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-light">
                        Voir détail
                    </a>
                </div>
            </div>

        </div><!-- /.col-md-4 .col-12 .card .card-event .hovered -->


        <?php endwhile; endif;  wp_reset_postdata(); ?>
        <!-- FIN : Region repeter -->

    </div><!-- /.row -->
</section><!-- /#section-event -->
