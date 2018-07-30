<?php get_header(); ?>
<!-- Contenido de las Páginas -->
<?php if ( have_posts() ) : the_post(); ?>
<section>
  <?php the_content(); ?>
</section>
<?php endif; ?>
<!-- Fin Contenido de las Páginas -->
<?php
if ( is_active_sidebar( 'centro' ) ) {
  dynamic_sidebar( 'centro' );
}
?>
<?php get_footer(); ?>