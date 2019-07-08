<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>

    <nav class="navbar navbar-expand-md mb-4 navbar-dark" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url() ?>"><?php echo bloginfo('name') ?></a>
        <?php
        wp_nav_menu(array(
          'theme_location'    => 'navigation',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        ?>

      </div>
    </nav>
  </header>

  <div class="container">
    <form class="form-inline search-form" action="/" method="get">
      <input class="form-control" type="search" placeholder="Batiment" aria-label="Search" name="s" id="search" value="<?php the_search_query() ?>">
      <button class="btn btn-outline-success" type="submit">Cherchez</button>
    </form>
  </div>

  <main role="main">
    <div class="container">