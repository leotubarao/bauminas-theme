<?php
function ltco_acf_show_admin(){
	global $current_user;

	if ( $current_user->user_login != 'ltco' ) {
		remove_menu_page( 'edit.php?post_type=acf-field-group' );
	}
}
add_action( 'admin_menu', 'ltco_acf_show_admin', 100 );

/*----------  Render Custom Field  ----------*/

function ltco_the_field( $params, $type = false ) {
  $typesSubArray = array( 'sub', 'subImage', 'subUrl' );
  $typesArray = array( 'image', 'url', 'subImage', 'subUrl' );

  $field = ( in_array($type, $typesSubArray) && !!$types ) ? get_sub_field( ...$params ) : get_field( ...$params );

  if ( !empty( $field ) ) {
    return ( in_array($type, $typesArray) ) ? $field['url'] : $field;
  }
}

/*----------  Carousel Button Link  ----------*/

function ltco_carousel_button_link( $field ) {

	if ( get_sub_field( $field.'__content__has_button' ) ) {

		$fields_button = get_sub_field( $field.'__content__button' );

		$button_style = $fields_button[$field.'__content__button__style'];
		$button_url = $fields_button[$field.'__content__button__url'];

		$is_native = strstr( $button_url, '%url_site%' );

		$button_url = ( $is_native ) ? str_replace( '%url_site%', get_home_url(), $button_url ) : $button_url;

		$external_link = ( !$is_native ) ? 'target="_blank" rel="external noopener noreferrer"' : '';

		$carousel_button_link .= "<a href='$button_url' class='btn btn-$button_style' title='".$fields_button[$field.'__content__button__description']."' $external_link>";
		$carousel_button_link .= $fields_button[$field.'__content__button__description'];
		$carousel_button_link .= '</a>';

		echo $carousel_button_link;

	}
}

function ltco_carousel_image_link( $field ) {

	if ( get_sub_field( $field.'__has_url_image' ) ) {

		$image_url = get_sub_field( $field.'__url_image' );

		$is_native = strstr( $image_url, '%url_site%' );

		$image_url = ( $is_native ) ? str_replace( '%url_site%', get_home_url(), $image_url ) : $image_url;

		$external_link = ( !$is_native ) ? 'target="_blank" rel="external noopener noreferrer"' : '';

		$carousel_image_link .= "<a href='$image_url' class='ltco_carousel__float_link' $external_link></a>";

		echo $carousel_image_link;

	}
}
