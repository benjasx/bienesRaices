<?php

    require '../../includes/config/database.php';
    $db = conectarDB();

    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);
    
    $errores = [];


    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $baños = '';
    $estacionamiento = '';
    $vendedorId = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        
        $titulo = mysqli_real_escape_string($db, $_POST['titulo'] );
        $precio = mysqli_real_escape_string($db, $_POST['precio'] );
        $descripcion = mysqli_real_escape_string($db, $_POST['descripcion'] );
        $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones'] );
        $baños = mysqli_real_escape_string($db, $_POST['baños'] );
        $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento'] );
        $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor'] );
        $creado = date('Y/m/d/');
        $imagen = $_FILES['imagen'];
        
        

         
        if (!$titulo) {
            $errores[] = "Debes añadir un titulo";
        }

        if (!$precio) {
            $errores[] = "El precio es obligatorio";
        }

        if (strlen($descripcion) < 50) {
            $errores[] = "La descripcion es obligatorio y debe ser mayor a 50";
        }


        if (!$habitaciones) {
            $errores[] = "El numero de habitaciones es obligatorio";
        }

        if (!$baños) {
            $errores[] = "El numero de baños es obligatorio";
        }

        if (!$estacionamiento) {
            $errores[] = "El numero de estacionamientos es obligatorio";
        }

        if (!$vendedorId) {
            $errores[] = "Elige un vededor";
        }

        if(!$imagen['name'] || $imagen['error']){
            $errores[] = "Debes agregar una imagen";
        }

        //Maximo 100kb por imagen
        $medida = 1000*100;
        if($imagen['size'] > $medida){
            $errores[]= "La imagen es muy pesada - max:100kb";
        }

        if(empty($errores)){
            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
            }

            $nombreImg = md5(uniqid(rand(), true)).".jpg";
            var_dump($nombreImg);
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImg);

            
            $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) 
            VALUES ('$titulo','$precio','$nombreImg','$descripcion','$habitaciones','$baños','$estacionamiento','$creado','$vendedorId')";
    
            $resultado = mysqli_query($db,$query);
    
            if ($resultado) {
                header('location: /admin?resultado=1');
            }
        }

    }



require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Añadir una nueva propiedad</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion general</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" id="titulo" placeholder="titulo propiedad" value="<?php echo $titulo ?>">
                
                <label for="precio">precio:</label>
                <input type="number" name="precio"  id="precio" placeholder="precio propiedad" value="<?php echo $precio ?>">
                
                <label for="imagen">imagen:</label>
                <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">
                
                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" name="descripcion"  rows="8"><?php echo $descripcion ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion de la propiedad</legend>
                
                <label for="Habitaciones">Habitaciones:</label>
                <input type="number" name="habitaciones"  min="1" max="9" id="Habitaciones" placeholder="Ej: 3" value="<?php echo $habitaciones ?>">
                
                <label for="w.c">Baños</label>
                <input type="number" name="baños"  min="1" max="9" id="w.c" placeholder="Ej: 3" value="<?php echo $baños ?>">
                
                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" name="estacionamiento"  min="1" max="9" id="estacionamiento" placeholder="Ej: 3" value="<?php echo $estacionamiento ?>">
            </fieldset>
            
            <fieldset>
                <legend>vendedor</legend>
                <select name="vendedor" value="<?php echo $vendedorId ?>">
                    <option value=""> -- Seleccione --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)):?>
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido'];?></option>
                    <?php endwhile; ?>    
                </select>
            </fieldset>
            
            <input type="submit" value="Crear propiedad" class="boton boton-verde">
            <a href="/admin" class="boton boton-verde-block">volver</a>

        </form>
    </main>
    


    <?php
        incluirTemplate('footer');
    ?>
    
</body>
</html>