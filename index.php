<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Personal</title>
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
    <!--Sección principal-->
    <section class="min-h-screen flex bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-10 py-20 w-full">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <!--Parte izquierda para información-->
                <article class="order-2 lg:order-1 py-3">
                    <h2 class="font-bodoni text-6xl md:text-7xl font-bold text-blue-950 mb-3 tracking-wide">Britney</h2>
                    <h2 class="font-bodoni text-6xl md:text-7xl font-bold text-blue-950 mb-6 tracking-wide">Quiroz Brito</h2>
                    <p class="text-slate-500 text-lg leading-relaxed mb-8">Estudiante de Ing. en Tecnologías de la Información, apasionada por el arte en todos sus aspectos; con una visión excepcional para
                        el diseño visual e interactivo, creando experiencias digitales modernas, elegantes y funcionales.
                    </p>
                    <div class="w-20 h-[2px] bg-amber-600 mt-8 mb-8"></div>
                    <!--Botón de contacto-->
                    <a href="contacto.php" class="inline-block border border-slate-500 hover:border-amber-600 hover:text-amber-700 transition duration-300 px-8 py-3 text-sm tracking-wide uppercase text-slate-700">
                        Contáctame
                    </a>
                </article>
                <!--Parte derecha para la imagen-->
                <article class="order-1 lg-order-2 flex justify-center lg:justify-end">
                    <div class="relative">
                        <!--Marco decorativo-->
                        <div class="absolute -bottom-5 -right-5 w-full h-full border border-amber-600 rounded-[30px]"></div>
                        <!--Imagen-->
                        <img src="img/imagenPersonal.jpeg" alt="Fotografía de Britney Quiroz" class="relative w-[280px] md:w-[380px] lg:w-[420px] h-[420px] md:h-[520px] object-cover rounded-[30px] shadow-sm">
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!--Sección para biografía y hobbies-->
    <section class="py-10 mb-30">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <!--Contenido-->
            <div class="grid lg:grid-cols-2 gap-16">
                <!--Bio a la izquierda-->
                <article class="flex flex-col">
                    <h2 class="font-bodoni text-4xl text-slate-800 mb-4">Sobre mí</h2>
                    <div class="w-20 h-[2px] bg-amber-600"></div>
                    <p class="text-slate-600 leading-relaxed text-lg mb-6 pt-10">
                        Me encanta crear y diseñar lo que quisiera ver y usar. Cuando descubrí todo el mundo tecnológico que está detrás de una pantalla o 
                        dispositivo, sentí que entenderlo y comprenderlo sería una de mis grandes pasiones. Desde ahí supe que mi camino de aprendizaje había 
                        empezado, y no hemos parado. 
                    </p>
                    <p class="text-slate-600 leading-relaxed text-lg">
                        Disfruto mucho el área del diseño visual e interacción funcional, diría que son las áreas en las que espero 
                        especializarme en un futuro cercano, siempre creando experiencias digitales amigables e inclusivas; pero sobre todo, 
                        humanas.  
                    </p>
                </article>
                <!--Parte derecha de Hobbies-->
                <article class="flex flex-col">
                    <h2 class="font-bodoni text-4xl text-slate-800 mb-4">Hobbies</h2>
                    <div class="w-20 h-[2px] bg-amber-600"></div>
                    <!--Cards de hobbies-->
                    <div class="grid sm:grid-cols-2 gap-6 pt-10">
                        <!--Hobbie 1-->
                        <div class="p-6 rounded-3xl shadow-sm border border-slate-100">
                            <h3 class="text-slate-800 font-semibold mb-3">Aprendizaje</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">Interés constante por adquirir nuevos conocimientos en diferentes 
                                ramas de la ciencia y mejorar habilidades profesionales.
                            </p>
                        </div>
                        <!--Hobbie 2-->
                        <div class="p-6 rounded-3xl shadow-sm border border-slate-100">
                            <h3 class="text-slate-800 font-semibold mb-3">Tejer</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">Amo tejer, es una de las actividades manuales que más disfruto realizar 
                                en mi día. Tejo para mí y como un pequeño emprendimiento.
                            </p>
                        </div>
                        <!--Hobbie 3-->
                        <div class="p-6 rounded-3xl shadow-sm border border-slate-100">
                            <h3 class="text-slate-800 font-semibold mb-3">Manualidades</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">Soy muy buena en las artes manuales, ya sea dibujar, pintar, armar maquetas 
                                o cualquier actividad manual creativa. 
                            </p>
                        </div>
                        <!--Hobbie 4-->
                        <div class="p-6 rounded-3xl shadow-sm border border-slate-100">
                            <h3 class="text-slate-800 font-semibold mb-3">Leer</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">Siempre disfruto de un buen libro, y soy muy versátil en los géneros literarios; 
                                pero de preferencia elijo a los crimen y misterio.
                            </p>
                        </div>
                    </div>
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
    </script>
</body>
</html>