<?php
function ltco_nav_generator( $args = array() ) {
  if (!$args) {
    throw new Exception('Passe o argumentos em formato de Array: name, depth e class');
  }

  $navArgs = [
    'theme_location'  => $args->name,
    'depth'           => $args->delph,
    'menu_class'      => $args->class,
    'container'       => '',
    'echo'            => false,
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker()
  ];

  return wp_nav_menu( $navArgs );
}
