<?php
/**
 * Template Name: Bin template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main id="site-content" role="main">

<?php

$loop = new WP_Query([ 'post_status' => 'trash' ]);
    
while ( $loop->have_posts() ) : $loop->the_post(); 
    print the_title(); 
    the_excerpt(); 
endwhile;

wp_reset_postdata(); 
?>



</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>