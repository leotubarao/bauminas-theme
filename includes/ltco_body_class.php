<?php
function replacePostName($name) {
  if (empty($name)) return;
  return "ltco_body_".str_replace("-", "_", $name);
}

function ltco_body_class( $classes ) {
  global $post;

  $ancestors = get_ancestors( get_the_ID( $post ), 'page' );

  $conditionsLTCO = !is_home() && !is_front_page() && !is_404() && !is_category() && !is_search();

  if ( empty( $ancestors ) && $conditionsLTCO ) {
    array_push( $classes, replacePostName($post->post_name) );

    return $classes;

  } else {
    array_push( $classes, replacePostName($post->post_name) );

    foreach ( $ancestors as $ancestor ) {
      $post_data	= get_post( $ancestor );
      array_push( $classes, replacePostName($post_data->post_name) );
    }

    return $classes;
  }
}

add_filter( 'body_class', 'ltco_body_class' );

function ltco_body_class_terms( $classes ) {
  global $post;

  if ( is_singular('products') ) {
    $the_terms = get_the_terms( get_the_ID($post), 'line-products' );
    $termsParent = get_term_by( 'id', $the_terms[0]->parent, 'line-products' );

    $cond = $termsParent->slug;

    $classTerms = 'blue';

    if ($the_terms[0]->slug !== 'bausan' && $cond === 'aguas') $classTerms = 'orange';

    if ($cond === 'agro') $classTerms = 'green';

    if ($cond === 'mineracao') $classTerms = 'brown';

    array_push( $classes, replacePostName("term_$classTerms") );
  }

  return $classes;
}

add_filter( 'body_class', 'ltco_body_class_terms' );

