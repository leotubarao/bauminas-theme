<?php
function ltco_next_posts_link_attributes() {
  return 'class="btn btn-secondary d-inline-flex align-items-center ltco_pagination_icons next"';
}
add_filter('next_posts_link_attributes', 'ltco_next_posts_link_attributes');


function ltco_previous_posts_link_attributes() {
  return 'class="btn btn-secondary d-inline-flex align-items-center ltco_pagination_icons prev"';
}
add_filter('previous_posts_link_attributes', 'ltco_previous_posts_link_attributes');

function ltco_post_navigation() {
  $nav = '<nav aria-label="Post navigation">
    <ul class="list-unstyled d-flex justify-content-between mt-5">
      <li>
        '.get_previous_posts_link('<span class="d-none d-sm-inline">Posts mais novos</span>').'
      </li>
      <li>
        '.get_next_posts_link('<span class="d-none d-sm-inline">Posts mais antigos</span>').'
      </li>
    </ul>
  </nav>';

  return $nav;
}
