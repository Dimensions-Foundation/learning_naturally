<?php
/**
* The template for displaying pages
*
*/

get_header(); ?>

<main>
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



<?php get_footer(); ?>
