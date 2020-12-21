<!DOCTYPE html>
<html lang="pt-br">
<?php get_head(); ?>
<body <?php body_class(); ?>>
<div id="root">
<?php
  get_template_part( 'components/navs/top' );
  get_template_part( 'components/navs/main' );
  ( is_front_page() ) ? get_template_part( 'components/headers/carousel' ) : get_template_part( 'components/headers/default' );
  get_template_part( 'components/company' );
?>
<main class="ltco_main">
