<?php

function ltco_path($dirname) {
  $root = '/public';

  $dirname = ($dirname === 'svgs')
    ? "$root/images/$dirname"
    : "$root/$dirname";

  return get_template_directory_uri().$dirname;
}

function ltco_mailer( $phpmailer ) {
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.sendgrid.net';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 465;
  $phpmailer->Username = 'apikey';
  $phpmailer->Password = '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';
}

// add_action( 'phpmailer_init', 'ltco_mailer' );

function ltco_post_meta_edit($type = 'post', $margin = '') {
  edit_post_link("Editar $type","","","","badge badge-warning p-2 text-uppercase $margin");
}

/*=================================
=            Debug PHP            =
=================================*/

function debugPHP( $value ) {
  echo "<pre>";
  print_r($value);
  echo "</pre>";
}

function _ltco( $value = null ) {
  global $current_user;

  if ($current_user->user_login === 'ltco') {
    debugPHP($value);
  }
}

/*=====  End of Debug PHP  ======*/


function custom_excerpt_length( $length ) {
  return 20;
}

function new_excerpt_more($more) {
  return '...';
}

// add_filter( 'excerpt_length', 'custom_excerpt_length');

// add_filter('excerpt_more', 'new_excerpt_more');

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
 }
 add_filter('upload_mimes', 'cc_mime_types');

/*==================================
=            Shortcodes            =
==================================*/

function ltco_our_numbers() {
  ob_start();
  get_template_part('components/shortcodes/our_numbers');
  return ob_get_clean();
}
add_shortcode( 'ltco_our_numbers', 'ltco_our_numbers' );

function ltco_cat_units() {
  ob_start();
  get_template_part('components/shortcodes/cat_units');
  return ob_get_clean();
}
add_shortcode( 'ltco_cat_units', 'ltco_cat_units' );

function ltco_units() {
  ob_start();
  get_template_part('components/shortcodes/units');
  return ob_get_clean();
}
add_shortcode( 'ltco_units', 'ltco_units' );

function ltco_products() {
  ob_start();
  get_template_part('components/shortcodes/products');
  return ob_get_clean();
}
add_shortcode( 'ltco_products', 'ltco_products' );

function ltco_list_form() {
  ob_start();
  get_template_part('components/shortcodes/list_form');
  return ob_get_clean();
}
add_shortcode( 'ltco_list_form', 'ltco_list_form' );

/*=====  End of Shortcodes  ======*/

function add_class_the_tags( $html ) {
  return str_replace( '<a', '<a class="btn btn-outline-dark px-3 rounded-0"', $html );
}
// add_filter('the_tags', 'add_class_the_tags', 10, 1);

function ltco_pre_get_posts( $query ) {
  if ( is_home() && $query->is_main_query() ) {
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1 ;

    $query->set( 'post_type', 'post' );
    $query->set( 'paged', $paged );
    $query->set( 'category__not_in', [9] );
    // $query->set( 'posts_per_page', 4 ); // Para testes
  }
}
// add_action( 'pre_get_posts', 'ltco_pre_get_posts' );

/*=======================================
=            Themes Supports            =
=======================================*/

/*----------  Post thumbnail  ----------*/

add_theme_support( 'post-thumbnails' );
/*
update_option('thumbnail_size_w', 215);
update_option('thumbnail_size_h', 215);

add_image_size( 'post_blog_large', 1440, 630, array( 'center', 'center' ) );
*/
/*----------  Page Excerpt  ----------*/

add_post_type_support( 'page', 'excerpt' );

/*----------  Menu  ----------*/

add_theme_support( 'menus' );

register_nav_menus( array(
  'header-visible-nav' => 'Header Visible',
  'header-hidden-nav' => 'Header Hidden',
  'header-mobile-nav' => 'Header Mobile',
  'footer-primary-nav' => 'Footer Primary',
  'footer-secondary-nav' => 'Footer Secondary'
));

/*----------  Title Tag  ----------*/

add_theme_support( 'title-tag' );

/*=====  End of Themes Supports  ======*/

/*====================================
=            Theme Filter            =
====================================*/

add_filter('show_admin_bar', '__return_false');

/*=====  End of Theme Filter  ======*/

/*========================================
=            Remove WordPress            =
========================================*/

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/*=====  End of Remove WordPress  ======*/

/*=======================================
=            Includes Theme            =
=======================================*/

/*----------  Menu Style Bootstrap  ----------*/

require_once('includes/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php');


require_once('includes/ltco_get_head.php');

require_once('includes/ltco_product_category.php');

require_once('includes/ltco_body_class.php');

require_once('includes/ltco_acf_options.php');

require_once('includes/ltco_formarter_phone.php');

require_once('includes/ltco_translate.php');

require_once('includes/ltco_social_nav.php');

require_once('includes/ltco_thumbnail_image.php');

require_once('includes/ltco_title.php');

require_once('includes/ltco_post_navigation.php');

require_once('includes/ltco_custom_post_type.php');

require_once('includes/ltco_custom_taxonomy.php');

require_once('includes/ltco_query_vars.php');

require_once('includes/ltco_post_class.php');

require_once('includes/ltco_scripts_theme.php');

require_once('includes/ltco_customize_theme.php');

/*=====  End of Includes Theme  ======*/
