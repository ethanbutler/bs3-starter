<?php /* The code below will output the widgets that you've added to the Sidebar widget area. To add additional widget areas, add them via 'lib/widgets.php' and call dynamic_sidebar() as needed. */ ?>
<?php if( is_active_sidebar( 'sidebar' ) ){ ?>
  <?php dynamic_sidebar( 'sidebar' ); ?>
<?php } ?>
