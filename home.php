<?php
/**
 Template Name: Homepage
 */

get_header(); ?>

<div id="page-wrapper">
<div class="content-wrapper home-content">
<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
    <p>
      <?php the_content(); ?>
    </p>
    <?php endwhile;?>
  </div>
  </div>

<!-- .content-area -->

<?php get_footer(); ?>
