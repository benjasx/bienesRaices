<?php
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('location: /admin');
    }
    require '../../includes/config/database.php';
    $db = conectarDB();

    
    
    $consulta = "SELECT * FROM propiedades WHERE id = $id ";
    $resultado = mysqli_query($db, $consulta);
    $propiedad = mysqli_fetch_assoc($resultado);
    
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);
    $errores = [];


    $titulo = $propiedad['titulo'];
    $precio = $propiedad['precio'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $baños = $propiedad['wc'];
    $estacionamiento = $propiedad['estacionamiento'];
    $vendedorId = $propiedad['vendedores_id'];
    $imagenPropiedad = $propiedad['imagen'];

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
            $nombreImg ='';

            if($imagen['name']){
                unlink($carpetaImagenes . $propiedad['imagen']);
                $nombreImg = md5(uniqid(rand(), true)).".jpg";
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImg);
            }else {
                $nombreImg = $propiedad['imagen'];
            }




            
            

            $query = "UPDATE propiedades SET titulo='$titulo', precio='$precio', imagen = '$nombreImg',descripcion='$descripcion', habitaciones=$habitaciones, wc= $baños , estacionamiento= $estacionamiento, vendedores_id=$vendedorId WHERE id = $id";
    
            $resultado = mysqli_query($db,$query);

            echo $query;
    
            if ($resultado) {
                header('location: /admin?resultado=2');
            }
        }

    }



require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Actualizar propiedad</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion general</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" id="titulo" placeholder="titulo propiedad" value="<?php echo $titulo ?>">
                
                <label for="precio">precio:</label>
                <input type="number" name="precio"  id="precio" placeholder="precio propiedad" value="<?php echo $precio ?>">
                
                <label for="imagen">imagen:</label>
                <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">
                <img src="/imagenes/<?php echo $imagenPropiedad ?>" alt="Imagen propiedad" class="imagen-small">
                
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
            
            <input type="submit" value="Actualizar propiedad" class="boton boton-verde">
            <a href="/admin" class="boton boton-verde-block">volver</a>

        </form>
    </main>
    


    <?php
        incluirTemplate('footer');
    ?>
    
</body>
</html>