<?php
    //Manejar las alertas de error o exito en el envío de mensaje
    $mensaje_exito = false;
    $mensaje_error = "";
    //Mensaje exitoso
    if(isset($_GET['exito']) && $_GET['exito'] == 'ok') {
        $mensaje_exito = true;
    }
    //Mensaje de error
    if(isset($_GET['error'])) {
        if($_GET['error'] == 'envio_fallido') {
            $mensaje_error = "El mensaje no pudo enviarse correctamente. Por favor, intente nuevamente.";
        }
        if($_GET['error'] == 'correo_invalido') {
            $mensaje_error = "El correo ingresado no es válido. Por favor, utiliza uno correcto.";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
<body class="bg-white">
    <!--Header-->
    <header class="w-full h-30 bg-white flex items-center justify-between px-8 relative z-50">
        <img src="img/logoPersonal3.png" alt="Logo Personal" class="w-20 transition-all duration-300">
        <!--Menú para desktop-->
        <nav class="hidden lg:flex gap-30 mr-20 text-neutral-700 text-lg">
            <a href="index.php" class="hover:text-blue-900 transition-colors duration-300">Inicio</a>
            <a href="login.php" class="hover:text-blue-900 transition-colors duration-300">Login</a>
            <a href="contacto.php" class="hover:text-blue-900 transition-colors duration-300">Contacto</a>
        </nav>
        <!--Botón hamburgesa para móviles-->
        <button id="botonMovil" class="lg:hidden cursor-pointer" aria-label="Abrir menú">
            <svg class="w-8 h-8 text-neutral-700 hover:text-blue-700 transition-colors duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <!--Menú para móviles-->
        <nav id="menuMovil" class="hidden lg:hidden absolute top-25 left-0 w-full bg-white">
            <div class="flex flex-col items-center gap-6 py-6 text-neutral-700 text-lg">
                <a href="index.php" class="hover:text-blue-900 transition-colors duration-300">Inicio</a>
                <a href="login.php" class="hover:text-blue-900 transition-colors duration-300">Login</a>
                <a href="contacto.php" class="hover:text-blue-900 transition-colors duration-300">Contacto</a>    
            </div>
        </nav>
    </header>
    <!--Sección de contacto-->
    <section class="min-h-screen py-25">
        <!--Inserción de alertas-->
        <?php if($mensaje_exito): ?>
            <div id="alertaExito" class="fixed top-30 right-5 border border-green-600 text-green-700 bg-white px-6 py-4 tracking-wide z-50 shadow-xl transition-all duration-500" role="alert">
                Mensaje enviado correctamente.
        </div>
        <?php endif; ?>
        <?php if($mensaje_error): ?>
            <div id="alertaError" class="fixed top-30 right-5 border border-red-600 text-red-700 bg-white px-6 py-4 shadow-xl tracking-wide z-50 transition-all duration-500" role="alert">
                <?= htmlspecialchars($mensaje_error) ?>
            </div>
        <?php endif; ?>
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <div class="grid lg:grid-cols-2 gap-20">
                <!--Información-->
                <article>
                    <h1 class="font-bodoni text-5xl text-slate-800 mb-4">Contacto</h1>
                    <div class="w-20 h-[2px] bg-amber-600 mb-10"></div>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        Si estás interesado en comunicarte conmigo para colaborar en proyectos, compartir ideas 
                        o simplemente dialogar sobre diseño y desarrollo web, puedes enviarme un mensaje mediante 
                        el presente formulario.
                    </p>
                    <p class="text-slate-500 leading-relaxed">
                        Estaré encantada de responder lo antes posible.
                    </p>
                </article>
                <!--Formulario-->
                <article class="rounded-[30px] shadow-lg border border-slate-100 p-8 md:p-10">
                    <form action="enviar_contacto.php" method="POST" class="flex flex-col gap-5">
                        <!--Nombre-->
                        <label class="block text-slate-700 font-medium" for="nombre">Nombre</label>
                        <input class="w-full border border-slate-400 rounded-2xl px-5 py-4 outline-none focus:border-amber-600 transition duration-300" type="text" name="nombre" minlength="3" required>
                        <!--Correo-->
                        <label class="block text-slate-700 font-medium" for="correo">Correo</label>
                        <input class="w-full border border-slate-400 rounded-2xl px-5 py-4 outline-none focus:border-amber-600 transition duration-300" type="email" name="correo" required>
                        <!--Mensaje-->
                        <label class="block text-slate-700 font-medium" for="mensaje">Mensaje</label>
                        <textarea class="w-full border border-slate-400 rounded-2xl px-5 py-4 outline-none resize-none focus:border-amber-600 transition duration-300" name="mensaje" rows='6' minlength="10" required></textarea>
                        <!--Botón para enviar el formulario-->
                        <button type="submit" class="border border-slate-500 hover:border-amber-600 hover:text-amber-700 transition duration-300 px-8 py-4 text-sm tracking-wide uppercase text-slate-700 cursor-pointer">
                            Enviar Mensaje
                        </button>
                    </form>
                </article>
            </div>
        </div>
    </section>
    <!--Footer-->
    <footer class="h-30 w-full bg-slate-800">
        <p class="text-center text-white pt-11">© 2026 Webney. Todos los derechos reservados.</p>
    </footer>

    <script>
        //Script para desplegar el menú móvil
        const botonMovil = document.getElementById('botonMovil');
        const menuMovil = document.getElementById('menuMovil');

        botonMovil.addEventListener('click', () => {
            menuMovil.classList.toggle('hidden');
        });

        //Cerrar alertas luego de 3 segundos
        const alertaExito = document.getElementById('alertaExito');
        if(alertaExito) {
            //Quitar parámetro de la URL para evitar que el mensaje aparezca al refrescar
            window.history.replaceState({}, document.title, "contacto.php");
            setTimeout(() => {
                alertaExito.style.opacity = '0';
                setTimeout(() => {
                    alertaExito.remove();
                }, 500);
            }, 3000);
        }
        //Cerrar alertas luego de 3 segundos
        const alertaError = document.getElementById('alertaError');
        if(alertaError) {
            //Quitar parámetro de la URL para evitar que el mensaje aparezca al refrescar
            window.history.replaceState({}, document.title, "contacto.php");
            setTimeout(() => {
                alertaError.style.opacity = '0';
                setTimeout(() => {
                    alertaError.remove();
                }, 500);
            }, 3000);
        }
    </script>
</body>
</html>