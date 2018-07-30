<?php get_header(); ?>
<?php if ( have_posts() ) : the_post(); ?>
<section class="header4 cid-articulo" id="articulo">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="media-content col-md-12">
        <h1 class="mbr-section-title align-center mbr-white pb-3 mbr-bold mbr-fonts-style display-1"><strong><?php the_title(); ?></strong></h1>
        <h3 class="mbr-section-subtitle align-center mbr-white mbr-light pb-3 mbr-fonts-style display-5">
          <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
          <address>Autor: <?php the_author_posts_link() ?></address>
        </h3>
      <div class="mbr-text align-center mbr-white pb-3">
        <p class="mbr-text mbr-fonts-style display-2"><?php the_content(); ?></p>
      </div>
      <div class="mbr-figure pt-3">
        <?php if ( has_post_thumbnail() ) { ?>
          <img src="<?php echo atrib_imagen_destacada(); ?>" alt="">
        <?php } else { ?>
          <img src="<?php bloginfo('template_url'); ?>/assets/images/imgdes.png" alt="">
        <?php } ?>
      </div>
      </div>
    </div>
  </div>
</section>
<?php else : ?>
  <p><?php _e('Ups!, Esta entrada no Existe.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>