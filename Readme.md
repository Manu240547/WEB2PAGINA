# Sistema de Gestión de Productos

Este es un sistema de gestión de productos desarrollado en PHP y MySQL. Permite a los usuarios registrar productos, ver detalles de productos, editar productos y eliminar productos. Además, incluye un sistema de inicio de sesión para garantizar la seguridad de los datos.

## Funcionalidades

El sistema cuenta con las siguientes funcionalidades:

1. **Registro de Usuarios:** Los usuarios pueden registrarse en el sistema proporcionando un nombre de usuario y una contraseña. Las contraseñas se almacenan de forma segura utilizando el algoritmo de hash de contraseña de PHP.

2. **Inicio de Sesión:** Los usuarios pueden iniciar sesión con sus credenciales previamente registradas para acceder a las funcionalidades del sistema.

3. **Registro de Productos:** Los usuarios autenticados pueden agregar nuevos productos al sistema proporcionando detalles como nombre, cantidad, precio y disponibilidad del producto.

4. **Visualización de Productos:** Los usuarios pueden ver detalles de los productos registrados, incluyendo su nombre, cantidad disponible, precio y disponibilidad.

5. **Edición de Productos:** Los usuarios pueden editar la información de los productos existentes, como el nombre, la cantidad, el precio y la disponibilidad.

6. **Eliminación de Productos:** Los usuarios pueden eliminar productos existentes del sistema.

## Requisitos

Para ejecutar este sistema en tu entorno local, necesitarás lo siguiente:

- Servidor web como Apache.
- Servidor de base de datos MySQL.
- PHP instalado en tu sistema.

## Configuración

1. Clona este repositorio en tu máquina local.
2. Importa la base de datos `sistema_productos.sql` en tu servidor MySQL.
3. Configura la conexión a la base de datos en los archivos PHP según sea necesario (`login.php`, `registro.php`, `productos.php`, etc.).
4. Asegúrate de que la extensión mysqli de PHP esté habilitada en tu servidor.

## Uso

1. Abre el archivo `index.html` en tu navegador.
2. Registra un nuevo usuario si aún no tienes una cuenta.
3. Inicia sesión con tu nombre de usuario y contraseña.
4. Explora las diferentes funcionalidades del sistema, como agregar, ver, editar y eliminar productos.

## Contribución

Si deseas contribuir a este proyecto, ¡eres bienvenido! Si tienes ideas para nuevas funcionalidades, corrección de errores o mejoras en el código, no dudes en abrir un problema o enviar una solicitud de extracción.

## Licencia

Este proyecto está bajo la Licencia ManuInc.