<?php
function ltco_title() {
  $titleSearch = esc_html(get_search_query());

  if ( is_search() ) return "Resultados da pesquisa: $titleSearch";

  return get_the_title();
}
