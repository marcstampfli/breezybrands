<?php
/**
 * Template Name: Contact Page Template
 *
 * Template for displaying a contact page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="subheader">
    <div class="container">
        <h1>Contact Us</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-7 col-md-7 contact-text">
            <div>
                <h2><?php the_field('contact_title'); ?></h2>
                <p><?php the_field('contact_text'); ?></p>
            </div>
            <div class="contact-options">
                <div class="contact-option phone">
                    <i class="fa fa-phone"></i><a href="tel:<?php the_field('contact_phone'); ?>"><?php the_field('contact_phone'); ?></a>
                </div>
                <div class="contact-option email">
                    <i class="fa fa-envelope"></i><a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a>
                </div>
                <div class="contact-option location">
                    <i class="fa fa-map-marker"></i><a href="<?php the_field('contact_location_url'); ?>" target="_blank"><?php the_field('contact_location'); ?></a>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5"><?php echo do_shortcode('[contact-form-7 id="23" title="Contact"]'); ?></div>
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

<?php
get_footer();
