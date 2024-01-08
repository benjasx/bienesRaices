<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

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
                    <p>Escrito <span>20/10/2023</span> por <span>Admin</span></p>
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
                    <p>Escrito <span>12/12/2023</span> por <span>Admin</span></p>
                    <p>
                        Minimiza el espacio en tu hohar con esta guia, aprende a combinar colores y muebles para una mejor vista en tu hogar
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="imagen-blog3">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito <span>20/10/2023</span> por <span>Admin</span></p>
                    <p>
                        consejos para contruir una tarraza en tu casa con los mejores materiales y ahorrar $$ dinerito
                    </p>
                </a>
            </div> 
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="imagen-blog4">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito <span>12/12/2023</span> por <span>Admin</span></p>
                    <p>
                        Minimiza el espacio en tu hohar con esta guia, aprende a combinar colores y muebles para una mejor vista en tu hogar
                    </p>
                </a>
            </div>
        </article>
    </main>

    <?php
        incluirTemplate('footer');
    ?>
    
</html>