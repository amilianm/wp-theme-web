<?php
// Creando el Widget Mapa de Google
class wpb_widget_neq extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget_neq', 
 
// Widget name will appear in UI
__('MAC - Nuestro Equipo', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Muestra Nuestro Equipo', 'wpb_widget_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$ctitl = apply_filters( 'widget_ctitl', $instance['ctitl'] );
$subti = apply_filters( 'widget_subti', $instance['subti'] );
$csubt = apply_filters( 'widget_csubt', $instance['csubt'] );
$bacol = apply_filters( 'widget_bacol', $instance['bacol'] );
$baopa = apply_filters( 'widget_baopa', $instance['baopa'] );
$txne1 = apply_filters( 'widget_txne1', $instance['txne1'] );
$txne2 = apply_filters( 'widget_txne2', $instance['txne2'] );
$txne3 = apply_filters( 'widget_txne3', $instance['txne3'] );
$imne1 = apply_filters( 'widget_imne1', $instance['imne1'] );
$imne2 = apply_filters( 'widget_imne2', $instance['imne2'] );
$imne3 = apply_filters( 'widget_imne3', $instance['imne3'] );
$padto = apply_filters( 'widget_padto', $instance['padto'] );
$padbo = apply_filters( 'widget_padbo', $instance['padbo'] );
$cartc = apply_filters( 'widget_cartc', $instance['cartc'] );
$carbc = apply_filters( 'widget_carbc', $instance['carbc'] );

// before and after widget arguments are defined by themes
//echo $args['before_widget'];
if ( ! empty( $title ) )
?>

<section class="features16 cid-equipo" id="equipo" style="padding-top: <?php echo $padto; ?>; padding-bottom: <?php echo $padbo; ?>; background-color: <?php echo $bacol; ?>; opacity: <?php echo $baopa; ?>;">
<div class="container align-center">
  <h2 class="pb-3 mbr-fonts-style mbr-section-title display-1" style="color: <?php echo $ctitl; ?>;"><strong><?php echo $title; ?></strong></h2>
  <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-2" style="color: <?php echo $csubt; ?>;"><?php echo $subti; ?></h3>
<div class="row media-row">
  
  <div class="team-item col-lg-3 col-md-6">
    <div class="item-image">
      <img src="<?php bloginfo('template_url'); ?><?php echo $imne1; ?>">
    </div>
    <div class="item-caption py-3" style="background-color:<?php echo $carbc; ?>;">
      <div class="item-name px-2">
        <p class="mbr-fonts-style display-5" style="color:<?php echo $cartc; ?>;"><?php echo $txne1; ?></p>
      </div>
    </div>
  </div>
  
  <div class="team-item col-lg-3 col-md-6">
    <div class="item-image">
      <img src="<?php bloginfo('template_url'); ?><?php echo $imne2; ?>">
    </div>
    <div class="item-caption py-3" style="background-color:<?php echo $carbc; ?>;">
      <div class="item-name px-2">
        <p class="mbr-fonts-style display-5" style="color:<?php echo $cartc; ?>;"><?php echo $txne2; ?></p>
      </div>
    </div>
  </div>

  <div class="team-item col-lg-3 col-md-6">
    <div class="item-image">
      <img src="<?php bloginfo('template_url'); ?><?php echo $imne3; ?>">
    </div>
    <div class="item-caption py-3" style="background-color:<?php echo $carbc; ?>;">
      <div class="item-name px-2">
        <p class="mbr-fonts-style display-5" style="color:<?php echo $cartc; ?>;"><?php echo $txne3; ?></p>
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
$txne1 = $instance[ 'txne1' ];
$txne2 = $instance[ 'txne2' ];
$txne3 = $instance[ 'txne3' ];
$imne1 = $instance[ 'imne1' ];
$imne2 = $instance[ 'imne2' ];
$imne3 = $instance[ 'imne3' ];
$padto = $instance[ 'padto' ];
$padbo = $instance[ 'padbo' ];
$cartc = $instance[ 'cartc' ];
$carbc = $instance[ 'carbc' ];
}
else {
$title = __( 'NUESTRO EQUIPO', 'wpb_widget_domain' );
$ctitl = __( '#358e01', 'wpb_widget_domain' );
$subti = __( 'Presentación tipo tarjeta. Puede cambiar fácilmente los parámetros del Widget.', 'wpb_widget_domain' );
$csubt = __( '#3d3d3d', 'wpb_widget_domain' );
$baopa = __( '0.9', 'wpb_widget_domain' );
$bacol = __( '#efefef', 'wpb_widget_domain' );
$txne1 = __( 'Maria Colmenares', 'wpb_widget_domain' );
$txne2 = __( 'Alain Milian', 'wpb_widget_domain' );
$txne3 = __( 'Nakary Romero', 'wpb_widget_domain' );
$imne1 = __( '/assets/images/equipo/1.svg', 'wpb_widget_domain' );
$imne2 = __( '/assets/images/equipo/2.svg', 'wpb_widget_domain' );
$imne3 = __( '/assets/images/equipo/3.svg', 'wpb_widget_domain' );
$padto = __( '90px', 'wpb_widget_domain' );
$padbo = __( '90px', 'wpb_widget_domain' );
$carbc = __( '#3d3d3d', 'wpb_widget_domain' );
$cartc = __( '#ffffff', 'wpb_widget_domain' );
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
<label for="<?php echo $this->get_field_id( 'cartc' ); ?>"><?php _e( 'Color del Título de la Tarjeta:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'cartc' ); ?>" name="<?php echo $this->get_field_name( 'cartc' ); ?>" type="text" value="<?php echo esc_attr( $cartc ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'carbc' ); ?>"><?php _e( 'Color de Fondo de la Tarjeta:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'carbc' ); ?>" name="<?php echo $this->get_field_name( 'carbc' ); ?>" type="text" value="<?php echo esc_attr( $carbc ); ?>" />
</p>
<p>
<label><strong><?php _e( 'ATRIBUTOS DEL EQUIPO' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'txne1' ); ?>"><?php _e( 'Texto Equipo 1:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'txne1' ); ?>" name="<?php echo $this->get_field_name( 'txne1' ); ?>" type="text" value="<?php echo esc_attr( $txne1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imne1' ); ?>"><?php _e( 'Imagen Equipo 1:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'imne1' ); ?>" name="<?php echo $this->get_field_name( 'imne1' ); ?>" type="text" value="<?php echo esc_attr( $imne1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'txne2' ); ?>"><?php _e( 'Texto Equipo 2:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'txne2' ); ?>" name="<?php echo $this->get_field_name( 'txne2' ); ?>" type="text" value="<?php echo esc_attr( $txne2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imne2' ); ?>"><?php _e( 'Imagen Equipo 2:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'imne2' ); ?>" name="<?php echo $this->get_field_name( 'imne2' ); ?>" type="text" value="<?php echo esc_attr( $imne2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'txne3' ); ?>"><?php _e( 'Texto Equipo 3:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'txne3' ); ?>" name="<?php echo $this->get_field_name( 'txne3' ); ?>" type="text" value="<?php echo esc_attr( $txne3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'imne3' ); ?>"><?php _e( 'Imagen Equipo 3:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'imne3' ); ?>" name="<?php echo $this->get_field_name( 'imne3' ); ?>" type="text" value="<?php echo esc_attr( $imne3 ); ?>" />
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
$instance['txne1'] = ( ! empty( $new_instance['txne1'] ) ) ? strip_tags( $new_instance['txne1'] ) : '';
$instance['txne2'] = ( ! empty( $new_instance['txne2'] ) ) ? strip_tags( $new_instance['txne2'] ) : '';
$instance['txne3'] = ( ! empty( $new_instance['txne3'] ) ) ? strip_tags( $new_instance['txne3'] ) : '';
$instance['imne1'] = ( ! empty( $new_instance['imne1'] ) ) ? strip_tags( $new_instance['imne1'] ) : '';
$instance['imne2'] = ( ! empty( $new_instance['imne2'] ) ) ? strip_tags( $new_instance['imne2'] ) : '';
$instance['imne3'] = ( ! empty( $new_instance['imne3'] ) ) ? strip_tags( $new_instance['imne3'] ) : '';
$instance['padto'] = ( ! empty( $new_instance['padto'] ) ) ? strip_tags( $new_instance['padto'] ) : '';
$instance['padbo'] = ( ! empty( $new_instance['padbo'] ) ) ? strip_tags( $new_instance['padbo'] ) : '';
$instance['carbc'] = ( ! empty( $new_instance['carbc'] ) ) ? strip_tags( $new_instance['carbc'] ) : '';
$instance['cartc'] = ( ! empty( $new_instance['cartc'] ) ) ? strip_tags( $new_instance['cartc'] ) : '';

return $instance;
}
} // Class wpb_widget_gma finaliza aquí