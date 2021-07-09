<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="subheader">
    <div class="container">
        <h1><?php echo get_the_title(); ?></h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="content-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>"></div>
        </div>
        <div class="col-md-6">
            <div class="content-text">
            <?php
            while ( have_posts() ) {
                the_post();
                get_template_part( 'loop-templates/content', 'blank' );
                
            }
            ?>
            </div>
        </div>
    </div>
    <div class="row extra-services">
        <div class="col-lg-4">
            <h2>Installations</h2>
            <p><?php the_field('service_installations_text'); ?></p>
        </div>
        <div class="col-lg-4">
            <h2>Repairs</h2>
            <p><?php the_field('service_repairs_text'); ?></p>
        </div>
        <div class="col-lg-4">
            <h2>Servicing</h2>
            <p><?php the_field('service_servicing_text'); ?></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6"></div>
    </div>
</div>

<section class="brands">
    <div class="container">
        <div class="row">
            <?php 
                $arg = array( 
                    'post_type' => 'brand',
                );
                $q = new WP_Query( $arg );
            ?>
            <div class="col-lg-12">
                <h2>Brands we work with</h2>
                <div class="brands_slider_container">
                    <div class="owl-carousel owl-theme brands_slider">
                        <?php while ($q->have_posts()) : $q->the_post(); ?>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>"></div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                    <div class="brands_nav brands_prev"><i class="fa fa-chevron-left"></i></div>
                    <div class="brands_nav brands_next"><i class="fa fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="instagram">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Follow us on instagram</h2>
                <?php echo do_shortcode('[instagram-feed]'); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
