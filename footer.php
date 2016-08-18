<?php
/**
* The template for displaying the footer
*
* Contains the closing of the "site-content" div and all content after.
*
* @package WordPress
*/
?>

</div><!-- .site-content -->

<footer class="site-footer" >
	<div id="site-info">
		<p><?php echo get_bloginfo() .' &copy;' . date(Y); ?>. All Rights Reserved.<br />
		Learning Naturally is an initiative of Dimensions Foundation and the Child Educational Center.</p>
		<?php echo do_shortcode('[google-translator]'); ?>
	</div><!-- .site-info -->
	<div id="footer-login">
		Are you an admin? If so <a href="/login/">click here</a> to login.
	</div>
</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
