<?php
get_header(); //quiere decir que incluye el archivo header que esta a mismo nivel
/**template name: contenido centrado (no sidebars) */
?>


<main class="contenedor seccion contenido-centrado">
<?php
get_template_part('template-parts/post');

?>
<?php 


?>

<div class="comentarios">
<?php comment_form();?>
<h3 class="text-center text-primary comentarios">Comentarios</h3>
<ul class="lista-comentarios">
<?php
$comentarios = get_comments( array(
'post_id' => $post->ID,
'status' => 'approve' //muestra solo los aprobados

));
wp_list_comments( array(
'per_page' => 10, 
'reverse_top_level' => false //aca false es para mostrar de los mas nuevos al mas viejo
), $comentarios);

?>
</ul>
</div>

</main>
<?php
get_footer();
?>