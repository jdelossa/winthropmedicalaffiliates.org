<div class="col-md-4">
    <article <?php post_class(); ?>>
      <?php the_post_thumbnail( array(300,300) ); ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
    </article>
</div>

