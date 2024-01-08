<?php

    
    require '../includes/config/database.php';
    $db = conectarDB();

    $query = "SELECT * FROM propiedades";

    $resultadoDB = mysqli_query($db, $query);

    $resultado = $_GET['resultado'] ?? null;

    /* Elimina propiedad */
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){
            $query = "SELECT imagen FROM propiedades WHERE id = $id";
            $resultado = mysqli_query($db, $query);

            $propiedad = mysqli_fetch_assoc($resultado);
            unlink('../imagenes/' . $propiedad['imagen'] );
            $query = "DELETE  FROM propiedades WHERE id = $id";
            $resultado = mysqli_query($db, $query);

            if ($resultado) {
                header('location: /admin?resultado=3');
            }
        }
    }
    /* -------------------------------------------------- */
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        <?php if(intval($resultado) === 1):?>
            <p class="alerta exito"> Anuncio creado correctamente</p>

        <?php elseif(intval($resultado) === 2):?>
            <p class="alerta exito"> Anuncio actualizado correctamente</p>
        <?php elseif(intval($resultado) === 3):?>
            <p class="alerta exito"> Anuncio eliminado correctamente</p>

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
                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'] ?>" class="boton-amarillo-block btn">Actualizar</a>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id'] ?> ">
                            <input type="submit" value="Eliminar" class="boton-rojo-block btn"></input>
                        </form>
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