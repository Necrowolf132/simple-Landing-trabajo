<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/04/18
 * Time: 03:03 PM
 */ ?>

<?php  get_header(); ?>

    <div class="container mt-5 pt-5">
        <div class="row mt-3 mb-3 pt-3 pt-md-5 pb-md-5 mt-md-5 mb-md-5">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() && $varContador <= 3 ) : the_post(); ?>
                    <div class="col-12 col-md-12 col-lg-12 mb-5 mb-lg-0">
                        <div class="card tarjetas-promo">
                            <div class="card-body">
                                <h4 class="card-title"><?php the_title(); ?></h4>
                                <h5 style="font-size: 0.8rem">Categiria:<?php the_category(',');?> | Fecha: <?php echo get_the_date(); ?></h5>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>


<?php
get_footer();
?>