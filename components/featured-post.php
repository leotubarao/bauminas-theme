<?php
  $sticky = new WP_Query( array( 'p' =>  get_option( 'sticky_posts' )[0] ) );

  while ( $sticky->have_posts() ) : $sticky->the_post();
?>

<?php get_template_part('components/posts/post', null, array('class' => 'ltco_featured')); ?>

<?php endwhile; wp_reset_postdata(); ?>
