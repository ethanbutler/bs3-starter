<?php

add_action( 'wp_enqueue_scripts', function(){

  wp_enqueue_style( 'bs-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', [] );
  wp_dequeue_script( 'jquery' );
  wp_enqueue_script( 'jquery', '<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>', [], false, false );
  wp_enqueue_script( 'bs-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', 'jquery', false, true );

} );
