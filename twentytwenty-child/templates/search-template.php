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


    <main id="site-content" role="main">


        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            <div><label class="screen-reader-text" for="s">Search for:</label>
                <input type="text" value="" name="s" id="s" />
                <input type="text" value="" name="e" id="e" />
                <input type="submit" id="searchsubmit" value="Search" />
            </div>
        </form>




    </main><!-- #site-content -->

    <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

    <?php get_footer(); ?>