<!DOCTYPE html>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Paris Yoseikan</title>
  <link href="https://fonts.googleapis.com/css?family=Maven+Pro&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Questrial&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>

  <nav class="navbar navbar-expand-md py-nav-default">
    <a class="navbar-brand" href="<?php echo get_site_url() ?>">
      <img id="logo_py" src="<?php echo get_template_directory_uri() . '/parisyos_logo.png'; ?>">
      Paris Yoseikan
    </a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"
      aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
              wp_nav_menu(
                array(
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id'    => 'navbarMenu',
                  'menu_class'      => 'menu',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'items_wrap'      => '<ul class="navbar-nav navbar-items ml-auto">%3$s</ul>',
                  'depth'           => 0,
                  'walker'          => new Mf_theme_nav_menu_walker
                )
              );
            ?>
  </nav>