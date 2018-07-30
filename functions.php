<?php
//Menú Superior
if (function_exists('register_nav_menus')){
//Regisreo el Menú Superior
register_nav_menus( array(
  'mensup' => __( 'Menú Superior', 'web'),
  'meninf' => __( 'Menú Inferior', 'web'),
));
}

//Requiere la Clase Navwalker
require_once get_template_directory() . '/assets/theme/class/navwalker.php';

// Activar imágenes destacadas en páginas y entradas
add_theme_support( 'post-thumbnails' );

function atrib_imagen_destacada() {
    global $post;
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_image_src( $thumbID, 'large' ); // Sustituir por thumbnail, medium, large o full
    return $imgDestacada[0]; // 0 = ruta, 1 = altura, 2 = anchura, 3 = boolean
}

//Fución Limitar Titulo de las Entradas 

function lim_title($title, $n){
if ( strlen ($title) > $n )
{
echo substr(the_title("","", FALSE), 0, $n) . ' …';
}
else { the_title(); }
}

// Filtrar resultados de búsqueda para que solo muestre posts en el listado

function buscar_solo_posts($query) {
  if($query->is_search) {
    $query->set('post_type','post');
  }
  return $query;
}
add_filter('pre_get_posts','buscar_solo_posts');


// Zonas Widgets
function zona_widgets_init() {

// Nueva Zona Agregada
register_sidebar( array(
  'name'          => __( 'Encabezado', 'web' ),
  'id'            => 'encabezado',
  'description'   => __( 'Agregue widgets aquí para que aparezca en el encabezado.', 'web' ),
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
));

register_sidebar( array(
  'name'          => esc_html__( 'Sección Central', 'web' ),
  'id'            => 'centro',
  'description'   => esc_html__( 'Agregue widgets aquí para que aparezca en la Sección Central.', 'web' ),
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
));

register_sidebar( array(
  'name'          => __( 'Pie de Página', 'web' ),
  'id'            => 'piepagina',
  'description'   => __( 'Agregue widgets aquí para que aparezcan en su pie de página.', 'web' ),
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
));

}
add_action( 'widgets_init', 'zona_widgets_init' );

//Añadiendo Color Picker

function color_picker_assets($hook_suffix) {
  wp_enqueue_style( 'wp-color-picker' );
  wp_enqueue_script ( 'wp-color-picker' );
}
add_action( 'admin_enqueue_scripts', 'color_picker_assets' );

// Widget
function wpb_load_widget() {
  register_widget( 'wpb_widget_cab' );
  register_widget( 'wpb_widget_cas' );
  register_widget( 'wpb_widget_iwi' );
  register_widget( 'wpb_widget_pie' );
  register_widget( 'wpb_widget_cli' );
  register_widget( 'wpb_widget_gma' );
  register_widget( 'wpb_widget_neq' );
  register_widget( 'wpb_widget_ici' );
  register_widget( 'wpb_widget_icv' );
  register_widget( 'wpb_widget_gal' );
  register_widget( 'wpb_widget_cof' );
}
add_action( 'widgets_init', 'wpb_load_widget' );

//* Carga de Widgets

 require get_template_directory() . '/assets/widgets/wpb_widget_cab.php';
 require get_template_directory() . '/assets/widgets/wpb_widget_cas.php';
 require get_template_directory() . '/assets/widgets/wpb_widget_pie.php';
 require get_template_directory() . '/assets/widgets/wpb_widget_iwi.php';
 require get_template_directory() . '/assets/widgets/wpb_widget_cli.php';
 require get_template_directory() . '/assets/widgets/wpb_widget_gma.php';
 require get_template_directory() . '/assets/widgets/wpb_widget_neq.php';
 require get_template_directory() . '/assets/widgets/wpb_widget_ici.php';
 require get_template_directory() . '/assets/widgets/wpb_widget_icv.php';
 require get_template_directory() . '/assets/widgets/wpb_widget_gal.php';
 require get_template_directory() . '/assets/widgets/wpb_widget_cof.php';

//* Crear Tabla de Formulario Contacto

function tabla_contacto() {
global $wpdb;
  
$tab_cont = $wpdb->prefix . 'contacto';
 
$sql = "CREATE TABLE $tab_cont (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text,
  UNIQUE KEY id (id)
);";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

dbDelta($sql);
}

add_action('wp', 'tabla_contacto');

//* Insetar Datos Formulario Contacto
/*
if (isset($_POST['btns_cont'])) {

echo $_POST['btns_cont'];

function insertar_wpdb(){
global $wpdb;
$wpdb->insert( 'wp_contacto', 
  array( 
      'name' => 'Alain Milian', 
      'email' => 'amilianm@yahoo.es',
      'phone' => '04166185504',
      'message' => 'Hola Mundo'
  )
);
}

}
// Ejecutamos nuestro funcion en WordPress
add_action('wp', 'insertar_wpdb');
*/

//* Crear Función para Mostrar un Sub Menú Administrativo

function ayuda_function() {
  add_theme_page('Ayuda', 'Ayuda', 'manage_options', 'ayuda', 'sub_menu_panel');
  //add_menu_page('Ayuda', 'Ayuda', 'manage_options', 'ayuda', 'sub_menu_panel');
}

function sub_menu_panel() {
 if (!current_user_can('manage_options')) {
  wp_die( __('No tiene suficiente permiso para acceder a esta página.') );
 }
?>

<div class="wrap">
  <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png"/>
  <h2>HOLA MUNDO</h2>
</div>

<?php
}

add_action('admin_menu', 'ayuda_function');

// Ajustes del Tema en la Personalización

function ajustes_tema( $wp_customize ) {

  $wp_customize->add_panel( 'web_opciones_tema', array(
    'title' => __( 'Ajustes del Tema', 'web' ),
    'priority' => 1,
    'capability' => 'edit_theme_options',
  ));

  // Ajustes de la Barra de Navegación
  $wp_customize->add_section( 'navbar_section' , array(
    'title' => __( 'Barra de Navegación', 'web' ),
    'panel' => 'web_opciones_tema',
    'priority' => 1,
    'capability' => 'edit_theme_options',
  ));
 
  //Menú Barra de Navegación - Color de Fondo
  $wp_customize->add_setting( 'web_navbar_bc', array(
    'default' => '#2e2e2e',
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color_bc', array(
      'label' => __( 'Color de Fondo', 'web' ),
      'section' => 'navbar_section',
      'settings' => 'web_navbar_bc',
      'priority' => 1,
    )) 
  );

  //Menú Barra de Navegación - Color de la Hamburgesa
  $wp_customize->add_setting( 'web_navbar_hc', array(
    'default' => '#ffffff',
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color_hc', array(
      'label' => __( 'Color de la Hamburgesa', 'web' ),
      'section' => 'navbar_section',
      'settings' => 'web_navbar_hc',
      'priority' => 2,
    )) 
  );

  //Menú Barra de Navegación - Icono
  $wp_customize->add_setting( 'web_navbar_ic', array(
    'default' => get_bloginfo('template_directory') . '/assets/images/logo.png',
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
      'label' => __('Ícono de Navegación', 'web'),
      'section' => 'navbar_section',
      'settings' => 'web_navbar_ic',
      'priority' => 3,
    ))
  );

  // Ajustes de Google Analytics
  $wp_customize->add_section( 'google_section' , array(
    'title' => __( 'Google Analytics', 'web' ),
    'panel' => 'web_opciones_tema',
    'priority' => 2,
    'capability' => 'edit_theme_options',
  ));

  //Google Analytics - ID de Seguimiento
  $wp_customize->add_setting( 'web_google_is', array(
    'default' => 'UA-25243145-4',
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control( 'text_google_id', array(
    'label' => __('ID de Seguimiento', 'web'),
    'section' => 'google_section',
    'settings' => 'web_google_is',
    'type' => 'text',
    'priority' => 1,
    'description' => 'ID de Seguimiento de Google Analytics',
  ));

  // Ajustes de Políticas de Cookies
  $wp_customize->add_section( 'cookies_section' , array(
    'title' => __( 'Políticas de Cookies', 'web' ),
    'panel' => 'web_opciones_tema',
    'priority' => 3,
    'capability' => 'edit_theme_options',
  ));

  //Políticas de Cookies - Las Políticas
  $wp_customize->add_setting( 'web_cookies_po', array(
    'default' => '1',
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control( 'text_cookies_po', array(
    'label' => __('Activar Políticas de Cookies', 'web'),
    'section' => 'cookies_section',
    'settings' => 'web_cookies_po',
    'type' => 'checkbox',
    'priority' => 1,
  ));

}

add_action( 'customize_register', 'ajustes_tema' );

?>