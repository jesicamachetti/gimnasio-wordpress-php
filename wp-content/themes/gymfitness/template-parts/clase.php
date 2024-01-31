<?php

while (have_posts()) : the_post(); //se ejecuta mientras haya informacion o haya contenido o la consulta siga retornando resuktados, have-posts es para acceder a la base de datos, have posts consulta a la base de datos y the posts da acceso a la informacion
    the_title('<h1 class="text-center text-primary">', '</h1>'); //antes del titulo quiero un h1 y lo cierro

    //si hay una imagen ejecuta este codigo, sino que no se ejecute
    if (has_post_thumbnail()) {
        the_post_thumbnail('full', array('class' => 'imagen-destacada')); //esto es para que se renderice. the_post_thumbnail se encarga de mostrar una imagen 
    }

    if (is_single()) {

        $hora_inicio = get_field('hora_inicio'); //get_field solo obtiene el valor
        $hora_fin = get_field('hora_fin');
?>


        <p class="informacion-clase">
            <?php the_field('dias_clases'); ?> -
            <?php echo $hora_inicio . " a " . $hora_fin; ?>
        </p>

<?php
    }

    the_content();

endwhile;
