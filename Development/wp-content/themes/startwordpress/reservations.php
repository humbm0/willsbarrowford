<?php
/**
 * Template Name: Reservations
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */?>

<?php get_header(); ?>

<div class="container page">
  <div class="row">
    <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();

        the_content();

      endwhile; endif;
    ?>
  </div>
</div>

<?php get_footer(); ?>
