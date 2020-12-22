<?php
function ltco_get_image_ref() {
  return 'https://via.placeholder.com/1500/DBDBDB/000000?text=No+Image';
}

function styleInline( $image ) {
  return " style='background-image: url($image)'";
}

function ltco_thumbnail_image( $id = null ) {
  global $post;

  $ancestors = get_ancestors( get_the_ID($post->ID), 'page' );
  $post_data = get_post( $ancestors[0] );
  $id = ( $id || in_array(43, $ancestors) ) ? $id : $post_data->ID;

  if ( is_singular('products') ) return;

  if ( has_post_thumbnail( $id ) ) return get_the_post_thumbnail_url( $id );
}

function ltco_thumbnail_post( $params = null ) {
  if (is_array($params) && $params[0] === 'acf') {
    $params = array_slice($params, 1);
    return styleInline( ltco_the_field($params, 'image') );
  }

  if ($params === 'ref') return styleInline( ltco_get_image_ref() );

  if ( ltco_thumbnail_image( $params ) )
    return styleInline( ltco_thumbnail_image( $params ) );
}
