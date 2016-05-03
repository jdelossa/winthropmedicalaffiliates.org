<?php
/**
 * Template Name: Medical Practice Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <div id="map"></div>
    <?php get_template_part('templates/medical-practice/page', 'header'); ?>
    <?php get_template_part('templates/medical-practice/content', 'page'); ?>
<?php endwhile; ?>
