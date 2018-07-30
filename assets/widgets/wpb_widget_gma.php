<?php
// Creando el Widget Mapa de Google
class wpb_widget_gma extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget_gma', 
 
// Widget name will appear in UI
__('MAC - Mapa de Google', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Muestra Google Maps', 'wpb_widget_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$place = apply_filters( 'widget_place', $instance['place'] );

// before and after widget arguments are defined by themes
//echo $args['before_widget'];
if ( ! empty( $title ) )
?>

<section class="map1 cid-googlemap" id="googlemap">
  <div class="google-map">
    <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:<?php echo $place; ?>" allowfullscreen="">
    </iframe>
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
$place = $instance[ 'place' ];

}
else {
$title = __( 'Marvel Studios LLC', 'wpb_widget_domain' );
$place = __( 'ChIJaUDCmw-0woARc83F_JWb4oI', 'wpb_widget_domain' );

}
// Widget Formulario Administrativo
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Título:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'place' ); ?>"><?php _e( 'ID del Sitio:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'place' ); ?>" name="<?php echo $this->get_field_name( 'place' ); ?>" type="text" value="<?php echo esc_attr( $place ); ?>" />
</p>
<?php 
}
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['place'] = ( ! empty( $new_instance['place'] ) ) ? strip_tags( $new_instance['place'] ) : '';

return $instance;
}
} // Class wpb_widget_gma finaliza aquí