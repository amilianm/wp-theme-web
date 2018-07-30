<?php
// Creando el Widget Pie de Página
class wpb_widget_pie extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget_pie', 
 
// Widget name will appear in UI
__('MAC - Pie de Página', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Muestra El Pie de Página', 'wpb_widget_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$utwit = apply_filters( 'widget_utwit', $instance['utwit'] );
$uface = apply_filters( 'widget_uface', $instance['uface'] );
$uyout = apply_filters( 'widget_uyout', $instance['uyout'] );
$uinst = apply_filters( 'widget_uinst', $instance['uinst'] );
$ugopl = apply_filters( 'widget_ugopl', $instance['ugopl'] );
$tlin1 = apply_filters( 'widget_tlin1', $instance['tlin1'] );
$tlin2 = apply_filters( 'widget_tlin2', $instance['tlin2'] );
$tlin3 = apply_filters( 'widget_tlin3', $instance['tlin3'] );
$tlin4 = apply_filters( 'widget_tlin4', $instance['tlin4'] );
$tlin5 = apply_filters( 'widget_tlin5', $instance['tlin5'] );
$ulin1 = apply_filters( 'widget_ulin1', $instance['ulin1'] );
$ulin2 = apply_filters( 'widget_ulin2', $instance['ulin2'] );
$ulin3 = apply_filters( 'widget_ulin3', $instance['ulin3'] );
$ulin4 = apply_filters( 'widget_ulin4', $instance['ulin4'] );
$ulin5 = apply_filters( 'widget_ulin5', $instance['ulin5'] );
// before and after widget arguments are defined by themes
//echo $args['before_widget'];
if ( ! empty( $title ) )
?>
<section once="" class="cid-piepag" id="piepag">
  <div class="container">
    <div class="media-container-row align-center mbr-white">
      <div class="row row-links" id="meninf">
        <ul class="foot-menu">
          <li class="foot-menu-item mbr-fonts-style display-7">
            <a class="text-white mbr-bold" href="<?php echo $ulin1; ?>" target="_blank"><?php echo $tlin1; ?></a>
          </li>
          <li class="foot-menu-item mbr-fonts-style display-7">
            <a class="text-white mbr-bold" href="<?php echo $ulin2; ?>" target="_blank"><?php echo $tlin2; ?></a>
          </li>
          <li class="foot-menu-item mbr-fonts-style display-7">
            <a class="text-white mbr-bold" href="<?php echo $ulin3; ?>" target="_blank"><?php echo $tlin3; ?></a>
          </li>
          <li class="foot-menu-item mbr-fonts-style display-7">
            <a class="text-white mbr-bold" href="<?php echo $ulin4; ?>" target="_blank"><?php echo $tlin4; ?></a>
          </li>
          <li class="foot-menu-item mbr-fonts-style display-7">
            <a class="text-white mbr-bold" href="<?php echo $ulin5; ?>" target="_blank"><?php echo $tlin5; ?></a>
          </li>
        </ul>
      </div>
      <div class="row social-row">
        <div class="social-list align-right pb-2">
          <div class="soc-item">
            <a href="<?php echo $utwit; ?>" target="_blank">
            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
            </a>
          </div>
          <div class="soc-item">
            <a href="<?php echo $uface; ?>" target="_blank">
            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
            </a>
          </div>
          <div class="soc-item">
            <a href="<?php echo $uyout; ?>" target="_blank">
            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
            </a>
          </div>
          <div class="soc-item">
            <a href="<?php echo $uinst; ?>" target="_blank">
            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
            </a>
          </div>
          <div class="soc-item">
            <a href="<?php echo $ugopl; ?>" target="_blank">
            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="row row-copirayt">
        <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
          © Copyright 2018 <?php bloginfo('name'); ?> - All Rights Reserved
        </p>
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
$utwit = $instance[ 'utwit' ];
$uface = $instance[ 'uface' ];
$uyout = $instance[ 'uyout' ];
$uinst = $instance[ 'uinst' ];
$ugopl = $instance[ 'ugopl' ];
$ugopl = $instance[ 'ugopl' ];
$tlin1 = $instance[ 'tlin1' ];
$tlin2 = $instance[ 'tlin2' ];
$tlin3 = $instance[ 'tlin3' ];
$tlin4 = $instance[ 'tlin4' ];
$tlin5 = $instance[ 'tlin5' ];
$ulin1 = $instance[ 'ulin1' ];
$ulin2 = $instance[ 'ulin2' ];
$ulin3 = $instance[ 'ulin3' ];
$ulin4 = $instance[ 'ulin4' ];
$ulin5 = $instance[ 'ulin5' ];

}
else {
$title = __( 'PIE PÁGINA', 'wpb_widget_domain' );
$utwit = __( 'https://twitter.com/ark', 'wpb_widget_domain' );
$uface = __( 'https://www.facebook.com/ark', 'wpb_widget_domain' );
$uyout = __( 'https://www.youtube.com/user/ark', 'wpb_widget_domain' );
$uinst = __( 'https://www.instagram.com/ark', 'wpb_widget_domain' );
$ugopl = __( 'https://plus.google.com/+ark', 'wpb_widget_domain' );
$tlin1 = __( 'Políticas', 'wpb_widget_domain' );
$tlin2 = __( 'Sobre Nosotros', 'wpb_widget_domain' );
$tlin3 = __( 'Galería Multimedia', 'wpb_widget_domain' );
$tlin4 = __( 'Portafolio', 'wpb_widget_domain' );
$tlin5 = __( 'Contáctenos', 'wpb_widget_domain' );
$ulin1 = __( '#', 'wpb_widget_domain' );
$ulin2 = __( '#', 'wpb_widget_domain' );
$ulin3 = __( '#', 'wpb_widget_domain' );
$ulin4 = __( '#', 'wpb_widget_domain' );
$ulin5 = __( '#', 'wpb_widget_domain' );

}
// Widget Formulario Administrativo
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Título:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'utwit' ); ?>"><?php _e( 'Twitter:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'utwit' ); ?>" name="<?php echo $this->get_field_name( 'utwit' ); ?>" type="text" value="<?php echo esc_attr( $utwit ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'uface' ); ?>"><?php _e( 'Facebook:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'uface' ); ?>" name="<?php echo $this->get_field_name( 'uface' ); ?>" type="text" value="<?php echo esc_attr( $uface ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'uyout' ); ?>"><?php _e( 'Youtube:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'uyout' ); ?>" name="<?php echo $this->get_field_name( 'uyout' ); ?>" type="text" value="<?php echo esc_attr( $uyout ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'uinst' ); ?>"><?php _e( 'Instagram:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'uinst' ); ?>" name="<?php echo $this->get_field_name( 'uinst' ); ?>" type="text" value="<?php echo esc_attr( $uinst ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ugopl' ); ?>"><?php _e( 'Google Plus:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'ugopl' ); ?>" name="<?php echo $this->get_field_name( 'ugopl' ); ?>" type="text" value="<?php echo esc_attr( $ugopl ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tlin1' ); ?>"><?php _e( 'Título 1:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tlin1' ); ?>" name="<?php echo $this->get_field_name( 'tlin1' ); ?>" type="text" value="<?php echo esc_attr( $tlin1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ulin1' ); ?>"><?php _e( 'URL Título 1:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'ulin1' ); ?>" name="<?php echo $this->get_field_name( 'ulin1' ); ?>" type="text" value="<?php echo esc_attr( $ulin1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tlin2' ); ?>"><?php _e( 'Título 2:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tlin2' ); ?>" name="<?php echo $this->get_field_name( 'tlin2' ); ?>" type="text" value="<?php echo esc_attr( $tlin2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ulin2' ); ?>"><?php _e( 'URL Título 2:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'ulin2' ); ?>" name="<?php echo $this->get_field_name( 'ulin2' ); ?>" type="text" value="<?php echo esc_attr( $ulin2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tlin3' ); ?>"><?php _e( 'Título 3:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tlin3' ); ?>" name="<?php echo $this->get_field_name( 'tlin3' ); ?>" type="text" value="<?php echo esc_attr( $tlin3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ulin3' ); ?>"><?php _e( 'URL Título 3:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'ulin3' ); ?>" name="<?php echo $this->get_field_name( 'ulin3' ); ?>" type="text" value="<?php echo esc_attr( $ulin3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tlin4' ); ?>"><?php _e( 'Título 4:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tlin4' ); ?>" name="<?php echo $this->get_field_name( 'tlin4' ); ?>" type="text" value="<?php echo esc_attr( $tlin4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ulin4' ); ?>"><?php _e( 'URL Título 4:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'ulin4' ); ?>" name="<?php echo $this->get_field_name( 'ulin4' ); ?>" type="text" value="<?php echo esc_attr( $ulin4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tlin5' ); ?>"><?php _e( 'Título 5:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tlin5' ); ?>" name="<?php echo $this->get_field_name( 'tlin5' ); ?>" type="text" value="<?php echo esc_attr( $tlin5 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ulin5' ); ?>"><?php _e( 'URL Título 5:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'ulin5' ); ?>" name="<?php echo $this->get_field_name( 'ulin5' ); ?>" type="text" value="<?php echo esc_attr( $ulin5 ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['utwit'] = ( ! empty( $new_instance['utwit'] ) ) ? strip_tags( $new_instance['utwit'] ) : '';
$instance['uface'] = ( ! empty( $new_instance['uface'] ) ) ? strip_tags( $new_instance['uface'] ) : '';
$instance['uyout'] = ( ! empty( $new_instance['uyout'] ) ) ? strip_tags( $new_instance['uyout'] ) : '';
$instance['uinst'] = ( ! empty( $new_instance['uinst'] ) ) ? strip_tags( $new_instance['uinst'] ) : '';
$instance['ugopl'] = ( ! empty( $new_instance['ugopl'] ) ) ? strip_tags( $new_instance['ugopl'] ) : '';
$instance['tlin1'] = ( ! empty( $new_instance['tlin1'] ) ) ? strip_tags( $new_instance['tlin1'] ) : '';
$instance['tlin2'] = ( ! empty( $new_instance['tlin2'] ) ) ? strip_tags( $new_instance['tlin2'] ) : '';
$instance['tlin3'] = ( ! empty( $new_instance['tlin3'] ) ) ? strip_tags( $new_instance['tlin3'] ) : '';
$instance['tlin4'] = ( ! empty( $new_instance['tlin4'] ) ) ? strip_tags( $new_instance['tlin4'] ) : '';
$instance['tlin5'] = ( ! empty( $new_instance['tlin5'] ) ) ? strip_tags( $new_instance['tlin5'] ) : '';
$instance['ulin1'] = ( ! empty( $new_instance['ulin1'] ) ) ? strip_tags( $new_instance['ulin1'] ) : '';
$instance['ulin2'] = ( ! empty( $new_instance['ulin2'] ) ) ? strip_tags( $new_instance['ulin2'] ) : '';
$instance['ulin3'] = ( ! empty( $new_instance['ulin3'] ) ) ? strip_tags( $new_instance['ulin3'] ) : '';
$instance['ulin4'] = ( ! empty( $new_instance['ulin4'] ) ) ? strip_tags( $new_instance['ulin4'] ) : '';
$instance['ulin5'] = ( ! empty( $new_instance['ulin5'] ) ) ? strip_tags( $new_instance['ulin5'] ) : '';

return $instance;
}
} // Class wpb_widget_pie finaliza aquí