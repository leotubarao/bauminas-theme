<?php
function ltco_bootstrap_wrap_oembed( $html ){
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return'<div class="embed-responsive embed-responsive-16by9">'.$html.'</div>';
}

add_filter( 'embed_oembed_html','ltco_bootstrap_wrap_oembed',10,1);
