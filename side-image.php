<?php
/**
* The template for displaying pages
* Template Name: Sidebar Image
*/

get_header(); ?>
<div id="side-image-contain">
<section class="side-image"><?php the_post_thumbnail('side-image'); ?></section>
<main class="side-image-content">
  <?php
  // Start the loop.
  while ( have_posts() ) : the_post(); ?>


  <h2>
    <?php the_title(); ?>
  </h2>
  <hr />
  <?php the_content(); ?>

  <?php // End the loop.
endwhile;
?>
</main>
<!-- .content-area -->
</div>


<?php get_footer(); ?>
