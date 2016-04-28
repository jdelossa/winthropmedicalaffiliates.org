<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

    <!-- Slideshow -->
    <?php echo do_shortcode('[recent_post_slider limit="4" design="design-1" show_author="false" show_category_name="false" show_content="true" show_date="false" dots="false" arrows="true" autoplay="true" autoplay_interval="5000" speed="1000" content_words_limit="40"]'); ?>
    <!-- END Slideshow -->
    
    <!-- Search -->
    <?php get_template_part('templates/practice', 'search') ?>
    <!-- END Search -->

  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
