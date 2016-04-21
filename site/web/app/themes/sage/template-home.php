<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

    <!-- Slideshow -->
      Posts slideshow
    <!-- END Slideshow -->

  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
