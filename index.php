<?php get_header(); ?>
<!-- Listado de posts -->
<?php if ( have_posts() ) : ?>
<section class="features17 cid-listposts" id="listposts">
<div class="container-fluid">
  <div class="media-container-row">
<?php while ( have_posts() ) : the_post(); ?>
<?php static $count = 0; if ($count == "3") { break; } else { ?>
    <div class="card p-3 col-12 col-md-6 col-lg-4">
      <div class="card-wrapper">
        <div class="card-img">
          <?php if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><img src="<?php echo atrib_imagen_destacada(); ?>" alt=""></a>
          <?php } else { ?>
            <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/imgdes.png" alt=""></a>
          <?php } ?>
        </div>
        <div class="card-box">
          <h4 class="card-title pb-3 mbr-fonts-style display-5"><?php lim_title($post->post_title, 40); ?></h4>
          <p class="mbr-text mbr-fonts-style display-7">
            <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
          </p>
        </div>
      </div>
    </div>
<?php $count++; } ?>
<?php endwhile; ?>
  </div>
</div>
<div class="container">
  <div class="media-container-row title">
    <div class="col-12 col-md-8">
      <div class="mbr-section-btn align-center">
        <?php if ( get_previous_posts_link() ) { ?>
        <p class="btn btn-md btn-primary-outline display-4">
          <span class="mbri-arrow-prev mbr-iconfont mbr-iconfont-btn"></span>
          <?php previous_posts_link( 'Anterior' ); ?>
        </p>
        <?php } ?>
        <?php if ( get_next_posts_link() ) { ?>
        <p class="btn btn-md btn-primary-outline display-4">
          <?php next_posts_link( 'Siguiente' ); ?>
          <span class="mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>
        </p>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
</section>
<?php else : ?>
<section class="mbr-section content4 cid-error404" id="error404">
  <div class="container">
    <div class="media-container-row">
      <div class="title col-12 col-md-12">
        <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1">
          <strong><?php _e( 'Ups!, no hay entradas.', 'web' ); ?></strong>
        </h1>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php
if ( is_active_sidebar( 'centro' ) ) {
  dynamic_sidebar( 'centro' );
}
?>
<?php get_footer(); ?>