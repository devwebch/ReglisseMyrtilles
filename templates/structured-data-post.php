<?php
use Roots\Sage\Utils;
?>
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://google.com/article"
      },
      "headline": "<?php the_title(); ?>",
      "image": [
        "https://reglisse-et-myrtilles.com<?php the_post_thumbnail_url('post-thumbnail'); ?>"
       ],
      "datePublished": "<?php the_date('c'); ?>",
      "dateModified": "<?php the_modified_date('c'); ?>",
      "author": {
        "@type": "Person",
        "name": "Roberta"
      },
       "publisher": {
        "@type": "Organization",
        "name": "Réglisse et Myrtilles",
        "logo": {
          "@type": "ImageObject",
          "url": "https://reglisse-et-myrtilles.com/wp-content/uploads/2017/12/logo_rg_2018.png"
        }
      },
      "description": "<?php echo Utils\get_raw_excerpt(); ?>"
    }
</script>
