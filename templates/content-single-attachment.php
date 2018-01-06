<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="content-wrapper">
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
        <?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>
      </div>
    </div>
  </article>
<?php endwhile; ?>
