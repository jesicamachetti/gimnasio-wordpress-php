<?php

while (have_posts()) : the_post(); //se ejecuta mientras haya informacion o haya contenido o la consulta siga retornando resuktados, have-posts es para acceder a la base de datos, have posts consulta a la base de datos y the posts da acceso a la informacion
    the_title('<h1 class="text-center text-primary">', '</h1>'); //antes del titulo quiero un h1 y lo cierro

    //si hay una imagen ejecuta este codigo, sino que no se ejecute
    if (has_post_thumbnail()) {
        the_post_thumbnail('full', array('class' => 'imagen-destacada')); //esto es para que se renderice. the_post_thumbnail se encarga de mostrar una imagen 
    }
?>
<div class="meta-info">
     <p class="meta">
        <span>Por: </span>
        <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>">
            <?php echo get_the_author_meta('display_name'); ?>
        </a>
       </p> 

       
       <div class="categoria">
       <p class="meta">
        <span>Categoría: </span>
        </p> 
        
            <?php the_category(); ?>
        </a>
        <p class="meta">
        <span>Fecha: </span>
        
            <?php the_time( get_option('date_format')); ?>
        </a>
       </p> 
       
       </div>
       </div>


<?php

    the_content();

endwhile;