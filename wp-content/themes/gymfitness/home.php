<?php
get_header();

?>


<main class="seccion contenedor">
    <ul class="listado-grid">

 

    <?php
    while (have_posts()) {
         the_post(); 
        get_template_part('template-parts/blog');
        //se ejecuta mientras haya informacion o haya contenido o la consulta siga retornando resuktados, have-posts es para acceder a la base de datos, have posts consulta a la base de datos y the posts da acceso a la informacion
    }
    ?>
       </ul>


       
       <?php 
       the_posts_pagination(); 
//posts_nav_link()//paginacion de pagina siguiente pagina siguiente 
       ?>

</main>
<?php
get_footer();
?>