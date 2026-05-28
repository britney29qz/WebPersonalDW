<?php
    //Conexión a la base de datos por medio de un usuario específico
    $conexion = new mysqli("localhost", "user_webpersonal", "webpersonal123", "webpersonal");
    if ($conexion -> connect_error) {
        die("Error de conexión a la base de datos"); //Mensaje de error en caso de que no se logre la conexión
    }
?>