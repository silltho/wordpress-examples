<!DOCTYPE html>
<html lang="de">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php bloginfo('name'); ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
              Home
            </a>
          </div>
          <?php
                 wp_nav_menu( array(
                  'menu'              => 'mainmenu',
                  'theme_location'    => 'mainmenu', 
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav'
              ));
            /*wp_nav_menu(array(
              'theme_location' => 'mainmenu', 
              'container_class' => 'menu',
              'walker' => new wp_bootstrap_navwalker()));*/
          ?>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="row">
        <div class="blog-header" style="height: 150px; color: white;  background-position: center;  background-image: url('<?php echo get_bloginfo('template_url') ?>/header.JPG');">
          <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
          <p class="lead blog-description"><?php bloginfo('description'); ?></p>
        </div>
      </div>
      <div class="row" style="margin-top: 5px;">