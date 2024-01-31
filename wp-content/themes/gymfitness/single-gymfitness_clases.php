<?php
get_header(); //quiere decir que incluye el archivo header que esta a mismo nivel
/**template name: contenido centrado (no sidebars) */
?>


<main class="contenedor seccion con-sidebar">
    <section class="contenido-principal">
        <?php
        get_template_part('template-parts/clase');

        ?>
    </section>
  <?php
  get_sidebar('clases');

  ?>


</main>
<?php
get_footer();
?>