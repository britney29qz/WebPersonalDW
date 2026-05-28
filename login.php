<?php
    //Iniciar sesión 
    session_start();
    //Controlar la alerta de error
    $error = "";
    if(isset($_GET['error'])) {
        $error = "Credenciales incorrectas.";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrador</title>
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
<body class="bg-white min-h-screen flex items-center justify-center px-6">
    <!--Inserción de alerta-->
    <?php if($error): ?>
        <div id="alertaErrorLogin" class="fixed top-10 right-5 border border-red-500 text-red-600 shadow-xl px-6 py-4 bg-white transition-all duration-500" role="alert">
            <?= $error ?>
        </div>
    <?php endif; ?>
    <!--Sección de login-->
    <section class="w-full max-w-md">
        <div class="mb-12 text-center">
            <h1 class="font-bodoni text-5xl text-slate-800 mb-4">Login Admin</h1>
            <div class="w-20 h-[2px] bg-amber-600 mx-auto"></div>
        </div>
        <!--Formulario de login-->
        <form class="border border-slate-200 p-10 flex flex-col gap-2" action="validar_login.php" method="POST">
            <label class="block mb-3 text-slate-700" for="usuario">Usuario</label>
            <input class="w-full border border-slate-300 px-5 py-4 outline-none focus:border-amber-600 transition" type="text" name="usuario" required id="">
            <label class="block mb-3 text-slate-700" for="clave">Contraseña</label>
            <input class="w-full border border-slate-300 px-5 py-4 mb-3 outline-none focus:border-amber-600 transition" type="password" name="clave" required id="">
            <button class="border border-slate-500 hover:border-amber-600 hover:text-amber-700 transition duration-300 px-8 py-4 text-sm tracking-wide uppercase text-scale-700 cursor-pointer" type="submit">
                Ingresar
            </button>
            <a href="index.php" class="inline-block text-center pt-5 text-amber-600 hover:text-amber-700 hover:text-inline">Regresar</a>
        </form>        
    </section>
    <script>
        //Cerrar alertas luego de 3 segundos
        const alertaErrorLogin = document.getElementById('alertaErrorLogin');
        if(alertaErrorLogin) {
            //Quitar parámetro de la URL para evitar que el mensaje aparezca al refrescar
            window.history.replaceState({}, document.title, "login.php");
            setTimeout(() => {
                alertaErrorLogin.style.opacity = '0';
                setTimeout(() => {
                    alertaErrorLogin.remove();
                }, 500);
            }, 3000);
        }
    </script>
</body>
</html>