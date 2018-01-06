<?php use Roots\Sage\Utils; ?>

<?php //get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php $count = 0; while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php if ($count == 0): ?>
    <div>
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- In between posts RG -->
      <ins class="adsbygoogle"
           style="display:inline-block;width:728px;height:90px"
           data-ad-client="ca-pub-6492804900606435"
           data-ad-slot="7985677751"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
  <?php endif; ?>
<?php $count++; endwhile; ?>

<?php Utils\pagination(); ?>
