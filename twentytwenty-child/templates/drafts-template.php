<?php
/**
 * Template Name: Drafts template
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

$args = [   
    'post_type' => 'page',   
    'post_status' => 'draft',
]; 

$loop = new WP_Query( $args ); 
    
while ( $loop->have_posts() ) : $loop->the_post(); 
?>
    <h3><?php the_title(); ?></h3> 
    <p><?php the_excerpt(); ?> </p>
<?php
endwhile;

wp_reset_postdata(); 
?>



</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>