<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

require_once get_theme_file_path('/lib/inc/class-tgm-plugin-activation.php');

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <div class="read-more"><a href="' . get_permalink() . '" class="read-more-link">' . __('Continued', 'sage') . '</a></div>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

add_action('tgmpa_register', __NAMESPACE__ . '\\register_required_plugins');
function register_required_plugins()
{
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of the use of 'is_callable' functionality. A user could - for instance -
        // have WPSEO installed *or* WPSEO Premium. The slug would in that last case be different, i.e.
        // 'wordpress-seo-premium'.
        // By setting 'is_callable' to either a function from that plugin or a class method
        // `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
        // recognize the plugin as being installed.
        array(
            'name'        => 'WordPress SEO by Yoast',
            'slug'        => 'wordpress-seo',
            'is_callable' => 'wpseo_init',
            'required'    => false,
        ),
        array(
            'name'        => 'Elementor Page Builder',
            'slug'        => 'elementor',
            'required'    => false,
        ),
        array(
            'name'        => 'Google Analytics for WordPress by MonsterInsights',
            'slug'        => 'google-analytics-for-wordpress',
            'required'    => false,
        ),
        array(
            'name'        => 'User Switching',
            'slug'        => 'user-switching',
            'required'    => false,
        ),
        array(
            'name'        => 'Simple History',
            'slug'        => 'simple-history',
            'required'    => false,
        ),
        array(
            'name'        => 'Soil',
            'slug'        => 'soil',
            'source'      => 'https://github.com/roots/soil/archive/master.zip',
            'required'    => true,
        ),

    );

    $config = array(
        'id'           => 'sage',                  // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'plugins.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => false,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
}

function tinymce_buttons_2( $buttons )
{
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}
add_filter( 'mce_buttons_2', __NAMESPACE__ . '\\tinymce_buttons_2' );

function tinymce_formats( $init_array )
{
  $styles = array(
    array(
      'title'   => 'Bloc gris',
      'block'   => 'h4',
      'classes' => 'block-gray',
      'wrapper' => false
    )
  );

  $init_array['style_formats'] = json_encode( $styles );

  return $init_array;
}
add_filter( 'tiny_mce_before_init', __NAMESPACE__ . '\\tinymce_formats' );
