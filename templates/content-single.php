<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <?php get_template_part('templates/structured-data-post'); ?>
        <div class="content-wrapper">
            <header>
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <footer class="entry-footer">
                <?php get_template_part('templates/entry-signature'); ?>
                <?php get_template_part('templates/entry-meta'); ?>
            </footer>
        </div>
        <?php comments_template('/templates/comments.php'); ?>

        <div class="matched-content" style="padding: 30px;">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-format="autorelaxed"
                 data-ad-client="ca-pub-6492804900606435"
                 data-ad-slot="1876311706"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </article>
<?php endwhile; ?>
