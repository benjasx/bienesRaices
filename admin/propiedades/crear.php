<?php
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-verde">volver</a>

        <form class="formulario">
            <fieldset>
                <legend>Informacion general</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="titulo propiedad">

                <label for="precio">precio:</label>
                <input type="number" id="precio" placeholder="precio propiedad">
                
                <label for="imagen">imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" rows="8"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion de la propiedad</legend>

                <label for="Habitaciones">Habitaciones:</label>
                <input type="number" min="1" max="9" id="Habitaciones" placeholder="Ej: 3">

                <label for="w.c">Baños</label>
                <input type="number" min="1" max="9" id="w.c" placeholder="Ej: 3">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" min="1" max="9" id="estacionamiento" placeholder="Ej: 3">
            </fieldset>

            <fieldset>
                <legend>vendedor</legend>
                <select>
                    <option value="1">Benjamin</option>
                    <option value="1">Juan</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear propiedad" class="boton boton-verde">
        </form>
    </main>



    <?php
        incluirTemplate('footer');
    ?>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>