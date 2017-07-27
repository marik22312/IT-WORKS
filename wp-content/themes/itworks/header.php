<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description')?>">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
        <?php
        wp_nav_menu( array(
           'theme_location' => 'header-menu',
           'container' => 'nav',
           'container_class' => '',
  	        'container_id'    => 'header-menu',)); 
        ?>
    </header>
