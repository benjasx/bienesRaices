<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hohar</h1>
        <picture>
            <source srcset="build/img/blog1.webp" type="image/webp">
            <source srcset="build/img/blog1.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/blog1.jpg" alt="imagen-blog1">
        </picture>
        <p class="informacion-meta">Escrito el <span>20/10/2021</span> por: <span>admin</span></p>

        <div class="resumen-propiedad">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur repellendus natus ex deserunt adipisci dolorem dolore, rem quibusdam quam maiores facilis, illo corrupti velit, laborum amet repudiandae? Odio, beatae quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut tempore doloremque tenetur nesciunt! Natus molestiae illum itaque quis accusamus ipsum provident sed magni aliquam enim delectus deserunt, repellendus numquam possimus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur repellendus natus ex deserunt adipisci dolorem dolore, rem quibusdam quam maiores facilis, illo corrupti velit, laborum amet repudiandae? Odio, beatae quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut tempore doloremque tenetur nesciunt! Natus molestiae illum itaque quis accusamus ipsum provident sed magni aliquam enim delectus deserunt, repellendus numquam possimus.</p>
        </div>

    </main>

    <?php
        incluirTemplate('footer');
    ?>
    
</html>