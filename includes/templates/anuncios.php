<?php
    //Insertar la coneccion
    require __DIR__ . '/../config/database.php';
    $db = conectarDB();


    //consultar
    $consulta = "SELECT * FROM propiedades LIMIT $limit";
    //Obtener resultado
    $resultado = mysqli_query($db, $consulta);
?>

<div class="contenedor-anuncios">
    <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
    
    <div class="anuncio">
      
        <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="imagen-anuncio1" loading="lazy">

        <div class="contenido-anuncio">
            <h3><?php echo $propiedad['titulo'] ?></h3>
            <p><?php echo $propiedad['descripcion'] ?></p>
            <p class="precio"><?php echo "$".$propiedad['precio'] ?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="darkico" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                    <p><?php echo $propiedad['wc'] ?></p>
                </li>
                <li>
                    <img class="darkico" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                    <p><?php echo $propiedad['estacionamiento'] ?></p>
                </li>
                <li>
                    <img class="darkico" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                    <p><?php echo $propiedad['habitaciones'] ?></p>
                </li>
            </ul>

            <a href="anuncios.php?<?php echo $propiedad['id'] ?>" class="boton-amarillo-block">Ver propiedad</a>
        </div><!-- contenido-anuncio -->
    </div><!-- anuncios -->
    <?php endwhile;?>
</div><!-- contenido-anuncios -->

<?php
    mysqli_close($db);
?>