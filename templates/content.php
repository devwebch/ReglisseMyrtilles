<article <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ): ?>
    <div class="post-thumbnail">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('post-thumbnail'); ?>
      </a>
    </div>
  <?php endif; ?>
  <div class="content-wrapper">
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
    <footer class="entry-footer">
      <?php get_template_part('templates/entry-meta'); ?>
    </footer>
  </div>
</article>
