<?php get_header(); ?>
<!-- Título de categoría -->
<section class="mbr-section content5 cid-cattitulo" id="cattitulo">
  <div class="container">
    <div class="media-container-row">
      <div class="title col-12 col-md-8">
        <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><?php single_cat_title(); ?></h2>
      </div>
    </div>
  </div>
</section>
<!-- Listado de posts -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="cid-categoria" id="categoria">
  <figure class="mbr-figure container">
    <div class="image-block" style="width: 80%;">
      <?php if ( has_post_thumbnail() ) { ?>
        <a href="<?php the_permalink(); ?>"><img src="<?php echo atrib_imagen_destacada(); ?>" width="1400" alt=""></a>
      <?php } else { ?>
        <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/imgdes.png" width="1400" alt=""></a>
      <?php } ?>
  <figcaption class="mbr-figure-caption mbr-figure-caption-over">
    <div class="container pb-5 mbr-white align-center mbr-fonts-style display-5">
      <?php the_title(); ?>
      <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
    </div>
  </figcaption>
  </div>
  </figure>
</section>
<?php endwhile; ?>
<section class="mbr-section content8 cid-catboton" id="catboton">
<div class="container">
  <div class="media-container-row title">
    <div class="col-12 col-md-8">
      <div class="mbr-section-btn align-center">
      <?php if ( get_previous_posts_link() ) { ?>
        <p class="btn btn-primary-outline"><?php previous_posts_link( 'Anterior' ); ?></p>
      <?php } ?>
      <?php if ( get_next_posts_link() ) { ?>
        <p class="btn btn-primary-outline"><?php next_posts_link( 'Siguiente' ); ?></p>
      <?php } ?>
      </div>
    </div>
  </div>
</div>
</section>
<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>