<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo get_option('web_navbar_ic'); ?>" type="image/x-icon">
  <meta name="description" content="">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/socicon/css/styles.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/theme/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/gallery/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>

<!-- Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo get_option('web_google_is'); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo get_option('web_google_is'); ?>');
</script>
<!-- /Google Analytics -->

<section class="menu cid-mensup" once="menu" id="menu">
  <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm" style="background: <?php echo get_option('web_navbar_bc'); ?>;">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <div class="hamburger">
      <span style="background-color: <?php echo get_option('web_navbar_hc'); ?>;"></span>
      <span style="background-color: <?php echo get_option('web_navbar_hc'); ?>;"></span>
      <span style="background-color: <?php echo get_option('web_navbar_hc'); ?>;"></span>
      <span style="background-color: <?php echo get_option('web_navbar_hc'); ?>;"></span>
    </div>
    </button>
      <div class="menu-logo">
        <div class="navbar-brand">
          <span class="navbar-logo">
            <a href="#">
              <img src="<?php echo get_option('web_navbar_ic'); ?>" alt="<?php bloginfo('name'); ?>" style="height: 3.8rem;">
            </a>
          </span>
          <span class="navbar-caption-wrap">
            <a class="navbar-caption text-white display-4" href="#">
              <?php bloginfo('name'); ?>
            </a>
          </span>
        </div>
        </div>
        <?php
          wp_nav_menu( array(
          'theme_location'  => 'mensup',
          'depth'           => 1, // 1 = Sin despliegue, 2 = Con despliegue.
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'navbarSupportedContent',
          'menu_class'      => 'navbar-nav nav-dropdown nav-right',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
  </nav>
</section>
<?php if ( is_active_sidebar( 'encabezado' ) ) : ?>
<?php dynamic_sidebar( 'encabezado' ); ?>
<?php endif; ?>