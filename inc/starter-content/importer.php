<?php

// Pages
/*
wp_insert_post(array(
  'post_title' => 'Some title',
  'post_content' => '',
  'post_type' => 'page',
  'post_status' => 'publish',
  'post_name' => 'slug',
  'page-template' => '',
  'meta_input' => array(
    'Title' => 'Custom Title'
  )
));
*/

function create_pages()
{
  include 'data-pages.php'; // if included outside function, variables wont be in scope for function

  foreach ($pages as $key => $page) {
    // check if already exists
    if ( count(get_posts(array( 'name' => $key, 'post_type' => 'page' ))) > 0 )
      continue;

    $custom_fields = [];
    if (!empty($page['meta'])) $custom_fields = $page['meta'];

    $rv = wp_insert_post(array(
      'post_title' => $page['title'],
      'post_content' => !empty($pages_content[$key]) ? $pages_content[$key] : '',
      'post_type' => 'page',
      'post_status' => 'publish',
      'post_name' => $key,
      'page_template' => '',
      'meta_input' => $custom_fields
    ), true);

    if (is_wp_error($rv)) return false;
  }

  // set meta values
  $keys_for_meta_pages = ['wishlist', 'cart'];
  foreach ($keys_for_meta_pages as $name) {
    $page = get_posts(array( 'name' => $name, 'post_type' => 'page' ))[0];
    $id = $page->ID;

    if ($page->post_name === $name) {
      foreach ($pages[$name]['meta'] as $key => $value)
        $rv = update_post_meta($id, $key, $value);
    }
  }

  // set front page
  $homepage = get_page_by_title( $pages['homepage-valentines-day']['title'] );

  if ($homepage)
  {
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $homepage->ID );
  }

  return true;
}

function create_menus()
{
  if (!wp_get_nav_menu_object( 'Main' ))
  {
    $menu_id = wp_create_nav_menu( 'Main' );

    // Set up default BuddyPress links and add them to the menu.
    wp_update_nav_menu_item($menu_id, 0, array(
      'menu-item-title' =>  __('Contact Us'),
      'menu-item-classes' => '',
      'menu-item-url' => get_site_url() . '/contact-customer-care', 
      'menu-item-status' => 'publish')
    );

    wp_update_nav_menu_item($menu_id, 0, array(
      'menu-item-title' =>  __('Services'),
      'menu-item-classes' => '',
      'menu-item-url' => get_site_url() . '/services', 
      'menu-item-status' => 'publish')
    );

    $locations = get_theme_mod('nav_menu_locations');
    $locations['primary'] = $menu_id;
    set_theme_mod('nav_menu_locations', $locations);
  }

  return true;
}

// Product Categories
function create_product_categories()
{
  include 'data-product-categories.php';

  foreach ($cats as $key => $value) {
    $parent = 0;
    if ($value[1] != 0) {
      $parent = term_exists($value[1], 'product_cat')['term_id'];
    }

    wp_insert_term($key, 'product_cat', [
      'description' => $value[0],
      'parent' => $parent,
      'slug' => $value[2]
    ]);
  }

  return true;
}

function create_attribute_collection()
{
  // terms are added in add_terms_to_collection callback in functions.php
  wc_create_attribute(['name' => 'Collection']);

  return true;
}

// Products
function create_products()
{
  return true;
}
