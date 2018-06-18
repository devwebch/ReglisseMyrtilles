<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
  <!--[if IE]>
  <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
  </div>
  <![endif]-->
  <?php
  do_action('get_header');
  get_template_part('templates/header');
  ?>
  <div class="wrap container" role="document">
      <div class="content row">
          <main class="main">
              <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
          <?php if (Setup\display_sidebar()) : ?>
              <aside class="sidebar">
                  <?php include Wrapper\sidebar_path(); ?>
              </aside><!-- /.sidebar -->
          <?php endif; ?>
      </div><!-- /.content -->
  </div><!-- /.wrap -->
  <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us13.list-manage.com","uuid":"7c48d0e8aa4fdcfb3fd2568b4","lid":"0957467ff4"}) })</script>
  <?php
  do_action('get_footer');
  get_template_part('templates/footer');
  wp_footer();
  ?>
  </body>
</html>
