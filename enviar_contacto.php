<?php
    //Conexión a la base de datos
    require_once ("conexion.php");

    //Validación de datos recibidos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));
    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
    //Validar correo
    if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        header("Location: contacto.php?error=correo_invalido");
        exit();
    }
    //Prepara consulta
    $stmt = $conexion -> prepare("INSERT INTO contactos (nombre, correo, mensaje) VALUES (?, ?, ?)");
    //Vincular parámetros
    $stmt -> bind_param("sss", $nombre, $correo, $mensaje);
    //Ejecutar consulta
    if($stmt -> execute()) {
        //Mostrar un mensaje de éxito
        header("Location: contacto.php?exito=ok");
        exit();
    } else {
        //Mostrar un mensaje de error
        header("Location: contacto.php?error=envio_fallido");
        exit();   
    }
    $stmt -> close();
    //Cerrar conexiones
    $conexion -> close();
?>