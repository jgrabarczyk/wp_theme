<?php

//wp_theme Blank navigation
function wp_theme_render_nav() {
  wp_nav_menu(
    array(
      'theme_location' => 'wp-header-menu',
      'menu' => '',
      'container' => 'div',
      'container_class' => 'menu-{menu slug}-container',
      'container_id' => '',
      'menu_class' => 'main-menu',
      'menu_id' => '',
      'echo' => true,
      'fallback_cb' => 'wp_page_menu',
      'before' => '',
      'after' => '',
      'items_wrap' => '<ul class="wp-header-menu" >%3$s</ul>',
      'depth' => 0,
      'walker' => '',
    )
  );
}
function wp_theme_lang_nav() {
  wp_nav_menu(
    array(
      'theme_location' => 'lang-menu',
      'menu' => '',
      'container' => 'div',
      'container_class' => 'menu-{menu slug}-container',
      'container_id' => '',
      'menu_class' => 'menu',
      'menu_id' => '',
      'echo' => true,
      'fallback_cb' => 'wp_page_menu',
      'before' => '',
      'after' => '',
      'items_wrap' => '<ul>%3$s</ul>',
      'depth' => 0,
      'walker' => '',
    )
  );
}

function wp_theme_footer_menu() {
  wp_nav_menu(
    array(
      'theme_location' => 'footer-menu',
      'menu' => '',
      'container' => 'div',
      'container_class' => 'menu-{menu slug}-container',
      'container_id' => '',
      'menu_class' => 'menu',
      'menu_id' => '',
      'echo' => true,
      'fallback_cb' => 'wp_page_menu',
      'before' => '',
      'after' => '',
      'link_before' => '',
      'link_after' => '',
      'items_wrap' => '<ul>%3$s</ul>',
      'depth' => 0,
      'walker' => '',
    )
  );
}

// Registerwp_theme Blank Navigation
function register_wp_theme_menu() {
  register_nav_menus(array( // Using array to specify more menus if needed
    'wp-header-menu' => __('Header Menu', 'wp_theme'), // Main Navigation
    'footer-offer' => __('Footer Oferta', 'wp_theme'), // Sidebar Navigation
    'lang-menu' => __('Lang Menu', 'wp_theme'), // Extra Navigation if needed (duplicate as many as you need!)
  ));
}

//Theme supports
if (!isset($content_width)) {
  $content_width = 900;
}

if (function_exists('add_theme_support')) {
  // Add Menu Support
  add_theme_support('menus');

  // Add Thumbnail Theme Support
  add_theme_support('post-thumbnails');
  add_image_size('large', 800, '', true); // Large Thumbnail
  add_image_size('medium', 250, '', true); // Medium Thumbnail
  add_image_size('small', 120, '', true); // Small Thumbnail

  // Add Support for Custom Backgrounds - Uncomment below if you're going to use
  add_theme_support('custom-background', array(
    'default-color' => 'FFF',
    'default-image' => get_template_directory_uri() . '/assets/img/bg-default.jpg',
  ));

  // Enables post and comment RSS feed links to head
  add_theme_support('automatic-feed-links');

  // Localisation Support
  load_theme_textdomain('wp_theme', get_template_directory() . '/languages');
}

function wp_theme_render_search_form($mobile_input_hidden = false) {
  if ($mobile_input_hidden) {
    get_template_part('searchform', 'mobile-input-hidden');
  } else {
    get_template_part('searchform');
  }
}