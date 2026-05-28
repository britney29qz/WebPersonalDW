<?php
    //Iniciar sesión
    session_start();
    //Conexión a la base de datos
    require_once("conexion.php");
    //Validación de datos recibidos del formulario
    $usuario = htmlspecialchars(trim($_POST['usuario']));
    $clave = $_POST['clave'];
    //Preparar la consulta del usuario y ejecutarla
    $stmt = $conexion -> prepare("SELECT * FROM administradores WHERE usuario = ?");
    $stmt -> bind_param("s", $usuario);
    $stmt -> execute();
    $resultado = $stmt -> get_result();
    $admin = $resultado -> fetch_assoc();
    //Validar usuario
    if($admin && password_verify($clave, $admin['clave'])) {
        $_SESSION['admin'] = $admin['usuario'];
        header("Location: listar.php"); //Mostrar la página de lista si todo está correcto
        exit();
    } else {
        header("Location: login.php?error=1"); //Redirigir al login por si algo falla
        exit();
    }
?>