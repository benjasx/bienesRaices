<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>25 Años de experiencia</blockquote>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam odit velit quo ducimus tenetur quidem nisi eveniet corporis, placeat veritatis temporibus, ipsum voluptates voluptate ea omnis. Doloribus minima inventore vel?</p>
    
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sunt dolor nesciunt minima enim. Praesentium nesciunt ad dicta mollitia. Inventore corporis fugit amet facilis dicta cum quo mollitia eveniet iure?</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>

        <div class="icono-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono img" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia enim, consequuntur non commodi explicabo adipisci possimus ipsam quisquam eveniet, accusamus dolorum quam optio repudiandae sit illo tempora officiis, voluptate deleniti!</p>
            </div>
            <di class="icono">
                <img src="build/img/icono2.svg" alt="Icono img" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia enim, consequuntur non commodi explicabo adipisci possimus ipsam quisquam eveniet, accusamus dolorum quam optio repudiandae sit illo tempora officiis, voluptate deleniti!</p>
            </di>
            <di class="icono">
                <img src="build/img/icono3.svg" alt="Icono img" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia enim, consequuntur non commodi explicabo adipisci possimus ipsam quisquam eveniet, accusamus dolorum quam optio repudiandae sit illo tempora officiis, voluptate deleniti!</p>
            </di>
        </div>
    </section>

    <?php
        incluirTemplate('footer');
    ?>
    
</html>