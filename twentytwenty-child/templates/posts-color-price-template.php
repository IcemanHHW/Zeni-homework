<?php
/**
 * Template Name: Post color price template
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
    'post_type' => 'post',
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'color',
            'value' => 'dark',
            'compare' => 'LIKE',
        ),
        array(
            'key' => 'price',
            'value' => array( 10, 120 ),
            'type' => 'numeric',
            'compare' => 'BETWEEN',
        ),
    ),
);


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