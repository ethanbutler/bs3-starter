<article>
  <h2><?php the_title(); ?></h2>
  <div>
    <?php if( has_post_thumbnail() ){
      the_post_thumbnail( 'thumbnail' );
    } ?>
  </div>
  <div><?php the_content(); ?></div>
</article>
