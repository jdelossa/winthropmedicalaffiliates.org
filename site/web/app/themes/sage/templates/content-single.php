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


    <?php if (types_render_field("medical-practice-name", array('raw' => 'true'))){ ?>

    <div class="separator line-separator"></div>
    <div class="featured-practice">
      <div class="col-sm-9">
        <a class="header" href="<?= types_render_field("medical-practice-link", array('raw' => 'true')); ?>"><?= types_render_field("medical-practice-name", array('raw' => 'true')); ?></a>
        <p class="medical-practice-address"><?= types_render_field("medical-practice-address", array('raw' => 'true')); ?></p><br>
      </div>
      <div class="col-sm-3">
        <p class="medical-practice-phone"><?= types_render_field("medical-practice-phone", array('raw' => 'true')); ?></a></p>
      </div>
    </div>

    <?php } ?>

  </article>
<?php endwhile; ?>
