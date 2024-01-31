<?php
/**
 * Template Name: galeria
 */

get_header(); //quiere decir que incluye el archivo header que esta a mismo nivel

?>


<main class="contenedor seccion">

    <?php


  while (have_posts()): the_post(); 
      the_title('<h1 class="text-center text-primary">', '</h1>'); 
      

   //obtener la galeria
   $galeria = get_post_gallery( get_the_ID(), false );//trae el id del post actual, le pasamos qu galeria quiero obtener, si es true trae la geleria con el copdigo html y todo, si es false solo trae las imagenes


   //obtener los ids en un array
   $galeria_imagenes_ID = explode(",", $galeria['ids']);
   ?>
<ul class="galeria-imagenes">
  <?php 
  //as variable temporal
  foreach($galeria_imagenes_ID as $id ) {
    $imagen_grande = wp_get_attachment_image_src($id, 'large')[0];//0 es la posicion, large es el tamano de la imagen
    $imagen_full = wp_get_attachment_image_src($id, 'full')[0]; 

    ?>

    <li>
      <a data-lightbox="galeria" href="<?php echo $imagen_full; ?>">
        <img src="<?php echo $imagen_grande; ?>" alt="imagengaleria"/>
      </a>
    </li> 

    <?php



  }

  ?>

</ul>

<?php 
  

  endwhile;
  
    ?>

</main>

<?php
get_footer();
?>
