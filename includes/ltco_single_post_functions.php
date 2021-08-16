<?php

function ltco_first_category( $id = null, $class = null ) {
  $cat = get_the_category( $id );

  if ($class) $class = ' class="text-dark"';

  if ( !empty( $cat ) )
    return '<a href="' . esc_url( get_category_link( $cat[0]->term_id ) ) . '"'.$class.'>' . esc_html( $cat[0]->name ) . '</a>';
}

function ltco_class_the_tags($html){
  $html = str_replace('<a','<a class="text-dark"',$html);
  return $html;
}

add_filter('the_tags','ltco_class_the_tags');

function ltco_class_the_author($html){
  $html = str_replace('<a','<a class="text-dark"',$html);
  return $html;
}

add_filter('the_author_posts_link','ltco_class_the_author');
