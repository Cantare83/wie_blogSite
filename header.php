<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
          <!-- Links to our Style.css file -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    </head>
    <body>
      <div class="header-wrapper">
          <header class="container">
              <div class="row">
                  <div class="seven columns">
                      <h1><a href="<?php $url = home_url('/'); echo $url; ?>">
                      <?php bloginfo('name'); ?></a></h1>
                  </div>
                  <div class="five columns">
                      <?php
                          wp_nav_menu( array(
                            'sort_column' => 'menu-order',
                            'container_class' => 'blank-menu-header'
                          ));
                      ?>
                  </div>
              </div>
          </header>
      </div>
      <div class="container">  <!-- Begin Container Div -->
