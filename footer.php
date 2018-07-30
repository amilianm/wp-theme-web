<?php dynamic_sidebar( 'piepagina' ); ?>

  <script src="<?php bloginfo('template_url'); ?>/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/popper/popper.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/tether/tether.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/smoothscroll/smooth-scroll.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/parallax/jarallax.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/dropdown/js/script.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/theme/js/script.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/mbr-clients-slider/mbr-clients-slider.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/gallery/player.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/gallery/script.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/slidervideo/script.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/formoid/formoid.min.js"></script>
 
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
 <input name="animation" type="hidden">

<?php if ( get_option( 'web_cookies_po' ) == '1' ) { ?>

  <script src="<?php bloginfo('template_url'); ?>/assets/cookies-alert-plugin/cookies-alert-core.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/cookies-alert-plugin/cookies-alert-script.js"></script>

  <input name="cookieData" type="hidden" data-cookie-text="Usamos cookies para brindarle una mejor experiencia. Lea nuestras <a href='#'>Política de cookies</a>.">

<?php } ?>

  </body>
</html>