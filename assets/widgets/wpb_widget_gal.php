<?php
// Creando el Widget Galería de Imágenes
class wpb_widget_gal extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget_gal', 
 
// Widget name will appear in UI
__('MAC - Galería de Imágenes', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Muestra una Galería de Imágenes', 'wpb_widget_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );

$gaim1 = apply_filters( 'widget_gaim1', $instance['gaim1'] );
$gaim2 = apply_filters( 'widget_gaim2', $instance['gaim2'] );
$gaim3 = apply_filters( 'widget_gaim3', $instance['gaim3'] );
$gaim4 = apply_filters( 'widget_gaim4', $instance['gaim4'] );
$gaim5 = apply_filters( 'widget_gaim5', $instance['gaim5'] );
$gaim6 = apply_filters( 'widget_gaim6', $instance['gaim6'] );
$gaim7 = apply_filters( 'widget_gaim7', $instance['gaim7'] );
$gaim8 = apply_filters( 'widget_gaim8', $instance['gaim8'] );
$tgai1 = apply_filters( 'widget_tgai1', $instance['tgai1'] );
$tgai2 = apply_filters( 'widget_tgai2', $instance['tgai2'] );
$tgai3 = apply_filters( 'widget_tgai3', $instance['tgai3'] );
$tgai4 = apply_filters( 'widget_tgai4', $instance['tgai4'] );
$tgai5 = apply_filters( 'widget_tgai5', $instance['tgai5'] );
$tgai6 = apply_filters( 'widget_tgai6', $instance['tgai6'] );
$tgai7 = apply_filters( 'widget_tgai7', $instance['tgai7'] );
$tgai8 = apply_filters( 'widget_tgai8', $instance['tgai8'] );
$bacol = apply_filters( 'widget_bacol', $instance['bacol'] );
$spaci = apply_filters( 'widget_spaci', $instance['spaci'] );
$opati = apply_filters( 'widget_opati', $instance['opati'] );
$bcoti = apply_filters( 'widget_bcoti', $instance['bcoti'] );
$colti = apply_filters( 'widget_colti', $instance['colti'] );
$padto = apply_filters( 'widget_padto', $instance['padto'] );
$padbo = apply_filters( 'widget_padbo', $instance['padbo'] );

// before and after widget arguments are defined by themes
//echo $args['before_widget'];
if ( ! empty( $title ) )
?>
<section class="mbr-gallery mbr-slider-carousel cid-galeria" id="gallery1-1g" style="padding-top:<?php echo $padto; ?>; padding-bottom:<?php echo $padbo; ?>; background-color: <?php echo $bacol; ?>;">
<div>
  <div>
    <!-- Filter --><!-- Gallery -->
    <div class="mbr-gallery-row">
      <div class="mbr-gallery-layout-default">
        <div>
          <div>
            <div class="mbr-gallery-item mbr-gallery-item--p<?php echo $spaci; ?>" data-video-url="false" data-tags="Increíble">
              <div href="#lb-gallery1-1g" data-slide-to="0" data-toggle="modal">
                <img src="<?php bloginfo('template_url'); ?><?php echo $gaim1; ?>" alt="" title="">
                <span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7" style="opacity: <?php echo $opati; ?>; background-color: <?php echo $bcoti; ?>; color: <?php echo $colti; ?>;"><?php echo $tgai1; ?></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p<?php echo $spaci; ?>" data-video-url="false" data-tags="Responsive"><div href="#lb-gallery1-1g" data-slide-to="1" data-toggle="modal"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim2; ?>" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7" style="opacity: <?php echo $opati; ?>; background-color: <?php echo $bcoti; ?>; color: <?php echo $colti; ?>;"><?php echo $tgai2; ?></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p<?php echo $spaci; ?>" data-video-url="false" data-tags="Creativa"><div href="#lb-gallery1-1g" data-slide-to="2" data-toggle="modal"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim3; ?>" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7" style="opacity: <?php echo $opati; ?>; background-color: <?php echo $bcoti; ?>; color: <?php echo $colti; ?>;"><?php echo $tgai3; ?></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p<?php echo $spaci; ?>" data-video-url="false" data-tags="Animada"><div href="#lb-gallery1-1g" data-slide-to="3" data-toggle="modal"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim4; ?>" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7" style="opacity: <?php echo $opati; ?>; background-color: <?php echo $bcoti; ?>; color: <?php echo $colti; ?>;"><?php echo $tgai4; ?></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p<?php echo $spaci; ?>" data-video-url="false" data-tags="Increíble"><div href="#lb-gallery1-1g" data-slide-to="4" data-toggle="modal"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim5; ?>" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7" style="opacity: <?php echo $opati; ?>; background-color: <?php echo $bcoti; ?>; color: <?php echo $colti; ?>;"><?php echo $tgai5; ?></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p<?php echo $spaci; ?>" data-video-url="false" data-tags="Increíble"><div href="#lb-gallery1-1g" data-slide-to="5" data-toggle="modal"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim6; ?>" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7" style="opacity: <?php echo $opati; ?>; background-color: <?php echo $bcoti; ?>; color: <?php echo $colti; ?>;"><?php echo $tgai6; ?></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p<?php echo $spaci; ?>" data-video-url="false" data-tags="Responsive"><div href="#lb-gallery1-1g" data-slide-to="6" data-toggle="modal"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim7; ?>" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7" style="opacity: <?php echo $opati; ?>; background-color: <?php echo $bcoti; ?>; color: <?php echo $colti; ?>;"><?php echo $tgai7; ?></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p<?php echo $spaci; ?>" data-video-url="false" data-tags="Animada"><div href="#lb-gallery1-1g" data-slide-to="7" data-toggle="modal"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim8; ?>" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7" style="opacity: <?php echo $opati; ?>; background-color: <?php echo $bcoti; ?>; color: <?php echo $colti; ?>;"><?php echo $tgai8; ?></span></div></div></div></div><div class="clearfix"></div></div></div><!-- Lightbox --><div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-1g"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#lb-gallery1-1g" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-1g" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-1g" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-1g" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-1g" data-slide-to="4"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-1g" data-slide-to="5"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-1g" data-slide-to="6"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-1g" data-slide-to="7"></li></ol><div class="carousel-inner"><div class="carousel-item active"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim1; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim2; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim3; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim4; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim5; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim6; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim7; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php bloginfo('template_url'); ?><?php echo $gaim8; ?>" alt="" title=""></div></div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery1-1g"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Anterior</span></a><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery1-1g"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Siguiente</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Cerrar</span></a>
          </div>
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
$gaim1 = $instance[ 'gaim1' ];
$gaim2 = $instance[ 'gaim2' ];
$gaim3 = $instance[ 'gaim3' ];
$gaim4 = $instance[ 'gaim4' ];
$gaim5 = $instance[ 'gaim5' ];
$gaim6 = $instance[ 'gaim6' ];
$gaim7 = $instance[ 'gaim7' ];
$gaim8 = $instance[ 'gaim8' ];
$tgai1 = $instance[ 'tgai1' ];
$tgai2 = $instance[ 'tgai2' ];
$tgai3 = $instance[ 'tgai3' ];
$tgai4 = $instance[ 'tgai4' ];
$tgai5 = $instance[ 'tgai5' ];
$tgai6 = $instance[ 'tgai6' ];
$tgai7 = $instance[ 'tgai7' ];
$tgai8 = $instance[ 'tgai8' ];
$bacol = $instance[ 'bacol' ];
$spaci = $instance[ 'spaci' ];
$opati = $instance[ 'opati' ];
$bcoti = $instance[ 'bcoti' ];
$colti = $instance[ 'colti' ];
$padto = $instance[ 'padto' ];
$padbo = $instance[ 'padbo' ];

}
else {
$title = __( 'Galería de Imágenes', 'wpb_widget_domain' );

$gaim1 = __( '/assets/images/galeria/gallery00.jpg', 'wpb_widget_domain' );
$gaim2 = __( '/assets/images/galeria/gallery01.jpg', 'wpb_widget_domain' );
$gaim3 = __( '/assets/images/galeria/gallery02.jpg', 'wpb_widget_domain' );
$gaim4 = __( '/assets/images/galeria/gallery03.jpg', 'wpb_widget_domain' );
$gaim5 = __( '/assets/images/galeria/gallery04.jpg', 'wpb_widget_domain' );
$gaim6 = __( '/assets/images/galeria/gallery05.jpg', 'wpb_widget_domain' );
$gaim7 = __( '/assets/images/galeria/gallery06.jpg', 'wpb_widget_domain' );
$gaim8 = __( '/assets/images/galeria/gallery07.jpg', 'wpb_widget_domain' );
$tgai1 = __( 'Título de la Imágen 1', 'wpb_widget_domain' );
$tgai2 = __( 'Título de la Imágen 2', 'wpb_widget_domain' );
$tgai3 = __( 'Título de la Imágen 3', 'wpb_widget_domain' );
$tgai4 = __( 'Título de la Imágen 4', 'wpb_widget_domain' );
$tgai5 = __( 'Título de la Imágen 5', 'wpb_widget_domain' );
$tgai6 = __( 'Título de la Imágen 6', 'wpb_widget_domain' );
$tgai7 = __( 'Título de la Imágen 7', 'wpb_widget_domain' );
$tgai8 = __( 'Título de la Imágen 8', 'wpb_widget_domain' );
$bacol = __( '#FFFFFF', 'wpb_widget_domain' );
$spaci = __( '0', 'wpb_widget_domain' );
$opati = __( '0.3', 'wpb_widget_domain' );
$bcoti = __( '#000000', 'wpb_widget_domain' );
$colti = __( '#FFFFFF', 'wpb_widget_domain' );
$padto = __( '0px', 'wpb_widget_domain' );
$padbo = __( '0px', 'wpb_widget_domain' );

}
// Widget Formulario Administrativo
?>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('.wcolorp').wpColorPicker();
});
</script>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Título:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label><strong><?php _e( 'ATRIBUTOS DE LA GALERÍA' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'padto' ); ?>"><?php _e( 'Acolchado Superior', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'padto' ); ?>" id="<?php echo $this->get_field_id( 'padto' ); ?>" class="widefat">
<?php
// Matriz de opciones
$oppadto = array(
'0px' => __( '0px', 'wpb_widget_domain' ),
'30px' => __( '30px', 'wpb_widget_domain' ),
'60px' => __( '60px', 'wpb_widget_domain' ),
'90px' => __( '90px', 'wpb_widget_domain' ),
);
foreach ( $oppadto as $key => $napadto ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $padto, $key, false ) . '>'. $napadto . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'padbo' ); ?>"><?php _e( 'Acolchado Inferior', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'padbo' ); ?>" id="<?php echo $this->get_field_id( 'padbo' ); ?>" class="widefat">
<?php
// Matriz de opciones
$oppadbo = array(
'0px' => __( '0px', 'wpb_widget_domain' ),
'30px' => __( '30px', 'wpb_widget_domain' ),
'60px' => __( '60px', 'wpb_widget_domain' ),
'90px' => __( '90px', 'wpb_widget_domain' ),
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
<label for="<?php echo $this->get_field_id( 'spaci' ); ?>"><?php _e( 'Espacio entre Imágenes', 'wpb_widget_domain' ); ?></label>
<select name="<?php echo $this->get_field_name( 'spaci' ); ?>" id="<?php echo $this->get_field_id( 'spaci' ); ?>" class="widefat">
<?php
// Matriz de opciones
$opspaci = array(
'0' => __( '0', 'wpb_widget_domain' ),
'1' => __( '1', 'wpb_widget_domain' ),
'2' => __( '2', 'wpb_widget_domain' ),
'3' => __( '3', 'wpb_widget_domain' ),
'4' => __( '4', 'wpb_widget_domain' ),
'5' => __( '5', 'wpb_widget_domain' ),
'6' => __( '6', 'wpb_widget_domain' ),
);
foreach ( $opspaci as $key => $naspaci ) {
echo '<option value="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" '. selected( $spaci, $key, false ) . '>'. $naspaci . '</option>';
} ?>
</select>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'bcoti' ); ?>"><?php _e( 'Color de Fondo del Título:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'bcoti' ); ?>" name="<?php echo $this->get_field_name( 'bcoti' ); ?>" type="text" value="<?php echo esc_attr( $bcoti ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'opati' ); ?>"><?php _e( 'Opacidad de Título:', 'wpb_widget_domain' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'opati' ); ?>" name="<?php echo $this->get_field_name( 'opati' ); ?>" type="range" min="0.1" max="1" step="0.1" value="<?php echo esc_attr( $opati ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'colti' ); ?>"><?php _e( 'Color del Título:' ); ?></label> 
<input class="wcolorp" id="<?php echo $this->get_field_id( 'colti' ); ?>" name="<?php echo $this->get_field_name( 'colti' ); ?>" type="text" value="<?php echo esc_attr( $colti ); ?>" />
</p>
<p>
<label><strong><?php _e( 'ATRIBUTOS DE LAS IMÁGENES' ); ?></strong></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tgai1' ); ?>"><?php _e( 'Título Imágen Galería 1:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tgai1' ); ?>" name="<?php echo $this->get_field_name( 'tgai1' ); ?>" type="text" value="<?php echo esc_attr( $tgai1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'gaim1' ); ?>"><?php _e( 'Ruta Imágen Galería 1:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'gaim1' ); ?>" name="<?php echo $this->get_field_name( 'gaim1' ); ?>" type="text" value="<?php echo esc_attr( $gaim1 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tgai2' ); ?>"><?php _e( 'Título Imágen Galería 2:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tgai2' ); ?>" name="<?php echo $this->get_field_name( 'tgai2' ); ?>" type="text" value="<?php echo esc_attr( $tgai2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'gaim2' ); ?>"><?php _e( 'Ruta Imágen Galería 2:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'gaim2' ); ?>" name="<?php echo $this->get_field_name( 'gaim2' ); ?>" type="text" value="<?php echo esc_attr( $gaim2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tgai3' ); ?>"><?php _e( 'Título Imágen Galería 3:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tgai3' ); ?>" name="<?php echo $this->get_field_name( 'tgai3' ); ?>" type="text" value="<?php echo esc_attr( $tgai3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'gaim3' ); ?>"><?php _e( 'Ruta Imágen Galería 3:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'gaim3' ); ?>" name="<?php echo $this->get_field_name( 'gaim3' ); ?>" type="text" value="<?php echo esc_attr( $gaim3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tgai4' ); ?>"><?php _e( 'Título Imágen Galería 4:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tgai4' ); ?>" name="<?php echo $this->get_field_name( 'tgai4' ); ?>" type="text" value="<?php echo esc_attr( $tgai4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'gaim4' ); ?>"><?php _e( 'Ruta Imágen Galería 4:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'gaim4' ); ?>" name="<?php echo $this->get_field_name( 'gaim4' ); ?>" type="text" value="<?php echo esc_attr( $gaim4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tgai5' ); ?>"><?php _e( 'Título Imágen Galería 5:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tgai5' ); ?>" name="<?php echo $this->get_field_name( 'tgai5' ); ?>" type="text" value="<?php echo esc_attr( $tgai5 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'gaim5' ); ?>"><?php _e( 'Ruta Imágen Galería 5:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'gaim5' ); ?>" name="<?php echo $this->get_field_name( 'gaim5' ); ?>" type="text" value="<?php echo esc_attr( $gaim5 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tgai6' ); ?>"><?php _e( 'Título Imágen Galería 6:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tgai6' ); ?>" name="<?php echo $this->get_field_name( 'tgai6' ); ?>" type="text" value="<?php echo esc_attr( $tgai6 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'gaim6' ); ?>"><?php _e( 'Ruta Imágen Galería 6:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'gaim6' ); ?>" name="<?php echo $this->get_field_name( 'gaim6' ); ?>" type="text" value="<?php echo esc_attr( $gaim6 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tgai7' ); ?>"><?php _e( 'Título Imágen Galería 7:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tgai7' ); ?>" name="<?php echo $this->get_field_name( 'tgai7' ); ?>" type="text" value="<?php echo esc_attr( $tgai7 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'gaim7' ); ?>"><?php _e( 'Ruta Imágen Galería 7:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'gaim7' ); ?>" name="<?php echo $this->get_field_name( 'gaim7' ); ?>" type="text" value="<?php echo esc_attr( $gaim7 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'tgai8' ); ?>"><?php _e( 'Título Imágen Galería 8:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'tgai8' ); ?>" name="<?php echo $this->get_field_name( 'tgai8' ); ?>" type="text" value="<?php echo esc_attr( $tgai8 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'gaim8' ); ?>"><?php _e( 'Ruta Imágen Galería 8:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'gaim8' ); ?>" name="<?php echo $this->get_field_name( 'gaim8' ); ?>" type="text" value="<?php echo esc_attr( $gaim8 ); ?>" />
</p>
<?php 
}
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['gaim1'] = ( ! empty( $new_instance['gaim1'] ) ) ? strip_tags( $new_instance['gaim1'] ) : '';
$instance['gaim2'] = ( ! empty( $new_instance['gaim2'] ) ) ? strip_tags( $new_instance['gaim2'] ) : '';
$instance['gaim3'] = ( ! empty( $new_instance['gaim3'] ) ) ? strip_tags( $new_instance['gaim3'] ) : '';
$instance['gaim4'] = ( ! empty( $new_instance['gaim4'] ) ) ? strip_tags( $new_instance['gaim4'] ) : '';
$instance['gaim5'] = ( ! empty( $new_instance['gaim5'] ) ) ? strip_tags( $new_instance['gaim5'] ) : '';
$instance['gaim6'] = ( ! empty( $new_instance['gaim6'] ) ) ? strip_tags( $new_instance['gaim6'] ) : '';
$instance['gaim7'] = ( ! empty( $new_instance['gaim7'] ) ) ? strip_tags( $new_instance['gaim7'] ) : '';
$instance['gaim8'] = ( ! empty( $new_instance['gaim8'] ) ) ? strip_tags( $new_instance['gaim8'] ) : '';
$instance['tgai1'] = ( ! empty( $new_instance['tgai1'] ) ) ? strip_tags( $new_instance['tgai1'] ) : '';
$instance['tgai2'] = ( ! empty( $new_instance['tgai2'] ) ) ? strip_tags( $new_instance['tgai2'] ) : '';
$instance['tgai3'] = ( ! empty( $new_instance['tgai3'] ) ) ? strip_tags( $new_instance['tgai3'] ) : '';
$instance['tgai4'] = ( ! empty( $new_instance['tgai4'] ) ) ? strip_tags( $new_instance['tgai4'] ) : '';
$instance['tgai5'] = ( ! empty( $new_instance['tgai5'] ) ) ? strip_tags( $new_instance['tgai5'] ) : '';
$instance['tgai6'] = ( ! empty( $new_instance['tgai6'] ) ) ? strip_tags( $new_instance['tgai6'] ) : '';
$instance['tgai7'] = ( ! empty( $new_instance['tgai7'] ) ) ? strip_tags( $new_instance['tgai7'] ) : '';
$instance['tgai8'] = ( ! empty( $new_instance['tgai8'] ) ) ? strip_tags( $new_instance['tgai8'] ) : '';
$instance['bacol'] = ( ! empty( $new_instance['bacol'] ) ) ? strip_tags( $new_instance['bacol'] ) : '';
$instance['spaci'] = ( ! empty( $new_instance['spaci'] ) ) ? strip_tags( $new_instance['spaci'] ) : '';
$instance['opati'] = ( ! empty( $new_instance['opati'] ) ) ? strip_tags( $new_instance['opati'] ) : '';
$instance['bcoti'] = ( ! empty( $new_instance['bcoti'] ) ) ? strip_tags( $new_instance['bcoti'] ) : '';
$instance['colti'] = ( ! empty( $new_instance['colti'] ) ) ? strip_tags( $new_instance['colti'] ) : '';
$instance['padto'] = ( ! empty( $new_instance['padto'] ) ) ? strip_tags( $new_instance['padto'] ) : '';
$instance['padbo'] = ( ! empty( $new_instance['padbo'] ) ) ? strip_tags( $new_instance['padbo'] ) : '';

return $instance;
}
} // Class wpb_widget_icv finaliza aquí