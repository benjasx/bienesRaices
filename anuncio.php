<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

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

    <?php
        incluirTemplate('footer');
    ?>
    
</html>