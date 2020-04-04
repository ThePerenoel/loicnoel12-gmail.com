<?php

  /**
    Template Name: Accueil
   */

   get_header();

?>

<div id="home-background" class="parallax">
  <div class="site-name">
    <img id="big_logo_py" src="wp-content/themes/parisyos_theme/css/parisyos_logo_big.png">
  </div>
  <div class="site-description">
    <?php echo get_bloginfo ( 'description' ); ?>
  </div>
</div>

<main role="main" class="container-fluid">

  <div class="starter-template">

    <div class="row">
      <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
        ?>
          <div class="col-12 p-0 card">
              <p><?php the_content(); ?></p>
          </div>
          <?php get_footer(); ?>
        <?php
            }
          }
        ?>
      </div>

  </div>

</main>
