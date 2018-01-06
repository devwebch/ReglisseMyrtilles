<?php $sum_cat = count(get_the_category()); $count = 1; ?>
<?php if (get_the_category()): ?>
  <div class="entry-categories">
    <ul>
      <?php foreach (get_the_category() as $data): ?>
        <li>
          <a href="<?php echo get_term_link($data); ?>"><?php echo $data->name; ?></a><?php echo ($count < $sum_cat) ? ', ' : ''; ?>
        </li>
      <?php $count++; endforeach; ?>
    </ul>
  </div>
<?php endif; ?>
