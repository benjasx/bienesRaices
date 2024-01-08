<?php
    require '../includes/config/database.php';
    $db = conectarDB();

    $query = "SELECT * FROM propiedades";

    $resultadoDB = mysqli_query($db, $query);

    $resultado = $_GET['resultado'] ?? null;
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        <?php if(intval($resultado) === 1):?>
            <p class="alerta exito"> Anuncio creado correctamente</p>

        <?php elseif(intval($resultado) === 2):?>
            <p class="alerta exito"> Anuncio actualizado correctamente</p>

        <?php endif; ?>
        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITULO</th>
                    <th>IMAGEN</th>
                    <th>PRECIO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php while($propiedad = mysqli_fetch_assoc($resultadoDB)): ?>
                <tr>
    
                    <td><?php echo $propiedad['id']?></td>
                    <td><?php echo $propiedad['titulo']?></td>
                    <td><img class="imagen-tabla" src="/imagenes/<?php echo $propiedad['imagen']?>" alt="imagen"></td>
                    <td><?php echo "$".$propiedad['precio']?></td>
                    <td class="acciones">
                        <a href="#" class="boton-rojo-block btn">ELIMINAR</a>
                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'] ?>" class="boton-amarillo-block btn">ACTUALIZAR</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

    <?php
        mysqli_close($db);
        incluirTemplate('footer');
    ?>
</body>
</html>