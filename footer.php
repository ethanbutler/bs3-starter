  <footer>
    <div class="container">
      <?php /* The PHP code below will output the contents of your Footer Menu. To modify the classes given to the <ul> of your menu, modify the 'menu_class' array value below. */ ?>
      <?php wp_nav_menu( [
        'theme_location' => 'footer_menu',
        'menu_class' => 'nav nav-pills',
        'depth' => 1,
        'walker' => new BS_Menu()
      ] ); ?>
      <?php /* The PHP code below will output the current year. */ ?>
      <small>&copy; <?= date( 'Y' ); ?> <?php bloginfo('name'); ?></small>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
