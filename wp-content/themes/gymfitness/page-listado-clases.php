<?php
get_header(); //quiere decir que incluye el archivo header que esta a mismo nivel

/**template name: listado de clases */
?>


<main class="contenedor seccion">
    <?php 
    get_template_part('template-parts/pagina');
    ?>
    <?php gymfitness_lista_clases(); ?>
</main>
<?php
get_footer();
?>