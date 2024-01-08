<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');

    if(!$db){
        echo 'ERROR NO SE PUDO CONECTAR!';
        exit;
    }

    return $db;
}

