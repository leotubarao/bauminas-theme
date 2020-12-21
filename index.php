<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section <?php post_class('container ltco_responsive_space_y'); ?>>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
