<?php
function ltco_get_image_ref() {
  // return 'https://images.unsplash.com/photo-1572448910681-3341d74893d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2029&q=80';
  // return 'https://picsum.photos/id/119/3900/';
  return 'https://picsum.photos/id/1015/3900/';
}

function ltco_thumbnail_image( $id = null ) {

  if ( is_singular('products') ) return;

  if ( has_post_thumbnail( $id ) ) return get_the_post_thumbnail_url( $id );
}

function ltco_thumbnail_post( $param = null ) {
  function styleInline( $image ) {
    return " style='background-image: url($image)'";
  };

  if ($param === 'ref') return styleInline( ltco_get_image_ref() );

  if ( ltco_thumbnail_image() )
    return styleInline( ltco_thumbnail_image( $param ) );
}
