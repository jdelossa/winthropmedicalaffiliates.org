<article <?php post_class(); ?>>
  <header>
    <div class="col-md-4">
      <img src="" alt="<?php the_title(); ?>">
    </div>
    <div class="col-md-8">
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </div>
  </header>
  <div class="col-md-offset-4 col-md-8">
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
