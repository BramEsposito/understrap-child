<nav class="navbar navbar-expand-sm navbar-dark bg-primary d-sm-none d-md-block">

  <?php if ( 'container' == $container ) : ?>
    <div class="container">
      <?php endif; ?>

      <?php wp_nav_menu(
        array(
          'theme_location'  => 'supporting',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'supporting-menu-container',
          'menu_class'      => 'navbar-nav ml-auto',
          'fallback_cb'     => '',
          'menu_id'         => 'supporting-menu',
          'depth'           => 2,
          'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
        )
      ); ?>
      <?php if ( 'container' == $container ) : ?>
    </div><!-- .container -->
<?php endif; ?>
</nav>
<nav class="navbar navbar-expand-md navbar-light">

  <?php if ( 'container' == $container ) : ?>
  <div class="container">
    <?php endif; ?>

    <!-- Your site title as branding in the menu -->
    <?php if ( ! has_custom_logo() ) { ?>

  <?php if ( is_front_page() && is_home() ) : ?>

    <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

  <?php else : ?>

    <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

  <?php endif; ?>


    <?php } else {
      the_custom_logo();
    } ?><!-- end custom logo -->

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdownWrapper" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarNavDropdownWrapper" class="collapse navbar-collapse">

    <!-- The WordPress Menu goes here -->
    <?php wp_nav_menu(
      array(
        'theme_location'  => 'primary',
        'container_class' => '',
        'container_id'    => 'navbarNavDropdown',
        'menu_class'      => 'navbar-nav ml-auto',
        'fallback_cb'     => '',
        'menu_id'         => 'main-menu',
        'depth'           => 2,
        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
      )
    ); ?>

      <?php wp_nav_menu(
        array(
          'theme_location'  => 'supporting',
          'container_class' => 'd-md-none',
          'container_id'    => 'supporting-menu-mobile-container',
          'menu_class'      => 'navbar-nav ml-auto',
          'fallback_cb'     => '',
          'menu_id'         => 'supporting-menu-mobile',
          'depth'           => 2,
          'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
        )
      ); ?>
    </div>


    <?php if ( 'container' == $container ) : ?>
  </div><!-- .container -->
<?php endif; ?>

</nav><!-- .site-navigation -->
