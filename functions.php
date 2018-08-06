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

//if (isset($_POST['btns_cont'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

function insertar_wpdb(){
global $wpdb;
$wpdb->insert( 'wp_contacto',
  array( 
      'name' => $name, 
      'email' => $email,
      'phone' => $phone,
      'message' => $message
  )
);
//}

}
// Ejecutamos nuestro funcion en WordPress
add_action('wp', 'insertar_wpdb');

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

<div id="welcome-panel" class="welcome-panel">
  <h2>¡Bienvenido al Thema WEB Bootstrap 4!</h2>
  <p class="about-description">Hemos creado algunos enlaces para que puedas comenzar:</p>
  <div class="welcome-panel-column-container">
  <div class="welcome-panel-column">
    <h3>Ayudanos a mantener el Proyecto</h3>
    <a class="button button-primary button-hero" href="https://www.paypal.me/amilianm">Donar via Paypal</a>
  </div>
  <div class="welcome-panel-column">
    <h3>Descargas y Actualzaciones</h3>
    <ul>
      <li><a href="https://github.com/amilianm/wp-theme-web" class="welcome-icon dashicons-cloud">Descaga el Tema de Github</a></li>
      <li><a href="#" class="welcome-icon welcome-add-page">Añade una página Sobre mí</a></li>
     </ul>
  </div>
  <div class="welcome-panel-column welcome-panel-last">
    <h3>Más acciones</h3>
    <ul>
      <li><a href="#" class="welcome-icon welcome-comments">Activa o desactiva los comentarios</a></li>
      <li><a href="#" class="welcome-icon welcome-learn-more">Aprende más de cómo comenzar</a></li>
    </ul>
  </div>
  </div>
</div>

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

  // Ajustes de las Entradas
  $wp_customize->add_section( 'entradas_section' , array(
    'title' => __( 'Ajustes de las Entradas', 'web' ),
    'panel' => 'web_opciones_tema',
    'priority' => 4,
    'capability' => 'edit_theme_options',
  ));

  //Ajustes de las Entradas - Paginación
  $wp_customize->add_setting( 'web_entradas_pa', array(
    'default' => '3',
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control( 'text_entradas_pa', array(
    'label' => __('Tu portada muestra', 'web'),
    'section' => 'entradas_section',
    'settings' => 'web_entradas_pa',
    'type' => 'radio',
    'priority' => 1,
    'description' => 'Muestra la Cantidad de Entradas/Publicaciones por Página',
    'choices' => array(
      '1' => '1 Entrada',
      '2' => '2 Entradas',
      '3' => '3 Entradas',
    ),
  ));

  //Ajustes de las Entradas - Color de la Tarjeta
  $wp_customize->add_setting( 'web_entradas_ct', array(
    'default' => '#149dcc',
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color_ct', array(
      'label' => __( 'Color de la Tarjeta', 'web' ),
      'section' => 'entradas_section',
      'settings' => 'web_entradas_ct',
      'description' => 'Muestra el Color de fondo de la Tarjeta',
      'priority' => 2,
    )) 
  );

  //Ajustes de las Entradas - Color del Título
  $wp_customize->add_setting( 'web_entradas_cp', array(
    'default' => '#ffffff',
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color_cp', array(
      'label' => __( 'Color del Título', 'web' ),
      'section' => 'entradas_section',
      'settings' => 'web_entradas_cp',
      'description' => 'Muestra el Color del Título de la entrada',
      'priority' => 3,
    )) 
  );

  //Ajustes de las Entradas - Imágen Destacada 
  $wp_customize->add_setting( 'web_entradas_id', array(
    'default' => get_bloginfo('template_directory') . '/assets/images/imgdes.png',
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_entradas_upload', array(
      'label' => __('Imagen Destacada', 'web'),
      'section' => 'entradas_section',
      'settings' => 'web_entradas_id',
      'description' => 'Seleccione la Imagen por defecto, que saldrá si la imágen destacada no se adjunta',
      'priority' => 4,
    ))
  );

}

add_action( 'customize_register', 'ajustes_tema' );

?>