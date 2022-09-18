# Simple Ticket
Ejercicio CRUD realizado en PHP dentro del módulo UF1844 Programación en Entorno Servidor del Certificado de Profesionalidad de Desarrollo de Aplicaciones Web 🧰

## Índice
1. [Especificaciones](#especificaciones)
2. [Información previa](#informacion_previa)
3. [Comenzando](#comenzando)
4. [Funcionamiento](#funcionamiento)
5. [Lenguajes utilizados](#lenguajes)
6. [Frameworks utilizados](#frameworks)
7. [Construido con](#construido)
8. [Autor](#autor)


## Especificaciones <a name="especificaciones"></a>

Ejercicio que debe cubrir las siguientes especificaciones:

- Realizar un CRUD en PHP + MySQL con una base de datos a elegir.

## Información previa ✅ <a name="informacion_previa"></a>

![image](https://user-images.githubusercontent.com/101201349/190729993-472d3f9d-8eab-4b76-97f6-cb72350bd512.png)

**Simple Ticket** es una aplicación que se encarga de gestionar los tickets de gastos que tengamos. Para ello, usará tres tablas principales:

 - **Ticket**: gestiona los tickets.
 - **Proveedor**: gestiona las personas y empresas proveedoras de los servicios que generan los tickets.
 - **Concepto**: gestiona los diferentes conceptos en los que agrupar los tickets.

## Comenzando 🚀 <a name="comenzando"></a>

El proyecto ya está listo para ejecutar, únicamente hay que inicializar la base de datos. Para ello, dentro de la carpeta `assets` está el archivo `simpleticket.sql` para importar desde el gestor de bases de datos. Con ello nos inicializa la base de datos e inserta algunos datos de ejemplo para trabajar con la aplicación.

Para arrancar la aplicación, previamente deberemos inicializar un servidor Apache y el gestor de base de datos (por ejemplo Xampp con Apache + MySQL).

## Funcionamiento 🔨 <a name="funcionamiento"></a>

Tenemos tres páginas principales:

![image](https://user-images.githubusercontent.com/101201349/190728794-23220d00-9225-4b5e-a24a-f760945659d3.png)
-   **Tickets**:
    - Mostrará un listado con los tickets que tenemos generados.
    - En esta misma ventana podremos dar de alta un nuevo ticket, modificar 🖍alguno de los tickets almacenados o bien eliminar 🗑 alguno de ellos.
    - Si se pulsa en las cabeceras de las columnas, reordena el listado por dicha columna. Esta funcionalidad es genérica para toda la aplicación.

![image](https://user-images.githubusercontent.com/101201349/190729538-12f470ac-8eee-449b-ab21-9ffcfe770fd7.png)

-   **Proveedores**:
    - En esta ventana tendremos un listado con los proveedores almacenados.
    - Podremos añadir, modificar 🖍 o eliminar 🗑 proveedores directamente desde esta misma ventana.
    - No es necesario incluir el código del registro ya que éste es autonumérico en la definición de la base de datos.
    - Las columnas se reordenan al seleccionar la cabecera correspondiente.

![image](https://user-images.githubusercontent.com/101201349/190729839-a25e4fd4-e835-4da9-9b48-2f3d4be03a58.png)
-   **Conceptos**:
    - En esta ventana tendremos un listado con los conceptos en los que queremos clasificar los tickets.
    - Podremos añadir, modificar 🖍 o eliminar 🗑 conceptos desde esta misma ventana.
	- No es necesario incluir el código del registro ya que éste es autonumérico en la definición de la base de datos.
    - Las columnas se reordenan al seleccionar la cabecera correspondiente.


## Lenguajes utilizados: <a name="lenguajes"></a>

<img src="https://img.shields.io/badge/-HTML5-014267?logo=html5&style=for-the-badge"> <img src="https://img.shields.io/badge/-CSS3-014267?logo=css3&style=for-the-badge"> <img src="https://img.shields.io/badge/-PHP-014267?logo=php&style=for-the-badge">


## Frameworks utilizados: <a name="frameworks"></a>
<img src="https://img.shields.io/badge/-Bulma-015a8d?logo=bulma&style=for-the-badge">


## Construido con: <a name="construido"></a>
<img src="https://img.shields.io/badge/-Visual Studio Code-0273b4?logo=visualstudiocode&style=for-the-badge">


## Autor ✒️  <a name="autor"></a>

-   **Juanma Gutiérrez** - [Juanma-Gutierrez](https://github.com/Juanma-Gutierrez)
