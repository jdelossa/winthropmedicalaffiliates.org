<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
      <div class="featured-image">
        <?php the_post_thumbnail( 'full' ); ?>
      </div>
    <header>
      <h3 class="entry-title"><?php the_title(); ?></h3>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>

    <div class="separator line-separator"></div>
  </article>
<?php endwhile; ?>
