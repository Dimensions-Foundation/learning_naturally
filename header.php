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
<div id="header-container">
    <div id="site-logo"><a href='<?php echo get_site_url( 1 ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a></div>
  <?php wp_nav_menu( array(
    'menu' => 'Primary Nav',
    'container_id' => 'primary-nav-container',
    'menu_class' => 'primary-nav-menu',
    'theme_location' => 'primary-nav',
    'items_wrap' => '<ul class="primary-nav-item-list">%3$s</ul>',
    'depth' => 2) ); ?>
</div>
  </header>
  <?php if ( is_front_page()) { ?>
    <body  class="body-home" <?php body_class(); ?>>
      <?php } else {  ?>
        <body class="body-not-home" <?php body_class(); ?>>
          <?php } ?>
