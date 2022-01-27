<?php

function siellest_title()
{
  $custom_title = get_post_meta(get_the_ID(), 'Title', true);

  return !empty($custom_title) ? $custom_title : get_the_title();
}

function siellest_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
  add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'siellest_theme_support');

// TODO For importing Starter Content. Includes pages, menus, and widget content
function siellest_settings_menu()
{
  add_submenu_page('themes.php', 'Siellest Settings', 'Siellest Settings', 'edit_theme_options', 'siellest-settings', 'siellest_settings');
}

function siellest_settings()
{
  include 'inc/options.php';
}

add_action('admin_menu', 'siellest_settings_menu');

function siellest_menus()
{
  $locations = array(
    'primary' => 'Top Main Menu',
    'footer' => 'Footer Menu'
  );

  register_nav_menus($locations);
}

add_action('init', 'siellest_menus');

function siellest_register_styles()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('siellest-global', get_template_directory_uri() . "/assets/css/global.css", array(), $version, 'all');
  wp_enqueue_style('siellest-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');

  $post_name = get_post()->post_name; // slug
  if ( in_array($post_name, ['account', 'wishlist']) ) {
    wp_enqueue_style('siellest-account', get_template_directory_uri() . "/assets/css/accountMain.css", array('siellest-global'), $version, 'all');
  } else if ($post_name === 'contact-customer-care') {
    wp_enqueue_style('siellest-account', get_template_directory_uri() . "/assets/css/contactUsMain.css", array('siellest-global'), $version, 'all');
  }
  if ($post_name === 'wishlist') {
    wp_enqueue_style('siellest-login', get_template_directory_uri() . "/assets/css/loginMain.css", array('siellest-global'), $version, 'all');
  }
}

add_action('wp_enqueue_scripts', 'siellest_register_styles');

function siellest_register_scripts()
{
  $version = wp_get_theme()->get('Version');
  // wp_enqueue_script('siellest-bootstrap', get_template_directory_uri() . "/main.js", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'siellest_register_scripts');

// Used using dynamic_sidebar('id') func
function siellest_widget_areas()
{
  register_sidebar(
    array(
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Sidebar Area',
      'id' => 'sidebar-1',
      'description' => 'Sidebar Widgets Area'
    )
  );
}

add_action('widgets_init', 'siellest_widget_areas');

function add_terms_to_collection($taxonomy, $obj_type, $args) {
  include 'inc/starter-content/data-collections.php';

  if ($taxonomy == 'pa_collection') {
    foreach ($collections as $key => $term) {
      wp_insert_term($term, 'pa_collection');
    }
  }
}

add_action('registered_taxonomy', 'add_terms_to_collection', 10, 3);

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options –> Reading
  // Return the number of products you wanna show per page.
  $cols = 24;
  return $cols;
}
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

// function siellest_default_catalog_orderby( $sort_by ) {
//   echo $sort_by;
//   return 'price';
// }
// add_filter('woocommerce_default_catalog_orderby', 'siellest_default_catalog_orderby');


function siellest_custom_product_sorting( $args ) {
  // Sort alphabetically
	// if ( isset( $_GET['orderby'] ) && 'title' === $_GET['orderby'] ) {
    // $args['orderby'] = 'meta_value_num';
    // $args['meta_key'] = '_price';
		// $args['order'] = 'asc';
	// }
	return $args;
}
add_filter( 'woocommerce_get_catalog_ordering_args', 'siellest_custom_product_sorting' );

/* Extending REST API */
include 'api.php';

/* Remove WP default stuff */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);

add_action('wp_footer', function () {
  wp_dequeue_script('wp-embed');
});

add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('wp-block-library');
  wp_dequeue_script('comment-reply');
});

define('WP_POST_REVISIONS', 5);
