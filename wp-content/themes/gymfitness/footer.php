<footer class="footer contenedor">
    <hr>
    <div class="contenido-footer">

        <?php

        $args = array(
            'theme_location' => 'menu-principal',//va a agregar el menu principal
            'container' => 'nav',// lo va a agregar en la navegacion
            'container_class' => 'menu-principal'//y le agrega la clase de menu principal
 

        );


        wp_nav_menu($args); //para mostrar el menu

        ?>

        <p class="copyright">Todos los derechos reservados. <?php echo  get_bloginfo('name') . " " . date('Y'); ?>  </p> <!--echo date('Y') es para que actualice el año, get_bloginfo('name') . " " . es para que se actualice el nombre en ajustes ajustes generales, para poder poner el nombre que quieras-->


    </div>
</footer>

<?php 

wp_footer();
?>

</body>

</html>