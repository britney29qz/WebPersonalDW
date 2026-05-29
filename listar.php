<?php
    //Iniciar sesión
    session_start();
    //Verificar si el administrador inició sesión
    if(!isset($_SESSION['admin'])) {
        header("Location: login.php");
        exit();
    }
    //Conexión a la base de datos
    require_once("conexion.php");
    //Consultar mensajes
    $consulta = $conexion -> query("SELECT id, nombre, correo, mensaje, fecha_registro FROM contactos ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Mensajes</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!--Importar fuentes-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <!--Configurar fuente-->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .font-bodoni {
            font-family:'Bodoni Moda', serif;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-white min-h-screen py-16 px-6">
    <!--Lista de datos almacenados en la base de datos-->
    <section class="max-w-6xl mx-auto">
        <!--Título-->
        <h1 class="font-bodoni text-5xl text-slate-800 mb-4">Mensajes Recibidos</h1>
        <div class="w-20 h-[2px] mb-5 bg-amber-600"></div>
        <!--Tabla-->
        <div class="overflow-x-auto border border-slate-400">
            <table class="w-full border-collapse">
                <!--Encabezados-->
                <thead class="bg-slate-200">
                    <tr class="text-left">
                        <th class="px-6 py-4 text-slate-700 font-semibold bordedr border-slate-200">ID</th>
                        <th class="px-6 py-4 text-slate-700 font-semibold bordedr border-slate-200">Nombre</th>
                        <th class="px-6 py-4 text-slate-700 font-semibold bordedr border-slate-200">Correo</th>
                        <th class="px-6 py-4 text-slate-700 font-semibold bordedr border-slate-200">Mensaje</th>
                        <th class="px-6 py-4 text-slate-700 font-semibold bordedr border-slate-200">Fecha de Registro</th>
                    </tr>
                </thead>
                <!--Contenido-->
                <tbody>
                    <?php while($fila = $consulta -> fetch_assoc()): ?>
                        <tr class="hover:bg-slate-50 transition duration-300">
                            <td class="border border-slate-200 px-6 py-4 text-slate-600"><?= htmlspecialchars($fila['id'])?></td>
                            <td class="border border-slate-200 px-6 py-4 text-slate-600"><?= htmlspecialchars($fila['nombre'])?></td>
                            <td class="border border-slate-200 px-6 py-4 text-slate-600"><?= htmlspecialchars($fila['correo'])?></td>
                            <td class="border border-slate-200 px-6 py-4 text-slate-600"><?= htmlspecialchars($fila['mensaje'])?></td>
                            <td class="border border-slate-200 px-6 py-4 text-slate-600"><?= htmlspecialchars($fila['fecha_registro'])?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <!--Botón para volver-->
        <a href="index.php" class="mt-10 inline-block border border-slate-500 hover:border-amber-600 hover:text-amber-700 transition duration-300 px-8 py-4 text-sm tracking-wide uppercase text-slate-700">
            Volver al inicio
        </a>
    </section>
</body>
</html>