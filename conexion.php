<?php
    //Conexión a la base de datos por medio de un usuario específico
    $conexion = new mysqli("sql302.infinityfree.com", "if0_42035728", "britney369", "if0_42035728_webpersonal");
    if ($conexion -> connect_error) {
        die("Error de conexión a la base de datos"); //Mensaje de error en caso de que no se logre la conexión
    }
?>