<footer>
  <div class="container">
    <div class="row affiliate">
      <div class="col-md-4 m-0 p-0">
        <a href="http://www.sports.gouv.fr/" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/img/logoMinistere.gif' ?>">
        </a>
        <p>CLUB AGRÉÉ<br>
          agrément ministériel N°75S9302</p>
      </div>
      <div class="col-md-4 m-0 p-0">
        <a href="https://www.ffkarate.fr/" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/img/ffkarate.svg' ?>">
        </a>
        <p>CLUB AFFILIE FFKDA</p>
      </div>
      <div class="col-md-4 m-0 p-0">
        <a href="https://www.paris.fr/" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/img/Logo_VP.jpg' ?>">
        </a>
        <p>CLUB AFFILIE O.M.S DE PARIS</p>
      </div>
    </div>
  </div>

  <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'footer',
            'container'       => 'div',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '|&nbsp;%3$s',
            'depth'           => 0,
            'walker'          =>  new PY_register_nav_menu_walker
          )
        );
      ?>

  <p class="copyright">
  <img id="logo_py_footer" src="<?php echo get_template_directory_uri() . '/parisyos_logo_white.png'; ?>"><br>
  © Paris Yoseikan
    <?php
          $year = date("Y");
          echo $year;
        ?>
  </p>

</footer>
<?php wp_footer(); ?>
</body>

</html>