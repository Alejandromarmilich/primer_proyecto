Integrantes: Guillermo García. Alejandro Herrera. Juan Ramón Verón

# Ejercicio Integrador – Desarrollo Web responsive
Para poner en práctica los conceptos teóricos vistos sobre diseño responsive y requerimientos de software se propone:
## Ejercicio 1
La creación de un pequeño sitio Web estático que use los estilos y componentes vistos de Bootstrap.
Nota: Se puede retomar la actividad integradora previa.
La temática, contenidos y estilos del sitio son libres, pero deberá tener al menos las siguientes características:

- El sitio estará formado por al menos 3 páginas enlazadas entre sí con contenidos estáticos (textos, imágenes).
- Ser completamente responsiva, de forma que se adapte tanto a pantallas extra pequeñas de smartphone como a tablets y pantallas más grandes de portátiles y de escritorio.
- Tener una barra de navegación principal (navbar) que se contraiga cuando la pantalla sea pequeña.

Esta barra tendrá los siguientes enlaces a:
- una imagen como logotipo
- un buscador (aunque no sea funcional).
- Contener los siguientes elementos (un ejemplo de cada uno en alguna de las páginas del sitio web):
  1. botones
  2. un desplegable
  3. una sección con fichas o pestañas, o tarjetas (cards)
  4. un carrusel
  5. un formulario horizontal
  6. Páginas: Principal – Quiénes Somos – Acerca de – Registrarse y Login.

### Principal
Presentación del sitio web puede contener un carrusel con imágenes de la empresa y publicidad de esta.

### Quiénes Somos
Referente a los directivos o dueños de la empresa. Explicación del surgimiento de esta. Personal que la integra. Acá pueden utilizar (Cards) para presentar con una imagen los integrantes o el integrante de la empresa.

### Acerca de
Se refiere a la empresa, lo que comercializa o produce, dónde está ubicada (puede ir un mapa), domicilio y teléfono. Se pueden agregar en las páginas otros componentes de Bootstrap como (cards, botones, jumbotron, entre otros).

### Registrarse
Deberá ser un formulario de registro del Usuario donde se le dará funcionalidad desde el BackEnd.
(Ver ejemplo en la página de Bootstrap).

### Login
Un formulario de Logueo que tendrá funcionalidad en el BackEnd.
(Ver ejemplo en la página de Bootstrap).

El estilo base a utilizar será el que define Bootstrap 5.3, si se definen estilos CSS personalizados tendrán que estar en un archivo separado (hoja de estilos propia), y que será común para todas las páginas del sitio.

Un posible ejemplo de una aplicación Web que pueden realizar sería, por ejemplo, una Web de recetas. Esta podría tener una página principal con la información más importante, una página con una receta de ejemplo (aquí se podrían utilizar las fichas o pestañas para cambiar entre elaboración e ingredientes, los cuales podrían estar en una tabla) y otra página para el envío de recetas (con un formulario horizontal, botones para enviar y cancelar, y un desplegable para elegir la categoría).

De forma similar se podría crear la web sobre automóviles, mascotas, bicicletas, accesorios de celulares, telefonía, etc.

Nota: al ser una web estática se puede repetir partes del código en todas las páginas, por ejemplo, la barra de menú principal tendrá que ser igual en todas las páginas. Por este motivo se recomienda realizar primero estas partes y una vez probadas, reutilizar el código en el resto de las páginas.

## Ejercicio 2
Construir la Historia de Usuario correspondiente al Login (punto 5 del ejercicio anterior). Tener en cuenta Nombre de la HU; descripción y criterios de aceptación (mínimo 3).

HISTORIA DE USUARIO
Título: 5 - Inicio de Sesión para el Login a la Página de Venta de Celulares
Como usuario registrado en la página de venta de celulares
Deseo poder iniciar sesión en mi cuenta para acceder a las funcionalidades y realizar compras de manera segura y personalizada.
Criterios de Aceptación:
1.	Interfaz de Inicio de Sesión: La página de inicio de sesión debe presentar un formulario de usuario y contraseña claramente visible y accesible.
2.	Campos de Inicio de Sesión: El formulario de inicio de sesión debe tener campos separados para el nombre de usuario (o correo electrónico) y la contraseña.
3.	Validación de Datos: Si el usuario intenta enviar el formulario de inicio de sesión con campos vacíos o incorrectos, se debe mostrar un mensaje de error indicando los campos requeridos o datos inválidos.
4.	Inicio de Sesión Exitoso: Cuando el usuario ingrese correctamente sus credenciales, deberá ser redirigido a la página de inicio de la plataforma de venta de celulares.
5.	Recuperación de Contraseña: Debe proporcionarse un enlace de "¿Olvidaste tu contraseña?" que permita a los usuarios restablecer su contraseña en caso de que la hayan olvidado.
6.	Cierre de Sesión: Una vez que el usuario haya iniciado sesión, debe haber un botón o enlace de "Cerrar sesión" claramente visible en todas las páginas para que puedan cerrar su sesión de manera segura.
7.	Mensajes de Error Claros: En caso de que ocurra un error durante el proceso de inicio de sesión (por ejemplo, debido a una contraseña incorrecta), se debe mostrar un mensaje de error claro que indique el problema y cómo solucionarlo.
8.	Seguridad: La página de inicio de sesión debe utilizar medidas de seguridad, como cifrado de contraseñas, para proteger los datos sensibles de los usuarios.
9.	Recuerda Sesión: Debe haber una opción para "Recordar sesión" que permita a los usuarios mantenerse conectados en el mismo dispositivo sin tener que iniciar sesión repetidamente.
10.	Diseño Responsivo: La página de inicio de sesión debe ser fácilmente accesible y funcional en dispositivos móviles y de escritorio.

Integrantes del grupo:
•	García, Guillermo Juan José;
•	Herrera, David Alejandro;
•	Verón, Juan Ramón.
