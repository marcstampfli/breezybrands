<?php
/**
 * Template Name: About Page Template
 *
 * Template for displaying a about page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="subheader">
    <div class="container">
        <h1>About Us</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="content-image" style="background-image:url('<?php the_field('about_image'); ?>"></div>
        </div>
        <div class="col-md-6">
            <div class="content-text">
                <h2>Who We Are</h2>
                <p><?php the_field('about_who_we_are'); ?></p>
                <h2>What We Do</h2>
                <p><?php the_field('about_what_we_do'); ?></p>
            </div>
        </div>
    </div>
</div>

<section class="work-with-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Why work with us</h2>
                <div class="why-work">
                    <div class="reason one">
                        <h3><?php echo get_group_field( 'reason_1', 'reason_1_title' ); ?></h3>
                        <!-- <p><?php //echo get_group_field( 'reason_1', 'reason_1_text' ); ?></p> -->
                    </div>
                    <div class="reason two">
                        <h3><?php echo get_group_field( 'reason_2', 'reason_2_title' ); ?></h3>
                        <!-- <p><?php //echo get_group_field( 'reason_2', 'reason_2_text' ); ?></p> -->
                    </div>
                    <div class="reason three">
                        <h3><?php echo get_group_field( 'reason_3', 'reason_3_title' ); ?></h3>
                        <!-- <p><?php //echo get_group_field( 'reason_3', 'reason_3_text' ); ?></p> -->
                    </div>
                    <div class="reason four">
                        <h3><?php echo get_group_field( 'reason_4', 'reason_4_title' ); ?></h3>
                        <!-- <p><?php //echo get_group_field( 'reason_3', 'reason_3_text' ); ?></p> -->
                    </div>
                    <div class="reason five">
                        <h3><?php echo get_group_field( 'reason_5', 'reason_5_title' ); ?></h3>
                        <!-- <p><?php //echo get_group_field( 'reason_3', 'reason_3_text' ); ?></p> -->
                    </div>
                    <div class="reason six">
                        <h3><?php echo get_group_field( 'reason_6', 'reason_6_title' ); ?></h3>
                        <!-- <p><?php //echo get_group_field( 'reason_3', 'reason_3_text' ); ?></p> -->
                    </div>
                    <div class="reason seven">
                        <h3><?php echo get_group_field( 'reason_7', 'reason_7_title' ); ?></h3>
                        <!-- <p><?php //echo get_group_field( 'reason_3', 'reason_3_text' ); ?></p> -->
                    </div>
                    <div class="reason eight">
                        <h3><?php echo get_group_field( 'reason_8', 'reason_8_title' ); ?></h3>
                        <!-- <p><?php //echo get_group_field( 'reason_3', 'reason_3_text' ); ?></p> -->
                    </div>
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

<!-- <section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Testimonials</h2>
                <div class="testimonial_container">
                    <div class="owl-carousel owl-theme testimonials_slider">
                        <div class="owl-item">
                            <div class="testimonial">
                                <div class="quote">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                <div class="author">John Doe</div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="testimonial">
                                <div class="quote">Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                <div class="author">Jane Doe</div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="testimonial">
                                <div class="quote">Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                <div class="author">Jane Doe</div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="testimonial">
                                <div class="quote">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                <div class="author">John Doe</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials_nav testimonials_prev"><i class="fa fa-chevron-left"></i></div>
                    <div class="testimonials_nav testimonials_next"><i class="fa fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
        
    </div>
</section> -->

<?php
get_footer();
