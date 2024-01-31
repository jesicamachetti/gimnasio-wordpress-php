<?php
get_header();

?>
<h1>Desde index.php</h1>

<main>

    <?php
    while (have_posts()) : the_post(); //se ejecuta mientras haya informacion o haya contenido o la consulta siga retornando resuktados, have-posts es para acceder a la base de datos, have posts consulta a la base de datos y the posts da acceso a la informacion
        the_title();

        the_content();

    endwhile;

    ?>

</main>
<?php
get_footer();
?>