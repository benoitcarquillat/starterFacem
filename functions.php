<?php
// Include your functions files here
include('inc/enqueues.php');
include('inc/excerpt.php');

include('inc/customCode/nav.php');
/**
* Don't hesitate to use the WP code snippet generator Hasty : https://www.wp-hasty.com/
*/

 /**
  * Declare theme support
  * ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
  */
function theme_set_theme_supports() {
    global $wp_version;

    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'automatic-feed-links' );

    // let wordpress manage the title
    add_theme_support( 'title-tag' );

    //add_theme_support( 'custom-background', $args );
    //add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'theme_set_theme_supports' );


/**
 * Declare theme width global var
 */
if( !isset( $content_width ) ) {
    // @TODO : edit the value for your own specifications
    $content_width = 1170; // Bootstrap default container value
}


/**
 * Register WordPress menus
 * cf : http://codex.wordpress.org/Function_Reference/wp_nav_menu
 *
 */

register_nav_menu( 'primary', __( 'Primary Menu', 'starterFacem' ) );

/**
 * register sidebars
 * cf : https://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * @return void
 */
function theme_register_sidebars() {
    if( !function_exists( 'register_sidebar' ) ) {
        return;
    }
    register_sidebar( array(
        'name' => __('Main sidebar', 'bsbt'), // @TODO : change i18n domain to yours
        'id' => 'main-sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'theme_register_sidebars' );


/**
 * Set style.css as style in admin editor
 *
 */
function theme_set_editor_style() {
    add_editor_style( get_stylesheet_directory_uri() . '/dist/css/theme.css' );
}
//add_action( 'admin_init', 'theme_set_editor_style' ); //@TODO : Uncomment if you use it

/**
* Remove emojis CSS and JS
*/
function theme_remove_emojis() {
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 99 );
}
//add_action( 'init', 'theme_remove_emojis' ); //@TODO: Uncomment if you don't need emojis and want to optimize your site




$cutlass_includes = array(
  'inc/blade.php',                  // Load Laravel's Blade Templating Engine
);

foreach ($cutlass_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'cutlass'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);