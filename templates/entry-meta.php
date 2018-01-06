<ul class="list-inline">
  <li><time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></li>
  <li>|</li>
  <?php if ( is_singular() ): ?>
    <li><?php comments_number( __('comment now', 'sage'), __('one comment', 'sage'), __('% comments', 'sage') ); ?></li>
  <?php else: ?>
    <li>
      <a href="<?php the_permalink(); ?>#comments">
        <?php comments_number( __('comment now', 'sage'), __('one comment', 'sage'), __('% comments', 'sage') ); ?>
      </a>
    </li>
  <?php endif;?>
  <li>|</li>
  <li><?php echo do_shortcode('[simplicity-likes]'); ?></li>
</ul>
