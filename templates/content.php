<article>
  <h2><?php the_title(); ?></h2>
  <div>
    <?php if( has_post_thumbnail() ){
      the_post_thumbnail( 'thumbnail' );
    } ?>
  </div>
  <date><?php the_date(); ?></date>
  <p><?php the_excerpt(); ?></p>
  <a href="<?php the_permalink(); ?>">Read More</a>
  <div>
    <h3>Categories:</h3>
    <?php the_category(); ?>
  </div>
  <div><?php the_tags(); ?></div>
  <hr/>
</article>
