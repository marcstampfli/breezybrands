<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a home page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <h1 class="wow fadeInDown" data-wow-delay="1.1s"><?php the_field('hero_title'); ?></h1>
                <p class="wow fadeInUp" data-wow-delay="1.2s"><?php the_field('hero_text'); ?></p>
                <div class="wow fadeInLeftBig" data-wow-delay="1.3s"><a href="<?php echo get_permalink(25); ?>" class="cta">Get a free consultation <i class="fa fa-long-arrow-right"></i></a></div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="row">
            <?php 
                $arg = array( 
                    'post_type' => 'service',
                    'posts_per_page' => 4,
                );
                $q = new WP_Query( $arg );
                $count = 0;
            ?>
            <div class="col-lg-12">
                <h2 class="wow fadeInDown" data-wow-delay="1.4s">Services we offer</h2>
                <div class="service-container">
                    <?php while ($q->have_posts()) : $q->the_post(); $count++; ?>
                    <a href="<?php echo get_permalink(); ?>"><div class="service wow bounceIn" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>" data-wow-delay="<?php echo $count / 2.5; ?>s">
                        <h3><?php echo get_the_title(); ?></h3>
                        </div></a>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

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
                <h2 class="wow fadeInDown" data-wow-delay="1.7s">Brands we work with</h2>
                <div class="brands_slider_container wow fadeInUp" data-wow-delay="1.8s">
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
                <h2 class="wow fadeInDown" data-wow-delay="1.9s">Follow us on instagram</h2>
                <div class="wow fadeInUp" data-wow-delay="2s"><?php echo do_shortcode('[instagram-feed]'); ?></div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
