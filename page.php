<?php get_template_part( 'header' ); ?>

<main class="container">
  <div class="row">
    <section class="col-md-9">
      <?php /* The code below is The Loop. It will get the content for your page and use the markup from 'templates/page.php' */ ?>
      <?php if( have_posts() ){
        while( have_posts() ){
          the_post();
          get_template_part( 'templates/page' );
        }
      } ?>
    </section>
    <aside class="col-md-3">
      <?php /* The code below will get the contents of 'sidebar.php'; */ ?>
      <?php get_sidebar(); ?>
    </aside>
  </div>
</main>

<?php get_template_part( 'footer' ); ?>
