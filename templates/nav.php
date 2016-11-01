<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php /* The PHP code below will output your site URL and title in the appropriate places. */ ?>
      <a class="navbar-brand" href="<?= home_url('/'); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <div class="collapse navbar-collapse" id="header-menu">
      <?php /* The PHP code below will output the contents of your Primary Menu. To modify the classes given to the <ul> of your menu, modify the 'menu_class' array value below. */ ?>
      <?php wp_nav_menu( [
        'theme_location' => 'primary_menu',
        'menu_class' => 'nav navbar-nav',
        'depth' => 2,
        'walker' => new BS_Menu()
      ] ); ?>
      <div class="navbar-form navbar-right">
        <?php get_template_part( 'templates/searchform' ); ?>
      </div>
    </div>
  </div>
</nav>
