<?php

function ltco_theme_taxonomy( $term ) {
  global $post;

  $the_terms = get_the_terms( get_the_ID($post), $term );
  $termsParent = get_term_by( 'id', $the_terms[0]->parent, $term );

  $cond = $termsParent->slug;

  if ($the_terms[0]->slug !== 'bausan' && $cond === 'aguas') return 'orange';

  if ($cond === 'agro') return 'green';

  if ($cond === 'mineracao') return 'brown';

  return 'blue';
}

function ltco_parent_page() {
  global $post;

  $ancestors = get_ancestors( get_the_ID($post->ID), 'page' );

  $post_data = get_post( $ancestors[0] );

  return str_replace("bauminas-", "", $post_data->post_name);
}
