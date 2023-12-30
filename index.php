<?php
    declare(strict_types=1);
    require 'includes/funciones.php';
    incluirTemplate('header', true);
?>
    <main class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>

        <div class="icono-nosotros">
            <div class="icono">
                <img  src="build/img/icono1.svg" alt="Icono img" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia enim, consequuntur non commodi explicabo adipisci possimus ipsam quisquam eveniet, accusamus dolorum quam optio repudiandae sit illo tempora officiis, voluptate deleniti!</p>
            </div>
            <di class="icono">
                <img  src="build/img/icono2.svg" alt="Icono img" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia enim, consequuntur non commodi explicabo adipisci possimus ipsam quisquam eveniet, accusamus dolorum quam optio repudiandae sit illo tempora officiis, voluptate deleniti!</p>
            </di>
            <di class="icono">
                <img  src="build/img/icono3.svg" alt="Icono img" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia enim, consequuntur non commodi explicabo adipisci possimus ipsam quisquam eveniet, accusamus dolorum quam optio repudiandae sit illo tempora officiis, voluptate deleniti!</p>
            </di>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en ventas</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                    <img src="build/img/anuncio1.jpg" alt="imagen-anuncio1" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa de lujo con exelente vista, acabado de lujo a un exelente precio</p>
                    <p class="precio">
                        $3,000,000
                    </p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="darkico" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="darkico" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="darkico" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncios.php" class="boton-amarillo-block">Ver propiedad</a>
                </div><!-- contenido-anuncio -->
            </div><!-- anuncios -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                    <img src="build/img/anuncio2.jpg" alt="imagen-anuncio1" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa de lujo con exelente vista, acabado de lujo a un exelente precio</p>
                    <p class="precio">
                        $3,000,000
                    </p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="darkico" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="darkico" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="darkico" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncios.php" class="boton-amarillo-block">Ver propiedad</a>
                </div><!-- contenido-anuncio -->
            </div><!-- anuncios -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                    <img src="build/img/anuncio3.jpg" alt="imagen-anuncio1" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca muy costosa</h3>
                    <p>Casa de lujo con exelente vista, acabado de lujo a un exelente precio</p>
                    <p class="precio">
                        $3,000,000
                    </p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="darkico" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="darkico" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="darkico" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                            <p>4</p>
                        </li> <!-- haha -->
                    </ul>

                    <a href="anuncios.php" class="boton-amarillo-block">Ver propiedad</a>
                </div><!-- contenido-anuncio -->
            </div><!-- anuncios -->
        </div><!-- contenido-anuncios -->

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario y uno de nuestros asesores se pondra en contacto usted.</p>
        <a href="contacto.html" class="boton-amarillo">Contactanos</a>
    </section>


    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="imagen-blog1">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito <span>20/10/2023</span> por <span>Admin</span></p>
                        <p>
                            consejos para contruir una tarraza en tu casa con los mejores materiales y ahorrar $$ dinerito
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="imagen-blog2">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito <span>12/12/2023</span> por <span>Admin</span></p>
                        <p>
                            Minimiza el espacio en tu hohar con esta guia, aprende a combinar colores y muebles para una mejor vista en tu hogar
                        </p>
                    </a>
                </div>
            </article>
        </section>
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor omnisdolor omnis!</blockquote>
                <p>-Benja Sanchez</p>
            </div>
        </section>
    </div>
    <?php
        incluirTemplate('footer');
    ?>
    
</html>