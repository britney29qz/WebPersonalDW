# Webney - Página web personal

## Descripción del Proyecto

Webney es un sitio web personal desarrollado como proyecto académico para la materia de Desarrollo Web.

El proyecto tiene como objetivo presentar información personal, hobbies y una sección de contacto funcional, aplicando tecnologías de desarrollo frontend y backend.

La página permite a los visitantes enviar mensajes mediante un formulario de contacto, cuyos datos son almacenados en una base de datos MySQL. Además, cuenta con un panel administrativo protegido mediante autenticación para visualizar los mensajes recibidos.

Las tecnologías y plataformas utilizadas para realizar el proyecto fueron: 

- HTML5
- Tailwind CSS
- PHP
- MySQL
- XAMPP
- InfinityFree
- Git y GitHub

Y, de manera general, el sistema nos brida:

- Diseño responsivo adaptable a dispositivos móviles.
- Página principal con biografía personal y hobbies.
- Formulario de contacto funcional.
- Validaciones en cliente y servidor.
- Almacenamiento de mensajes en base de datos.
- Login administrativo seguro.
- Visualización de mensajes enviados.
- Uso de contraseñas hasheadas con `password_hash()` y `password_verify()` para la cuenta del administrador.
- Consultas preparadas para evitar inyecciones SQL.

---

## Instrucciones de Uso 

1. Ingrese al sitio web mediante el enlace de hosting proporcionado en la sección inferior.
2. Navegue por la página principal para conocer información personal, intereses y hobbies.
3. Acceda a la sección **Contacto** desde el menú de navegación o desde el botón que se encuentra en la primera sección de la página.
4. Complete el formulario con los siguientes datos:
   - Nombre
   - Correo electrónico
   - Mensaje
5. Presione el botón **Enviar Mensaje**.
6. El sistema validará la información ingresada y mostrará una confirmación cuando el mensaje sea enviado correctamente.
7. Los mensajes enviados quedan almacenados en la base de datos para su posterior consulta.

--- 

### Acceso Administrativo 

1. Desde el menú de navegación, seleccione la opción **Login**.
2. Ingrese las siguientes credenciales:

   **Usuario:** britney_admin

   **Contraseña:** admin369
   
3. Presione el botón **Ingresar**.
4. Una vez autenticado, podrá visualizar los mensajes enviados mediante el formulario de contacto (algunos mensajes fueron borrados porque eran solo de prueba y
   solo extendían más la lista, por eso hay una diferencia en el ID).
6. Para regresar al sitio principal, utilice la opción **Volver al Inicio** disponible en la parte inferior de la página.

---

## Hosting Online

El proyecto se encuentra desplegado en:

[Webney](https://webney.infinityfreeapp.com/index.php)
