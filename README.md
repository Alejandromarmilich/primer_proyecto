# Ejercicio Integrador – Desarrollo Web Responsive

Este ejercicio integrador tiene como objetivo poner en práctica los conceptos teóricos relacionados con el diseño responsive y los requerimientos de software. Se propone la creación de un pequeño sitio web estático utilizando los estilos y componentes de Bootstrap.

## Ejercicio 1

### Descripción
El ejercicio consiste en desarrollar un sitio web estático que utilice los estilos y componentes de Bootstrap. La temática, contenidos y estilos del sitio son libres, pero se deben cumplir ciertas características.

### Características del Sitio
- El sitio estará compuesto por al menos 3 páginas enlazadas entre sí, con contenidos estáticos como textos e imágenes.
- Será completamente responsivo, adaptándose a pantallas de diferentes tamaños, desde smartphones hasta pantallas de portátiles y escritorios.
- Contará con una barra de navegación principal (navbar) que se contraerá en pantallas pequeñas.
- La barra de navegación incluirá:
  - Un logotipo como imagen.
  - Un buscador (sin funcionalidad real).
  - Elementos como botones, desplegables, sección con fichas o pestañas, tarjetas (cards), carrusel y formulario horizontal.
- Páginas del sitio:
  1. Principal: Presentación del sitio con posibilidad de incluir un carrusel de imágenes y publicidad.
  2. Quiénes Somos: Información sobre los directivos o dueños de la empresa, su surgimiento y equipo.
  3. Acerca de: Detalles sobre la empresa, productos, ubicación (con mapa), dirección y contacto.
  4. Registrarse: Formulario de registro de usuarios con funcionalidad desde el backend.
  5. Login: Formulario de inicio de sesión con funcionalidad desde el backend.

### Estilos
Se utilizará el estilo base definido por Bootstrap 5.3. Si se implementan estilos CSS personalizados, estos deben estar en un archivo separado (hoja de estilos propia) que sea común para todas las páginas del sitio.

### Ejemplos de Aplicación
Se sugiere crear una aplicación web de recetas como ejemplo. La página principal mostraría información importante, una página tendría una receta con pestañas para ingredientes y elaboración, y otra página sería para el envío de recetas con formulario, botones y desplegable de categoría. Se pueden aplicar conceptos similares a otras temáticas como automóviles, mascotas, bicicletas, accesorios de celulares, telefonía, entre otros.

### Recomendación
Dado que se trata de un sitio web estático, partes del código pueden repetirse en varias páginas. Por ejemplo, la barra de menú principal debe ser consistente en todas las páginas. Por lo tanto, se recomienda desarrollar primero estas partes comunes y luego reutilizar el código en las demás páginas.

## Ejercicio 2 - Historia de Usuario para el Login

### Historia de Usuario (HU)
Nombre: Inicio de Sesión en el Sitio Web

Descripción: Como usuario registrado, quiero poder iniciar sesión en el sitio web para acceder a contenido personalizado y funcionalidades adicionales.

Criterios de Aceptación:
1. El sitio web debe tener una página de inicio de sesión claramente visible desde la barra de navegación.
2. La página de inicio de sesión debe incluir campos para ingresar el nombre de usuario o correo electrónico y la contraseña.
3. Se debe proporcionar un botón de "Iniciar Sesión" que enviará los datos ingresados al backend para su autenticación.
4. Si los datos ingresados son válidos, el usuario será redirigido a una página personalizada o al panel de control.
5. Si los datos ingresados son inválidos, se mostrará un mensaje de error indicando que la combinación de nombre de usuario o correo electrónico y contraseña no es correcta.
6. Debe existir un enlace "Olvidé mi contraseña" que llevará a una página para restablecer la contraseña en caso de que el usuario lo necesite.