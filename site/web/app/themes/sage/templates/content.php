<div class="col-lg-4 col-md-6">
    <article <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
        <div class="content">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php get_template_part('templates/entry-meta'); ?>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </article>
</div>


