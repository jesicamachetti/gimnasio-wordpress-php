<?php
//includes 
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';

//esta funcion es para que nos de la opcion de subir imagenes
function gymfitness_setup()
{

    //imagenes destacadas 
    add_theme_support('post-thumbnails');

    //titulos para seo 
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gymfitness_setup'); //este hook se ejecuta cuando se activa un tema, y se ejecuta la funcion que declare arriba 
//hasta aca


function gymfitness_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'gymfitness'), //registramos el menu principal


    ));
}

add_action('init', 'gymfitness_menus'); //para llamar una funcion, como agregamos una funcion add_action, init cuando arranque wordpress ejecutamos la funcion que pusimo al lado 

function gymfitness_scripts_styles()
{
    //archivos css
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');

    wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.4');
    if(is_page('galeria')) {
        wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.4');
    }

    if(is_front_page()) {
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.3.2');
    }

    
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0'); //agrega la hoja de estilo, style es un nombre unico, get_stylesheet_uri es su ubicacion, array sus dependencias y 1.0.0 es su version


    //archivos js
    if(is_page('galeria')) {
    //wp_enqueue_script('jquery');
    wp_enqueue_script('lightbox.js', get_template_directory_uri() . '/js/lightbox-plus-jquery.min.js', array(), '2.11.4', true);
    } // el true es para colocarlo en el footer
    if(is_front_page()) {
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9.3.2', true);
    wp_enqueue_script('anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array(), '2.0.2', true);
    }

    
   
    
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);


}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles'); //aca agregamops una hoja de estilos

//Definir zona de widgets
function gymfitness_widgets()
{
    register_sidebar(array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center" text-primary">',
        'after_title' => '</h3>'

    ));

    register_sidebar(array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center" text-primary">',
        'after_title' => '</h3>'

    ));
}
add_action('widgets_init', 'gymfitness_widgets');

/**crear shortcode */
function gymfitness_ubicacion_shortcode()
{
?>
    <div class="mapa">
        <?php

        if (is_page('contacto')) {

            the_field('ubicacion');
        }
        ?>
    </div>

    <h2 class="text-center text-primary">Formulario de contacto</h2>

<?php
    echo do_shortcode('[contact-form-7 id="79" title="Formulario de contacto 1"]');
}
add_shortcode('gymfitness_ubicacion', 'gymfitness_ubicacion_shortcode');

/**Imagenes dinamicas como background */
function gymfitness_hero_imagen() {
//obtener el id de la pagina de inicio
$front_id = get_option('page_on_front');

//pra obtener el id en la url del proyecto de wordpress wp-admin/options.php y pongo el id de page_on_front 

//obteer la imagen
$id_imagen = get_field('hero_imagen', $front_id);

//obtener la ruta de la imagen
$imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];


//crear css
wp_register_style('custom', false);//false porque no existe esa hoja de estilo pero vamos a crear una virtual, la registra pero le decimos que no existe en su disco duro
wp_enqueue_style('custom');//aca la agregamos, custom es el nombre que le di
$imagen_destacada_css = "
   body.home .header {
     background-image: linear-gradient( rgb(0 0 0 / .75), rgb(0 0 0 / .75)), url($imagen);
   }
   ";
//inyectar css
wp_add_inline_style('custom', $imagen_destacada_css);//la agrega de forma lineal 
}

add_action('init', 'gymfitness_hero_imagen');