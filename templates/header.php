<header class="banner banner--transparent">
    <div class="container">
        <?php if ( has_custom_logo() ) : ?>
            <div class="logo-wrapper">
                <?php the_custom_logo(); ?>
            </div>
        <?php else: ?>
            <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <?php endif; ?>
    </div>
    <nav class="nav-primary">
      <div class="container">
        <?php
        if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
      </div>
    </nav>

    <div class="mobile-hamburger">
        <span></span><span></span><span></span><span></span>
    </div>

    <div class="nav-mobile">
        <?php wp_nav_menu(['theme_location' => 'mobile_navigation', 'menu_class' => 'nav', 'depth' => 1]); ?>
    </div>
</header>
