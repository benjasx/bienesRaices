<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="build/img/logo.svg" alt="Logo">
                </a>

                <div class="navdark">
                    <div class="mobile-menu">
                        <img src="build/img/barras.svg" alt="menu-Hamburgesas">
                    </div>
                    <nav class="navegacion">
                        <a href="nosotros.html">Nosotros</a>
                        <a href="anuncios.html">Anuncios</a>
                        <a href="blog.html">Blog</a>
                        <a href="contacto.html">Contacto</a>
                    </nav>

                    <div class="dark-mode-btn">
                        <img src="build/img/dark-mode.svg" alt="Dark-Mode">
                    </div>
                </div>
            </div> <!-- Cierre de la barra -->

            
        </div>
    </header>

    <main class="contenedor seccion contenido-centradoPP">
        <h1>Casa de lujo en el lago</h1>

        <picture>
            <source srcset="build/img/anuncio1.webp" type="image/webp">
            <source srcset="build/img/anuncio1.jpg" type="image/jpg">
            <img src="build/img/anuncio1.jpg" alt="imagen-anuncio1" loading="lazy">
        </picture>
        <p class="precio">$3,000,000</p>
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

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est sequi delectus repellat ad voluptas? Earum illo in modi sunt ipsum, voluptatum sit eius harum dolor, veniam alias optio vero ipsa? Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dolor, asperiores quis tempore reiciendis molestiae illo repudiandae distinctio fugit vel tenetur veritatis nesciunt obcaecati deserunt consequuntur eum omnis, voluptatum voluptatibus.
        </p>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est sequi delectus repellat ad voluptas? Earum illo in modi sunt ipsum, voluptatum sit eius harum dolor, veniam alias optio vero ipsa? Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dolor, asperiores quis tempore reiciendis molestiae illo repudiandae distinctio fugit vel tenetur veritatis nesciunt obcaecati deserunt consequuntur eum omnis, voluptatum voluptatibus.
        </p>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est sequi delectus repellat ad voluptas? Earum illo in modi sunt ipsum, voluptatum sit eius harum dolor, veniam alias optio vero ipsa? Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dolor, asperiores quis tempore reiciendis molestiae illo repudiandae distinctio fugit vel tenetur veritatis nesciunt obcaecati deserunt consequuntur eum omnis, voluptatum voluptatibus.
        </p>


    </main>

    <footer class="footer seccion">
        <div class="contenedor contenido-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
            <p class="copyrigth">Todos los derechos reservados 2023 &copy;</p>
        </div>
    </footer>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>