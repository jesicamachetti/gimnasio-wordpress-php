<?php
get_header();

?>


<main class="seccion contenedor">
    
    <?php
    //acomodar por categoria
$categoria = get_queried_object();


    ?>
    <h2 class="text-primary text-center">Categoria:<?php echo $categoria->name;?></h2>
    <ul class="listado-grid">

 

    <?php
    while (have_posts()) {
         the_post(); 
        get_template_part('template-parts/blog');
        //se ejecuta mientras haya informacion o haya contenido o la consulta siga retornando resuktados, have-posts es para acceder a la base de datos, have posts consulta a la base de datos y the posts da acceso a la informacion
    }
    ?>
       </ul>

</main>
<?php
get_footer();
?>