<!DOCTYPE html>
<html>
  <head>
    <?php /* The following line of code will output your site's name and the title of the current page. */ ?>
    <title><?= bloginfo( 'name' ) . wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
  </head>
  <body>
    <?php get_template_part( 'templates/nav' );
