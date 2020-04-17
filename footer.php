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
          <img src="<?php echo get_template_directory_uri() . '/img/ffkarate.jpg' ?>">
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
  <p>© Paris Yoseikan
    <?php
          $year = date("Y");
          echo $year;
        ?> <br>
    Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
      href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
  </p>

</footer>
<?php wp_footer(); ?>
</body>

</html>