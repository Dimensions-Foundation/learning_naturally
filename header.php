<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 */
?>
<!DOCTYPE html>
<html >
<head>
<title>Learning Naturally</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<header id="top-bar">
  <a href="/"><div id="site-logo"></div></a>
  <?php wp_nav_menu( array( 
  'menu' => 'Primary Nav',
  'container_id' => 'primary-nav-container',
  'menu_class' => 'primary-nav-menu',
  'theme_location' => 'primary-nav',
  'items_wrap' => '<ul class="primary-nav-item-list">%3$s</ul>',
  'depth' => 2) ); ?>
</header>
<?php if ( is_front_page()) { ?>
  <body  class="body-home" <?php body_class(); ?>>
<?php } else {  ?>
  <body class="body-not-home" <?php body_class(); ?>>
<?php } ?>
