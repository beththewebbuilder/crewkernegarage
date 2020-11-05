<!DOCTYPE html>
<html lang="en" style="margin-top: 0px !important;">
  <head>
    <title><?php echo get_bloginfo('title'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo get_bloginfo('tagline'); ?>">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/images/logo.jpg">
    <?php wp_head(); ?>

    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  <body>
    <div class="container">

      <div class="row">
        <div class="col-lg-4">
          <div class="header-section left-section">
            <div class="header_bosch_logo">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/bcs_logo.png"/>
            </div>
            <ul>
              <li><?php echo get_option('address_line1');?></li>
              <li><?php echo get_option('address_line2');?></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4" style="text-align: center;">
          <img style="max-width: 200px;" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.jpg"/>
        </div>
        <div class="col-lg-4">
          <div class="header-section right-section">
            <ul>
              <li><a href="tel:<?php echo get_option('phone_number'); ?>"><?php echo get_option('phone_number'); ?></a></li>
              <li><a href="mailto:<?php echo get_option('email');?>"><?php echo get_option('email');?></a></li>
            </ul>
            <div class="header_bosch_logo">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/bcs_logo.png"/>
            </div>
          </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar-collapse" id="navbarNav">
          <?php
            $args = array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'false',
              'menu_class'        => 'navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'add_li_class'      => 'nav-item'

            );
          ?>
          <?php wp_nav_menu($args); ?>

        </div>
      </nav>
    </div>

      <hr class="header-border"/>
<div class="container">
