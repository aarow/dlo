<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<section id="body_wrapper">

<?php get_template_part( 'loop', 'page' ); ?>

</section><!-- end body_wrapper -->


<?php get_footer(); ?>
