<?php
/**
Template Name: Homepage
*/
get_header(); ?>

<main class="home-content">
	<?php
	// Start the loop.
	while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile;?>
</main>

<!-- .content-area -->

<?php get_footer(); ?>
