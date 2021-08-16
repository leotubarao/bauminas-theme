<?php
function ltco_title() {
  $titleSearch = ltco_translate(['Resultados da pesquisa: ', ['en'=>'Search results: ', 'es'=>'Resultados de la búsqueda: ']]);

  $titleSearch .= esc_html(get_search_query());

  if ( is_home() || is_archive() ) return 'Blog BAUMINAS';

  if ( is_search() ) return $titleSearch;

  return get_the_title();
}
