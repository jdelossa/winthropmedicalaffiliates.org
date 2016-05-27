<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php the_meta(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
