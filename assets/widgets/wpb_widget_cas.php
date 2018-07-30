<?php
// Creando el Widget Cabecera con Deslizador de Imágenes en Pantalla Completa
class wpb_widget_cas extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget_cas', 
 
// Widget name will appear in UI
__('MAC - Slider de Imágenes', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Muestra Cabecera con Deslizador de Imágenes', 'wpb_widget_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$titl1 = apply_filters( 'widget_titl1', $instance['titl1'] );
$titl2 = apply_filters( 'widget_titl2', $instance['titl2'] );
$titl3 = apply_filters( 'widget_titl3', $instance['titl3'] );
$ctit1 = apply_filters( 'widget_ctit1', $instance['ctit1'] );
$ctit2 = apply_filters( 'widget_ctit2', $instance['ctit2'] );
$ctit3 = apply_filters( 'widget_ctit3', $instance['ctit3'] );
$subt1 = apply_filters( 'widget_subt1', $instance['subt1'] );
$subt2 = apply_filters( 'widget_subt2', $instance['subt2'] );
$subt3 = apply_filters( 'widget_subt3', $instance['subt3'] );
$csut1 = apply_filters( 'widget_csut1', $instance['csut1'] );
$csut2 = apply_filters( 'widget_csut2', $instance['csut2'] );
$csut3 = apply_filters( 'widget_csut3', $instance['csut3'] );
$btnp1 = apply_filters( 'widget_btnp1', $instance['btnp1'] );
$btnp2 = apply_filters( 'widget_btnp2', $instance['btnp2'] );
$btnp3 = apply_filters( 'widget_btnp3', $instance['btnp3'] );
$cbtp1 = apply_filters( 'widget_cbtp1', $instance['cbtp1'] );
$cbtp2 = apply_filters( 'widget_cbtp2', $instance['cbtp2'] );
$cbtp3 = apply_filters( 'widget_cbtp3', $instance['cbtp3'] );
$ubtp1 = apply_filters( 'widget_ubtp1', $instance['ubtp1'] );
$ubtp2 = apply_filters( 'widget_ubtp2', $instance['ubtp2'] );
$ubtp3 = apply_filters( 'widget_ubtp3', $instance['ubtp3'] );
$ibtp1 = apply_filters( 'widget_ibtp1', $instance['ibtp1'] );
$ibtp2 = apply_filters( 'widget_ibtp2', $instance['ibtp2'] );
$ibtp3 = apply_filters( 'widget_ibtp3', $instance['ibtp3'] );
$alin1 = apply_filters( 'widget_alin1', $instance['alin1'] );
$alin2 = apply_filters( 'widget_alin2', $instance['alin2'] );
$alin3 = apply_filters( 'widget_alin3', $instance['alin3'] );
$imgt1 = apply_filters( 'widget_imgt1', $instance['imgt1'] );
$imgt2 = apply_filters( 'widget_imgt2', $instance['imgt2'] );
$imgt3 = apply_filters( 'widget_imgt3', $instance['imgt3'] );
$imbc1 = apply_filters( 'widget_imbc1', $instance['imbc1'] );
$imbc2 = apply_filters( 'widget_imbc2', $instance['imbc2'] );
$imbc3 = apply_filters( 'widget_imbc3', $instance['imbc3'] );
$imop1 = apply_filters( 'widget_imop1', $instance['imop1'] );
$imop2 = apply_filters( 'widget_imop2', $instance['imop2'] );
$imop3 = apply_filters( 'widget_imop3', $instance['imop3'] );

// before and after widget arguments are defined by themes
//echo $args['before_widget'];
if ( ! empty( $title ) )
?>

<section class="carousel slide cid-cabslider" data-interval="false" id="slider1-1j">
  <div class="full-screen">
    <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
      <ol class="carousel-indicators">
        <li data-app-prevent-settings="" data-target="#slider1-1j" class=" active" data-slide-to="0"></li>
        <li data-app-prevent-settings="" data-target="#slider1-1j" data-slide-to="1"></li>
        <li data-app-prevent-settings="" data-target="#slider1-1j" data-slide-to="2"></li>
      </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(<?php bloginfo('template_url'); ?><?php echo $imgt1; ?>);">
      <div class="container container-slide">
        <div class="image_wrapper">
          <div class="mbr-overlay" style="opacity: <?php echo $imop1; ?>; background-color: <?php echo $imbc1; ?>;"></div>
            <img src="<?php bloginfo('template_url'); ?><?php echo $imgt1; ?>">
              <div class="carousel-caption justify-content-center">
                <div class="col-10 <?php echo $alin1; ?>">
                  <h2 class="mbr-fonts-style display-1" style="color: <?php echo $ctit1; ?>;"><?php echo $titl1; ?></h2>
                    <p class="lead mbr-text mbr-fonts-style display-5" style="color: <?php echo $csut1; ?>;"><?php echo $subt1; ?></p>
                    <div class="mbr-section-btn" buttons="0">
                      <?php if ( ! empty( $btnp1 ) ) { ?>
                      <a class="btn display-4 <?php echo $cbtp1; ?>" href="<?php echo $ubtp1; ?>">
                        <?php if ( ! empty( $ibtp1 ) ) { ?>
                        <span class="<?php echo $ibtp1; ?> mbr-iconfont mbr-iconfont-btn"></span>
                        <?php } ?>
                        <?php echo $btnp1; ?>
                      </a>
                      <?php } ?>
                    </div>
                </div>
              </div>
        </div>
      </div>
    </div>
    <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php bloginfo('template_url'); ?><?php echo $imgt2; ?>);">
      <div class="container container-slide">
        <div class="image_wrapper">
          <div class="mbr-overlay" style="opacity: <?php echo $imop2; ?>; background-color: <?php echo $imbc2; ?>;"></div>
            <img src="<?php bloginfo('template_url'); ?><?php echo $imgt2; ?>">
              <div class="carousel-caption justify-content-center">
                <div class="col-10 <?php echo $alin2; ?>">
                  <h2 class="mbr-fonts-style display-1" style="color: <?php echo $ctit2; ?>;"><?php echo $titl2; ?></h2>
                    <p class="lead mbr-text mbr-fonts-style display-5" style="color: <?php echo $csut2; ?>;"><?php echo $subt2; ?></p>
                    <div class="mbr-section-btn" buttons="0">
                      <?php if ( ! empty( $btnp2 ) ) { ?>
                      <a class="btn display-4 <?php echo $cbtp2; ?>" href="<?php echo $ubtp2; ?>">
                        <?php if ( ! empty( $ibtp2 ) ) { ?>
                        <span class="<?php echo $ibtp2; ?> mbr-iconfont mbr-iconfont-btn"></span>
                        <?php } ?>
                        <?php echo $btnp2; ?>
                      </a>
                      <?php } ?>
                    </div>
                </div>
              </div>
        </div>
      </div>
    </div>
    <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php bloginfo('template_url'); ?><?php echo $imgt3; ?>);">
      <div class="container container-slide">
        <div class="image_wrapper">
          <div class="mbr-overlay" style="opacity: <?php echo $imop3; ?>; background-color: <?php echo $imbc3; ?>;"></div>
            <img src="<?php bloginfo('template_url'); ?><?php echo $imgt3; ?>">
              <div class="carousel-caption justify-content-center">
                <div class="col-10 <?php echo $alin3; ?>">
                  <h2 class="mbr-fonts-style display-1" style="color: <?php echo $ctit3; ?>;"><?php echo $titl3; ?></h2>
                    <p class="lead mbr-text mbr-fonts-style display-5" style="color: <?php echo $csut3; ?>;"><?php echo $subt3; ?></p>
                    <div class="mbr-section-btn" buttons="0">
                      <?php if ( ! empty( $btnp3 ) ) { ?>
                      <a class="btn display-4 <?php echo $cbtp3; ?>" href="<?php echo $ubtp3; ?>">
                        <?php if ( ! empty( $ibtp3 ) ) { ?>
                        <span class="<?php echo $ibtp3; ?> mbr-iconfont mbr-iconfont-btn"></span>
                        <?php } ?>
                        <?php echo $btnp3; ?>
                      </a>
                      <?php } ?>
                    </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
    <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-1j">
    <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
    <span class="sr-only">Siguiente</span></a>
    <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-1j">
    <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
    <span class="sr-only">Anterior</span></a>
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
$titl1 = $instance[ 'titl1' ];
$titl2 = $instance[ 'titl2' ];
$titl3 = $instance[ 'titl3' ];
$ctit1 = $instance[ 'ctit1' ];
$ctit2 = $instance[ 'ctit2' ];
$ctit3 = $instance[ 'ctit3' ];
$subt1 = $instance[ 'subt1' ];
$subt2 = $instance[ 'subt2' ];
$subt3 = $instance[ 'subt3' ];
$csut1 = $instance[ 'csut1' ];
$csut2 = $instance[ 'csut2' ];
$csut3 = $instance[ 'csut3' ];
$btnp1 = $instance[ 'btnp1' ];
$btnp2 = $instance[ 'btnp2' ];
$btnp3 = $instance[ 'btnp3' ];
$cbtp1 = $instance[ 'cbtp1' ];
$cbtp2 = $instance[ 'cbtp2' ];
$cbtp3 = $instance[ 'cbtp3' ];
$ubtp1 = $instance[ 'ubtp1' ];
$ubtp2 = $instance[ 'ubtp2' ];
$ubtp3 = $instance[ 'ubtp3' ];
$ibtp1 = $instance[ 'ibtp1' ];
$ibtp2 = $instance[ 'ibtp2' ];
$ibtp3 = $instance[ 'ibtp3' ];
$alin1 = $instance[ 'alin1' ];
$alin2 = $instance[ 'alin2' ];
$alin3 = $instance[ 'alin3' ];
$imgt1 = $instance[ 'imgt1' ];
$imgt2 = $instance[ 'imgt2' ];
$imgt3 = $instance[ 'imgt3' ];
$imbc1 = $instance[ 'imbc1' ];
$imbc2 = $instance[ 'imbc2' ];
$imbc3 = $instance[ 'imbc3' ];
$imop1 = $instance[ 'imop1' ];
$imop2 = $instance[ 'imop2' ];
$imop3 = $instance[ 'imop3' ];

}
else {
$title = __( 'Deslizador de Imágenes', 'wpb_widget_domain' );
$titl1 = __( 'CARRUSEL DE IMÁGENES A PANTALLA COMPLETA', 'wpb_widget_domain' );
$titl2 = __( 'DIAPOSITIVA DE IMAGEN', 'wpb_widget_domain' );
$titl3 = __( 'DIAPOSITIVA DE IMAGEN', 'wpb_widget_domain' );
$ctit1 = __( '#FFFFFF', 'wpb_widget_domain' );
$ctit2 = __( '#FFFFFF', 'wpb_widget_domain' );
$ctit3 = __( '#FFFFFF', 'wpb_widget_domain' );
$subt1 = __( 'Elija entre la gran selección de bloques prediseñados más recientes: jumbotrons, hero images, desplazamiento con paralaje, menú de hamburguesa, encabezado fijo y más.', 'wpb_widget_domain' );
$subt2 = __( 'Elija entre la gran selección de bloques prediseñados más recientes: jumbotrons, hero images, desplazamiento con paralaje, menú de hamburguesa, encabezado fijo y más.', 'wpb_widget_domain' );
$subt3 = __( 'Elija entre la gran selección de bloques prediseñados más recientes: jumbotrons, hero images, desplazamiento con paralaje, menú de hamburguesa, encabezado fijo y más.', 'wpb_widget_domain' );
$csut1 = __( '#FFFFFF', 'wpb_widget_domain' );
$csut2 = __( '#FFFFFF', 'wpb_widget_domain' );
$csut3 = __( '#FFFFFF', 'wpb_widget_domain' );
$btnp1 = __( 'BOTÓN 1', 'wpb_widget_domain' );
$btnp2 = __( 'BOTÓN 2', 'wpb_widget_domain' );
$btnp3 = __( 'BOTÓN 3', 'wpb_widget_domain' );
$cbtp1 = __( 'btn-success', 'wpb_widget_domain' );
$cbtp2 = __( 'btn-primary', 'wpb_widget_domain' );
$cbtp3 = __( 'btn-secondary', 'wpb_widget_domain' );
$ubtp1 = __( '#', 'wpb_widget_domain' );
$ubtp2 = __( '#', 'wpb_widget_domain' );
$ubtp3 = __( '#', 'wpb_widget_domain' );
$ibtp1 = __( 'mbri-android', 'wpb_widget_domain' );
$ibtp2 = __( 'mbri-android', 'wpb_widget_domain' );
$ibtp3 = __( 'mbri-android', 'wpb_widget_domain' );
$alin1 = __( 'align-center', 'wpb_widget_domain' );
$alin2 = __( 'align-left', 'wpb_widget_domain' );
$alin3 = __( 'align-right', 'wpb_widget_domain' );
$imgt1 = __( '/assets/images/slider/1.jpg', 'wpb_widget_domain' );
$imgt2 = __( '/assets/images/slider/2.jpg', 'wpb_widget_domain' );
$imgt3 = __( '/assets/images/slider/3.jpg', 'wpb_widget_domain' );
$imbc1 = __( '#000000', 'wpb_widget_domain' );
$imbc2 = __( '#000000', 'wpb_widget_domain' );
$imbc3 = __( '#000000', 'wpb_widget_domain' );
$imop1 = __( '0.4', 'wpb_widget_domain' );
$imop2 = __( '0.4', 'wpb_widget_domain' );
$imop3 = __( '0.4', 'wpb_widget_domain' );

}
// Widget Formulario Administrativo
?>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('.wcolorp').wpColorPicker();
});
</script>
<p>
<label for="<?php echo $this->get_field_id( 'titl1' ); ?>"><?php _e( 'Título:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label><strong><?php _e( 'ATRIBUTO SLIDER 1' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'alin1' ); ?>"><?php _e( 'Alineación del Texto 1:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'alin1' ); ?>" id="<?php echo $this->get_field_id( 'alin1' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opalin1 = array(
'' => __( 'Selecione', 'wpb_widget_domain' ),
'align-center' => __( 'Centro', 'wpb_widget_domain' ),
'align-left' => __( 'Isquierda', 'wpb_widget_domain' ),
'align-right' => __( 'Derecha', 'wpb_widget_domain' ),
);
foreach ( $opalin1 as $key => $naalin1 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $alin1, $key, false ) . '>'. $naalin1 . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'titl1' ); ?>"><?php _e( 'Título 1:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'titl1' ); ?>" name="<?php echo $this->get_field_name( 'titl1' ); ?>" type="text" value="<?php echo esc_attr( $titl1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ctit1' ); ?>"><?php _e( 'Color del Título 1:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'ctit1' ); ?>" name="<?php echo $this->get_field_name( 'ctit1' ); ?>" type="text" value="<?php echo esc_attr( $ctit1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'subt1' ); ?>"><?php _e( 'Sub-Título 1:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'subt1' ); ?>" name="<?php echo $this->get_field_name( 'subt1' ); ?>" type="text" value="<?php echo esc_attr( $subt1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'csut1' ); ?>"><?php _e( 'Color del Sub-Título 1:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'csut1' ); ?>" name="<?php echo $this->get_field_name( 'csut1' ); ?>" type="text" value="<?php echo esc_attr( $csut1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'btnp1' ); ?>"><?php _e( 'Título del Botón Primario 1:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'btnp1' ); ?>" name="<?php echo $this->get_field_name( 'btnp1' ); ?>" type="text" value="<?php echo esc_attr( $btnp1 ); ?>" />
<small><?php _e( 'Dejelo en blanco si no quiere mostrarlo...' ); ?></small>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'cbtp1' ); ?>"><?php _e( 'Color Botón Primario 1:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'cbtp1' ); ?>" id="<?php echo $this->get_field_id( 'cbtp1' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opcbtp1 = array(
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
foreach ( $opcbtp1 as $key => $nacbtp1 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $cbtp1, $key, false ) . '>'. $nacbtp1 . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ibtp1' ); ?>"><?php _e( 'Ícono Botón Primario 1:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'ibtp1' ); ?>" id="<?php echo $this->get_field_id( 'ibtp1' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opibtp1 = array(
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
foreach ( $opibtp1 as $key => $naibtp1 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $ibtp1, $key, false ) . '>'. $naibtp1 . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ubtp1' ); ?>"><?php _e( 'URL Botón Primario 1:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'ubtp1' ); ?>" name="<?php echo $this->get_field_name( 'ubtp1' ); ?>" type="text" value="<?php echo esc_attr( $ubtp1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imgt1' ); ?>"><?php _e( 'Imágen del Slider 1:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'imgt1' ); ?>" name="<?php echo $this->get_field_name( 'imgt1' ); ?>" type="text" value="<?php echo esc_attr( $imgt1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imop1' ); ?>"><?php _e( 'Opacidad de Fondo 1:', 'wpb_widget_domain' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'imop1' ); ?>" name="<?php echo $this->get_field_name( 'imop1' ); ?>" type="range" min="0.1" max="1" step="0.1" value="<?php echo esc_attr( $imop1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imbc1' ); ?>"><?php _e( 'Color de Fondo 1:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'imbc1' ); ?>" name="<?php echo $this->get_field_name( 'imbc1' ); ?>" type="text" value="<?php echo esc_attr( $imbc1 ); ?>" />
</p>
<p>
<label><strong><?php _e( 'ATRIBUTO SLIDER 2' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'alin2' ); ?>"><?php _e( 'Alineación del Texto 2:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'alin2' ); ?>" id="<?php echo $this->get_field_id( 'alin2' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opalin2 = array(
'' => __( 'Selecione', 'wpb_widget_domain' ),
'align-center' => __( 'Centro', 'wpb_widget_domain' ),
'align-left' => __( 'Isquierda', 'wpb_widget_domain' ),
'align-right' => __( 'Derecha', 'wpb_widget_domain' ),
);
foreach ( $opalin2 as $key => $naalin2 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $alin2, $key, false ) . '>'. $naalin2 . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'titl2' ); ?>"><?php _e( 'Título 2:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'titl2' ); ?>" name="<?php echo $this->get_field_name( 'titl2' ); ?>" type="text" value="<?php echo esc_attr( $titl2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ctit2' ); ?>"><?php _e( 'Color del Título 2:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'ctit2' ); ?>" name="<?php echo $this->get_field_name( 'ctit2' ); ?>" type="text" value="<?php echo esc_attr( $ctit2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'subt2' ); ?>"><?php _e( 'Sub-Título 2:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'subt2' ); ?>" name="<?php echo $this->get_field_name( 'subt2' ); ?>" type="text" value="<?php echo esc_attr( $subt2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'csut2' ); ?>"><?php _e( 'Color del Sub-Título 2:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'csut2' ); ?>" name="<?php echo $this->get_field_name( 'csut2' ); ?>" type="text" value="<?php echo esc_attr( $csut2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'btnp2' ); ?>"><?php _e( 'Título del Botón Primario 2:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'btnp2' ); ?>" name="<?php echo $this->get_field_name( 'btnp2' ); ?>" type="text" value="<?php echo esc_attr( $btnp2 ); ?>" />
<small><?php _e( 'Dejelo en blanco si no quiere mostrarlo...' ); ?></small>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'cbtp2' ); ?>"><?php _e( 'Color Botón Primario 2:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'cbtp2' ); ?>" id="<?php echo $this->get_field_id( 'cbtp2' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opcbtp2 = array(
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
foreach ( $opcbtp2 as $key => $nacbtp2 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $cbtp2, $key, false ) . '>'. $nacbtp2 . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ibtp2' ); ?>"><?php _e( 'Ícono Botón Primario 2:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'ibtp2' ); ?>" id="<?php echo $this->get_field_id( 'ibtp2' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opibtp2 = array(
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
foreach ( $opibtp2 as $key => $naibtp2 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $ibtp2, $key, false ) . '>'. $naibtp2 . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ubtp2' ); ?>"><?php _e( 'URL Botón Primario 2:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'ubtp2' ); ?>" name="<?php echo $this->get_field_name( 'ubtp2' ); ?>" type="text" value="<?php echo esc_attr( $ubtp2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imgt2' ); ?>"><?php _e( 'Imágen del Slider 2:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'imgt2' ); ?>" name="<?php echo $this->get_field_name( 'imgt2' ); ?>" type="text" value="<?php echo esc_attr( $imgt2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imop2' ); ?>"><?php _e( 'Opacidad de Fondo 2:', 'wpb_widget_domain' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'imop2' ); ?>" name="<?php echo $this->get_field_name( 'imop2' ); ?>" type="range" min="0.1" max="1" step="0.1" value="<?php echo esc_attr( $imop2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imbc2' ); ?>"><?php _e( 'Color de Fondo 2:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'imbc2' ); ?>" name="<?php echo $this->get_field_name( 'imbc2' ); ?>" type="text" value="<?php echo esc_attr( $imbc2 ); ?>" />
</p>
<p>
<label><strong><?php _e( 'ATRIBUTO SLIDER 3' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'alin3' ); ?>"><?php _e( 'Alineación del Texto 3:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'alin3' ); ?>" id="<?php echo $this->get_field_id( 'alin3' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opalin3 = array(
'' => __( 'Selecione', 'wpb_widget_domain' ),
'align-center' => __( 'Centro', 'wpb_widget_domain' ),
'align-left' => __( 'Isquierda', 'wpb_widget_domain' ),
'align-right' => __( 'Derecha', 'wpb_widget_domain' ),
);
foreach ( $opalin3 as $key => $naalin3 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $alin3, $key, false ) . '>'. $naalin3 . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'titl3' ); ?>"><?php _e( 'Título 3:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'titl3' ); ?>" name="<?php echo $this->get_field_name( 'titl3' ); ?>" type="text" value="<?php echo esc_attr( $titl3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ctit3' ); ?>"><?php _e( 'Color del Título 3:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'ctit3' ); ?>" name="<?php echo $this->get_field_name( 'ctit3' ); ?>" type="text" value="<?php echo esc_attr( $ctit3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'subt3' ); ?>"><?php _e( 'Sub-Título 3:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'subt3' ); ?>" name="<?php echo $this->get_field_name( 'subt3' ); ?>" type="text" value="<?php echo esc_attr( $subt3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'csut3' ); ?>"><?php _e( 'Color del Sub-Título 3:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'csut3' ); ?>" name="<?php echo $this->get_field_name( 'csut3' ); ?>" type="text" value="<?php echo esc_attr( $csut3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'btnp3' ); ?>"><?php _e( 'Título del Botón Primario 3:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'btnp3' ); ?>" name="<?php echo $this->get_field_name( 'btnp3' ); ?>" type="text" value="<?php echo esc_attr( $btnp3 ); ?>" />
<small><?php _e( 'Dejelo en blanco si no quiere mostrarlo...' ); ?></small>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'cbtp3' ); ?>"><?php _e( 'Color Botón Primario 3:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'cbtp3' ); ?>" id="<?php echo $this->get_field_id( 'cbtp3' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opcbtp3 = array(
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
foreach ( $opcbtp3 as $key => $nacbtp3 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $cbtp3, $key, false ) . '>'. $nacbtp3 . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ibtp3' ); ?>"><?php _e( 'Ícono Botón Primario 3:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'ibtp3' ); ?>" id="<?php echo $this->get_field_id( 'ibtp3' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opibtp3 = array(
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
foreach ( $opibtp3 as $key => $naibtp3 ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $ibtp3, $key, false ) . '>'. $naibtp3 . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ubtp3' ); ?>"><?php _e( 'URL Botón Primario 3:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'ubtp3' ); ?>" name="<?php echo $this->get_field_name( 'ubtp3' ); ?>" type="text" value="<?php echo esc_attr( $ubtp3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imgt3' ); ?>"><?php _e( 'Imágen del Slider 3:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'imgt3' ); ?>" name="<?php echo $this->get_field_name( 'imgt3' ); ?>" type="text" value="<?php echo esc_attr( $imgt3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imop3' ); ?>"><?php _e( 'Opacidad de Fondo 3:', 'wpb_widget_domain' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'imop3' ); ?>" name="<?php echo $this->get_field_name( 'imop3' ); ?>" type="range" min="0.1" max="1" step="0.1" value="<?php echo esc_attr( $imop3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imbc3' ); ?>"><?php _e( 'Color de Fondo 3:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'imbc3' ); ?>" name="<?php echo $this->get_field_name( 'imbc3' ); ?>" type="text" value="<?php echo esc_attr( $imbc3 ); ?>" />
</p>
<?php 
}
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['titl1'] = ( ! empty( $new_instance['titl1'] ) ) ? strip_tags( $new_instance['titl1'] ) : '';
$instance['titl2'] = ( ! empty( $new_instance['titl2'] ) ) ? strip_tags( $new_instance['titl2'] ) : '';
$instance['titl3'] = ( ! empty( $new_instance['titl3'] ) ) ? strip_tags( $new_instance['titl3'] ) : '';
$instance['ctit1'] = ( ! empty( $new_instance['ctit1'] ) ) ? strip_tags( $new_instance['ctit1'] ) : '';
$instance['ctit2'] = ( ! empty( $new_instance['ctit2'] ) ) ? strip_tags( $new_instance['ctit2'] ) : '';
$instance['ctit3'] = ( ! empty( $new_instance['ctit3'] ) ) ? strip_tags( $new_instance['ctit3'] ) : '';
$instance['subt1'] = ( ! empty( $new_instance['subt1'] ) ) ? strip_tags( $new_instance['subt1'] ) : '';
$instance['subt2'] = ( ! empty( $new_instance['subt2'] ) ) ? strip_tags( $new_instance['subt2'] ) : '';
$instance['subt3'] = ( ! empty( $new_instance['subt3'] ) ) ? strip_tags( $new_instance['subt3'] ) : '';
$instance['csut1'] = ( ! empty( $new_instance['csut1'] ) ) ? strip_tags( $new_instance['csut1'] ) : '';
$instance['csut2'] = ( ! empty( $new_instance['csut2'] ) ) ? strip_tags( $new_instance['csut2'] ) : '';
$instance['csut3'] = ( ! empty( $new_instance['csut3'] ) ) ? strip_tags( $new_instance['csut3'] ) : '';
$instance['btnp1'] = ( ! empty( $new_instance['btnp1'] ) ) ? strip_tags( $new_instance['btnp1'] ) : '';
$instance['btnp2'] = ( ! empty( $new_instance['btnp2'] ) ) ? strip_tags( $new_instance['btnp2'] ) : '';
$instance['btnp3'] = ( ! empty( $new_instance['btnp3'] ) ) ? strip_tags( $new_instance['btnp3'] ) : '';
$instance['cbtp1'] = ( ! empty( $new_instance['cbtp1'] ) ) ? strip_tags( $new_instance['cbtp1'] ) : '';
$instance['cbtp2'] = ( ! empty( $new_instance['cbtp2'] ) ) ? strip_tags( $new_instance['cbtp2'] ) : '';
$instance['cbtp3'] = ( ! empty( $new_instance['cbtp3'] ) ) ? strip_tags( $new_instance['cbtp3'] ) : '';
$instance['ubtp1'] = ( ! empty( $new_instance['ubtp1'] ) ) ? strip_tags( $new_instance['ubtp1'] ) : '';
$instance['ubtp2'] = ( ! empty( $new_instance['ubtp2'] ) ) ? strip_tags( $new_instance['ubtp2'] ) : '';
$instance['ubtp3'] = ( ! empty( $new_instance['ubtp3'] ) ) ? strip_tags( $new_instance['ubtp3'] ) : '';
$instance['ibtp1'] = ( ! empty( $new_instance['ibtp1'] ) ) ? strip_tags( $new_instance['ibtp1'] ) : '';
$instance['ibtp2'] = ( ! empty( $new_instance['ibtp2'] ) ) ? strip_tags( $new_instance['ibtp2'] ) : '';
$instance['ibtp3'] = ( ! empty( $new_instance['ibtp3'] ) ) ? strip_tags( $new_instance['ibtp3'] ) : '';
$instance['alin1'] = ( ! empty( $new_instance['alin1'] ) ) ? strip_tags( $new_instance['alin1'] ) : '';
$instance['alin2'] = ( ! empty( $new_instance['alin2'] ) ) ? strip_tags( $new_instance['alin2'] ) : '';
$instance['alin3'] = ( ! empty( $new_instance['alin3'] ) ) ? strip_tags( $new_instance['alin3'] ) : '';
$instance['imgt1'] = ( ! empty( $new_instance['imgt1'] ) ) ? strip_tags( $new_instance['imgt1'] ) : '';
$instance['imgt2'] = ( ! empty( $new_instance['imgt2'] ) ) ? strip_tags( $new_instance['imgt2'] ) : '';
$instance['imgt3'] = ( ! empty( $new_instance['imgt3'] ) ) ? strip_tags( $new_instance['imgt3'] ) : '';
$instance['imbc1'] = ( ! empty( $new_instance['imbc1'] ) ) ? strip_tags( $new_instance['imbc1'] ) : '';
$instance['imbc2'] = ( ! empty( $new_instance['imbc2'] ) ) ? strip_tags( $new_instance['imbc2'] ) : '';
$instance['imbc3'] = ( ! empty( $new_instance['imbc3'] ) ) ? strip_tags( $new_instance['imbc3'] ) : '';
$instance['imop1'] = ( ! empty( $new_instance['imop1'] ) ) ? strip_tags( $new_instance['imop1'] ) : '';
$instance['imop2'] = ( ! empty( $new_instance['imop2'] ) ) ? strip_tags( $new_instance['imop2'] ) : '';
$instance['imop3'] = ( ! empty( $new_instance['imop3'] ) ) ? strip_tags( $new_instance['imop3'] ) : '';

return $instance;
}
} // Class wpb_widget_cas finaliza aquí