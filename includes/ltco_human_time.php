<?php

function ltco_human_time() {
  return human_time_diff( get_the_time('U'), current_time('timestamp') );
}
