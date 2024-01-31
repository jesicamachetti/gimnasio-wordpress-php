<?php
get_header(); //quiere decir que incluye el archivo header que esta a mismo nivel
/**template name: contenido centrado (no sidebars) */
?>


<main class="contenedor seccion contenido-centrado">
<?php
get_template_part('template-parts/pagina');

?>

</main>
<?php
get_footer();
?>