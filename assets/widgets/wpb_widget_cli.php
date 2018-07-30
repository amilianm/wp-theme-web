<?php
// Creando el Widget Nuestros Clientes
class wpb_widget_cli extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget_cli', 
 
// Widget name will appear in UI
__('MAC - Nuestros Clientes', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Muestra Nuestros Clientes', 'wpb_widget_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$ctitl = apply_filters( 'widget_ctitl', $instance['ctitl'] );
$subti = apply_filters( 'widget_subti', $instance['subti'] );
$csubt = apply_filters( 'widget_csubt', $instance['csubt'] );
$cclie = apply_filters( 'widget_cclie', $instance['cclie'] );
$bacol = apply_filters( 'widget_bacol', $instance['bacol'] );
$baopa = apply_filters( 'widget_baopa', $instance['baopa'] );
$imcl1 = apply_filters( 'widget_imcl1', $instance['imcl1'] );
$imcl2 = apply_filters( 'widget_imcl2', $instance['imcl2'] );
$imcl3 = apply_filters( 'widget_imcl3', $instance['imcl3'] );
$imcl4 = apply_filters( 'widget_imcl4', $instance['imcl4'] );
$imcl5 = apply_filters( 'widget_imcl5', $instance['imcl5'] );
$padto = apply_filters( 'widget_padto', $instance['padto'] );
$padbo = apply_filters( 'widget_padbo', $instance['padbo'] );

// before and after widget arguments are defined by themes
//echo $args['before_widget'];
if ( ! empty( $title ) )
?>

<section class="clients cid-clientes" id="clientes" style="padding-top: <?php echo $padto; ?>; padding-bottom: <?php echo $padbo; ?>; background-color: <?php echo $bacol; ?>; opacity: <?php echo $baopa; ?>;">
<div class="container mb-5">
  <div class="media-container-row">
    <div class="col-12 align-center">
      <h2 class="mbr-section-title pb-3 mbr-fonts-style display-1" style="color: <?php echo $ctitl; ?>;"><strong><?php echo $title; ?></strong></h2>
      <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-2" style="color: <?php echo $csubt; ?>;"><?php echo $subti; ?></h3>
    </div>
  </div>
</div>
<div class="container">
  <div class="carousel slide" data-ride="carousel" role="listbox">
    <div class="carousel-inner" data-visible="<?php echo $cclie; ?>">
      <div class="carousel-item ">
        <div class="media-container-row">
          <div class="col-md-12">
            <div class="wrap-img ">
              <img src="<?php bloginfo('template_url'); ?><?php echo $imcl1; ?>" class="img-responsive clients-img">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="media-container-row">
          <div class="col-md-12">
            <div class="wrap-img ">
              <img src="<?php bloginfo('template_url'); ?><?php echo $imcl2; ?>" class="img-responsive clients-img">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="media-container-row">
          <div class="col-md-12">
            <div class="wrap-img ">
              <img src="<?php bloginfo('template_url'); ?><?php echo $imcl3; ?>" class="img-responsive clients-img">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="media-container-row">
          <div class="col-md-12">
            <div class="wrap-img ">
              <img src="<?php bloginfo('template_url'); ?><?php echo $imcl4; ?>" class="img-responsive clients-img">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="media-container-row">
          <div class="col-md-12">
            <div class="wrap-img ">
              <img src="<?php bloginfo('template_url'); ?><?php echo $imcl5; ?>" class="img-responsive clients-img">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-controls">
      <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev">
        <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next">
        <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
        <span class="sr-only">Siguiente</span>
      </a>
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
$cclie = $instance[ 'cclie' ];
$bacol = $instance[ 'bacol' ];
$baopa = $instance[ 'baopa' ];
$imcl1 = $instance[ 'imcl1' ];
$imcl2 = $instance[ 'imcl2' ];
$imcl3 = $instance[ 'imcl3' ];
$imcl4 = $instance[ 'imcl4' ];
$imcl5 = $instance[ 'imcl5' ];
$padto = $instance[ 'padto' ];
$padbo = $instance[ 'padbo' ];
}
else {
$title = __( 'NUESTROS CLIENTES', 'wpb_widget_domain' );
$ctitl = __( '#149dcc', 'wpb_widget_domain' );
$subti = __( 'Presentación tipo slider. Puede cambiar fácilmente los parámetros del Widget.', 'wpb_widget_domain' );
$csubt = __( '#149dcc', 'wpb_widget_domain' );
$cclie = __( '4', 'wpb_widget_domain' );
$bacol = __( '#efefef', 'wpb_widget_domain' );
$baopa = __( '0.9', 'wpb_widget_domain' );
$imcl1 = __( '/assets/images/clientes/imgncl1.png', 'wpb_widget_domain' );
$imcl2 = __( '/assets/images/clientes/imgncl2.png', 'wpb_widget_domain' );
$imcl3 = __( '/assets/images/clientes/imgncl3.png', 'wpb_widget_domain' );
$imcl4 = __( '/assets/images/clientes/imgncl4.png', 'wpb_widget_domain' );
$imcl5 = __( '/assets/images/clientes/imgncl5.png', 'wpb_widget_domain' );
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
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Título:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ctitl' ); ?>"><?php _e( 'Color del Título:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'ctitl' ); ?>" name="<?php echo $this->get_field_name( 'ctitl' ); ?>" type="text" value="<?php echo esc_attr( $ctitl ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'subti' ); ?>"><?php _e( 'Sub Título:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'subti' ); ?>" name="<?php echo $this->get_field_name( 'subti' ); ?>" type="text" value="<?php echo esc_attr( $subti ); ?>" />
<small><?php _e( 'Dejelo en blanco si no quiere mostrarlo...' ); ?></small>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'csubt' ); ?>"><?php _e( 'Color del Sub Título:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'csubt' ); ?>" name="<?php echo $this->get_field_name( 'csubt' ); ?>" type="text" value="<?php echo esc_attr( $csubt ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'cclie' ); ?>"><?php _e( 'Cantidad de Clientes:', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'cclie' ); ?>" id="<?php echo $this->get_field_id( 'cclie' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opcclie = array(
'' => __( 'Selecione', 'wpb_widget_domain' ),
'2' => __( '2', 'wpb_widget_domain' ),
'3' => __( '3', 'wpb_widget_domain' ),
'4' => __( '4', 'wpb_widget_domain' ),
'5' => __( '5', 'wpb_widget_domain' ),
);
foreach ( $opcclie as $key => $nacclie ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $cclie, $key, false ) . '>'. $nacclie . '</option>';
} ?>
</select>
</p>
<p>
<label><strong><?php _e( 'OPCIONES DE LOS CLIENTES' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imcl1' ); ?>"><?php _e( 'Icono Cliente 1:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'imcl1' ); ?>" name="<?php echo $this->get_field_name( 'imcl1' ); ?>" type="text" value="<?php echo esc_attr( $imcl1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imcl2' ); ?>"><?php _e( 'Icono Cliente 2:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'imcl2' ); ?>" name="<?php echo $this->get_field_name( 'imcl2' ); ?>" type="text" value="<?php echo esc_attr( $imcl2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imcl3' ); ?>"><?php _e( 'Icono Cliente 3:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'imcl3' ); ?>" name="<?php echo $this->get_field_name( 'imcl3' ); ?>" type="text" value="<?php echo esc_attr( $imcl3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imcl4' ); ?>"><?php _e( 'Icono Cliente 4:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'imcl4' ); ?>" name="<?php echo $this->get_field_name( 'imcl4' ); ?>" type="text" value="<?php echo esc_attr( $imcl4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imcl5' ); ?>"><?php _e( 'Icono Cliente 5:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'imcl5' ); ?>" name="<?php echo $this->get_field_name( 'imcl5' ); ?>" type="text" value="<?php echo esc_attr( $imcl5 ); ?>" />
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
$instance['cclie'] = ( ! empty( $new_instance['cclie'] ) ) ? strip_tags( $new_instance['cclie'] ) : '';
$instance['bacol'] = ( ! empty( $new_instance['bacol'] ) ) ? strip_tags( $new_instance['bacol'] ) : '';
$instance['baopa'] = ( ! empty( $new_instance['baopa'] ) ) ? strip_tags( $new_instance['baopa'] ) : '';
$instance['imcl1'] = ( ! empty( $new_instance['imcl1'] ) ) ? strip_tags( $new_instance['imcl1'] ) : '';
$instance['imcl2'] = ( ! empty( $new_instance['imcl2'] ) ) ? strip_tags( $new_instance['imcl2'] ) : '';
$instance['imcl3'] = ( ! empty( $new_instance['imcl3'] ) ) ? strip_tags( $new_instance['imcl3'] ) : '';
$instance['imcl4'] = ( ! empty( $new_instance['imcl4'] ) ) ? strip_tags( $new_instance['imcl4'] ) : '';
$instance['imcl5'] = ( ! empty( $new_instance['imcl5'] ) ) ? strip_tags( $new_instance['imcl5'] ) : '';
$instance['padto'] = ( ! empty( $new_instance['padto'] ) ) ? strip_tags( $new_instance['padto'] ) : '';
$instance['padbo'] = ( ! empty( $new_instance['padbo'] ) ) ? strip_tags( $new_instance['padbo'] ) : '';

return $instance;
}
} // Class wpb_widget_cli finaliza aquí