# Diversident
🧩 Sitio web completo en WordPress basado en diversident.es, listo para instalar localmente. Incluye todos los archivos del CMS, plugins, imágenes y una base de datos .sql. Ideal como plantilla educativa o punto de partida para nuevos proyectos. ⚠️ Requiere mantener la marca de agua en el footer si se reutiliza.

**Diversident.es – WordPress Locally Installable Clone**

© DjibrilBiel. Todos los derechos reservados.

Este repositorio contiene una copia de la web `diversident.es` implementada en WordPress. Incluye todos los archivos PHP, temas, plugins, imágenes (carpeta `screenshots/`), y el volcado de base de datos MySQL (`diversident.sql`).

---

## 📂 Estructura del repositorio

```
/ (raíz)
├── wp-content/          # Temas y plugins de WordPress
├── wp-includes/         # Núcleo de WordPress
├── wp-admin/            # Panel de administración
├── index.php            # Front controller
├── wp-config.php        # Configuración base (ajustar credenciales)
├── diversident.sql      # Dump de la base de datos MySQL
├── screenshots/         # Capturas de pantalla del sitio en funcionamiento
│   ├── home.png
│   ├── about.png
│   └── contact.png
└── README.md            # Este tutorial
```

---

## 📋 Requisitos previos

1. **Entorno local**: XAMPP, WampServer, MAMP u otro servidor Apache + PHP + MySQL.
2. **PHP**: versión 7.4 o superior.
3. **MySQL**: versión 5.7 o superior.
4. **Git** (opcional si deseas clonar el repositorio).

---

## 🚀 Instalación paso a paso

1. **Clonar o descargar**

   * Con Git:

     ```bash
     git clone https://github.com/DjibrilBiel/Diversident.git
     cd Diversident
     ```
   * O bien descarga el ZIP del repositorio y descomprímelo en la carpeta de tu servidor local (por ejemplo, `C:/xampp/htdocs/diversident/`).

2. **Copiar archivos**

   * Asegúrate de que todos los directorios (`wp-content`, `wp-includes`, `wp-admin`) y archivos (`index.php`, etc.) estén en `htdocs/diversident/`.

3. **Crear base de datos MySQL**

   * Accede a phpMyAdmin o a la interfaz de tu elección.
   * Crea una nueva base de datos llamada `diversident` (o el nombre que prefieras).

4. **Importar volcado SQL**

   * En phpMyAdmin, selecciona la base de datos `diversident` y ve a la pestaña "Importar".
   * Sube el archivo `diversident.sql` y ejecútalo.

5. \*\*Configurar \*\***`wp-config.php`**

   * Renombra `wp-config-sample.php` a `wp-config.php` (si aplica).
   * Abre `wp-config.php` y ajusta las siguientes líneas con las credenciales proporcionadas:

     ```php
     define('DB_NAME', 'diversident');
     define('DB_USER', 'mydiversid3a');
     define('DB_PASSWORD', '963f1DKD');
     define('DB_HOST', 'localhost');
     ```
   * Opcional: genera nuevas *salts* de seguridad en [https://api.wordpress.org/secret-key/1.1/salt/](https://api.wordpress.org/secret-key/1.1/salt/) y pégalos en su sección.

6. **Acceder al sitio**

   * Inicia Apache y MySQL desde tu panel de control (XAMPP, Wamp, etc.).
   * En tu navegador, ve a `http://localhost/diversident/`.

7. **Credenciales de acceso**

   * **WordPress**

     * Usuario: `divers579`
     * Contraseña: `FuEgp9wI`
   * **phpMyAdmin / MySQL**

     * Usuario: `mydiversid3a`
     * Contraseña: `963f1DKD`

---

## 🔒 Licencia y derechos de autor

El uso de este proyecto está sujeto a los siguientes términos:

* © DjibrilBiel. Todos los derechos reservados.
* Para distribuir o usar la plantilla en proyectos propios, **debes mantener la marca de agua en el footer** de tu sitio, similar a la original, indicando:

  ```html
  <footer>
    <!-- Pie de página -->
    <p>DjibrilBiel. Todos los derechos reservados.</p>
    <p>Plantilla WordPress creada por <span style="font-weight: bold;">Biel</span></p>
  </footer>
  ```

---

## 📸 Capturas de pantalla

Las imágenes en screenshots/ muestran:

Página de inicio (home.png): ![Inicio](screenshots/home.png)

Sección "Sobre nosotros" (about.png): ![Sobre nosotros](screenshots/about.png)

Formulario de contacto (contact.png): ![Sobre nosotros](screenshots/about.png)

---

## ⚠️ Notas y buenas prácticas

* **Seguridad**: Este repositorio incluye credenciales en texto claro. No lo uses en entornos de producción.
* **Marca de agua**: Al usar la plantilla, asegúrate de **no eliminar ni ocultar** la marca de agua en el footer.
* **Personalización**: Cambia contraseñas y prefijos de tablas (`$table_prefix`) antes de publicar en un servidor real.

---

¡Listo! Ahora deberías tener una copia funcional de `diversident.es` en tu máquina local.
