<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/04/18
 * Time: 02:22 PM
 */
    <div class="container">
        <div class="row mt-3 mb-3 pt-3 pt-md-5 pb-md-5 mt-md-5 mb-md-5">
            <?php $varContador = 1; ?>
            <?php if ( have_posts() ) : while ( have_posts() && $varContador <=3 ) : the_post(); ?>
                <?php if ( $varContador == 1 || $varContador == 2 ) {?>
                    <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="card tarjetas-promo">
                            <img class="card-img-top superimagen mx-auto mt-3" src="assets/img/promos.jpg" alt="Mi Imagen">
                            <div class="card-body">
                                <h4 class="card-title"><?php the_title(); ?></h4>
                                <h5>Categiria:<?php the_category(',');?> | Fecha: <?php echo get_the_date(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary mt-4" style="border-radius: 25px; border-color: white; color: white; background: none; font-size: 1.5rem;">Ir a ...</a>
                            </div>
                        </div>
                    </div>
                    <?php} else {?>
                    <div class="col-12 col-md-6 col-lg-4 offset-md-3 offset-lg-0 mb-lg-0">
                        <div class="card tarjetas-promo">
                            <img class="card-img-top superimagen mx-auto mt-3" src="assets/img/promos.jpg" alt="Mi Imagen">
                            <div class="card-body">
                                <h4 class="card-title"><?php the_title(); ?></h4>
                                <h5>Categiria:<?php the_category(',');?> | Fecha: <?php echo get_the_date(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary mt-4" style="border-radius: 25px; border-color: white; color: white; background: none; font-size: 1.5rem;">Ir a ...</a>
                            </div>
                        </div>
                    </div>
                    <?php}?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>