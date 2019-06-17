<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/04/18
 * Time: 03:03 PM
 */ ?>

<?php  get_header(); ?>

<div class="jumbotron jumbotron-fluid fondodemodelo2 mb-0">
    <div class="container">
        <div class="col-12 col-sm-12 col-md-12 offset-lg-6 offset-xl-6 col-lg-6 col-xl-6 pr-lg-4 mt-md-5 mt-lg-5 mt-xl-5 mb-md-5 mb-lg-5 mb-xl-5 ">
            <h1 class="card-subtitle text-center" style="color:white; font-family: especila1; font-weight: bold; letter-spacing: 0.1em; font-size: 2.8em;">Suscribete para mas información</h1>
            <form>
                <div class="input-group mt-3 mb-3 mx-auto">
                    <input class="inputsuscribe col-5  col-sm-7 col-md-7 col-lg-7   " type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary botonsuscribe" style="border-radius:3.5rem/2rem;" type="submit"> Suscribir!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container ">
    <div class="row mt-3 mb-3 pt-3 pt-md-5 pb-md-5 mt-md-5 mb-md-5">
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() && $varContador <= 3 ) : the_post(); ?>
                <div class="col-12 col-md-12 col-lg-12 mb-5 mb-lg-0">
                    <div class="card tarjetas-promo">
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top superimagen mx-auto mt-3'));
                        }?>
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
