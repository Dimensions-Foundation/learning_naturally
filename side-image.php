<?php
/**
 * The template for displaying pages
 * Template Name: Sidebar Image
 */

get_header(); ?>

<div id="page-wrapper">
  <?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
        <div class="side-image"><?php the_post_thumbnail('side-image'); ?></div>
  <div class="content-wrapper side-image-content">
    <h2>
      <?php the_title(); ?>
    </h2>
    <hr />
    <?php the_content(); ?>
  </div>
  <?php // End the loop.
		endwhile;
		?>
</div>
<!-- .content-area -->



<?php get_footer(); ?>
