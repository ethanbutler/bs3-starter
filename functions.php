<?php

/* If you'd like to add custom PHP code,
 * do so in a new file in the 'lib' directory.
 * This file will handle the rest!
 */

$lib_items = glob( get_stylesheet_directory() . '/lib/*.php' );

foreach( $lib_items as $lib_item ){
  require_once( $lib_item );
}
