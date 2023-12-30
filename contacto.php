<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="imagen destacada" loading="lazy">
        </picture>

        <h3>Llene el formulario de contacto</h3>
        <form class="formulario">
            <fieldset>
                <legend>Informacion personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre">

                <label for="email">Email</label>
                <input type="email" placeholder="Tu email" id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu telefono" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" cols="30" rows="10"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la propiedad</legend>

                <label for="opciones">Vende o compra</label>
                <select id="opciones">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="compra">compra</option>
                    <option value="vende">vende</option>
                </select>

                <label for="presupuesto">percio o presupuesto</label>
                <input type="number" placeholder="Tu percio o presupuesto" id="presupuesto">

            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>¿como desea ser contactado?</p>
                <div class="forma-contacto">
                    <label for="contacta-telefono">Telefono</label>
                    <input type="radio" value="telefono" id="contacta-telefono" name="contacto">

                    <label for="contacta-email">Email</label>
                    <input type="radio" value="email" id="contacta-email" name="contacto">
                </div>
                <p>Si eligio telefono elija la fecha y hora preferente para ser contactado</p>
                <label for="fecha">fecha</label>
                <input type="date" placeholder="Tu fecha" id="fecha">

                <label for="hora">hora</label>
                <input type="time" min="09:00" max="18:00" placeholder="Tu hora" id="hora">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

    <?php
        incluirTemplate('footer');
    ?>
    
</html>