<header class="banner">
  <nav class="nav-header">
    <div class="container">
      <?php
      if (has_nav_menu('header_navigation')) :
        wp_nav_menu(['theme_location' => 'header_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </div>
  </nav>

  <div class="container navbar navbar-default">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php get_header_image(); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
