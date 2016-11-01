<?php

add_action( 'widgets_init', function(){

  /* To register new widget areas, copy and paste the code below, but be sure to change the 'name' and 'id' array values to something else. */
  
  register_sidebar( [
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
  ] );

} );
