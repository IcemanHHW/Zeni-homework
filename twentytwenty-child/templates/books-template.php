<?php
/**
 * Template Name: Books template
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

$args = array(  
    'post_type' => 'book',
    'post_status' => 'publish',
    'author' => 'IcemanHHW',
);


$loop = new WP_Query( $args ); 
    
while ( $loop->have_posts() ) : $loop->the_post(); 
    print the_title(); 
    the_excerpt(); 
endwhile;

wp_reset_postdata(); 
?>



</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>