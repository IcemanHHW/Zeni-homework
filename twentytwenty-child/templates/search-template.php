<?php
/**
 * Template Name: Search template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main id="site-content" role="main">


        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/search-query' ); ?>">
            <div><label class="screen-reader-text" for="s">Search for:</label>
                <input type="text" value="<?php echo esc_html($_GET['s']); ?>" placeholder="search term" name="s" id="s" />
                <input type="text" value="<?php echo esc_html($_GET['e']); ?>" placeholder="exlude" name="e" id="e" />
                <input type="submit" id="searchbutton" value="Search" />
            </div>
        </form>
        <br><br>


        <?php

$search_term = sanitize_text_field( $_GET['s'] );
$exclude = sanitize_text_field( $_GET['e'] );

$args = array(  
    's' => "$search_term -$exclude",
);

$loop = new WP_Query( $args ); 
if ( $loop->found_posts() ) :     
while ( $loop->have_posts() ) : $loop->the_post(); 
?>
    <h3><?php the_title(); ?></h3> 
    <p><?php the_excerpt(); ?> </p>
<?php
endwhile;

else :
    echo esc_html("No results found, please try again");

endif;


wp_reset_postdata(); 
?>


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>