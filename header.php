<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <nav id="menu" role="navigation" class="main-navigation">
      <div class="masthead">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
      </div>
      <div id="search">
        <?php get_search_form(); ?>
      </div>
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>

    <div id="wrapper" class="hfeed">

      <header id="header" role="banner">
        <section id="branding">
          <div id="site-title"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
          <div id="site-description"><?php bloginfo( 'description' ); ?></div>
        </section>
      </header>

      <div id="container">