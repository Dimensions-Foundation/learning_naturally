<?php
/**
 * The template for displaying all single posts and attachments
 *
 */


get_header(); ?>

<main>
  <?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
  <div class="content-wrapper">
    <h2>
      <?php the_title(); ?>
    </h2>
    <hr />
    <div class="center-feature-img"><?php the_post_thumbnail(); ?></div>
    <?php the_meta(); ?>
    <?php the_content(); ?>
    <a href="/sessions-on-demand">Back to Sessions on Demand</a>
  </div>
  <?php // End the loop.
		endwhile;
		?>
</div>
<!-- .content-area -->


</main>

<?php get_footer(); ?>
