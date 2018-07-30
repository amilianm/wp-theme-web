<?php
// Creando el Widget Into con Íconos
class wpb_widget_iwi extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget_iwi', 
 
// Widget name will appear in UI
__('MAC - Into con Íconos', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Muestra una Intro con Íconos', 'wpb_widget_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$ctitl = apply_filters( 'widget_ctitl', $instance['ctitl'] );
$subti = apply_filters( 'widget_subti', $instance['subti'] );
$csubt = apply_filters( 'widget_csubt', $instance['csubt'] );
$baopa = apply_filters( 'widget_baopa', $instance['baopa'] );
$bacol = apply_filters( 'widget_bacol', $instance['bacol'] );
$tbtnp = apply_filters( 'widget_tbtnp', $instance['tbtnp'] );
$ubtnp = apply_filters( 'widget_ubtnp', $instance['ubtnp'] );
$cbtnp = apply_filters( 'widget_cbtnp', $instance['cbtnp'] );
$ibtnp = apply_filters( 'widget_ibtnp', $instance['ibtnp'] );
$tbtns = apply_filters( 'widget_tbtns', $instance['tbtns'] );
$ubtns = apply_filters( 'widget_ubtns', $instance['ubtns'] );
$cbtns = apply_filters( 'widget_cbtns', $instance['cbtns'] );
$imgca = apply_filters( 'widget_imgca', $instance['imgca'] );
$icon1 = apply_filters( 'widget_icon1', $instance['icon1'] );
$icon2 = apply_filters( 'widget_icon2', $instance['icon2'] );
$icon3 = apply_filters( 'widget_icon3', $instance['icon3'] );
$icon4 = apply_filters( 'widget_icon4', $instance['icon4'] );
$tico1 = apply_filters( 'widget_tico1', $instance['tico1'] );
$tico2 = apply_filters( 'widget_tico2', $instance['tico2'] );
$tico3 = apply_filters( 'widget_tico3', $instance['tico3'] );
$tico4 = apply_filters( 'widget_tico4', $instance['tico4'] );
$uico1 = apply_filters( 'widget_uico1', $instance['uico1'] );
$uico2 = apply_filters( 'widget_uico2', $instance['uico2'] );
$uico3 = apply_filters( 'widget_uico3', $instance['uico3'] );
$uico4 = apply_filters( 'widget_uico4', $instance['uico4'] );
$cico1 = apply_filters( 'widget_cico1', $instance['cico1'] );
$cico2 = apply_filters( 'widget_cico2', $instance['cico2'] );
$cico3 = apply_filters( 'widget_cico3', $instance['cico3'] );
$cico4 = apply_filters( 'widget_cico4', $instance['cico4'] );
$ctic1 = apply_filters( 'widget_ctic1', $instance['ctic1'] );
$ctic2 = apply_filters( 'widget_ctic2', $instance['ctic2'] );
$ctic3 = apply_filters( 'widget_ctic3', $instance['ctic3'] );
$ctic4 = apply_filters( 'widget_ctic4', $instance['ctic4'] );
$padto = apply_filters( 'widget_padto', $instance['padto'] );
$padbo = apply_filters( 'widget_padbo', $instance['padbo'] );

// before and after widget arguments are defined by themes
//echo $args['before_widget'];
if ( ! empty( $title ) )
?>

<section class="header12 cid-introwico" id="introwico" style="padding-top:<?php echo $padto; ?>; padding-bottom:<?php echo $padbo; ?>; background-image: url(<?php bloginfo('template_url'); ?><?php echo $imgca; ?>); background-color: <?php echo $bacol; ?>; opacity: <?php echo $baopa; ?>;">
  <div class="container">
    <div class="media-container">
      <div class="col-md-12 align-center">
        <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-1" style="color: <?php echo $ctitl; ?>;"><?php echo $title; ?></h1>
        <p class="mbr-text pb-3 mbr-white mbr-fonts-style display-2" style="color: <?php echo $ctitl; ?>;"><?php echo $subti; ?></p>
      <div class="mbr-section-btn align-center py-2">
        <?php if ( ! empty( $tbtnp ) ) { ?>
      	<a class="btn btn-md <?php echo $cbtnp; ?> display-4" href="<?php echo $ubtnp; ?>">
          <?php if ( ! empty( $ibtnp ) ) { ?>
          <span class="<?php echo $ibtnp; ?> mbr-iconfont mbr-iconfont-btn"></span>
          <?php } ?>
          <?php echo $tbtnp; ?>
        </a>
        <?php } ?>
      </div>
      <div class="icons-media-container mbr-white">
        <div class="card col-12 col-md-6 col-lg-3">
          <div class="icon-block">
            <a href="<?php echo $uico1; ?>">
              <span class="mbr-iconfont <?php echo $icon1; ?>" style="color: <?php echo $cico1; ?>;"></span>
            </a>
          </div>
            <h5 class="mbr-fonts-style display-5" style="color: <?php echo $ctic1; ?>;"><?php echo $tico1; ?></h5>
        </div>
        <div class="card col-12 col-md-6 col-lg-3">
          <div class="icon-block">
            <a href="<?php echo $uico2; ?>">
              <span class="mbr-iconfont <?php echo $icon2; ?>" style="color: <?php echo $cico2; ?>;"></span>
            </a>
          </div>
            <h5 class="mbr-fonts-style display-5" style="color: <?php echo $ctic2; ?>;"><?php echo $tico2; ?></h5>
        </div>
        <div class="card col-12 col-md-6 col-lg-3">
          <div class="icon-block">
            <a href="<?php echo $uico3; ?>">
              <span class="mbr-iconfont <?php echo $icon3; ?>" style="color: <?php echo $cico3; ?>;"></span>
            </a>
          </div>
            <h5 class="mbr-fonts-style display-5" style="color: <?php echo $ctic3; ?>;"><?php echo $tico3; ?></h5>
        </div>
        <div class="card col-12 col-md-6 col-lg-3">
          <div class="icon-block">
            <a href="<?php echo $uico4; ?>">
              <span class="mbr-iconfont <?php echo $icon4; ?>" style="color: <?php echo $cico4; ?>;"></span>
            </a>
          </div>
            <h5 class="mbr-fonts-style display-5" style="color: <?php echo $ctic4; ?>;"><?php echo $tico4; ?></h5>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<?php
// Aquí es donde ejecuta el código y muestra la salida
//echo $args['after_widget'];
}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
$ctitl = $instance[ 'ctitl' ];
$subti = $instance[ 'subti' ];
$csubt = $instance[ 'csubt' ];
$baopa = $instance[ 'baopa' ];
$bacol = $instance[ 'bacol' ];
$tbtnp = $instance[ 'tbtnp' ];
$ubtnp = $instance[ 'ubtnp' ];
$cbtnp = $instance[ 'cbtnp' ];
$ibtnp = $instance[ 'ibtnp' ];
$imgca = $instance[ 'imgca' ];
$icon1 = $instance[ 'icon1' ];
$icon2 = $instance[ 'icon2' ];
$icon3 = $instance[ 'icon3' ];
$icon4 = $instance[ 'icon4' ];
$tico1 = $instance[ 'tico1' ];
$tico2 = $instance[ 'tico2' ];
$tico3 = $instance[ 'tico3' ];
$tico4 = $instance[ 'tico4' ];
$uico1 = $instance[ 'uico1' ];
$uico2 = $instance[ 'uico2' ];
$uico3 = $instance[ 'uico3' ];
$uico4 = $instance[ 'uico4' ];
$cico1 = $instance[ 'cico1' ];
$cico2 = $instance[ 'cico2' ];
$cico3 = $instance[ 'cico3' ];
$cico4 = $instance[ 'cico4' ];
$ctic1 = $instance[ 'ctic1' ];
$ctic2 = $instance[ 'ctic2' ];
$ctic3 = $instance[ 'ctic3' ];
$ctic4 = $instance[ 'ctic4' ];
$padto = $instance[ 'padto' ];
$padbo = $instance[ 'padbo' ];
}
else {
$title = __( 'Into con Íconos', 'wpb_widget_domain' );
$ctitl = __( '#FFFFFF', 'wpb_widget_domain' );
$subti = __( 'Introducción con imagen de fondo, superposición de color e iconos. Puede cambiar fácilmente los parámetros del Widget.', 'wpb_widget_domain' );
$csubt = __( '#FFFFFF', 'wpb_widget_domain' );
$baopa = __( '0.9', 'wpb_widget_domain' );
$bacol = __( '#128cb6', 'wpb_widget_domain' );
$tbtnp = __( 'DESCARGA', 'wpb_widget_domain' );
$ubtnp = __( '#', 'wpb_widget_domain' );
$cbtnp = __( 'btn-secondary', 'wpb_widget_domain' );
$ibtnp = __( 'mbri-like', 'wpb_widget_domain' );
$imgca = __( '/assets/images/img_iwi.svg', 'wpb_widget_domain' );
$icon1 = __( 'mbri-file', 'wpb_widget_domain' );
$icon2 = __( 'mbri-cart-add', 'wpb_widget_domain' );
$icon3 = __( 'mbri-briefcase', 'wpb_widget_domain' );
$icon4 = __( 'mbri-delivery', 'wpb_widget_domain' );
$tico1 = __( 'ICONO 1', 'wpb_widget_domain' );
$tico2 = __( 'ICONO 2', 'wpb_widget_domain' );
$tico3 = __( 'ICONO 3', 'wpb_widget_domain' );
$tico4 = __( 'ICONO 4', 'wpb_widget_domain' );
$uico1 = __( '#', 'wpb_widget_domain' );
$uico2 = __( '#', 'wpb_widget_domain' );
$uico3 = __( '#', 'wpb_widget_domain' );
$uico4 = __( '#', 'wpb_widget_domain' );
$cico1 = __( '#FFFFFF', 'wpb_widget_domain' );
$cico2 = __( '#FFFFFF', 'wpb_widget_domain' );
$cico3 = __( '#FFFFFF', 'wpb_widget_domain' );
$cico4 = __( '#FFFFFF', 'wpb_widget_domain' );
$ctic1 = __( '#FFFFFF', 'wpb_widget_domain' );
$ctic2 = __( '#FFFFFF', 'wpb_widget_domain' );
$ctic3 = __( '#FFFFFF', 'wpb_widget_domain' );
$ctic4 = __( '#FFFFFF', 'wpb_widget_domain' );
$padto = __( '90px', 'wpb_widget_domain' );
$padbo = __( '90px', 'wpb_widget_domain' );
}
// Widget Formulario Administrativo
?>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('.wcolorp').wpColorPicker();
});
</script>
<p>
<label><strong><?php _e( 'ATRIBUTOS DEL WIDGET' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'padto' ); ?>"><?php _e( 'Acolchado Superior:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'padto' ); ?>" id="<?php echo $this->get_field_id( 'padto' ); ?>" class="widefat">
<?php
// Matriz de opciones
$oppadto = array(
'0px' => __( '0px', 'wpb_widget_domain' ),
'30px' => __( '30px', 'wpb_widget_domain' ),
'60px' => __( '60px', 'wpb_widget_domain' ),
'90px' => __( '90px', 'wpb_widget_domain' ),
'120px' => __( '120px', 'wpb_widget_domain' ),
);
foreach ( $oppadto as $key => $napadto ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $padto, $key, false ) . '>'. $napadto . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'padbo' ); ?>"><?php _e( 'Acolchado Inferior:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'padbo' ); ?>" id="<?php echo $this->get_field_id( 'padbo' ); ?>" class="widefat">
<?php
// Matriz de opciones
$oppadbo = array(
'0px' => __( '0px', 'wpb_widget_domain' ),
'30px' => __( '30px', 'wpb_widget_domain' ),
'60px' => __( '60px', 'wpb_widget_domain' ),
'90px' => __( '90px', 'wpb_widget_domain' ),
'120px' => __( '120px', 'wpb_widget_domain' ),
);
foreach ( $oppadbo as $key => $napadbo ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $padbo, $key, false ) . '>'. $napadbo . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'bacol' ); ?>"><?php _e( 'Color de Fondo:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'bacol' ); ?>" name="<?php echo $this->get_field_name( 'bacol' ); ?>" type="text" value="<?php echo esc_attr( $bacol ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'baopa' ); ?>"><?php _e( 'Opacidad de Fondo:', 'wpb_widget_domain' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'baopa' ); ?>" name="<?php echo $this->get_field_name( 'baopa' ); ?>" type="range" min="0.1" max="1" step="0.1" value="<?php echo esc_attr( $baopa ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imgca' ); ?>"><?php _e( 'Imágen de Fondo:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'imgca' ); ?>" name="<?php echo $this->get_field_name( 'imgca' ); ?>" type="text" value="<?php echo esc_attr( $imgca ); ?>" />
<small><?php _e( 'Dejela en blanco si no quiere mostrarla...' ); ?></small>
</p>
<p>
<label><strong><?php _e( 'ATRIBUTOS DE LOS TEXTOS' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Título:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ctitl' ); ?>"><?php _e( 'Color del Título:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'ctitl' ); ?>" name="<?php echo $this->get_field_name( 'ctitl' ); ?>" type="text" value="<?php echo esc_attr( $ctitl ); ?>" />
</p>
<p>
<label for="<?php echo esc_attr( $this->get_field_id( 'subti' ) ); ?>"><?php _e( 'Sub Título:' ); ?></label>
<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'subti' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'subti' ) ); ?>"><?php echo wp_kses_post( $subti ); ?></textarea>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'csubt' ); ?>"><?php _e( 'Color del Sub Título:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'csubt' ); ?>" name="<?php echo $this->get_field_name( 'csubt' ); ?>" type="text" value="<?php echo esc_attr( $csubt ); ?>" />
</p>
<p>
<label><strong><?php _e( 'BOTÓN PRIMARIO' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tbtnp' ); ?>"><?php _e( 'Título Botón Primario:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tbtnp' ); ?>" name="<?php echo $this->get_field_name( 'tbtnp' ); ?>" type="text" value="<?php echo esc_attr( $tbtnp ); ?>" />
<small><?php _e( 'Dejelo en blanco si no quiere mostrarlo...' ); ?></small>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ubtnp' ); ?>"><?php _e( 'URL Botón Primario:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'ubtnp' ); ?>" name="<?php echo $this->get_field_name( 'ubtnp' ); ?>" type="text" value="<?php echo esc_attr( $ubtnp ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'cbtnp' ); ?>"><?php _e( 'Color Botón Primario:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'cbtnp' ); ?>" id="<?php echo $this->get_field_id( 'cbtnp' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opcbtnp = array(
'' => __( 'Selecione', 'wpb_widget_domain' ),
'btn-white' => __( 'Color Blanco', 'wpb_widget_domain' ),
'btn-white-outline' => __( 'Borde Blanco', 'wpb_widget_domain' ),
'btn-black' => __( 'Color Negro', 'wpb_widget_domain' ),
'btn-black-outline' => __( 'Borde Negro', 'wpb_widget_domain' ),
'btn-primary' => __( 'Color Azul', 'wpb_widget_domain' ),
'btn-primary-outline' => __( 'Borde Azul', 'wpb_widget_domain' ),
'btn-secondary' => __( 'Color Rojo', 'wpb_widget_domain' ),
'btn-secondary-outline' => __( 'Borde Rojo', 'wpb_widget_domain' ),
'btn-info' => __( 'Color Plateado', 'wpb_widget_domain' ),
'btn-info-outline' => __( 'Borde Plateado', 'wpb_widget_domain' ),
'btn-success' => __( 'Color Amarillo', 'wpb_widget_domain' ),
'btn-success-outline' => __( 'Borde Amarillo', 'wpb_widget_domain' ),
'btn-warning' => __( 'Color Gris', 'wpb_widget_domain' ),
'btn-warning-outline' => __( 'Borde Gris', 'wpb_widget_domain' ),
'btn-danger' => __( 'Color Oro', 'wpb_widget_domain' ),
'btn-danger-outline' => __( 'Borde Oro', 'wpb_widget_domain' ),
);
foreach ( $opcbtnp as $key => $nacbtnp ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $cbtnp, $key, false ) . '>'. $nacbtnp . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ibtnp' ); ?>"><?php _e( 'Ícono Botón Primario:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'ibtnp' ); ?>" id="<?php echo $this->get_field_id( 'ibtnp' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opibtnp = array(
'' => __( 'Selecione', 'wpb_widget_domain' ),
'mbri-add-submenu' => __( 'add-submenu', 'wpb_widget_domain' ),
'mbri-alert' => __( 'alert', 'wpb_widget_domain' ),
'mbri-align-center' => __( 'align-center', 'wpb_widget_domain' ),
'mbri-align-justify' => __( 'align-justify', 'wpb_widget_domain' ),
'mbri-align-left' => __( 'align-left', 'wpb_widget_domain' ),
'mbri-align-right' => __( 'align-right', 'wpb_widget_domain' ),
'mbri-android' => __( 'android', 'wpb_widget_domain' ),
'mbri-apple' => __( 'apple', 'wpb_widget_domain' ),
'mbri-arrow-down' => __( 'arrow-down', 'wpb_widget_domain' ),
'mbri-arrow-next' => __( 'arrow-next', 'wpb_widget_domain' ),
'mbri-arrow-prev' => __( 'arrow-prev', 'wpb_widget_domain' ),
'mbri-arrow-up' => __( 'arrow-up', 'wpb_widget_domain' ),
'mbri-bold' => __( 'bold', 'wpb_widget_domain' ),
'mbri-bookmark' => __( 'bookmark', 'wpb_widget_domain' ),
'mbri-bootstrap' => __( 'bootstrap', 'wpb_widget_domain' ),
'mbri-briefcase' => __( 'briefcase', 'wpb_widget_domain' ),
'mbri-browse' => __( 'browse', 'wpb_widget_domain' ),
'mbri-bulleted-list' => __( 'bulleted-list', 'wpb_widget_domain' ),
'mbri-calendar' => __( 'calendar', 'wpb_widget_domain' ),
'mbri-camera' => __( 'camera', 'wpb_widget_domain' ),
'mbri-cart-add' => __( 'cart-add', 'wpb_widget_domain' ),
'mbri-cart-full' => __( 'cart-full', 'wpb_widget_domain' ),
'mbri-cash' => __( 'cash', 'wpb_widget_domain' ),
'mbri-change-style' => __( 'change-style', 'wpb_widget_domain' ),
'mbri-chat' => __( 'chat', 'wpb_widget_domain' ),
'mbri-clock' => __( 'clock', 'wpb_widget_domain' ),
'mbri-close' => __( 'close', 'wpb_widget_domain' ),
'mbri-cloud' => __( 'cloud', 'wpb_widget_domain' ),
'mbri-code' => __( 'code', 'wpb_widget_domain' ),
'mbri-contact-form' => __( 'contact-form', 'wpb_widget_domain' ),
'mbri-credit-card' => __( 'credit-card', 'wpb_widget_domain' ),
'mbri-cursor-click' => __( 'cursor-click', 'wpb_widget_domain' ),
'mbri-cust-feedback' => __( 'cust-feedback', 'wpb_widget_domain' ),
'mbri-database' => __( 'database', 'wpb_widget_domain' ),
'mbri-delivery' => __( 'delivery', 'wpb_widget_domain' ),
'mbri-desktop' => __( 'desktop', 'wpb_widget_domain' ),
'mbri-devices' => __( 'devices', 'wpb_widget_domain' ),
'mbri-down' => __( 'down', 'wpb_widget_domain' ),
'mbri-download' => __( 'download', 'wpb_widget_domain' ),
'mbri-drag-n-drop' => __( 'drag-n-drop', 'wpb_widget_domain' ),
'mbri-drag-n-drop2' => __( 'drag-n-drop2', 'wpb_widget_domain' ),
'mbri-edit' => __( 'edit', 'wpb_widget_domain' ),
'mbri-edit2' => __( 'edit2', 'wpb_widget_domain' ),
'mbri-error' => __( 'error', 'wpb_widget_domain' ),
'mbri-extension' => __( 'extension', 'wpb_widget_domain' ),
'mbri-features' => __( 'features', 'wpb_widget_domain' ),
'mbri-file' => __( 'file', 'wpb_widget_domain' ),
'mbri-flag' => __( 'flag', 'wpb_widget_domain' ),
'mbri-folder' => __( 'folder', 'wpb_widget_domain' ),
'mbri-gift' => __( 'gift', 'wpb_widget_domain' ),
'mbri-github' => __( 'github', 'wpb_widget_domain' ),
'mbri-globe' => __( 'globe', 'wpb_widget_domain' ),
'mbri-globe-2' => __( 'globe-2', 'wpb_widget_domain' ),
'mbri-growing-chart' => __( 'growing-chart', 'wpb_widget_domain' ),
'mbri-hearth' => __( 'hearth', 'wpb_widget_domain' ),
'mbri-help' => __( 'help', 'wpb_widget_domain' ),
'mbri-home' => __( 'home', 'wpb_widget_domain' ),
'mbri-hot-cup' => __( 'hot-cup', 'wpb_widget_domain' ),
'mbri-idea' => __( 'idea', 'wpb_widget_domain' ),
'mbri-image-gallery' => __( 'image-gallery', 'wpb_widget_domain' ),
'mbri-image-slider' => __( 'image-slider', 'wpb_widget_domain' ),
'mbri-info' => __( 'info', 'wpb_widget_domain' ),
'mbri-italic' => __( 'italic', 'wpb_widget_domain' ),
'mbri-key' => __( 'key', 'wpb_widget_domain' ),
'mbri-laptop' => __( 'laptop', 'wpb_widget_domain' ),
'mbri-layers' => __( 'layers', 'wpb_widget_domain' ),
'mbri-left-right' => __( 'left-right', 'wpb_widget_domain' ),
'mbri-left' => __( 'left', 'wpb_widget_domain' ),
'mbri-letter' => __( 'letter', 'wpb_widget_domain' ),
'mbri-like' => __( 'like', 'wpb_widget_domain' ),
'mbri-link' => __( 'link', 'wpb_widget_domain' ),
'mbri-lock' => __( 'lock', 'wpb_widget_domain' ),
'mbri-login' => __( 'login', 'wpb_widget_domain' ),
'mbri-logout' => __( 'logout', 'wpb_widget_domain' ),
'mbri-magic-stick' => __( 'magic-stick', 'wpb_widget_domain' ),
'mbri-map-pin' => __( 'map-pin', 'wpb_widget_domain' ),
'mbri-menu' => __( 'menu', 'wpb_widget_domain' ),
'mbri-mobile' => __( 'mobile', 'wpb_widget_domain' ),
'mbri-mobile2' => __( 'mobile2', 'wpb_widget_domain' ),
'mbri-mobirise' => __( 'mobirise', 'wpb_widget_domain' ),
'mbri-more-horizontal' => __( 'more-horizontal', 'wpb_widget_domain' ),
'mbri-more-vertical' => __( 'more-vertical', 'wpb_widget_domain' ),
'mbri-music' => __( 'music', 'wpb_widget_domain' ),
'mbri-new-file' => __( 'new-file', 'wpb_widget_domain' ),
'mbri-numbered-list' => __( 'numbered-list', 'wpb_widget_domain' ),
'mbri-opened-folder' => __( 'opened-folder', 'wpb_widget_domain' ),
'mbri-pages' => __( 'pages', 'wpb_widget_domain' ),
'mbri-paper-plane' => __( 'paper-plane', 'wpb_widget_domain' ),
'mbri-paperclip' => __( 'paperclip', 'wpb_widget_domain' ),
'mbri-photo' => __( 'photo', 'wpb_widget_domain' ),
'mbri-photos' => __( 'photos', 'wpb_widget_domain' ),
'mbri-pin' => __( 'pin', 'wpb_widget_domain' ),
'mbri-play' => __( 'play', 'wpb_widget_domain' ),
'mbri-plus' => __( 'plus', 'wpb_widget_domain' ),
'mbri-preview' => __( 'preview', 'wpb_widget_domain' ),
'mbri-print' => __( 'print', 'wpb_widget_domain' ),
'mbri-protect' => __( 'protect', 'wpb_widget_domain' ),
'mbri-question' => __( 'question', 'wpb_widget_domain' ),
'mbri-quote-left' => __( 'quote-left', 'wpb_widget_domain' ),
'mbri-quote-right' => __( 'quote-right', 'wpb_widget_domain' ),
'mbri-refresh' => __( 'refresh', 'wpb_widget_domain' ),
'mbri-responsive' => __( 'responsive', 'wpb_widget_domain' ),
'mbri-right' => __( 'right', 'wpb_widget_domain' ),
'mbri-rocket' => __( 'rocket', 'wpb_widget_domain' ),
'mbri-sad-face' => __( 'sad-face', 'wpb_widget_domain' ),
'mbri-sale' => __( 'sale', 'wpb_widget_domain' ),
'mbri-save' => __( 'save', 'wpb_widget_domain' ),
'mbri-search' => __( 'search', 'wpb_widget_domain' ),
'mbri-setting' => __( 'setting', 'wpb_widget_domain' ),
'mbri-setting2' => __( 'setting2', 'wpb_widget_domain' ),
'mbri-setting3' => __( 'setting3', 'wpb_widget_domain' ),
'mbri-share' => __( 'share', 'wpb_widget_domain' ),
'mbri-shopping-bag' => __( 'shopping-bag', 'wpb_widget_domain' ),
'mbri-shopping-basket' => __( 'shopping-basket', 'wpb_widget_domain' ),
'mbri-shopping-cart' => __( 'shopping-cart', 'wpb_widget_domain' ),
'mbri-sites' => __( 'sites', 'wpb_widget_domain' ),
'mbri-smile-face' => __( 'smile-face', 'wpb_widget_domain' ),
'mbri-speed' => __( 'speed', 'wpb_widget_domain' ),
'mbri-star' => __( 'star', 'wpb_widget_domain' ),
'mbri-success' => __( 'success', 'wpb_widget_domain' ),
'mbri-sun' => __( 'sun', 'wpb_widget_domain' ),
'mbri-sun2' => __( 'sun2', 'wpb_widget_domain' ),
'mbri-tablet' => __( 'tablet', 'wpb_widget_domain' ),
'mbri-tablet-vertical' => __( 'tablet-vertical', 'wpb_widget_domain' ),
'mbri-target' => __( 'target', 'wpb_widget_domain' ),
'mbri-timer' => __( 'timer', 'wpb_widget_domain' ),
'mbri-to-ftp' => __( 'to-ftp', 'wpb_widget_domain' ),
'mbri-to-local-drive' => __( 'to-local-drive', 'wpb_widget_domain' ),
'mbri-touch-swipe' => __( 'touch-swipe', 'wpb_widget_domain' ),
'mbri-touch' => __( 'touch', 'wpb_widget_domain' ),
'mbri-trash' => __( 'trash', 'wpb_widget_domain' ),
'mbri-underline' => __( 'underline', 'wpb_widget_domain' ),
'mbri-unlink' => __( 'unlink', 'wpb_widget_domain' ),
'mbri-unlock' => __( 'unlock', 'wpb_widget_domain' ),
'mbri-up-down' => __( 'up-down', 'wpb_widget_domain' ),
'mbri-up' => __( 'up', 'wpb_widget_domain' ),
'mbri-update' => __( 'update', 'wpb_widget_domain' ),
'mbri-upload' => __( 'upload', 'wpb_widget_domain' ),
'mbri-user' => __( 'user', 'wpb_widget_domain' ),
'mbri-user2' => __( 'user2', 'wpb_widget_domain' ),
'mbri-users' => __( 'users', 'wpb_widget_domain' ),
'mbri-video' => __( 'video', 'wpb_widget_domain' ),
'mbri-video-play' => __( 'video-play', 'wpb_widget_domain' ),
'mbri-watch' => __( 'watch', 'wpb_widget_domain' ),
'mbri-website-theme' => __( 'website-theme', 'wpb_widget_domain' ),
'mbri-wifi' => __( 'wifi', 'wpb_widget_domain' ),
'mbri-windows' => __( 'windows', 'wpb_widget_domain' ),
'mbri-zoom-out' => __( 'zoom-out', 'wpb_widget_domain' ),
'mbri-redo' => __( 'redo', 'wpb_widget_domain' ),
'mbri-undo' => __( 'undo', 'wpb_widget_domain' ),
'socicon-modelmayhem' => __( 'modelmayhem', 'wpb_widget_domain' ),
'socicon-mixcloud' => __( 'mixcloud', 'wpb_widget_domain' ),
'socicon-drupal' => __( 'drupal', 'wpb_widget_domain' ),
'socicon-swarm' => __( 'swarm', 'wpb_widget_domain' ),
'socicon-istock' => __( 'istock', 'wpb_widget_domain' ),
'socicon-yammer' => __( 'yammer', 'wpb_widget_domain' ),
'socicon-ello' => __( 'ello', 'wpb_widget_domain' ),
'socicon-stackoverflow' => __( 'stackoverflow', 'wpb_widget_domain' ),
'socicon-persona' => __( 'persona', 'wpb_widget_domain' ),
'socicon-triplej' => __( 'triplej', 'wpb_widget_domain' ),
'socicon-houzz' => __( 'houzz', 'wpb_widget_domain' ),
'socicon-rss' => __( 'rss', 'wpb_widget_domain' ),
'socicon-paypal' => __( 'paypal', 'wpb_widget_domain' ),
'socicon-odnoklassniki' => __( 'odnoklassniki', 'wpb_widget_domain' ),
'socicon-airbnb' => __( 'airbnb', 'wpb_widget_domain' ),
'socicon-periscope' => __( 'periscope', 'wpb_widget_domain' ),
'socicon-outlook' => __( 'outlook', 'wpb_widget_domain' ),
'socicon-coderwall' => __( 'coderwall', 'wpb_widget_domain' ),
'socicon-tripadvisor' => __( 'tripadvisor', 'wpb_widget_domain' ),
'socicon-appnet' => __( 'appnet', 'wpb_widget_domain' ),
'socicon-goodreads' => __( 'goodreads', 'wpb_widget_domain' ),
'socicon-tripit' => __( 'tripit', 'wpb_widget_domain' ),
'socicon-lanyrd' => __( 'lanyrd', 'wpb_widget_domain' ),
'socicon-slideshare' => __( 'slideshare', 'wpb_widget_domain' ),
'socicon-buffer' => __( 'buffer', 'wpb_widget_domain' ),
'socicon-disqus' => __( 'disqus', 'wpb_widget_domain' ),
'socicon-vkontakte' => __( 'vkontakte', 'wpb_widget_domain' ),
'socicon-whatsapp' => __( 'whatsapp', 'wpb_widget_domain' ),
'socicon-patreon' => __( 'patreon', 'wpb_widget_domain' ),
'socicon-storehouse' => __( 'storehouse', 'wpb_widget_domain' ),
'socicon-pocket' => __( 'pocket', 'wpb_widget_domain' ),
'socicon-mail' => __( 'mail', 'wpb_widget_domain' ),
'socicon-blogger' => __( 'blogger', 'wpb_widget_domain' ),
'socicon-technorati' => __( 'technorati', 'wpb_widget_domain' ),
'socicon-reddit' => __( 'reddit', 'wpb_widget_domain' ),
'socicon-dribbble' => __( 'dribbble', 'wpb_widget_domain' ),
'socicon-stumbleupon' => __( 'stumbleupon', 'wpb_widget_domain' ),
'socicon-digg' => __( 'digg', 'wpb_widget_domain' ),
'socicon-envato' => __( 'envato', 'wpb_widget_domain' ),
'socicon-behance' => __( 'behance', 'wpb_widget_domain' ),
'socicon-delicious' => __( 'delicious', 'wpb_widget_domain' ),
'socicon-deviantart' => __( 'deviantart', 'wpb_widget_domain' ),
'socicon-forrst' => __( 'forrst', 'wpb_widget_domain' ),
'socicon-play' => __( 'play', 'wpb_widget_domain' ),
'socicon-zerply' => __( 'zerply', 'wpb_widget_domain' ),
'socicon-wikipedia' => __( 'wikipedia', 'wpb_widget_domain' ),
'socicon-apple' => __( 'apple', 'wpb_widget_domain' ),
'socicon-flattr' => __( 'flattr', 'wpb_widget_domain' ),
'socicon-github' => __( 'github', 'wpb_widget_domain' ),
'socicon-renren' => __( 'renren', 'wpb_widget_domain' ),
'socicon-friendfeed' => __( 'friendfeed', 'wpb_widget_domain' ),
'socicon-newsvine' => __( 'newsvine', 'wpb_widget_domain' ),
'socicon-identica' => __( 'identica', 'wpb_widget_domain' ),
'socicon-bebo' => __( 'bebo', 'wpb_widget_domain' ),
'socicon-zynga' => __( 'zynga', 'wpb_widget_domain' ),
'socicon-steam' => __( 'steam', 'wpb_widget_domain' ),
'socicon-xbox' => __( 'xbox', 'wpb_widget_domain' ),
'socicon-windows' => __( 'windows', 'wpb_widget_domain' ),
'socicon-qq' => __( 'qq', 'wpb_widget_domain' ),
'socicon-douban' => __( 'douban', 'wpb_widget_domain' ),
'socicon-meetup' => __( 'meetup', 'wpb_widget_domain' ),
'socicon-playstation' => __( 'playstation', 'wpb_widget_domain' ),
'socicon-android' => __( 'android', 'wpb_widget_domain' ),
'socicon-snapchat' => __( 'snapchat', 'wpb_widget_domain' ),
'socicon-twitter' => __( 'twitter', 'wpb_widget_domain' ),
'socicon-facebook' => __( 'facebook', 'wpb_widget_domain' ),
'socicon-googleplus' => __( 'googleplus', 'wpb_widget_domain' ),
'socicon-pinterest' => __( 'pinterest', 'wpb_widget_domain' ),
'socicon-foursquare' => __( 'foursquare', 'wpb_widget_domain' ),
'socicon-yahoo' => __( 'yahoo', 'wpb_widget_domain' ),
'socicon-skype' => __( 'skype', 'wpb_widget_domain' ),
'socicon-yelp' => __( 'yelp', 'wpb_widget_domain' ),
'socicon-feedburner' => __( 'feedburner', 'wpb_widget_domain' ),
'socicon-linkedin' => __( 'linkedin', 'wpb_widget_domain' ),
'socicon-viadeo' => __( 'viadeo', 'wpb_widget_domain' ),
'socicon-xing' => __( 'xing', 'wpb_widget_domain' ),
'socicon-myspace' => __( 'myspace', 'wpb_widget_domain' ),
'socicon-soundcloud' => __( 'soundcloud', 'wpb_widget_domain' ),
'socicon-spotify' => __( 'spotify', 'wpb_widget_domain' ),
'socicon-grooveshark' => __( 'grooveshark', 'wpb_widget_domain' ),
'socicon-lastfm' => __( 'lastfm', 'wpb_widget_domain' ),
'socicon-youtube' => __( 'youtube', 'wpb_widget_domain' ),
'socicon-vimeo' => __( 'vimeo', 'wpb_widget_domain' ),
'socicon-dailymotion' => __( 'dailymotion', 'wpb_widget_domain' ),
'socicon-vine' => __( 'vine', 'wpb_widget_domain' ),
'socicon-flickr' => __( 'flickr', 'wpb_widget_domain' ),
'socicon-500px' => __( '500px', 'wpb_widget_domain' ),
'socicon-wordpress' => __( 'wordpress', 'wpb_widget_domain' ),
'socicon-tumblr' => __( 'tumblr', 'wpb_widget_domain' ),
'socicon-twitch' => __( 'twitch', 'wpb_widget_domain' ),
'socicon-8tracks' => __( '8tracks', 'wpb_widget_domain' ),
'socicon-amazon' => __( 'amazon', 'wpb_widget_domain' ),
'socicon-icq' => __( 'icq', 'wpb_widget_domain' ),
'socicon-smugmug' => __( 'smugmug', 'wpb_widget_domain' ),
'socicon-ravelry' => __( 'ravelry', 'wpb_widget_domain' ),
'socicon-weibo' => __( 'weibo', 'wpb_widget_domain' ),
'socicon-baidu' => __( 'baidu', 'wpb_widget_domain' ),
'socicon-angellist' => __( 'angellist', 'wpb_widget_domain' ),
'socicon-ebay' => __( 'ebay', 'wpb_widget_domain' ),
'socicon-imdb' => __( 'imdb', 'wpb_widget_domain' ),
'socicon-stayfriends' => __( 'stayfriends', 'wpb_widget_domain' ),
'socicon-residentadvisor' => __( 'residentadvisor', 'wpb_widget_domain' ),
'socicon-google' => __( 'google', 'wpb_widget_domain' ),
'socicon-yandex' => __( 'yandex', 'wpb_widget_domain' ),
'socicon-sharethis' => __( 'sharethis', 'wpb_widget_domain' ),
'socicon-bandcamp' => __( 'bandcamp', 'wpb_widget_domain' ),
'socicon-itunes' => __( 'itunes', 'wpb_widget_domain' ),
'socicon-deezer' => __( 'deezer', 'wpb_widget_domain' ),
'socicon-telegram' => __( 'telegram', 'wpb_widget_domain' ),
'socicon-openid' => __( 'openid', 'wpb_widget_domain' ),
'socicon-amplement' => __( 'amplement', 'wpb_widget_domain' ),
'socicon-viber' => __( 'viber', 'wpb_widget_domain' ),
'socicon-zomato' => __( 'zomato', 'wpb_widget_domain' ),
'socicon-draugiem' => __( 'draugiem', 'wpb_widget_domain' ),
'socicon-endomodo' => __( 'endomodo', 'wpb_widget_domain' ),
'socicon-filmweb' => __( 'filmweb', 'wpb_widget_domain' ),
'socicon-stackexchange' => __( 'stackexchange', 'wpb_widget_domain' ),
'socicon-wykop' => __( 'wykop', 'wpb_widget_domain' ),
'socicon-teamspeak' => __( 'teamspeak', 'wpb_widget_domain' ),
'socicon-teamviewer' => __( 'teamviewer', 'wpb_widget_domain' ),
'socicon-ventrilo' => __( 'ventrilo', 'wpb_widget_domain' ),
'socicon-younow' => __( 'younow', 'wpb_widget_domain' ),
'socicon-raidcall' => __( 'raidcall', 'wpb_widget_domain' ),
'socicon-mumble' => __( 'mumble', 'wpb_widget_domain' ),
'socicon-medium' => __( 'medium', 'wpb_widget_domain' ),
'socicon-bebee' => __( 'bebee', 'wpb_widget_domain' ),
'socicon-hitbox' => __( 'hitbox', 'wpb_widget_domain' ),
'socicon-reverbnation' => __( 'reverbnation', 'wpb_widget_domain' ),
'socicon-formulr' => __( 'formulr', 'wpb_widget_domain' ),
'socicon-instagram' => __( 'instagram', 'wpb_widget_domain' ),
'socicon-battlenet' => __( 'battlenet', 'wpb_widget_domain' ),
'socicon-chrome' => __( 'chrome', 'wpb_widget_domain' ),
'socicon-discord' => __( 'discord', 'wpb_widget_domain' ),
'socicon-issuu' => __( 'issuu', 'wpb_widget_domain' ),
'socicon-macos' => __( 'macos', 'wpb_widget_domain' ),
'socicon-firefox' => __( 'firefox', 'wpb_widget_domain' ),
'socicon-opera' => __( 'opera', 'wpb_widget_domain' ),
'socicon-keybase' => __( 'keybase', 'wpb_widget_domain' ),
'socicon-alliance' => __( 'alliance', 'wpb_widget_domain' ),
'socicon-livejournal' => __( 'livejournal', 'wpb_widget_domain' ),
'socicon-googlephotos' => __( 'googlephotos', 'wpb_widget_domain' ),
'socicon-horde' => __( 'horde', 'wpb_widget_domain' ),
'socicon-etsy' => __( 'etsy', 'wpb_widget_domain' ),
'socicon-zapier' => __( 'zapier', 'wpb_widget_domain' ),
'socicon-google-scholar' => __( 'google-scholar', 'wpb_widget_domain' ),
'socicon-researchgate' => __( 'researchgate', 'wpb_widget_domain' ),
'socicon-wechat' => __( 'wechat', 'wpb_widget_domain' ),
'socicon-strava' => __( 'strava', 'wpb_widget_domain' ),
'socicon-line' => __( 'line', 'wpb_widget_domain' ),
'socicon-lyft' => __( 'lyft', 'wpb_widget_domain' ),
'socicon-uber' => __( 'uber', 'wpb_widget_domain' ),
'socicon-songkick' => __( 'songkick', 'wpb_widget_domain' ),
'socicon-viewbug' => __( 'viewbug', 'wpb_widget_domain' ),
'socicon-googlegroups' => __( 'googlegroups', 'wpb_widget_domain' ),
'socicon-quora' => __( 'quora', 'wpb_widget_domain' ),
'socicon-diablo' => __( 'diablo', 'wpb_widget_domain' ),
'socicon-blizzard' => __( 'blizzard', 'wpb_widget_domain' ),
'socicon-hearthstone' => __( 'hearthstone', 'wpb_widget_domain' ),
'socicon-heroes' => __( 'heroes', 'wpb_widget_domain' ),
'socicon-overwatch' => __( 'overwatch', 'wpb_widget_domain' ),
'socicon-warcraft' => __( 'warcraft', 'wpb_widget_domain' ),
'socicon-starcraft' => __( 'starcraft', 'wpb_widget_domain' ),
'socicon-beam' => __( 'beam', 'wpb_widget_domain' ),
'socicon-curse' => __( 'curse', 'wpb_widget_domain' ),
'socicon-player' => __( 'player', 'wpb_widget_domain' ),
'socicon-streamjar' => __( 'streamjar', 'wpb_widget_domain' ),
'socicon-nintendo' => __( 'nintendo', 'wpb_widget_domain' ),
'socicon-hellocoton' => __( 'hellocoton', 'wpb_widget_domain' ),
);
foreach ( $opibtnp as $key => $naibtnp ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $ibtnp, $key, false ) . '>'. $naibtnp . '</option>';
} ?>
</select>
</p>
<p>
<label><strong><?php _e( 'ATRIBUTO ÍCONO 1' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tico1' ); ?>"><?php _e( 'Título Ícono 01:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tico1' ); ?>" name="<?php echo $this->get_field_name( 'tico1' ); ?>" type="text" value="<?php echo esc_attr( $tico1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ctic1' ); ?>"><?php _e( 'Color Texto Ícono 01:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'ctic1' ); ?>" name="<?php echo $this->get_field_name( 'ctic1' ); ?>" type="text" value="<?php echo esc_attr( $ctic1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'uico1' ); ?>"><?php _e( 'URL Ícono 01:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'uico1' ); ?>" name="<?php echo $this->get_field_name( 'uico1' ); ?>" type="text" value="<?php echo esc_attr( $uico1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'cico1' ); ?>"><?php _e( 'Color Ícono 01:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'cico1' ); ?>" name="<?php echo $this->get_field_name( 'cico1' ); ?>" type="text" value="<?php echo esc_attr( $cico1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'icon1' ); ?>"><?php _e( 'Ícono 01:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'icon1' ); ?>" id="<?php echo $this->get_field_id( 'icon1' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opicon1 = array(
'' => __( 'Selecione', 'wpb_widget_domain' ),
'mbri-add-submenu' => __( 'add-submenu', 'wpb_widget_domain' ),
'mbri-alert' => __( 'alert', 'wpb_widget_domain' ),
'mbri-align-center' => __( 'align-center', 'wpb_widget_domain' ),
'mbri-align-justify' => __( 'align-justify', 'wpb_widget_domain' ),
'mbri-align-left' => __( 'align-left', 'wpb_widget_domain' ),
'mbri-align-right' => __( 'align-right', 'wpb_widget_domain' ),
'mbri-android' => __( 'android', 'wpb_widget_domain' ),
'mbri-apple' => __( 'apple', 'wpb_widget_domain' ),
'mbri-arrow-down' => __( 'arrow-down', 'wpb_widget_domain' ),
'mbri-arrow-next' => __( 'arrow-next', 'wpb_widget_domain' ),
'mbri-arrow-prev' => __( 'arrow-prev', 'wpb_widget_domain' ),
'mbri-arrow-up' => __( 'arrow-up', 'wpb_widget_domain' ),
'mbri-bold' => __( 'bold', 'wpb_widget_domain' ),
'mbri-bookmark' => __( 'bookmark', 'wpb_widget_domain' ),
'mbri-bootstrap' => __( 'bootstrap', 'wpb_widget_domain' ),
'mbri-briefcase' => __( 'briefcase', 'wpb_widget_domain' ),
'mbri-browse' => __( 'browse', 'wpb_widget_domain' ),
'mbri-bulleted-list' => __( 'bulleted-list', 'wpb_widget_domain' ),
'mbri-calendar' => __( 'calendar', 'wpb_widget_domain' ),
'mbri-camera' => __( 'camera', 'wpb_widget_domain' ),
'mbri-cart-add' => __( 'cart-add', 'wpb_widget_domain' ),
'mbri-cart-full' => __( 'cart-full', 'wpb_widget_domain' ),
'mbri-cash' => __( 'cash', 'wpb_widget_domain' ),
'mbri-change-style' => __( 'change-style', 'wpb_widget_domain' ),
'mbri-chat' => __( 'chat', 'wpb_widget_domain' ),
'mbri-clock' => __( 'clock', 'wpb_widget_domain' ),
'mbri-close' => __( 'close', 'wpb_widget_domain' ),
'mbri-cloud' => __( 'cloud', 'wpb_widget_domain' ),
'mbri-code' => __( 'code', 'wpb_widget_domain' ),
'mbri-contact-form' => __( 'contact-form', 'wpb_widget_domain' ),
'mbri-credit-card' => __( 'credit-card', 'wpb_widget_domain' ),
'mbri-cursor-click' => __( 'cursor-click', 'wpb_widget_domain' ),
'mbri-cust-feedback' => __( 'cust-feedback', 'wpb_widget_domain' ),
'mbri-database' => __( 'database', 'wpb_widget_domain' ),
'mbri-delivery' => __( 'delivery', 'wpb_widget_domain' ),
'mbri-desktop' => __( 'desktop', 'wpb_widget_domain' ),
'mbri-devices' => __( 'devices', 'wpb_widget_domain' ),
'mbri-down' => __( 'down', 'wpb_widget_domain' ),
'mbri-download' => __( 'download', 'wpb_widget_domain' ),
'mbri-drag-n-drop' => __( 'drag-n-drop', 'wpb_widget_domain' ),
'mbri-drag-n-drop2' => __( 'drag-n-drop2', 'wpb_widget_domain' ),
'mbri-edit' => __( 'edit', 'wpb_widget_domain' ),
'mbri-edit2' => __( 'edit2', 'wpb_widget_domain' ),
'mbri-error' => __( 'error', 'wpb_widget_domain' ),
'mbri-extension' => __( 'extension', 'wpb_widget_domain' ),
'mbri-features' => __( 'features', 'wpb_widget_domain' ),
'mbri-file' => __( 'file', 'wpb_widget_domain' ),
'mbri-flag' => __( 'flag', 'wpb_widget_domain' ),
'mbri-folder' => __( 'folder', 'wpb_widget_domain' ),
'mbri-gift' => __( 'gift', 'wpb_widget_domain' ),
'mbri-github' => __( 'github', 'wpb_widget_domain' ),
'mbri-globe' => __( 'globe', 'wpb_widget_domain' ),
'mbri-globe-2' => __( 'globe-2', 'wpb_widget_domain' ),
'mbri-growing-chart' => __( 'growing-chart', 'wpb_widget_domain' ),
'mbri-hearth' => __( 'hearth', 'wpb_widget_domain' ),
'mbri-help' => __( 'help', 'wpb_widget_domain' ),
'mbri-home' => __( 'home', 'wpb_widget_domain' ),
'mbri-hot-cup' => __( 'hot-cup', 'wpb_widget_domain' ),
'mbri-idea' => __( 'idea', 'wpb_widget_domain' ),
'mbri-image-gallery' => __( 'image-gallery', 'wpb_widget_domain' ),
'mbri-image-slider' => __( 'image-slider', 'wpb_widget_domain' ),
'mbri-info' => __( 'info', 'wpb_widget_domain' ),
'mbri-italic' => __( 'italic', 'wpb_widget_domain' ),
'mbri-key' => __( 'key', 'wpb_widget_domain' ),
'mbri-laptop' => __( 'laptop', 'wpb_widget_domain' ),
'mbri-layers' => __( 'layers', 'wpb_widget_domain' ),
'mbri-left-right' => __( 'left-right', 'wpb_widget_domain' ),
'mbri-left' => __( 'left', 'wpb_widget_domain' ),
'mbri-letter' => __( 'letter', 'wpb_widget_domain' ),
'mbri-like' => __( 'like', 'wpb_widget_domain' ),
'mbri-link' => __( 'link', 'wpb_widget_domain' ),
'mbri-lock' => __( 'lock', 'wpb_widget_domain' ),
'mbri-login' => __( 'login', 'wpb_widget_domain' ),
'mbri-logout' => __( 'logout', 'wpb_widget_domain' ),
'mbri-magic-stick' => __( 'magic-stick', 'wpb_widget_domain' ),
'mbri-map-pin' => __( 'map-pin', 'wpb_widget_domain' ),
'mbri-menu' => __( 'menu', 'wpb_widget_domain' ),
'mbri-mobile' => __( 'mobile', 'wpb_widget_domain' ),
'mbri-mobile2' => __( 'mobile2', 'wpb_widget_domain' ),
'mbri-mobirise' => __( 'mobirise', 'wpb_widget_domain' ),
'mbri-more-horizontal' => __( 'more-horizontal', 'wpb_widget_domain' ),
'mbri-more-vertical' => __( 'more-vertical', 'wpb_widget_domain' ),
'mbri-music' => __( 'music', 'wpb_widget_domain' ),
'mbri-new-file' => __( 'new-file', 'wpb_widget_domain' ),
'mbri-numbered-list' => __( 'numbered-list', 'wpb_widget_domain' ),
'mbri-opened-folder' => __( 'opened-folder', 'wpb_widget_domain' ),
'mbri-pages' => __( 'pages', 'wpb_widget_domain' ),
'mbri-paper-plane' => __( 'paper-plane', 'wpb_widget_domain' ),
'mbri-paperclip' => __( 'paperclip', 'wpb_widget_domain' ),
'mbri-photo' => __( 'photo', 'wpb_widget_domain' ),
'mbri-photos' => __( 'photos', 'wpb_widget_domain' ),
'mbri-pin' => __( 'pin', 'wpb_widget_domain' ),
'mbri-play' => __( 'play', 'wpb_widget_domain' ),
'mbri-plus' => __( 'plus', 'wpb_widget_domain' ),
'mbri-preview' => __( 'preview', 'wpb_widget_domain' ),
'mbri-print' => __( 'print', 'wpb_widget_domain' ),
'mbri-protect' => __( 'protect', 'wpb_widget_domain' ),
'mbri-question' => __( 'question', 'wpb_widget_domain' ),
'mbri-quote-left' => __( 'quote-left', 'wpb_widget_domain' ),
'mbri-quote-right' => __( 'quote-right', 'wpb_widget_domain' ),
'mbri-refresh' => __( 'refresh', 'wpb_widget_domain' ),
'mbri-responsive' => __( 'responsive', 'wpb_widget_domain' ),
'mbri-right' => __( 'right', 'wpb_widget_domain' ),
'mbri-rocket' => __( 'rocket', 'wpb_widget_domain' ),
'mbri-sad-face' => __( 'sad-face', 'wpb_widget_domain' ),
'mbri-sale' => __( 'sale', 'wpb_widget_domain' ),
'mbri-save' => __( 'save', 'wpb_widget_domain' ),
'mbri-search' => __( 'search', 'wpb_widget_domain' ),
'mbri-setting' => __( 'setting', 'wpb_widget_domain' ),
'mbri-setting2' => __( 'setting2', 'wpb_widget_domain' ),
'mbri-setting3' => __( 'setting3', 'wpb_widget_domain' ),
'mbri-share' => __( 'share', 'wpb_widget_domain' ),
'mbri-shopping-bag' => __( 'shopping-bag', 'wpb_widget_domain' ),
'mbri-shopping-basket' => __( 'shopping-basket', 'wpb_widget_domain' ),
'mbri-shopping-cart' => __( 'shopping-cart', 'wpb_widget_domain' ),
'mbri-sites' => __( 'sites', 'wpb_widget_domain' ),
'mbri-smile-face' => __( 'smile-face', 'wpb_widget_domain' ),
'mbri-speed' => __( 'speed', 'wpb_widget_domain' ),
'mbri-star' => __( 'star', 'wpb_widget_domain' ),
'mbri-success' => __( 'success', 'wpb_widget_domain' ),
'mbri-sun' => __( 'sun', 'wpb_widget_domain' ),
'mbri-sun2' => __( 'sun2', 'wpb_widget_domain' ),
'mbri-tablet' => __( 'tablet', 'wpb_widget_domain' ),
'mbri-tablet-vertical' => __( 'tablet-vertical', 'wpb_widget_domain' ),
'mbri-target' => __( 'target', 'wpb_widget_domain' ),
'mbri-timer' => __( 'timer', 'wpb_widget_domain' ),
'mbri-to-ftp' => __( 'to-ftp', 'wpb_widget_domain' ),
'mbri-to-local-drive' => __( 'to-local-drive', 'wpb_widget_domain' ),
'mbri-touch-swipe' => __( 'touch-swipe', 'wpb_widget_domain' ),
'mbri-touch' => __( 'touch', 'wpb_widget_domain' ),
'mbri-trash' => __( 'trash', 'wpb_widget_domain' ),
'mbri-underline' => __( 'underline', 'wpb_widget_domain' ),
'mbri-unlink' => __( 'unlink', 'wpb_widget_domain' ),
'mbri-unlock' => __( 'unlock', 'wpb_widget_domain' ),
'mbri-up-down' => __( 'up-down', 'wpb_widget_domain' ),
'mbri-up' => __( 'up', 'wpb_widget_domain' ),
'mbri-update' => __( 'update', 'wpb_widget_domain' ),
'mbri-upload' => __( 'upload', 'wpb_widget_domain' ),
'mbri-user' => __( 'user', 'wpb_widget_domain' ),
'mbri-user2' => __( 'user2', 'wpb_widget_domain' ),
'mbri-users' => __( 'users', 'wpb_widget_domain' ),
'mbri-video' => __( 'video', 'wpb_widget_domain' ),
'mbri-video-play' => __( 'video-play', 'wpb_widget_domain' ),
'mbri-watch' => __( 'watch', 'wpb_widget_domain' ),
'mbri-website-theme' => __( 'website-theme', 'wpb_widget_domain' ),
'mbri-wifi' => __( 'wifi', 'wpb_widget_domain' ),
'mbri-windows' => __( 'windows', 'wpb_widget_domain' ),
'mbri-zoom-out' => __( 'zoom-out', 'wpb_widget_domain' ),
'mbri-redo' => __( 'redo', 'wpb_widget_domain' ),
'mbri-undo' => __( 'undo', 'wpb_widget_domain' ),
'socicon-modelmayhem' => __( 'modelmayhem', 'wpb_widget_domain' ),
'socicon-mixcloud' => __( 'mixcloud', 'wpb_widget_domain' ),
'socicon-drupal' => __( 'drupal', 'wpb_widget_domain' ),
'socicon-swarm' => __( 'swarm', 'wpb_widget_domain' ),
'socicon-istock' => __( 'istock', 'wpb_widget_domain' ),
'socicon-yammer' => __( 'yammer', 'wpb_widget_domain' ),
'socicon-ello' => __( 'ello', 'wpb_widget_domain' ),
'socicon-stackoverflow' => __( 'stackoverflow', 'wpb_widget_domain' ),
'socicon-persona' => __( 'persona', 'wpb_widget_domain' ),
'socicon-triplej' => __( 'triplej', 'wpb_widget_domain' ),
'socicon-houzz' => __( 'houzz', 'wpb_widget_domain' ),
'socicon-rss' => __( 'rss', 'wpb_widget_domain' ),
'socicon-paypal' => __( 'paypal', 'wpb_widget_domain' ),
'socicon-odnoklassniki' => __( 'odnoklassniki', 'wpb_widget_domain' ),
'socicon-airbnb' => __( 'airbnb', 'wpb_widget_domain' ),
'socicon-periscope' => __( 'periscope', 'wpb_widget_domain' ),
'socicon-outlook' => __( 'outlook', 'wpb_widget_domain' ),
'socicon-coderwall' => __( 'coderwall', 'wpb_widget_domain' ),
'socicon-tripadvisor' => __( 'tripadvisor', 'wpb_widget_domain' ),
'socicon-appnet' => __( 'appnet', 'wpb_widget_domain' ),
'socicon-goodreads' => __( 'goodreads', 'wpb_widget_domain' ),
'socicon-tripit' => __( 'tripit', 'wpb_widget_domain' ),
'socicon-lanyrd' => __( 'lanyrd', 'wpb_widget_domain' ),
'socicon-slideshare' => __( 'slideshare', 'wpb_widget_domain' ),
'socicon-buffer' => __( 'buffer', 'wpb_widget_domain' ),
'socicon-disqus' => __( 'disqus', 'wpb_widget_domain' ),
'socicon-vkontakte' => __( 'vkontakte', 'wpb_widget_domain' ),
'socicon-whatsapp' => __( 'whatsapp', 'wpb_widget_domain' ),
'socicon-patreon' => __( 'patreon', 'wpb_widget_domain' ),
'socicon-storehouse' => __( 'storehouse', 'wpb_widget_domain' ),
'socicon-pocket' => __( 'pocket', 'wpb_widget_domain' ),
'socicon-mail' => __( 'mail', 'wpb_widget_domain' ),
'socicon-blogger' => __( 'blogger', 'wpb_widget_domain' ),
'socicon-technorati' => __( 'technorati', 'wpb_widget_domain' ),
'socicon-reddit' => __( 'reddit', 'wpb_widget_domain' ),
'socicon-dribbble' => __( 'dribbble', 'wpb_widget_domain' ),
'socicon-stumbleupon' => __( 'stumbleupon', 'wpb_widget_domain' ),
'socicon-digg' => __( 'digg', 'wpb_widget_domain' ),
'socicon-envato' => __( 'envato', 'wpb_widget_domain' ),
'socicon-behance' => __( 'behance', 'wpb_widget_domain' ),
'socicon-delicious' => __( 'delicious', 'wpb_widget_domain' ),
'socicon-deviantart' => __( 'deviantart', 'wpb_widget_domain' ),
'socicon-forrst' => __( 'forrst', 'wpb_widget_domain' ),
'socicon-play' => __( 'play', 'wpb_widget_domain' ),
'socicon-zerply' => __( 'zerply', 'wpb_widget_domain' ),
'socicon-wikipedia' => __( 'wikipedia', 'wpb_widget_domain' ),
'socicon-apple' => __( 'apple', 'wpb_widget_domain' ),
'socicon-flattr' => __( 'flattr', 'wpb_widget_domain' ),
'socicon-github' => __( 'github', 'wpb_widget_domain' ),
'socicon-renren' => __( 'renren', 'wpb_widget_domain' ),
'socicon-friendfeed' => __( 'friendfeed', 'wpb_widget_domain' ),
'socicon-newsvine' => __( 'newsvine', 'wpb_widget_domain' ),
'socicon-identica' => __( 'identica', 'wpb_widget_domain' ),
'socicon-bebo' => __( 'bebo', 'wpb_widget_domain' ),
'socicon-zynga' => __( 'zynga', 'wpb_widget_domain' ),
'socicon-steam' => __( 'steam', 'wpb_widget_domain' ),
'socicon-xbox' => __( 'xbox', 'wpb_widget_domain' ),
'socicon-windows' => __( 'windows', 'wpb_widget_domain' ),
'socicon-qq' => __( 'qq', 'wpb_widget_domain' ),
'socicon-douban' => __( 'douban', 'wpb_widget_domain' ),
'socicon-meetup' => __( 'meetup', 'wpb_widget_domain' ),
'socicon-playstation' => __( 'playstation', 'wpb_widget_domain' ),
'socicon-android' => __( 'android', 'wpb_widget_domain' ),
'socicon-snapchat' => __( 'snapchat', 'wpb_widget_domain' ),
'socicon-twitter' => __( 'twitter', 'wpb_widget_domain' ),
'socicon-facebook' => __( 'facebook', 'wpb_widget_domain' ),
'socicon-googleplus' => __( 'googleplus', 'wpb_widget_domain' ),
'socicon-pinterest' => __( 'pinterest', 'wpb_widget_domain' ),
'socicon-foursquare' => __( 'foursquare', 'wpb_widget_domain' ),
'socicon-yahoo' => __( 'yahoo', 'wpb_widget_domain' ),
'socicon-skype' => __( 'skype', 'wpb_widget_domain' ),
'socicon-yelp' => __( 'yelp', 'wpb_widget_domain' ),
'socicon-feedburner' => __( 'feedburner', 'wpb_widget_domain' ),
'socicon-linkedin' => __( 'linkedin', 'wpb_widget_domain' ),
'socicon-viadeo' => __( 'viadeo', 'wpb_widget_domain' ),
'socicon-xing' => __( 'xing', 'wpb_widget_domain' ),
'socicon-myspace' => __( 'myspace', 'wpb_widget_domain' ),
'socicon-soundcloud' => __( 'soundcloud', 'wpb_widget_domain' ),
'socicon-spotify' => __( 'spotify', 'wpb_widget_domain' ),
'socicon-grooveshark' => __( 'grooveshark', 'wpb_widget_domain' ),
'socicon-lastfm' => __( 'lastfm', 'wpb_widget_domain' ),
'socicon-youtube' => __( 'youtube', 'wpb_widget_domain' ),
'socicon-vimeo' => __( 'vimeo', 'wpb_widget_domain' ),
'socicon-dailymotion' => __( 'dailymotion', 'wpb_widget_domain' ),
'socicon-vine' => __( 'vine', 'wpb_widget_domain' ),
'socicon-flickr' => __( 'flickr', 'wpb_widget_domain' ),
'socicon-500px' => __( '500px', 'wpb_widget_domain' ),
'socicon-wordpress' => __( 'wordpress', 'wpb_widget_domain' ),
'socicon-tumblr' => __( 'tumblr', 'wpb_widget_domain' ),
'socicon-twitch' => __( 'twitch', 'wpb_widget_domain' ),
'socicon-8tracks' => __( '8tracks', 'wpb_widget_domain' ),
'socicon-amazon' => __( 'amazon', 'wpb_widget_domain' ),
'socicon-icq' => __( 'icq', 'wpb_widget_domain' ),
'socicon-smugmug' => __( 'smugmug', 'wpb_widget_domain' ),
'socicon-ravelry' => __( 'ravelry', 'wpb_widget_domain' ),
'socicon-weibo' => __( 'weibo', 'wpb_widget_domain' ),
'socicon-baidu' => __( 'baidu', 'wpb_widget_domain' ),
'socicon-angellist' => __( 'angellist', 'wpb_widget_domain' ),
'socicon-ebay' => __( 'ebay', 'wpb_widget_domain' ),
'socicon-imdb' => __( 'imdb', 'wpb_widget_domain' ),
'socicon-stayfriends' => __( 'stayfriends', 'wpb_widget_domain' ),
'socicon-residentadvisor' => __( 'residentadvisor', 'wpb_widget_domain' ),
'socicon-google' => __( 'google', 'wpb_widget_domain' ),
'socicon-yandex' => __( 'yandex', 'wpb_widget_domain' ),
'socicon-sharethis' => __( 'sharethis', 'wpb_widget_domain' ),
'socicon-bandcamp' => __( 'bandcamp', 'wpb_widget_domain' ),
'socicon-itunes' => __( 'itunes', 'wpb_widget_domain' ),
'socicon-deezer' => __( 'deezer', 'wpb_widget_domain' ),
'socicon-telegram' => __( 'telegram', 'wpb_widget_domain' ),
'socicon-openid' => __( 'openid', 'wpb_widget_domain' ),
'socicon-amplement' => __( 'amplement', 'wpb_widget_domain' ),
'socicon-viber' => __( 'viber', 'wpb_widget_domain' ),
'socicon-zomato' => __( 'zomato', 'wpb_widget_domain' ),
'socicon-draugiem' => __( 'draugiem', 'wpb_widget_domain' ),
'socicon-endomodo' => __( 'endomodo', 'wpb_widget_domain' ),
'socicon-filmweb' => __( 'filmweb', 'wpb_widget_domain' ),
'socicon-stackexchange' => __( 'stackexchange', 'wpb_widget_domain' ),
'socicon-wykop' => __( 'wykop', 'wpb_widget_domain' ),
'socicon-teamspeak' => __( 'teamspeak', 'wpb_widget_domain' ),
'socicon-teamviewer' => __( 'teamviewer', 'wpb_widget_domain' ),
'socicon-ventrilo' => __( 'ventrilo', 'wpb_widget_domain' ),
'socicon-younow' => __( 'younow', 'wpb_widget_domain' ),
'socicon-raidcall' => __( 'raidcall', 'wpb_widget_domain' ),
'socicon-mumble' => __( 'mumble', 'wpb_widget_domain' ),
'socicon-medium' => __( 'medium', 'wpb_widget_domain' ),
'socicon-bebee' => __( 'bebee', 'wpb_widget_domain' ),
'socicon-hitbox' => __( 'hitbox', 'wpb_widget_domain' ),
'socicon-reverbnation' => __( 'reverbnation', 'wpb_widget_domain' ),
'socicon-formulr' => __( 'formulr', 'wpb_widget_domain' ),
'socicon-instagram' => __( 'instagram', 'wpb_widget_domain' ),
'socicon-battlenet' => __( 'battlenet', 'wpb_widget_domain' ),
'socicon-chrome' => __( 'chrome', 'wpb_widget_domain' ),
'socicon-discord' => __( 'discord', 'wpb_widget_domain' ),
'socicon-issuu' => __( 'issuu', 'wpb_widget_domain' ),
'socicon-macos' => __( 'macos', 'wpb_widget_domain' ),
'socicon-firefox' => __( 'firefox', 'wpb_widget_domain' ),
'socicon-opera' => __( 'opera', 'wpb_widget_domain' ),
'socicon-keybase' => __( 'keybase', 'wpb_widget_domain' ),
'socicon-alliance' => __( 'alliance', 'wpb_widget_domain' ),
'socicon-livejournal' => __( 'livejournal', 'wpb_widget_domain' ),
'socicon-googlephotos' => __( 'googlephotos', 'wpb_widget_domain' ),
'socicon-horde' => __( 'horde', 'wpb_widget_domain' ),
'socicon-etsy' => __( 'etsy', 'wpb_widget_domain' ),
'socicon-zapier' => __( 'zapier', 'wpb_widget_domain' ),
'socicon-google-scholar' => __( 'google-scholar', 'wpb_widget_domain' ),
'socicon-researchgate' => __( 'researchgate', 'wpb_widget_domain' ),
'socicon-wechat' => __( 'wechat', 'wpb_widget_domain' ),
'socicon-strava' => __( 'strava', 'wpb_widget_domain' ),
'socicon-line' => __( 'line', 'wpb_widget_domain' ),
'socicon-lyft' => __( 'lyft', 'wpb_widget_domain' ),
'socicon-uber' => __( 'uber', 'wpb_widget_domain' ),
'socicon-songkick' => __( 'songkick', 'wpb_widget_domain' ),
'socicon-viewbug' => __( 'viewbug', 'wpb_widget_domain' ),
'socicon-googlegroups' => __( 'googlegroups', 'wpb_widget_domain' ),
'socicon-quora' => __( 'quora', 'wpb_widget_domain' ),
'socicon-diablo' => __( 'diablo', 'wpb_widget_domain' ),
'socicon-blizzard' => __( 'blizzard', 'wpb_widget_domain' ),
'socicon-hearthstone' => __( 'hearthstone', 'wpb_widget_domain' ),
'socicon-heroes' => __( 'heroes', 'wpb_widget_domain' ),
'socicon-overwatch' => __( 'overwatch', 'wpb_widget_domain' ),
'socicon-warcraft' => __( 'warcraft', 'wpb_widget_domain' ),
'socicon-starcraft' => __( 'starcraft', 'wpb_widget_domain' ),
'socicon-beam' => __( 'beam', 'wpb_widget_domain' ),
'socicon-curse' => __( 'curse', 'wpb_widget_domain' ),
'socicon-player' => __( 'player', 'wpb_widget_domain' ),
'socicon-streamjar' => __( 'streamjar', 'wpb_widget_domain' ),
'socicon-nintendo' => __( 'nintendo', 'wpb_widget_domain' ),
'socicon-hellocoton' => __( 'hellocoton', 'wpb_widget_domain' ),
);
foreach ( $opicon1 as $key => $naicon1 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $icon1, $key, false ) . '>'. $naicon1 . '</option>';
} ?>
</select>
</p>
<p>
<label><strong><?php _e( 'ATRIBUTO ÍCONO 2' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tico2' ); ?>"><?php _e( 'Título Ícono 02:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tico2' ); ?>" name="<?php echo $this->get_field_name( 'tico2' ); ?>" type="text" value="<?php echo esc_attr( $tico2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ctic2' ); ?>"><?php _e( 'Color Texto Ícono 02:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'ctic2' ); ?>" name="<?php echo $this->get_field_name( 'ctic2' ); ?>" type="text" value="<?php echo esc_attr( $ctic2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'uico2' ); ?>"><?php _e( 'URL Ícono 02:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'uico2' ); ?>" name="<?php echo $this->get_field_name( 'uico2' ); ?>" type="text" value="<?php echo esc_attr( $uico2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'cico2' ); ?>"><?php _e( 'Color Ícono 02:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'cico2' ); ?>" name="<?php echo $this->get_field_name( 'cico2' ); ?>" type="text" value="<?php echo esc_attr( $cico2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'icon2' ); ?>"><?php _e( 'Ícono 02:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'icon2' ); ?>" id="<?php echo $this->get_field_id( 'icon2' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opicon2 = array(
'' => __( 'Selecione', 'wpb_widget_domain' ),
'mbri-add-submenu' => __( 'add-submenu', 'wpb_widget_domain' ),
'mbri-alert' => __( 'alert', 'wpb_widget_domain' ),
'mbri-align-center' => __( 'align-center', 'wpb_widget_domain' ),
'mbri-align-justify' => __( 'align-justify', 'wpb_widget_domain' ),
'mbri-align-left' => __( 'align-left', 'wpb_widget_domain' ),
'mbri-align-right' => __( 'align-right', 'wpb_widget_domain' ),
'mbri-android' => __( 'android', 'wpb_widget_domain' ),
'mbri-apple' => __( 'apple', 'wpb_widget_domain' ),
'mbri-arrow-down' => __( 'arrow-down', 'wpb_widget_domain' ),
'mbri-arrow-next' => __( 'arrow-next', 'wpb_widget_domain' ),
'mbri-arrow-prev' => __( 'arrow-prev', 'wpb_widget_domain' ),
'mbri-arrow-up' => __( 'arrow-up', 'wpb_widget_domain' ),
'mbri-bold' => __( 'bold', 'wpb_widget_domain' ),
'mbri-bookmark' => __( 'bookmark', 'wpb_widget_domain' ),
'mbri-bootstrap' => __( 'bootstrap', 'wpb_widget_domain' ),
'mbri-briefcase' => __( 'briefcase', 'wpb_widget_domain' ),
'mbri-browse' => __( 'browse', 'wpb_widget_domain' ),
'mbri-bulleted-list' => __( 'bulleted-list', 'wpb_widget_domain' ),
'mbri-calendar' => __( 'calendar', 'wpb_widget_domain' ),
'mbri-camera' => __( 'camera', 'wpb_widget_domain' ),
'mbri-cart-add' => __( 'cart-add', 'wpb_widget_domain' ),
'mbri-cart-full' => __( 'cart-full', 'wpb_widget_domain' ),
'mbri-cash' => __( 'cash', 'wpb_widget_domain' ),
'mbri-change-style' => __( 'change-style', 'wpb_widget_domain' ),
'mbri-chat' => __( 'chat', 'wpb_widget_domain' ),
'mbri-clock' => __( 'clock', 'wpb_widget_domain' ),
'mbri-close' => __( 'close', 'wpb_widget_domain' ),
'mbri-cloud' => __( 'cloud', 'wpb_widget_domain' ),
'mbri-code' => __( 'code', 'wpb_widget_domain' ),
'mbri-contact-form' => __( 'contact-form', 'wpb_widget_domain' ),
'mbri-credit-card' => __( 'credit-card', 'wpb_widget_domain' ),
'mbri-cursor-click' => __( 'cursor-click', 'wpb_widget_domain' ),
'mbri-cust-feedback' => __( 'cust-feedback', 'wpb_widget_domain' ),
'mbri-database' => __( 'database', 'wpb_widget_domain' ),
'mbri-delivery' => __( 'delivery', 'wpb_widget_domain' ),
'mbri-desktop' => __( 'desktop', 'wpb_widget_domain' ),
'mbri-devices' => __( 'devices', 'wpb_widget_domain' ),
'mbri-down' => __( 'down', 'wpb_widget_domain' ),
'mbri-download' => __( 'download', 'wpb_widget_domain' ),
'mbri-drag-n-drop' => __( 'drag-n-drop', 'wpb_widget_domain' ),
'mbri-drag-n-drop2' => __( 'drag-n-drop2', 'wpb_widget_domain' ),
'mbri-edit' => __( 'edit', 'wpb_widget_domain' ),
'mbri-edit2' => __( 'edit2', 'wpb_widget_domain' ),
'mbri-error' => __( 'error', 'wpb_widget_domain' ),
'mbri-extension' => __( 'extension', 'wpb_widget_domain' ),
'mbri-features' => __( 'features', 'wpb_widget_domain' ),
'mbri-file' => __( 'file', 'wpb_widget_domain' ),
'mbri-flag' => __( 'flag', 'wpb_widget_domain' ),
'mbri-folder' => __( 'folder', 'wpb_widget_domain' ),
'mbri-gift' => __( 'gift', 'wpb_widget_domain' ),
'mbri-github' => __( 'github', 'wpb_widget_domain' ),
'mbri-globe' => __( 'globe', 'wpb_widget_domain' ),
'mbri-globe-2' => __( 'globe-2', 'wpb_widget_domain' ),
'mbri-growing-chart' => __( 'growing-chart', 'wpb_widget_domain' ),
'mbri-hearth' => __( 'hearth', 'wpb_widget_domain' ),
'mbri-help' => __( 'help', 'wpb_widget_domain' ),
'mbri-home' => __( 'home', 'wpb_widget_domain' ),
'mbri-hot-cup' => __( 'hot-cup', 'wpb_widget_domain' ),
'mbri-idea' => __( 'idea', 'wpb_widget_domain' ),
'mbri-image-gallery' => __( 'image-gallery', 'wpb_widget_domain' ),
'mbri-image-slider' => __( 'image-slider', 'wpb_widget_domain' ),
'mbri-info' => __( 'info', 'wpb_widget_domain' ),
'mbri-italic' => __( 'italic', 'wpb_widget_domain' ),
'mbri-key' => __( 'key', 'wpb_widget_domain' ),
'mbri-laptop' => __( 'laptop', 'wpb_widget_domain' ),
'mbri-layers' => __( 'layers', 'wpb_widget_domain' ),
'mbri-left-right' => __( 'left-right', 'wpb_widget_domain' ),
'mbri-left' => __( 'left', 'wpb_widget_domain' ),
'mbri-letter' => __( 'letter', 'wpb_widget_domain' ),
'mbri-like' => __( 'like', 'wpb_widget_domain' ),
'mbri-link' => __( 'link', 'wpb_widget_domain' ),
'mbri-lock' => __( 'lock', 'wpb_widget_domain' ),
'mbri-login' => __( 'login', 'wpb_widget_domain' ),
'mbri-logout' => __( 'logout', 'wpb_widget_domain' ),
'mbri-magic-stick' => __( 'magic-stick', 'wpb_widget_domain' ),
'mbri-map-pin' => __( 'map-pin', 'wpb_widget_domain' ),
'mbri-menu' => __( 'menu', 'wpb_widget_domain' ),
'mbri-mobile' => __( 'mobile', 'wpb_widget_domain' ),
'mbri-mobile2' => __( 'mobile2', 'wpb_widget_domain' ),
'mbri-mobirise' => __( 'mobirise', 'wpb_widget_domain' ),
'mbri-more-horizontal' => __( 'more-horizontal', 'wpb_widget_domain' ),
'mbri-more-vertical' => __( 'more-vertical', 'wpb_widget_domain' ),
'mbri-music' => __( 'music', 'wpb_widget_domain' ),
'mbri-new-file' => __( 'new-file', 'wpb_widget_domain' ),
'mbri-numbered-list' => __( 'numbered-list', 'wpb_widget_domain' ),
'mbri-opened-folder' => __( 'opened-folder', 'wpb_widget_domain' ),
'mbri-pages' => __( 'pages', 'wpb_widget_domain' ),
'mbri-paper-plane' => __( 'paper-plane', 'wpb_widget_domain' ),
'mbri-paperclip' => __( 'paperclip', 'wpb_widget_domain' ),
'mbri-photo' => __( 'photo', 'wpb_widget_domain' ),
'mbri-photos' => __( 'photos', 'wpb_widget_domain' ),
'mbri-pin' => __( 'pin', 'wpb_widget_domain' ),
'mbri-play' => __( 'play', 'wpb_widget_domain' ),
'mbri-plus' => __( 'plus', 'wpb_widget_domain' ),
'mbri-preview' => __( 'preview', 'wpb_widget_domain' ),
'mbri-print' => __( 'print', 'wpb_widget_domain' ),
'mbri-protect' => __( 'protect', 'wpb_widget_domain' ),
'mbri-question' => __( 'question', 'wpb_widget_domain' ),
'mbri-quote-left' => __( 'quote-left', 'wpb_widget_domain' ),
'mbri-quote-right' => __( 'quote-right', 'wpb_widget_domain' ),
'mbri-refresh' => __( 'refresh', 'wpb_widget_domain' ),
'mbri-responsive' => __( 'responsive', 'wpb_widget_domain' ),
'mbri-right' => __( 'right', 'wpb_widget_domain' ),
'mbri-rocket' => __( 'rocket', 'wpb_widget_domain' ),
'mbri-sad-face' => __( 'sad-face', 'wpb_widget_domain' ),
'mbri-sale' => __( 'sale', 'wpb_widget_domain' ),
'mbri-save' => __( 'save', 'wpb_widget_domain' ),
'mbri-search' => __( 'search', 'wpb_widget_domain' ),
'mbri-setting' => __( 'setting', 'wpb_widget_domain' ),
'mbri-setting2' => __( 'setting2', 'wpb_widget_domain' ),
'mbri-setting3' => __( 'setting3', 'wpb_widget_domain' ),
'mbri-share' => __( 'share', 'wpb_widget_domain' ),
'mbri-shopping-bag' => __( 'shopping-bag', 'wpb_widget_domain' ),
'mbri-shopping-basket' => __( 'shopping-basket', 'wpb_widget_domain' ),
'mbri-shopping-cart' => __( 'shopping-cart', 'wpb_widget_domain' ),
'mbri-sites' => __( 'sites', 'wpb_widget_domain' ),
'mbri-smile-face' => __( 'smile-face', 'wpb_widget_domain' ),
'mbri-speed' => __( 'speed', 'wpb_widget_domain' ),
'mbri-star' => __( 'star', 'wpb_widget_domain' ),
'mbri-success' => __( 'success', 'wpb_widget_domain' ),
'mbri-sun' => __( 'sun', 'wpb_widget_domain' ),
'mbri-sun2' => __( 'sun2', 'wpb_widget_domain' ),
'mbri-tablet' => __( 'tablet', 'wpb_widget_domain' ),
'mbri-tablet-vertical' => __( 'tablet-vertical', 'wpb_widget_domain' ),
'mbri-target' => __( 'target', 'wpb_widget_domain' ),
'mbri-timer' => __( 'timer', 'wpb_widget_domain' ),
'mbri-to-ftp' => __( 'to-ftp', 'wpb_widget_domain' ),
'mbri-to-local-drive' => __( 'to-local-drive', 'wpb_widget_domain' ),
'mbri-touch-swipe' => __( 'touch-swipe', 'wpb_widget_domain' ),
'mbri-touch' => __( 'touch', 'wpb_widget_domain' ),
'mbri-trash' => __( 'trash', 'wpb_widget_domain' ),
'mbri-underline' => __( 'underline', 'wpb_widget_domain' ),
'mbri-unlink' => __( 'unlink', 'wpb_widget_domain' ),
'mbri-unlock' => __( 'unlock', 'wpb_widget_domain' ),
'mbri-up-down' => __( 'up-down', 'wpb_widget_domain' ),
'mbri-up' => __( 'up', 'wpb_widget_domain' ),
'mbri-update' => __( 'update', 'wpb_widget_domain' ),
'mbri-upload' => __( 'upload', 'wpb_widget_domain' ),
'mbri-user' => __( 'user', 'wpb_widget_domain' ),
'mbri-user2' => __( 'user2', 'wpb_widget_domain' ),
'mbri-users' => __( 'users', 'wpb_widget_domain' ),
'mbri-video' => __( 'video', 'wpb_widget_domain' ),
'mbri-video-play' => __( 'video-play', 'wpb_widget_domain' ),
'mbri-watch' => __( 'watch', 'wpb_widget_domain' ),
'mbri-website-theme' => __( 'website-theme', 'wpb_widget_domain' ),
'mbri-wifi' => __( 'wifi', 'wpb_widget_domain' ),
'mbri-windows' => __( 'windows', 'wpb_widget_domain' ),
'mbri-zoom-out' => __( 'zoom-out', 'wpb_widget_domain' ),
'mbri-redo' => __( 'redo', 'wpb_widget_domain' ),
'mbri-undo' => __( 'undo', 'wpb_widget_domain' ),
'socicon-modelmayhem' => __( 'modelmayhem', 'wpb_widget_domain' ),
'socicon-mixcloud' => __( 'mixcloud', 'wpb_widget_domain' ),
'socicon-drupal' => __( 'drupal', 'wpb_widget_domain' ),
'socicon-swarm' => __( 'swarm', 'wpb_widget_domain' ),
'socicon-istock' => __( 'istock', 'wpb_widget_domain' ),
'socicon-yammer' => __( 'yammer', 'wpb_widget_domain' ),
'socicon-ello' => __( 'ello', 'wpb_widget_domain' ),
'socicon-stackoverflow' => __( 'stackoverflow', 'wpb_widget_domain' ),
'socicon-persona' => __( 'persona', 'wpb_widget_domain' ),
'socicon-triplej' => __( 'triplej', 'wpb_widget_domain' ),
'socicon-houzz' => __( 'houzz', 'wpb_widget_domain' ),
'socicon-rss' => __( 'rss', 'wpb_widget_domain' ),
'socicon-paypal' => __( 'paypal', 'wpb_widget_domain' ),
'socicon-odnoklassniki' => __( 'odnoklassniki', 'wpb_widget_domain' ),
'socicon-airbnb' => __( 'airbnb', 'wpb_widget_domain' ),
'socicon-periscope' => __( 'periscope', 'wpb_widget_domain' ),
'socicon-outlook' => __( 'outlook', 'wpb_widget_domain' ),
'socicon-coderwall' => __( 'coderwall', 'wpb_widget_domain' ),
'socicon-tripadvisor' => __( 'tripadvisor', 'wpb_widget_domain' ),
'socicon-appnet' => __( 'appnet', 'wpb_widget_domain' ),
'socicon-goodreads' => __( 'goodreads', 'wpb_widget_domain' ),
'socicon-tripit' => __( 'tripit', 'wpb_widget_domain' ),
'socicon-lanyrd' => __( 'lanyrd', 'wpb_widget_domain' ),
'socicon-slideshare' => __( 'slideshare', 'wpb_widget_domain' ),
'socicon-buffer' => __( 'buffer', 'wpb_widget_domain' ),
'socicon-disqus' => __( 'disqus', 'wpb_widget_domain' ),
'socicon-vkontakte' => __( 'vkontakte', 'wpb_widget_domain' ),
'socicon-whatsapp' => __( 'whatsapp', 'wpb_widget_domain' ),
'socicon-patreon' => __( 'patreon', 'wpb_widget_domain' ),
'socicon-storehouse' => __( 'storehouse', 'wpb_widget_domain' ),
'socicon-pocket' => __( 'pocket', 'wpb_widget_domain' ),
'socicon-mail' => __( 'mail', 'wpb_widget_domain' ),
'socicon-blogger' => __( 'blogger', 'wpb_widget_domain' ),
'socicon-technorati' => __( 'technorati', 'wpb_widget_domain' ),
'socicon-reddit' => __( 'reddit', 'wpb_widget_domain' ),
'socicon-dribbble' => __( 'dribbble', 'wpb_widget_domain' ),
'socicon-stumbleupon' => __( 'stumbleupon', 'wpb_widget_domain' ),
'socicon-digg' => __( 'digg', 'wpb_widget_domain' ),
'socicon-envato' => __( 'envato', 'wpb_widget_domain' ),
'socicon-behance' => __( 'behance', 'wpb_widget_domain' ),
'socicon-delicious' => __( 'delicious', 'wpb_widget_domain' ),
'socicon-deviantart' => __( 'deviantart', 'wpb_widget_domain' ),
'socicon-forrst' => __( 'forrst', 'wpb_widget_domain' ),
'socicon-play' => __( 'play', 'wpb_widget_domain' ),
'socicon-zerply' => __( 'zerply', 'wpb_widget_domain' ),
'socicon-wikipedia' => __( 'wikipedia', 'wpb_widget_domain' ),
'socicon-apple' => __( 'apple', 'wpb_widget_domain' ),
'socicon-flattr' => __( 'flattr', 'wpb_widget_domain' ),
'socicon-github' => __( 'github', 'wpb_widget_domain' ),
'socicon-renren' => __( 'renren', 'wpb_widget_domain' ),
'socicon-friendfeed' => __( 'friendfeed', 'wpb_widget_domain' ),
'socicon-newsvine' => __( 'newsvine', 'wpb_widget_domain' ),
'socicon-identica' => __( 'identica', 'wpb_widget_domain' ),
'socicon-bebo' => __( 'bebo', 'wpb_widget_domain' ),
'socicon-zynga' => __( 'zynga', 'wpb_widget_domain' ),
'socicon-steam' => __( 'steam', 'wpb_widget_domain' ),
'socicon-xbox' => __( 'xbox', 'wpb_widget_domain' ),
'socicon-windows' => __( 'windows', 'wpb_widget_domain' ),
'socicon-qq' => __( 'qq', 'wpb_widget_domain' ),
'socicon-douban' => __( 'douban', 'wpb_widget_domain' ),
'socicon-meetup' => __( 'meetup', 'wpb_widget_domain' ),
'socicon-playstation' => __( 'playstation', 'wpb_widget_domain' ),
'socicon-android' => __( 'android', 'wpb_widget_domain' ),
'socicon-snapchat' => __( 'snapchat', 'wpb_widget_domain' ),
'socicon-twitter' => __( 'twitter', 'wpb_widget_domain' ),
'socicon-facebook' => __( 'facebook', 'wpb_widget_domain' ),
'socicon-googleplus' => __( 'googleplus', 'wpb_widget_domain' ),
'socicon-pinterest' => __( 'pinterest', 'wpb_widget_domain' ),
'socicon-foursquare' => __( 'foursquare', 'wpb_widget_domain' ),
'socicon-yahoo' => __( 'yahoo', 'wpb_widget_domain' ),
'socicon-skype' => __( 'skype', 'wpb_widget_domain' ),
'socicon-yelp' => __( 'yelp', 'wpb_widget_domain' ),
'socicon-feedburner' => __( 'feedburner', 'wpb_widget_domain' ),
'socicon-linkedin' => __( 'linkedin', 'wpb_widget_domain' ),
'socicon-viadeo' => __( 'viadeo', 'wpb_widget_domain' ),
'socicon-xing' => __( 'xing', 'wpb_widget_domain' ),
'socicon-myspace' => __( 'myspace', 'wpb_widget_domain' ),
'socicon-soundcloud' => __( 'soundcloud', 'wpb_widget_domain' ),
'socicon-spotify' => __( 'spotify', 'wpb_widget_domain' ),
'socicon-grooveshark' => __( 'grooveshark', 'wpb_widget_domain' ),
'socicon-lastfm' => __( 'lastfm', 'wpb_widget_domain' ),
'socicon-youtube' => __( 'youtube', 'wpb_widget_domain' ),
'socicon-vimeo' => __( 'vimeo', 'wpb_widget_domain' ),
'socicon-dailymotion' => __( 'dailymotion', 'wpb_widget_domain' ),
'socicon-vine' => __( 'vine', 'wpb_widget_domain' ),
'socicon-flickr' => __( 'flickr', 'wpb_widget_domain' ),
'socicon-500px' => __( '500px', 'wpb_widget_domain' ),
'socicon-wordpress' => __( 'wordpress', 'wpb_widget_domain' ),
'socicon-tumblr' => __( 'tumblr', 'wpb_widget_domain' ),
'socicon-twitch' => __( 'twitch', 'wpb_widget_domain' ),
'socicon-8tracks' => __( '8tracks', 'wpb_widget_domain' ),
'socicon-amazon' => __( 'amazon', 'wpb_widget_domain' ),
'socicon-icq' => __( 'icq', 'wpb_widget_domain' ),
'socicon-smugmug' => __( 'smugmug', 'wpb_widget_domain' ),
'socicon-ravelry' => __( 'ravelry', 'wpb_widget_domain' ),
'socicon-weibo' => __( 'weibo', 'wpb_widget_domain' ),
'socicon-baidu' => __( 'baidu', 'wpb_widget_domain' ),
'socicon-angellist' => __( 'angellist', 'wpb_widget_domain' ),
'socicon-ebay' => __( 'ebay', 'wpb_widget_domain' ),
'socicon-imdb' => __( 'imdb', 'wpb_widget_domain' ),
'socicon-stayfriends' => __( 'stayfriends', 'wpb_widget_domain' ),
'socicon-residentadvisor' => __( 'residentadvisor', 'wpb_widget_domain' ),
'socicon-google' => __( 'google', 'wpb_widget_domain' ),
'socicon-yandex' => __( 'yandex', 'wpb_widget_domain' ),
'socicon-sharethis' => __( 'sharethis', 'wpb_widget_domain' ),
'socicon-bandcamp' => __( 'bandcamp', 'wpb_widget_domain' ),
'socicon-itunes' => __( 'itunes', 'wpb_widget_domain' ),
'socicon-deezer' => __( 'deezer', 'wpb_widget_domain' ),
'socicon-telegram' => __( 'telegram', 'wpb_widget_domain' ),
'socicon-openid' => __( 'openid', 'wpb_widget_domain' ),
'socicon-amplement' => __( 'amplement', 'wpb_widget_domain' ),
'socicon-viber' => __( 'viber', 'wpb_widget_domain' ),
'socicon-zomato' => __( 'zomato', 'wpb_widget_domain' ),
'socicon-draugiem' => __( 'draugiem', 'wpb_widget_domain' ),
'socicon-endomodo' => __( 'endomodo', 'wpb_widget_domain' ),
'socicon-filmweb' => __( 'filmweb', 'wpb_widget_domain' ),
'socicon-stackexchange' => __( 'stackexchange', 'wpb_widget_domain' ),
'socicon-wykop' => __( 'wykop', 'wpb_widget_domain' ),
'socicon-teamspeak' => __( 'teamspeak', 'wpb_widget_domain' ),
'socicon-teamviewer' => __( 'teamviewer', 'wpb_widget_domain' ),
'socicon-ventrilo' => __( 'ventrilo', 'wpb_widget_domain' ),
'socicon-younow' => __( 'younow', 'wpb_widget_domain' ),
'socicon-raidcall' => __( 'raidcall', 'wpb_widget_domain' ),
'socicon-mumble' => __( 'mumble', 'wpb_widget_domain' ),
'socicon-medium' => __( 'medium', 'wpb_widget_domain' ),
'socicon-bebee' => __( 'bebee', 'wpb_widget_domain' ),
'socicon-hitbox' => __( 'hitbox', 'wpb_widget_domain' ),
'socicon-reverbnation' => __( 'reverbnation', 'wpb_widget_domain' ),
'socicon-formulr' => __( 'formulr', 'wpb_widget_domain' ),
'socicon-instagram' => __( 'instagram', 'wpb_widget_domain' ),
'socicon-battlenet' => __( 'battlenet', 'wpb_widget_domain' ),
'socicon-chrome' => __( 'chrome', 'wpb_widget_domain' ),
'socicon-discord' => __( 'discord', 'wpb_widget_domain' ),
'socicon-issuu' => __( 'issuu', 'wpb_widget_domain' ),
'socicon-macos' => __( 'macos', 'wpb_widget_domain' ),
'socicon-firefox' => __( 'firefox', 'wpb_widget_domain' ),
'socicon-opera' => __( 'opera', 'wpb_widget_domain' ),
'socicon-keybase' => __( 'keybase', 'wpb_widget_domain' ),
'socicon-alliance' => __( 'alliance', 'wpb_widget_domain' ),
'socicon-livejournal' => __( 'livejournal', 'wpb_widget_domain' ),
'socicon-googlephotos' => __( 'googlephotos', 'wpb_widget_domain' ),
'socicon-horde' => __( 'horde', 'wpb_widget_domain' ),
'socicon-etsy' => __( 'etsy', 'wpb_widget_domain' ),
'socicon-zapier' => __( 'zapier', 'wpb_widget_domain' ),
'socicon-google-scholar' => __( 'google-scholar', 'wpb_widget_domain' ),
'socicon-researchgate' => __( 'researchgate', 'wpb_widget_domain' ),
'socicon-wechat' => __( 'wechat', 'wpb_widget_domain' ),
'socicon-strava' => __( 'strava', 'wpb_widget_domain' ),
'socicon-line' => __( 'line', 'wpb_widget_domain' ),
'socicon-lyft' => __( 'lyft', 'wpb_widget_domain' ),
'socicon-uber' => __( 'uber', 'wpb_widget_domain' ),
'socicon-songkick' => __( 'songkick', 'wpb_widget_domain' ),
'socicon-viewbug' => __( 'viewbug', 'wpb_widget_domain' ),
'socicon-googlegroups' => __( 'googlegroups', 'wpb_widget_domain' ),
'socicon-quora' => __( 'quora', 'wpb_widget_domain' ),
'socicon-diablo' => __( 'diablo', 'wpb_widget_domain' ),
'socicon-blizzard' => __( 'blizzard', 'wpb_widget_domain' ),
'socicon-hearthstone' => __( 'hearthstone', 'wpb_widget_domain' ),
'socicon-heroes' => __( 'heroes', 'wpb_widget_domain' ),
'socicon-overwatch' => __( 'overwatch', 'wpb_widget_domain' ),
'socicon-warcraft' => __( 'warcraft', 'wpb_widget_domain' ),
'socicon-starcraft' => __( 'starcraft', 'wpb_widget_domain' ),
'socicon-beam' => __( 'beam', 'wpb_widget_domain' ),
'socicon-curse' => __( 'curse', 'wpb_widget_domain' ),
'socicon-player' => __( 'player', 'wpb_widget_domain' ),
'socicon-streamjar' => __( 'streamjar', 'wpb_widget_domain' ),
'socicon-nintendo' => __( 'nintendo', 'wpb_widget_domain' ),
'socicon-hellocoton' => __( 'hellocoton', 'wpb_widget_domain' ),
);
foreach ( $opicon2 as $key => $naicon2 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $icon2, $key, false ) . '>'. $naicon2 . '</option>';
} ?>
</select>
</p>
<p>
<label><strong><?php _e( 'ATRIBUTO ÍCONO 3' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tico3' ); ?>"><?php _e( 'Título Ícono 03:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tico1' ); ?>" name="<?php echo $this->get_field_name( 'tico3' ); ?>" type="text" value="<?php echo esc_attr( $tico3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ctic3' ); ?>"><?php _e( 'Color Texto Ícono 03:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'ctic3' ); ?>" name="<?php echo $this->get_field_name( 'ctic3' ); ?>" type="text" value="<?php echo esc_attr( $ctic3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'uico3' ); ?>"><?php _e( 'URL Ícono 03:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'uico3' ); ?>" name="<?php echo $this->get_field_name( 'uico3' ); ?>" type="text" value="<?php echo esc_attr( $uico3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'cico3' ); ?>"><?php _e( 'Color Ícono 03:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'cico3' ); ?>" name="<?php echo $this->get_field_name( 'cico3' ); ?>" type="text" value="<?php echo esc_attr( $cico3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'icon3' ); ?>"><?php _e( 'Ícono 03:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'icon3' ); ?>" id="<?php echo $this->get_field_id( 'icon3' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opicon3 = array(
'' => __( 'Selecione', 'wpb_widget_domain' ),
'mbri-add-submenu' => __( 'add-submenu', 'wpb_widget_domain' ),
'mbri-alert' => __( 'alert', 'wpb_widget_domain' ),
'mbri-align-center' => __( 'align-center', 'wpb_widget_domain' ),
'mbri-align-justify' => __( 'align-justify', 'wpb_widget_domain' ),
'mbri-align-left' => __( 'align-left', 'wpb_widget_domain' ),
'mbri-align-right' => __( 'align-right', 'wpb_widget_domain' ),
'mbri-android' => __( 'android', 'wpb_widget_domain' ),
'mbri-apple' => __( 'apple', 'wpb_widget_domain' ),
'mbri-arrow-down' => __( 'arrow-down', 'wpb_widget_domain' ),
'mbri-arrow-next' => __( 'arrow-next', 'wpb_widget_domain' ),
'mbri-arrow-prev' => __( 'arrow-prev', 'wpb_widget_domain' ),
'mbri-arrow-up' => __( 'arrow-up', 'wpb_widget_domain' ),
'mbri-bold' => __( 'bold', 'wpb_widget_domain' ),
'mbri-bookmark' => __( 'bookmark', 'wpb_widget_domain' ),
'mbri-bootstrap' => __( 'bootstrap', 'wpb_widget_domain' ),
'mbri-briefcase' => __( 'briefcase', 'wpb_widget_domain' ),
'mbri-browse' => __( 'browse', 'wpb_widget_domain' ),
'mbri-bulleted-list' => __( 'bulleted-list', 'wpb_widget_domain' ),
'mbri-calendar' => __( 'calendar', 'wpb_widget_domain' ),
'mbri-camera' => __( 'camera', 'wpb_widget_domain' ),
'mbri-cart-add' => __( 'cart-add', 'wpb_widget_domain' ),
'mbri-cart-full' => __( 'cart-full', 'wpb_widget_domain' ),
'mbri-cash' => __( 'cash', 'wpb_widget_domain' ),
'mbri-change-style' => __( 'change-style', 'wpb_widget_domain' ),
'mbri-chat' => __( 'chat', 'wpb_widget_domain' ),
'mbri-clock' => __( 'clock', 'wpb_widget_domain' ),
'mbri-close' => __( 'close', 'wpb_widget_domain' ),
'mbri-cloud' => __( 'cloud', 'wpb_widget_domain' ),
'mbri-code' => __( 'code', 'wpb_widget_domain' ),
'mbri-contact-form' => __( 'contact-form', 'wpb_widget_domain' ),
'mbri-credit-card' => __( 'credit-card', 'wpb_widget_domain' ),
'mbri-cursor-click' => __( 'cursor-click', 'wpb_widget_domain' ),
'mbri-cust-feedback' => __( 'cust-feedback', 'wpb_widget_domain' ),
'mbri-database' => __( 'database', 'wpb_widget_domain' ),
'mbri-delivery' => __( 'delivery', 'wpb_widget_domain' ),
'mbri-desktop' => __( 'desktop', 'wpb_widget_domain' ),
'mbri-devices' => __( 'devices', 'wpb_widget_domain' ),
'mbri-down' => __( 'down', 'wpb_widget_domain' ),
'mbri-download' => __( 'download', 'wpb_widget_domain' ),
'mbri-drag-n-drop' => __( 'drag-n-drop', 'wpb_widget_domain' ),
'mbri-drag-n-drop2' => __( 'drag-n-drop2', 'wpb_widget_domain' ),
'mbri-edit' => __( 'edit', 'wpb_widget_domain' ),
'mbri-edit2' => __( 'edit2', 'wpb_widget_domain' ),
'mbri-error' => __( 'error', 'wpb_widget_domain' ),
'mbri-extension' => __( 'extension', 'wpb_widget_domain' ),
'mbri-features' => __( 'features', 'wpb_widget_domain' ),
'mbri-file' => __( 'file', 'wpb_widget_domain' ),
'mbri-flag' => __( 'flag', 'wpb_widget_domain' ),
'mbri-folder' => __( 'folder', 'wpb_widget_domain' ),
'mbri-gift' => __( 'gift', 'wpb_widget_domain' ),
'mbri-github' => __( 'github', 'wpb_widget_domain' ),
'mbri-globe' => __( 'globe', 'wpb_widget_domain' ),
'mbri-globe-2' => __( 'globe-2', 'wpb_widget_domain' ),
'mbri-growing-chart' => __( 'growing-chart', 'wpb_widget_domain' ),
'mbri-hearth' => __( 'hearth', 'wpb_widget_domain' ),
'mbri-help' => __( 'help', 'wpb_widget_domain' ),
'mbri-home' => __( 'home', 'wpb_widget_domain' ),
'mbri-hot-cup' => __( 'hot-cup', 'wpb_widget_domain' ),
'mbri-idea' => __( 'idea', 'wpb_widget_domain' ),
'mbri-image-gallery' => __( 'image-gallery', 'wpb_widget_domain' ),
'mbri-image-slider' => __( 'image-slider', 'wpb_widget_domain' ),
'mbri-info' => __( 'info', 'wpb_widget_domain' ),
'mbri-italic' => __( 'italic', 'wpb_widget_domain' ),
'mbri-key' => __( 'key', 'wpb_widget_domain' ),
'mbri-laptop' => __( 'laptop', 'wpb_widget_domain' ),
'mbri-layers' => __( 'layers', 'wpb_widget_domain' ),
'mbri-left-right' => __( 'left-right', 'wpb_widget_domain' ),
'mbri-left' => __( 'left', 'wpb_widget_domain' ),
'mbri-letter' => __( 'letter', 'wpb_widget_domain' ),
'mbri-like' => __( 'like', 'wpb_widget_domain' ),
'mbri-link' => __( 'link', 'wpb_widget_domain' ),
'mbri-lock' => __( 'lock', 'wpb_widget_domain' ),
'mbri-login' => __( 'login', 'wpb_widget_domain' ),
'mbri-logout' => __( 'logout', 'wpb_widget_domain' ),
'mbri-magic-stick' => __( 'magic-stick', 'wpb_widget_domain' ),
'mbri-map-pin' => __( 'map-pin', 'wpb_widget_domain' ),
'mbri-menu' => __( 'menu', 'wpb_widget_domain' ),
'mbri-mobile' => __( 'mobile', 'wpb_widget_domain' ),
'mbri-mobile2' => __( 'mobile2', 'wpb_widget_domain' ),
'mbri-mobirise' => __( 'mobirise', 'wpb_widget_domain' ),
'mbri-more-horizontal' => __( 'more-horizontal', 'wpb_widget_domain' ),
'mbri-more-vertical' => __( 'more-vertical', 'wpb_widget_domain' ),
'mbri-music' => __( 'music', 'wpb_widget_domain' ),
'mbri-new-file' => __( 'new-file', 'wpb_widget_domain' ),
'mbri-numbered-list' => __( 'numbered-list', 'wpb_widget_domain' ),
'mbri-opened-folder' => __( 'opened-folder', 'wpb_widget_domain' ),
'mbri-pages' => __( 'pages', 'wpb_widget_domain' ),
'mbri-paper-plane' => __( 'paper-plane', 'wpb_widget_domain' ),
'mbri-paperclip' => __( 'paperclip', 'wpb_widget_domain' ),
'mbri-photo' => __( 'photo', 'wpb_widget_domain' ),
'mbri-photos' => __( 'photos', 'wpb_widget_domain' ),
'mbri-pin' => __( 'pin', 'wpb_widget_domain' ),
'mbri-play' => __( 'play', 'wpb_widget_domain' ),
'mbri-plus' => __( 'plus', 'wpb_widget_domain' ),
'mbri-preview' => __( 'preview', 'wpb_widget_domain' ),
'mbri-print' => __( 'print', 'wpb_widget_domain' ),
'mbri-protect' => __( 'protect', 'wpb_widget_domain' ),
'mbri-question' => __( 'question', 'wpb_widget_domain' ),
'mbri-quote-left' => __( 'quote-left', 'wpb_widget_domain' ),
'mbri-quote-right' => __( 'quote-right', 'wpb_widget_domain' ),
'mbri-refresh' => __( 'refresh', 'wpb_widget_domain' ),
'mbri-responsive' => __( 'responsive', 'wpb_widget_domain' ),
'mbri-right' => __( 'right', 'wpb_widget_domain' ),
'mbri-rocket' => __( 'rocket', 'wpb_widget_domain' ),
'mbri-sad-face' => __( 'sad-face', 'wpb_widget_domain' ),
'mbri-sale' => __( 'sale', 'wpb_widget_domain' ),
'mbri-save' => __( 'save', 'wpb_widget_domain' ),
'mbri-search' => __( 'search', 'wpb_widget_domain' ),
'mbri-setting' => __( 'setting', 'wpb_widget_domain' ),
'mbri-setting2' => __( 'setting2', 'wpb_widget_domain' ),
'mbri-setting3' => __( 'setting3', 'wpb_widget_domain' ),
'mbri-share' => __( 'share', 'wpb_widget_domain' ),
'mbri-shopping-bag' => __( 'shopping-bag', 'wpb_widget_domain' ),
'mbri-shopping-basket' => __( 'shopping-basket', 'wpb_widget_domain' ),
'mbri-shopping-cart' => __( 'shopping-cart', 'wpb_widget_domain' ),
'mbri-sites' => __( 'sites', 'wpb_widget_domain' ),
'mbri-smile-face' => __( 'smile-face', 'wpb_widget_domain' ),
'mbri-speed' => __( 'speed', 'wpb_widget_domain' ),
'mbri-star' => __( 'star', 'wpb_widget_domain' ),
'mbri-success' => __( 'success', 'wpb_widget_domain' ),
'mbri-sun' => __( 'sun', 'wpb_widget_domain' ),
'mbri-sun2' => __( 'sun2', 'wpb_widget_domain' ),
'mbri-tablet' => __( 'tablet', 'wpb_widget_domain' ),
'mbri-tablet-vertical' => __( 'tablet-vertical', 'wpb_widget_domain' ),
'mbri-target' => __( 'target', 'wpb_widget_domain' ),
'mbri-timer' => __( 'timer', 'wpb_widget_domain' ),
'mbri-to-ftp' => __( 'to-ftp', 'wpb_widget_domain' ),
'mbri-to-local-drive' => __( 'to-local-drive', 'wpb_widget_domain' ),
'mbri-touch-swipe' => __( 'touch-swipe', 'wpb_widget_domain' ),
'mbri-touch' => __( 'touch', 'wpb_widget_domain' ),
'mbri-trash' => __( 'trash', 'wpb_widget_domain' ),
'mbri-underline' => __( 'underline', 'wpb_widget_domain' ),
'mbri-unlink' => __( 'unlink', 'wpb_widget_domain' ),
'mbri-unlock' => __( 'unlock', 'wpb_widget_domain' ),
'mbri-up-down' => __( 'up-down', 'wpb_widget_domain' ),
'mbri-up' => __( 'up', 'wpb_widget_domain' ),
'mbri-update' => __( 'update', 'wpb_widget_domain' ),
'mbri-upload' => __( 'upload', 'wpb_widget_domain' ),
'mbri-user' => __( 'user', 'wpb_widget_domain' ),
'mbri-user2' => __( 'user2', 'wpb_widget_domain' ),
'mbri-users' => __( 'users', 'wpb_widget_domain' ),
'mbri-video' => __( 'video', 'wpb_widget_domain' ),
'mbri-video-play' => __( 'video-play', 'wpb_widget_domain' ),
'mbri-watch' => __( 'watch', 'wpb_widget_domain' ),
'mbri-website-theme' => __( 'website-theme', 'wpb_widget_domain' ),
'mbri-wifi' => __( 'wifi', 'wpb_widget_domain' ),
'mbri-windows' => __( 'windows', 'wpb_widget_domain' ),
'mbri-zoom-out' => __( 'zoom-out', 'wpb_widget_domain' ),
'mbri-redo' => __( 'redo', 'wpb_widget_domain' ),
'mbri-undo' => __( 'undo', 'wpb_widget_domain' ),
'socicon-modelmayhem' => __( 'modelmayhem', 'wpb_widget_domain' ),
'socicon-mixcloud' => __( 'mixcloud', 'wpb_widget_domain' ),
'socicon-drupal' => __( 'drupal', 'wpb_widget_domain' ),
'socicon-swarm' => __( 'swarm', 'wpb_widget_domain' ),
'socicon-istock' => __( 'istock', 'wpb_widget_domain' ),
'socicon-yammer' => __( 'yammer', 'wpb_widget_domain' ),
'socicon-ello' => __( 'ello', 'wpb_widget_domain' ),
'socicon-stackoverflow' => __( 'stackoverflow', 'wpb_widget_domain' ),
'socicon-persona' => __( 'persona', 'wpb_widget_domain' ),
'socicon-triplej' => __( 'triplej', 'wpb_widget_domain' ),
'socicon-houzz' => __( 'houzz', 'wpb_widget_domain' ),
'socicon-rss' => __( 'rss', 'wpb_widget_domain' ),
'socicon-paypal' => __( 'paypal', 'wpb_widget_domain' ),
'socicon-odnoklassniki' => __( 'odnoklassniki', 'wpb_widget_domain' ),
'socicon-airbnb' => __( 'airbnb', 'wpb_widget_domain' ),
'socicon-periscope' => __( 'periscope', 'wpb_widget_domain' ),
'socicon-outlook' => __( 'outlook', 'wpb_widget_domain' ),
'socicon-coderwall' => __( 'coderwall', 'wpb_widget_domain' ),
'socicon-tripadvisor' => __( 'tripadvisor', 'wpb_widget_domain' ),
'socicon-appnet' => __( 'appnet', 'wpb_widget_domain' ),
'socicon-goodreads' => __( 'goodreads', 'wpb_widget_domain' ),
'socicon-tripit' => __( 'tripit', 'wpb_widget_domain' ),
'socicon-lanyrd' => __( 'lanyrd', 'wpb_widget_domain' ),
'socicon-slideshare' => __( 'slideshare', 'wpb_widget_domain' ),
'socicon-buffer' => __( 'buffer', 'wpb_widget_domain' ),
'socicon-disqus' => __( 'disqus', 'wpb_widget_domain' ),
'socicon-vkontakte' => __( 'vkontakte', 'wpb_widget_domain' ),
'socicon-whatsapp' => __( 'whatsapp', 'wpb_widget_domain' ),
'socicon-patreon' => __( 'patreon', 'wpb_widget_domain' ),
'socicon-storehouse' => __( 'storehouse', 'wpb_widget_domain' ),
'socicon-pocket' => __( 'pocket', 'wpb_widget_domain' ),
'socicon-mail' => __( 'mail', 'wpb_widget_domain' ),
'socicon-blogger' => __( 'blogger', 'wpb_widget_domain' ),
'socicon-technorati' => __( 'technorati', 'wpb_widget_domain' ),
'socicon-reddit' => __( 'reddit', 'wpb_widget_domain' ),
'socicon-dribbble' => __( 'dribbble', 'wpb_widget_domain' ),
'socicon-stumbleupon' => __( 'stumbleupon', 'wpb_widget_domain' ),
'socicon-digg' => __( 'digg', 'wpb_widget_domain' ),
'socicon-envato' => __( 'envato', 'wpb_widget_domain' ),
'socicon-behance' => __( 'behance', 'wpb_widget_domain' ),
'socicon-delicious' => __( 'delicious', 'wpb_widget_domain' ),
'socicon-deviantart' => __( 'deviantart', 'wpb_widget_domain' ),
'socicon-forrst' => __( 'forrst', 'wpb_widget_domain' ),
'socicon-play' => __( 'play', 'wpb_widget_domain' ),
'socicon-zerply' => __( 'zerply', 'wpb_widget_domain' ),
'socicon-wikipedia' => __( 'wikipedia', 'wpb_widget_domain' ),
'socicon-apple' => __( 'apple', 'wpb_widget_domain' ),
'socicon-flattr' => __( 'flattr', 'wpb_widget_domain' ),
'socicon-github' => __( 'github', 'wpb_widget_domain' ),
'socicon-renren' => __( 'renren', 'wpb_widget_domain' ),
'socicon-friendfeed' => __( 'friendfeed', 'wpb_widget_domain' ),
'socicon-newsvine' => __( 'newsvine', 'wpb_widget_domain' ),
'socicon-identica' => __( 'identica', 'wpb_widget_domain' ),
'socicon-bebo' => __( 'bebo', 'wpb_widget_domain' ),
'socicon-zynga' => __( 'zynga', 'wpb_widget_domain' ),
'socicon-steam' => __( 'steam', 'wpb_widget_domain' ),
'socicon-xbox' => __( 'xbox', 'wpb_widget_domain' ),
'socicon-windows' => __( 'windows', 'wpb_widget_domain' ),
'socicon-qq' => __( 'qq', 'wpb_widget_domain' ),
'socicon-douban' => __( 'douban', 'wpb_widget_domain' ),
'socicon-meetup' => __( 'meetup', 'wpb_widget_domain' ),
'socicon-playstation' => __( 'playstation', 'wpb_widget_domain' ),
'socicon-android' => __( 'android', 'wpb_widget_domain' ),
'socicon-snapchat' => __( 'snapchat', 'wpb_widget_domain' ),
'socicon-twitter' => __( 'twitter', 'wpb_widget_domain' ),
'socicon-facebook' => __( 'facebook', 'wpb_widget_domain' ),
'socicon-googleplus' => __( 'googleplus', 'wpb_widget_domain' ),
'socicon-pinterest' => __( 'pinterest', 'wpb_widget_domain' ),
'socicon-foursquare' => __( 'foursquare', 'wpb_widget_domain' ),
'socicon-yahoo' => __( 'yahoo', 'wpb_widget_domain' ),
'socicon-skype' => __( 'skype', 'wpb_widget_domain' ),
'socicon-yelp' => __( 'yelp', 'wpb_widget_domain' ),
'socicon-feedburner' => __( 'feedburner', 'wpb_widget_domain' ),
'socicon-linkedin' => __( 'linkedin', 'wpb_widget_domain' ),
'socicon-viadeo' => __( 'viadeo', 'wpb_widget_domain' ),
'socicon-xing' => __( 'xing', 'wpb_widget_domain' ),
'socicon-myspace' => __( 'myspace', 'wpb_widget_domain' ),
'socicon-soundcloud' => __( 'soundcloud', 'wpb_widget_domain' ),
'socicon-spotify' => __( 'spotify', 'wpb_widget_domain' ),
'socicon-grooveshark' => __( 'grooveshark', 'wpb_widget_domain' ),
'socicon-lastfm' => __( 'lastfm', 'wpb_widget_domain' ),
'socicon-youtube' => __( 'youtube', 'wpb_widget_domain' ),
'socicon-vimeo' => __( 'vimeo', 'wpb_widget_domain' ),
'socicon-dailymotion' => __( 'dailymotion', 'wpb_widget_domain' ),
'socicon-vine' => __( 'vine', 'wpb_widget_domain' ),
'socicon-flickr' => __( 'flickr', 'wpb_widget_domain' ),
'socicon-500px' => __( '500px', 'wpb_widget_domain' ),
'socicon-wordpress' => __( 'wordpress', 'wpb_widget_domain' ),
'socicon-tumblr' => __( 'tumblr', 'wpb_widget_domain' ),
'socicon-twitch' => __( 'twitch', 'wpb_widget_domain' ),
'socicon-8tracks' => __( '8tracks', 'wpb_widget_domain' ),
'socicon-amazon' => __( 'amazon', 'wpb_widget_domain' ),
'socicon-icq' => __( 'icq', 'wpb_widget_domain' ),
'socicon-smugmug' => __( 'smugmug', 'wpb_widget_domain' ),
'socicon-ravelry' => __( 'ravelry', 'wpb_widget_domain' ),
'socicon-weibo' => __( 'weibo', 'wpb_widget_domain' ),
'socicon-baidu' => __( 'baidu', 'wpb_widget_domain' ),
'socicon-angellist' => __( 'angellist', 'wpb_widget_domain' ),
'socicon-ebay' => __( 'ebay', 'wpb_widget_domain' ),
'socicon-imdb' => __( 'imdb', 'wpb_widget_domain' ),
'socicon-stayfriends' => __( 'stayfriends', 'wpb_widget_domain' ),
'socicon-residentadvisor' => __( 'residentadvisor', 'wpb_widget_domain' ),
'socicon-google' => __( 'google', 'wpb_widget_domain' ),
'socicon-yandex' => __( 'yandex', 'wpb_widget_domain' ),
'socicon-sharethis' => __( 'sharethis', 'wpb_widget_domain' ),
'socicon-bandcamp' => __( 'bandcamp', 'wpb_widget_domain' ),
'socicon-itunes' => __( 'itunes', 'wpb_widget_domain' ),
'socicon-deezer' => __( 'deezer', 'wpb_widget_domain' ),
'socicon-telegram' => __( 'telegram', 'wpb_widget_domain' ),
'socicon-openid' => __( 'openid', 'wpb_widget_domain' ),
'socicon-amplement' => __( 'amplement', 'wpb_widget_domain' ),
'socicon-viber' => __( 'viber', 'wpb_widget_domain' ),
'socicon-zomato' => __( 'zomato', 'wpb_widget_domain' ),
'socicon-draugiem' => __( 'draugiem', 'wpb_widget_domain' ),
'socicon-endomodo' => __( 'endomodo', 'wpb_widget_domain' ),
'socicon-filmweb' => __( 'filmweb', 'wpb_widget_domain' ),
'socicon-stackexchange' => __( 'stackexchange', 'wpb_widget_domain' ),
'socicon-wykop' => __( 'wykop', 'wpb_widget_domain' ),
'socicon-teamspeak' => __( 'teamspeak', 'wpb_widget_domain' ),
'socicon-teamviewer' => __( 'teamviewer', 'wpb_widget_domain' ),
'socicon-ventrilo' => __( 'ventrilo', 'wpb_widget_domain' ),
'socicon-younow' => __( 'younow', 'wpb_widget_domain' ),
'socicon-raidcall' => __( 'raidcall', 'wpb_widget_domain' ),
'socicon-mumble' => __( 'mumble', 'wpb_widget_domain' ),
'socicon-medium' => __( 'medium', 'wpb_widget_domain' ),
'socicon-bebee' => __( 'bebee', 'wpb_widget_domain' ),
'socicon-hitbox' => __( 'hitbox', 'wpb_widget_domain' ),
'socicon-reverbnation' => __( 'reverbnation', 'wpb_widget_domain' ),
'socicon-formulr' => __( 'formulr', 'wpb_widget_domain' ),
'socicon-instagram' => __( 'instagram', 'wpb_widget_domain' ),
'socicon-battlenet' => __( 'battlenet', 'wpb_widget_domain' ),
'socicon-chrome' => __( 'chrome', 'wpb_widget_domain' ),
'socicon-discord' => __( 'discord', 'wpb_widget_domain' ),
'socicon-issuu' => __( 'issuu', 'wpb_widget_domain' ),
'socicon-macos' => __( 'macos', 'wpb_widget_domain' ),
'socicon-firefox' => __( 'firefox', 'wpb_widget_domain' ),
'socicon-opera' => __( 'opera', 'wpb_widget_domain' ),
'socicon-keybase' => __( 'keybase', 'wpb_widget_domain' ),
'socicon-alliance' => __( 'alliance', 'wpb_widget_domain' ),
'socicon-livejournal' => __( 'livejournal', 'wpb_widget_domain' ),
'socicon-googlephotos' => __( 'googlephotos', 'wpb_widget_domain' ),
'socicon-horde' => __( 'horde', 'wpb_widget_domain' ),
'socicon-etsy' => __( 'etsy', 'wpb_widget_domain' ),
'socicon-zapier' => __( 'zapier', 'wpb_widget_domain' ),
'socicon-google-scholar' => __( 'google-scholar', 'wpb_widget_domain' ),
'socicon-researchgate' => __( 'researchgate', 'wpb_widget_domain' ),
'socicon-wechat' => __( 'wechat', 'wpb_widget_domain' ),
'socicon-strava' => __( 'strava', 'wpb_widget_domain' ),
'socicon-line' => __( 'line', 'wpb_widget_domain' ),
'socicon-lyft' => __( 'lyft', 'wpb_widget_domain' ),
'socicon-uber' => __( 'uber', 'wpb_widget_domain' ),
'socicon-songkick' => __( 'songkick', 'wpb_widget_domain' ),
'socicon-viewbug' => __( 'viewbug', 'wpb_widget_domain' ),
'socicon-googlegroups' => __( 'googlegroups', 'wpb_widget_domain' ),
'socicon-quora' => __( 'quora', 'wpb_widget_domain' ),
'socicon-diablo' => __( 'diablo', 'wpb_widget_domain' ),
'socicon-blizzard' => __( 'blizzard', 'wpb_widget_domain' ),
'socicon-hearthstone' => __( 'hearthstone', 'wpb_widget_domain' ),
'socicon-heroes' => __( 'heroes', 'wpb_widget_domain' ),
'socicon-overwatch' => __( 'overwatch', 'wpb_widget_domain' ),
'socicon-warcraft' => __( 'warcraft', 'wpb_widget_domain' ),
'socicon-starcraft' => __( 'starcraft', 'wpb_widget_domain' ),
'socicon-beam' => __( 'beam', 'wpb_widget_domain' ),
'socicon-curse' => __( 'curse', 'wpb_widget_domain' ),
'socicon-player' => __( 'player', 'wpb_widget_domain' ),
'socicon-streamjar' => __( 'streamjar', 'wpb_widget_domain' ),
'socicon-nintendo' => __( 'nintendo', 'wpb_widget_domain' ),
'socicon-hellocoton' => __( 'hellocoton', 'wpb_widget_domain' ),
);
foreach ( $opicon3 as $key => $naicon3 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $icon3, $key, false ) . '>'. $naicon3 . '</option>';
} ?>
</select>
</p>
<p>
<label><strong><?php _e( 'ATRIBUTO ÍCONO 4' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tico4' ); ?>"><?php _e( 'Título Ícono 04:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tico4' ); ?>" name="<?php echo $this->get_field_name( 'tico4' ); ?>" type="text" value="<?php echo esc_attr( $tico4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ctic4' ); ?>"><?php _e( 'Color Texto Ícono 04:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'ctic4' ); ?>" name="<?php echo $this->get_field_name( 'ctic4' ); ?>" type="text" value="<?php echo esc_attr( $ctic4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'uico4' ); ?>"><?php _e( 'URL Ícono 04:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'uico4' ); ?>" name="<?php echo $this->get_field_name( 'uico4' ); ?>" type="text" value="<?php echo esc_attr( $uico4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'cico4' ); ?>"><?php _e( 'Color Ícono 04:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'cico4' ); ?>" name="<?php echo $this->get_field_name( 'cico4' ); ?>" type="text" value="<?php echo esc_attr( $cico4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'icon4' ); ?>"><?php _e( 'Ícono 04:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'icon4' ); ?>" id="<?php echo $this->get_field_id( 'icon4' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opicon4 = array(
'' => __( 'Selecione', 'wpb_widget_domain' ),
'mbri-add-submenu' => __( 'add-submenu', 'wpb_widget_domain' ),
'mbri-alert' => __( 'alert', 'wpb_widget_domain' ),
'mbri-align-center' => __( 'align-center', 'wpb_widget_domain' ),
'mbri-align-justify' => __( 'align-justify', 'wpb_widget_domain' ),
'mbri-align-left' => __( 'align-left', 'wpb_widget_domain' ),
'mbri-align-right' => __( 'align-right', 'wpb_widget_domain' ),
'mbri-android' => __( 'android', 'wpb_widget_domain' ),
'mbri-apple' => __( 'apple', 'wpb_widget_domain' ),
'mbri-arrow-down' => __( 'arrow-down', 'wpb_widget_domain' ),
'mbri-arrow-next' => __( 'arrow-next', 'wpb_widget_domain' ),
'mbri-arrow-prev' => __( 'arrow-prev', 'wpb_widget_domain' ),
'mbri-arrow-up' => __( 'arrow-up', 'wpb_widget_domain' ),
'mbri-bold' => __( 'bold', 'wpb_widget_domain' ),
'mbri-bookmark' => __( 'bookmark', 'wpb_widget_domain' ),
'mbri-bootstrap' => __( 'bootstrap', 'wpb_widget_domain' ),
'mbri-briefcase' => __( 'briefcase', 'wpb_widget_domain' ),
'mbri-browse' => __( 'browse', 'wpb_widget_domain' ),
'mbri-bulleted-list' => __( 'bulleted-list', 'wpb_widget_domain' ),
'mbri-calendar' => __( 'calendar', 'wpb_widget_domain' ),
'mbri-camera' => __( 'camera', 'wpb_widget_domain' ),
'mbri-cart-add' => __( 'cart-add', 'wpb_widget_domain' ),
'mbri-cart-full' => __( 'cart-full', 'wpb_widget_domain' ),
'mbri-cash' => __( 'cash', 'wpb_widget_domain' ),
'mbri-change-style' => __( 'change-style', 'wpb_widget_domain' ),
'mbri-chat' => __( 'chat', 'wpb_widget_domain' ),
'mbri-clock' => __( 'clock', 'wpb_widget_domain' ),
'mbri-close' => __( 'close', 'wpb_widget_domain' ),
'mbri-cloud' => __( 'cloud', 'wpb_widget_domain' ),
'mbri-code' => __( 'code', 'wpb_widget_domain' ),
'mbri-contact-form' => __( 'contact-form', 'wpb_widget_domain' ),
'mbri-credit-card' => __( 'credit-card', 'wpb_widget_domain' ),
'mbri-cursor-click' => __( 'cursor-click', 'wpb_widget_domain' ),
'mbri-cust-feedback' => __( 'cust-feedback', 'wpb_widget_domain' ),
'mbri-database' => __( 'database', 'wpb_widget_domain' ),
'mbri-delivery' => __( 'delivery', 'wpb_widget_domain' ),
'mbri-desktop' => __( 'desktop', 'wpb_widget_domain' ),
'mbri-devices' => __( 'devices', 'wpb_widget_domain' ),
'mbri-down' => __( 'down', 'wpb_widget_domain' ),
'mbri-download' => __( 'download', 'wpb_widget_domain' ),
'mbri-drag-n-drop' => __( 'drag-n-drop', 'wpb_widget_domain' ),
'mbri-drag-n-drop2' => __( 'drag-n-drop2', 'wpb_widget_domain' ),
'mbri-edit' => __( 'edit', 'wpb_widget_domain' ),
'mbri-edit2' => __( 'edit2', 'wpb_widget_domain' ),
'mbri-error' => __( 'error', 'wpb_widget_domain' ),
'mbri-extension' => __( 'extension', 'wpb_widget_domain' ),
'mbri-features' => __( 'features', 'wpb_widget_domain' ),
'mbri-file' => __( 'file', 'wpb_widget_domain' ),
'mbri-flag' => __( 'flag', 'wpb_widget_domain' ),
'mbri-folder' => __( 'folder', 'wpb_widget_domain' ),
'mbri-gift' => __( 'gift', 'wpb_widget_domain' ),
'mbri-github' => __( 'github', 'wpb_widget_domain' ),
'mbri-globe' => __( 'globe', 'wpb_widget_domain' ),
'mbri-globe-2' => __( 'globe-2', 'wpb_widget_domain' ),
'mbri-growing-chart' => __( 'growing-chart', 'wpb_widget_domain' ),
'mbri-hearth' => __( 'hearth', 'wpb_widget_domain' ),
'mbri-help' => __( 'help', 'wpb_widget_domain' ),
'mbri-home' => __( 'home', 'wpb_widget_domain' ),
'mbri-hot-cup' => __( 'hot-cup', 'wpb_widget_domain' ),
'mbri-idea' => __( 'idea', 'wpb_widget_domain' ),
'mbri-image-gallery' => __( 'image-gallery', 'wpb_widget_domain' ),
'mbri-image-slider' => __( 'image-slider', 'wpb_widget_domain' ),
'mbri-info' => __( 'info', 'wpb_widget_domain' ),
'mbri-italic' => __( 'italic', 'wpb_widget_domain' ),
'mbri-key' => __( 'key', 'wpb_widget_domain' ),
'mbri-laptop' => __( 'laptop', 'wpb_widget_domain' ),
'mbri-layers' => __( 'layers', 'wpb_widget_domain' ),
'mbri-left-right' => __( 'left-right', 'wpb_widget_domain' ),
'mbri-left' => __( 'left', 'wpb_widget_domain' ),
'mbri-letter' => __( 'letter', 'wpb_widget_domain' ),
'mbri-like' => __( 'like', 'wpb_widget_domain' ),
'mbri-link' => __( 'link', 'wpb_widget_domain' ),
'mbri-lock' => __( 'lock', 'wpb_widget_domain' ),
'mbri-login' => __( 'login', 'wpb_widget_domain' ),
'mbri-logout' => __( 'logout', 'wpb_widget_domain' ),
'mbri-magic-stick' => __( 'magic-stick', 'wpb_widget_domain' ),
'mbri-map-pin' => __( 'map-pin', 'wpb_widget_domain' ),
'mbri-menu' => __( 'menu', 'wpb_widget_domain' ),
'mbri-mobile' => __( 'mobile', 'wpb_widget_domain' ),
'mbri-mobile2' => __( 'mobile2', 'wpb_widget_domain' ),
'mbri-mobirise' => __( 'mobirise', 'wpb_widget_domain' ),
'mbri-more-horizontal' => __( 'more-horizontal', 'wpb_widget_domain' ),
'mbri-more-vertical' => __( 'more-vertical', 'wpb_widget_domain' ),
'mbri-music' => __( 'music', 'wpb_widget_domain' ),
'mbri-new-file' => __( 'new-file', 'wpb_widget_domain' ),
'mbri-numbered-list' => __( 'numbered-list', 'wpb_widget_domain' ),
'mbri-opened-folder' => __( 'opened-folder', 'wpb_widget_domain' ),
'mbri-pages' => __( 'pages', 'wpb_widget_domain' ),
'mbri-paper-plane' => __( 'paper-plane', 'wpb_widget_domain' ),
'mbri-paperclip' => __( 'paperclip', 'wpb_widget_domain' ),
'mbri-photo' => __( 'photo', 'wpb_widget_domain' ),
'mbri-photos' => __( 'photos', 'wpb_widget_domain' ),
'mbri-pin' => __( 'pin', 'wpb_widget_domain' ),
'mbri-play' => __( 'play', 'wpb_widget_domain' ),
'mbri-plus' => __( 'plus', 'wpb_widget_domain' ),
'mbri-preview' => __( 'preview', 'wpb_widget_domain' ),
'mbri-print' => __( 'print', 'wpb_widget_domain' ),
'mbri-protect' => __( 'protect', 'wpb_widget_domain' ),
'mbri-question' => __( 'question', 'wpb_widget_domain' ),
'mbri-quote-left' => __( 'quote-left', 'wpb_widget_domain' ),
'mbri-quote-right' => __( 'quote-right', 'wpb_widget_domain' ),
'mbri-refresh' => __( 'refresh', 'wpb_widget_domain' ),
'mbri-responsive' => __( 'responsive', 'wpb_widget_domain' ),
'mbri-right' => __( 'right', 'wpb_widget_domain' ),
'mbri-rocket' => __( 'rocket', 'wpb_widget_domain' ),
'mbri-sad-face' => __( 'sad-face', 'wpb_widget_domain' ),
'mbri-sale' => __( 'sale', 'wpb_widget_domain' ),
'mbri-save' => __( 'save', 'wpb_widget_domain' ),
'mbri-search' => __( 'search', 'wpb_widget_domain' ),
'mbri-setting' => __( 'setting', 'wpb_widget_domain' ),
'mbri-setting2' => __( 'setting2', 'wpb_widget_domain' ),
'mbri-setting3' => __( 'setting3', 'wpb_widget_domain' ),
'mbri-share' => __( 'share', 'wpb_widget_domain' ),
'mbri-shopping-bag' => __( 'shopping-bag', 'wpb_widget_domain' ),
'mbri-shopping-basket' => __( 'shopping-basket', 'wpb_widget_domain' ),
'mbri-shopping-cart' => __( 'shopping-cart', 'wpb_widget_domain' ),
'mbri-sites' => __( 'sites', 'wpb_widget_domain' ),
'mbri-smile-face' => __( 'smile-face', 'wpb_widget_domain' ),
'mbri-speed' => __( 'speed', 'wpb_widget_domain' ),
'mbri-star' => __( 'star', 'wpb_widget_domain' ),
'mbri-success' => __( 'success', 'wpb_widget_domain' ),
'mbri-sun' => __( 'sun', 'wpb_widget_domain' ),
'mbri-sun2' => __( 'sun2', 'wpb_widget_domain' ),
'mbri-tablet' => __( 'tablet', 'wpb_widget_domain' ),
'mbri-tablet-vertical' => __( 'tablet-vertical', 'wpb_widget_domain' ),
'mbri-target' => __( 'target', 'wpb_widget_domain' ),
'mbri-timer' => __( 'timer', 'wpb_widget_domain' ),
'mbri-to-ftp' => __( 'to-ftp', 'wpb_widget_domain' ),
'mbri-to-local-drive' => __( 'to-local-drive', 'wpb_widget_domain' ),
'mbri-touch-swipe' => __( 'touch-swipe', 'wpb_widget_domain' ),
'mbri-touch' => __( 'touch', 'wpb_widget_domain' ),
'mbri-trash' => __( 'trash', 'wpb_widget_domain' ),
'mbri-underline' => __( 'underline', 'wpb_widget_domain' ),
'mbri-unlink' => __( 'unlink', 'wpb_widget_domain' ),
'mbri-unlock' => __( 'unlock', 'wpb_widget_domain' ),
'mbri-up-down' => __( 'up-down', 'wpb_widget_domain' ),
'mbri-up' => __( 'up', 'wpb_widget_domain' ),
'mbri-update' => __( 'update', 'wpb_widget_domain' ),
'mbri-upload' => __( 'upload', 'wpb_widget_domain' ),
'mbri-user' => __( 'user', 'wpb_widget_domain' ),
'mbri-user2' => __( 'user2', 'wpb_widget_domain' ),
'mbri-users' => __( 'users', 'wpb_widget_domain' ),
'mbri-video' => __( 'video', 'wpb_widget_domain' ),
'mbri-video-play' => __( 'video-play', 'wpb_widget_domain' ),
'mbri-watch' => __( 'watch', 'wpb_widget_domain' ),
'mbri-website-theme' => __( 'website-theme', 'wpb_widget_domain' ),
'mbri-wifi' => __( 'wifi', 'wpb_widget_domain' ),
'mbri-windows' => __( 'windows', 'wpb_widget_domain' ),
'mbri-zoom-out' => __( 'zoom-out', 'wpb_widget_domain' ),
'mbri-redo' => __( 'redo', 'wpb_widget_domain' ),
'mbri-undo' => __( 'undo', 'wpb_widget_domain' ),
'socicon-modelmayhem' => __( 'modelmayhem', 'wpb_widget_domain' ),
'socicon-mixcloud' => __( 'mixcloud', 'wpb_widget_domain' ),
'socicon-drupal' => __( 'drupal', 'wpb_widget_domain' ),
'socicon-swarm' => __( 'swarm', 'wpb_widget_domain' ),
'socicon-istock' => __( 'istock', 'wpb_widget_domain' ),
'socicon-yammer' => __( 'yammer', 'wpb_widget_domain' ),
'socicon-ello' => __( 'ello', 'wpb_widget_domain' ),
'socicon-stackoverflow' => __( 'stackoverflow', 'wpb_widget_domain' ),
'socicon-persona' => __( 'persona', 'wpb_widget_domain' ),
'socicon-triplej' => __( 'triplej', 'wpb_widget_domain' ),
'socicon-houzz' => __( 'houzz', 'wpb_widget_domain' ),
'socicon-rss' => __( 'rss', 'wpb_widget_domain' ),
'socicon-paypal' => __( 'paypal', 'wpb_widget_domain' ),
'socicon-odnoklassniki' => __( 'odnoklassniki', 'wpb_widget_domain' ),
'socicon-airbnb' => __( 'airbnb', 'wpb_widget_domain' ),
'socicon-periscope' => __( 'periscope', 'wpb_widget_domain' ),
'socicon-outlook' => __( 'outlook', 'wpb_widget_domain' ),
'socicon-coderwall' => __( 'coderwall', 'wpb_widget_domain' ),
'socicon-tripadvisor' => __( 'tripadvisor', 'wpb_widget_domain' ),
'socicon-appnet' => __( 'appnet', 'wpb_widget_domain' ),
'socicon-goodreads' => __( 'goodreads', 'wpb_widget_domain' ),
'socicon-tripit' => __( 'tripit', 'wpb_widget_domain' ),
'socicon-lanyrd' => __( 'lanyrd', 'wpb_widget_domain' ),
'socicon-slideshare' => __( 'slideshare', 'wpb_widget_domain' ),
'socicon-buffer' => __( 'buffer', 'wpb_widget_domain' ),
'socicon-disqus' => __( 'disqus', 'wpb_widget_domain' ),
'socicon-vkontakte' => __( 'vkontakte', 'wpb_widget_domain' ),
'socicon-whatsapp' => __( 'whatsapp', 'wpb_widget_domain' ),
'socicon-patreon' => __( 'patreon', 'wpb_widget_domain' ),
'socicon-storehouse' => __( 'storehouse', 'wpb_widget_domain' ),
'socicon-pocket' => __( 'pocket', 'wpb_widget_domain' ),
'socicon-mail' => __( 'mail', 'wpb_widget_domain' ),
'socicon-blogger' => __( 'blogger', 'wpb_widget_domain' ),
'socicon-technorati' => __( 'technorati', 'wpb_widget_domain' ),
'socicon-reddit' => __( 'reddit', 'wpb_widget_domain' ),
'socicon-dribbble' => __( 'dribbble', 'wpb_widget_domain' ),
'socicon-stumbleupon' => __( 'stumbleupon', 'wpb_widget_domain' ),
'socicon-digg' => __( 'digg', 'wpb_widget_domain' ),
'socicon-envato' => __( 'envato', 'wpb_widget_domain' ),
'socicon-behance' => __( 'behance', 'wpb_widget_domain' ),
'socicon-delicious' => __( 'delicious', 'wpb_widget_domain' ),
'socicon-deviantart' => __( 'deviantart', 'wpb_widget_domain' ),
'socicon-forrst' => __( 'forrst', 'wpb_widget_domain' ),
'socicon-play' => __( 'play', 'wpb_widget_domain' ),
'socicon-zerply' => __( 'zerply', 'wpb_widget_domain' ),
'socicon-wikipedia' => __( 'wikipedia', 'wpb_widget_domain' ),
'socicon-apple' => __( 'apple', 'wpb_widget_domain' ),
'socicon-flattr' => __( 'flattr', 'wpb_widget_domain' ),
'socicon-github' => __( 'github', 'wpb_widget_domain' ),
'socicon-renren' => __( 'renren', 'wpb_widget_domain' ),
'socicon-friendfeed' => __( 'friendfeed', 'wpb_widget_domain' ),
'socicon-newsvine' => __( 'newsvine', 'wpb_widget_domain' ),
'socicon-identica' => __( 'identica', 'wpb_widget_domain' ),
'socicon-bebo' => __( 'bebo', 'wpb_widget_domain' ),
'socicon-zynga' => __( 'zynga', 'wpb_widget_domain' ),
'socicon-steam' => __( 'steam', 'wpb_widget_domain' ),
'socicon-xbox' => __( 'xbox', 'wpb_widget_domain' ),
'socicon-windows' => __( 'windows', 'wpb_widget_domain' ),
'socicon-qq' => __( 'qq', 'wpb_widget_domain' ),
'socicon-douban' => __( 'douban', 'wpb_widget_domain' ),
'socicon-meetup' => __( 'meetup', 'wpb_widget_domain' ),
'socicon-playstation' => __( 'playstation', 'wpb_widget_domain' ),
'socicon-android' => __( 'android', 'wpb_widget_domain' ),
'socicon-snapchat' => __( 'snapchat', 'wpb_widget_domain' ),
'socicon-twitter' => __( 'twitter', 'wpb_widget_domain' ),
'socicon-facebook' => __( 'facebook', 'wpb_widget_domain' ),
'socicon-googleplus' => __( 'googleplus', 'wpb_widget_domain' ),
'socicon-pinterest' => __( 'pinterest', 'wpb_widget_domain' ),
'socicon-foursquare' => __( 'foursquare', 'wpb_widget_domain' ),
'socicon-yahoo' => __( 'yahoo', 'wpb_widget_domain' ),
'socicon-skype' => __( 'skype', 'wpb_widget_domain' ),
'socicon-yelp' => __( 'yelp', 'wpb_widget_domain' ),
'socicon-feedburner' => __( 'feedburner', 'wpb_widget_domain' ),
'socicon-linkedin' => __( 'linkedin', 'wpb_widget_domain' ),
'socicon-viadeo' => __( 'viadeo', 'wpb_widget_domain' ),
'socicon-xing' => __( 'xing', 'wpb_widget_domain' ),
'socicon-myspace' => __( 'myspace', 'wpb_widget_domain' ),
'socicon-soundcloud' => __( 'soundcloud', 'wpb_widget_domain' ),
'socicon-spotify' => __( 'spotify', 'wpb_widget_domain' ),
'socicon-grooveshark' => __( 'grooveshark', 'wpb_widget_domain' ),
'socicon-lastfm' => __( 'lastfm', 'wpb_widget_domain' ),
'socicon-youtube' => __( 'youtube', 'wpb_widget_domain' ),
'socicon-vimeo' => __( 'vimeo', 'wpb_widget_domain' ),
'socicon-dailymotion' => __( 'dailymotion', 'wpb_widget_domain' ),
'socicon-vine' => __( 'vine', 'wpb_widget_domain' ),
'socicon-flickr' => __( 'flickr', 'wpb_widget_domain' ),
'socicon-500px' => __( '500px', 'wpb_widget_domain' ),
'socicon-wordpress' => __( 'wordpress', 'wpb_widget_domain' ),
'socicon-tumblr' => __( 'tumblr', 'wpb_widget_domain' ),
'socicon-twitch' => __( 'twitch', 'wpb_widget_domain' ),
'socicon-8tracks' => __( '8tracks', 'wpb_widget_domain' ),
'socicon-amazon' => __( 'amazon', 'wpb_widget_domain' ),
'socicon-icq' => __( 'icq', 'wpb_widget_domain' ),
'socicon-smugmug' => __( 'smugmug', 'wpb_widget_domain' ),
'socicon-ravelry' => __( 'ravelry', 'wpb_widget_domain' ),
'socicon-weibo' => __( 'weibo', 'wpb_widget_domain' ),
'socicon-baidu' => __( 'baidu', 'wpb_widget_domain' ),
'socicon-angellist' => __( 'angellist', 'wpb_widget_domain' ),
'socicon-ebay' => __( 'ebay', 'wpb_widget_domain' ),
'socicon-imdb' => __( 'imdb', 'wpb_widget_domain' ),
'socicon-stayfriends' => __( 'stayfriends', 'wpb_widget_domain' ),
'socicon-residentadvisor' => __( 'residentadvisor', 'wpb_widget_domain' ),
'socicon-google' => __( 'google', 'wpb_widget_domain' ),
'socicon-yandex' => __( 'yandex', 'wpb_widget_domain' ),
'socicon-sharethis' => __( 'sharethis', 'wpb_widget_domain' ),
'socicon-bandcamp' => __( 'bandcamp', 'wpb_widget_domain' ),
'socicon-itunes' => __( 'itunes', 'wpb_widget_domain' ),
'socicon-deezer' => __( 'deezer', 'wpb_widget_domain' ),
'socicon-telegram' => __( 'telegram', 'wpb_widget_domain' ),
'socicon-openid' => __( 'openid', 'wpb_widget_domain' ),
'socicon-amplement' => __( 'amplement', 'wpb_widget_domain' ),
'socicon-viber' => __( 'viber', 'wpb_widget_domain' ),
'socicon-zomato' => __( 'zomato', 'wpb_widget_domain' ),
'socicon-draugiem' => __( 'draugiem', 'wpb_widget_domain' ),
'socicon-endomodo' => __( 'endomodo', 'wpb_widget_domain' ),
'socicon-filmweb' => __( 'filmweb', 'wpb_widget_domain' ),
'socicon-stackexchange' => __( 'stackexchange', 'wpb_widget_domain' ),
'socicon-wykop' => __( 'wykop', 'wpb_widget_domain' ),
'socicon-teamspeak' => __( 'teamspeak', 'wpb_widget_domain' ),
'socicon-teamviewer' => __( 'teamviewer', 'wpb_widget_domain' ),
'socicon-ventrilo' => __( 'ventrilo', 'wpb_widget_domain' ),
'socicon-younow' => __( 'younow', 'wpb_widget_domain' ),
'socicon-raidcall' => __( 'raidcall', 'wpb_widget_domain' ),
'socicon-mumble' => __( 'mumble', 'wpb_widget_domain' ),
'socicon-medium' => __( 'medium', 'wpb_widget_domain' ),
'socicon-bebee' => __( 'bebee', 'wpb_widget_domain' ),
'socicon-hitbox' => __( 'hitbox', 'wpb_widget_domain' ),
'socicon-reverbnation' => __( 'reverbnation', 'wpb_widget_domain' ),
'socicon-formulr' => __( 'formulr', 'wpb_widget_domain' ),
'socicon-instagram' => __( 'instagram', 'wpb_widget_domain' ),
'socicon-battlenet' => __( 'battlenet', 'wpb_widget_domain' ),
'socicon-chrome' => __( 'chrome', 'wpb_widget_domain' ),
'socicon-discord' => __( 'discord', 'wpb_widget_domain' ),
'socicon-issuu' => __( 'issuu', 'wpb_widget_domain' ),
'socicon-macos' => __( 'macos', 'wpb_widget_domain' ),
'socicon-firefox' => __( 'firefox', 'wpb_widget_domain' ),
'socicon-opera' => __( 'opera', 'wpb_widget_domain' ),
'socicon-keybase' => __( 'keybase', 'wpb_widget_domain' ),
'socicon-alliance' => __( 'alliance', 'wpb_widget_domain' ),
'socicon-livejournal' => __( 'livejournal', 'wpb_widget_domain' ),
'socicon-googlephotos' => __( 'googlephotos', 'wpb_widget_domain' ),
'socicon-horde' => __( 'horde', 'wpb_widget_domain' ),
'socicon-etsy' => __( 'etsy', 'wpb_widget_domain' ),
'socicon-zapier' => __( 'zapier', 'wpb_widget_domain' ),
'socicon-google-scholar' => __( 'google-scholar', 'wpb_widget_domain' ),
'socicon-researchgate' => __( 'researchgate', 'wpb_widget_domain' ),
'socicon-wechat' => __( 'wechat', 'wpb_widget_domain' ),
'socicon-strava' => __( 'strava', 'wpb_widget_domain' ),
'socicon-line' => __( 'line', 'wpb_widget_domain' ),
'socicon-lyft' => __( 'lyft', 'wpb_widget_domain' ),
'socicon-uber' => __( 'uber', 'wpb_widget_domain' ),
'socicon-songkick' => __( 'songkick', 'wpb_widget_domain' ),
'socicon-viewbug' => __( 'viewbug', 'wpb_widget_domain' ),
'socicon-googlegroups' => __( 'googlegroups', 'wpb_widget_domain' ),
'socicon-quora' => __( 'quora', 'wpb_widget_domain' ),
'socicon-diablo' => __( 'diablo', 'wpb_widget_domain' ),
'socicon-blizzard' => __( 'blizzard', 'wpb_widget_domain' ),
'socicon-hearthstone' => __( 'hearthstone', 'wpb_widget_domain' ),
'socicon-heroes' => __( 'heroes', 'wpb_widget_domain' ),
'socicon-overwatch' => __( 'overwatch', 'wpb_widget_domain' ),
'socicon-warcraft' => __( 'warcraft', 'wpb_widget_domain' ),
'socicon-starcraft' => __( 'starcraft', 'wpb_widget_domain' ),
'socicon-beam' => __( 'beam', 'wpb_widget_domain' ),
'socicon-curse' => __( 'curse', 'wpb_widget_domain' ),
'socicon-player' => __( 'player', 'wpb_widget_domain' ),
'socicon-streamjar' => __( 'streamjar', 'wpb_widget_domain' ),
'socicon-nintendo' => __( 'nintendo', 'wpb_widget_domain' ),
'socicon-hellocoton' => __( 'hellocoton', 'wpb_widget_domain' ),
);
foreach ( $opicon4 as $key => $naicon4 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $icon4, $key, false ) . '>'. $naicon4 . '</option>';
} ?>
</select>
</p>


<?php 
}
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['ctitl'] = ( ! empty( $new_instance['ctitl'] ) ) ? strip_tags( $new_instance['ctitl'] ) : '';
$instance['subti'] = ( ! empty( $new_instance['subti'] ) ) ? strip_tags( $new_instance['subti'] ) : '';
$instance['csubt'] = ( ! empty( $new_instance['csubt'] ) ) ? strip_tags( $new_instance['csubt'] ) : '';
$instance['baopa'] = ( ! empty( $new_instance['baopa'] ) ) ? strip_tags( $new_instance['baopa'] ) : '';
$instance['bacol'] = ( ! empty( $new_instance['bacol'] ) ) ? strip_tags( $new_instance['bacol'] ) : '';
$instance['tbtnp'] = ( ! empty( $new_instance['tbtnp'] ) ) ? strip_tags( $new_instance['tbtnp'] ) : '';
$instance['ubtnp'] = ( ! empty( $new_instance['ubtnp'] ) ) ? strip_tags( $new_instance['ubtnp'] ) : '';
$instance['cbtnp'] = ( ! empty( $new_instance['cbtnp'] ) ) ? strip_tags( $new_instance['cbtnp'] ) : '';
$instance['ibtnp'] = ( ! empty( $new_instance['ibtnp'] ) ) ? strip_tags( $new_instance['ibtnp'] ) : '';
$instance['imgca'] = ( ! empty( $new_instance['imgca'] ) ) ? strip_tags( $new_instance['imgca'] ) : '';
$instance['icon1'] = ( ! empty( $new_instance['icon1'] ) ) ? strip_tags( $new_instance['icon1'] ) : '';
$instance['icon2'] = ( ! empty( $new_instance['icon2'] ) ) ? strip_tags( $new_instance['icon2'] ) : '';
$instance['icon3'] = ( ! empty( $new_instance['icon3'] ) ) ? strip_tags( $new_instance['icon3'] ) : '';
$instance['icon4'] = ( ! empty( $new_instance['icon4'] ) ) ? strip_tags( $new_instance['icon4'] ) : '';
$instance['tico1'] = ( ! empty( $new_instance['tico1'] ) ) ? strip_tags( $new_instance['tico1'] ) : '';
$instance['tico2'] = ( ! empty( $new_instance['tico2'] ) ) ? strip_tags( $new_instance['tico2'] ) : '';
$instance['tico3'] = ( ! empty( $new_instance['tico3'] ) ) ? strip_tags( $new_instance['tico3'] ) : '';
$instance['tico4'] = ( ! empty( $new_instance['tico4'] ) ) ? strip_tags( $new_instance['tico4'] ) : '';
$instance['uico1'] = ( ! empty( $new_instance['uico1'] ) ) ? strip_tags( $new_instance['uico1'] ) : '';
$instance['uico2'] = ( ! empty( $new_instance['uico2'] ) ) ? strip_tags( $new_instance['uico2'] ) : '';
$instance['uico3'] = ( ! empty( $new_instance['uico3'] ) ) ? strip_tags( $new_instance['uico3'] ) : '';
$instance['uico4'] = ( ! empty( $new_instance['uico4'] ) ) ? strip_tags( $new_instance['uico4'] ) : '';
$instance['cico1'] = ( ! empty( $new_instance['cico1'] ) ) ? strip_tags( $new_instance['cico1'] ) : '';
$instance['cico2'] = ( ! empty( $new_instance['cico2'] ) ) ? strip_tags( $new_instance['cico2'] ) : '';
$instance['cico3'] = ( ! empty( $new_instance['cico3'] ) ) ? strip_tags( $new_instance['cico3'] ) : '';
$instance['cico4'] = ( ! empty( $new_instance['cico4'] ) ) ? strip_tags( $new_instance['cico4'] ) : '';
$instance['ctic1'] = ( ! empty( $new_instance['ctic1'] ) ) ? strip_tags( $new_instance['ctic1'] ) : '';
$instance['ctic2'] = ( ! empty( $new_instance['ctic2'] ) ) ? strip_tags( $new_instance['ctic2'] ) : '';
$instance['ctic3'] = ( ! empty( $new_instance['ctic3'] ) ) ? strip_tags( $new_instance['ctic3'] ) : '';
$instance['ctic4'] = ( ! empty( $new_instance['ctic4'] ) ) ? strip_tags( $new_instance['ctic4'] ) : '';
$instance['padto'] = ( ! empty( $new_instance['padto'] ) ) ? strip_tags( $new_instance['padto'] ) : '';
$instance['padbo'] = ( ! empty( $new_instance['padbo'] ) ) ? strip_tags( $new_instance['padbo'] ) : '';

return $instance;
}
} // Class wpb_widget_iwi finaliza aquí