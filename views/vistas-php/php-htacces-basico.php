<?php
$raiz = "/";
include_once "../../php/funciones-comunes.php";
$titulo_pagina = 'Php - Htaccess - Básico';
include "../../inc/head.php";
?>
<div class="container is-flex">
  <main class="bd-main section">

    <H1>HTACCESS Básico</H1>


    <div class="tile is-parent">
      <article class="tile is-child">
        <h3>Muestra</h3>

      </article>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child">
        <h2>Directivas</h2>
        <h3>¿Qué son las directivas?</h3>
        <p>Son órdenes mediante se puede configurar un servidor Apache, este se realiza a través de archivos de texto específicos para esto.</p>
        <p></p>

        <h3>Requisitos</h3>
        <p>
          <ul>
            <li>Una directiva por línea. Para indicar que una directiva continúa en la siguiente línea se puede poner una barra invertida \ como último caracter.</li>
            <li>Las directivas no son sensibles a mayúsculas o minúsculas pero muchos argumentos si.</li>
            <li>Los argumentos se separan por espacios en blanco. Si un argumento contiene espacios debe ponerse entre comillas.</li>
            <li>Los comentarios comienzan con el caracter #, y no pueden estar en la misma línea que una directiva.</li>
            <li>Las líneas en blanco y los espacios a principio de línea se ignoran. Sólo sirven para facilitar la lectura de los ficheros.</li>
          </ul>
        </p>
      </article>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child">
        <h3>Deshabilitar listados de directorio</h3>
        <p>La prevención de listados de directorios puede ser muy útil si, por ejemplo, tiene un directorio que contiene archivos importantes '.zip' o para evitar la visualización de sus directorios de imágenes. Alternativamente, también puede ser útil habilitar listados de directorios si no están disponibles en su servidor, por ejemplo, si desea mostrar listados de directorios de sus archivos '.zip' importantes.</p>
        <p>Para evitar listados de directorios, cree un archivo .htaccess siguiendo las instrucciones y guías principales que incluye el siguiente texto:</p>
        <pre class="language-code" rel="code"><code class="language-code">IndexIgnore * </code></pre>
        <p>Las líneas anteriores le indican al servidor web Apache que evite las listas de directorios de directorios y archivos dentro del directorio que contiene el archivo .htaccess. El '*' representa un comodín, esto significa que no mostrará ningún archivo. Es posible evitar listados de solo ciertos tipos de archivos, por ejemplo, puede mostrar listados de archivos '.html' pero no sus archivos '.zip'.</p>
        <p>Para evitar la inclusión de archivos '.zip', cree un archivo .htaccess siguiendo las instrucciones y la guía principales que incluye el siguiente texto:</p>
        <pre class="language-code" rel="code"><code class="language-code">IndexIgnore *.zip </code></pre>
        <p>La línea anterior le dice al servidor web Apache que enumere todos los archivos, excepto los que terminan con '.zip'</p>
        <p>Para evitar que se enumeren varios tipos de archivos, cree un archivo .htaccess siguiendo las instrucciones principales y la guía que incluye el siguiente texto:</p>
        <pre class="language-code" rel="code"><code class="language-code">IndexIgnore *.zip *.jpg *.gif </code></pre>
        <p>La línea anterior le dice al servidor web Apache que enumere todos los archivos, excepto los que terminan con '.zip', '.jpg' o '.gif'.</p>
        <p>Alternativamente, si su servidor no permite listados de directorios y desea habilitarlos, cree un archivo .htaccess siguiendo las instrucciones y guías principales que incluye el siguiente texto:</p>
        <pre class="language-code" rel="code"><code class="language-code"> Options +Indexes</code></pre>

        <p>La línea anterior le dice al servidor web Apache que habilite la lista de directorios dentro del directorio que contiene este archivo .htaccess. También puede revertir esto para deshabilitar las listas de directorios reemplazando el signo más antes del texto 'Índices' con un signo menos. por ejemplo:</p>
        <pre class="language-code" rel="code"><code class="language-code">Options -Indexes</code></pre>

        <p>También puede incluir una descripción predeterminada para las listas de directorios que se muestra en la parte superior de la página colocando un archivo llamado 'HEADER' en el mismo directorio. El contenido de este archivo se muestra antes de la lista de contenidos del directorio. También puede incluir un pie de página, creando un archivo llamado 'README'. El contenido de este archivo se muestra después de la lista de contenidos del directorio.</p>
      </article>
    </div>



  </main>

  <aside class="barra-lateral section">
    <h2>Htaccess info adicional</h2>
  </aside>
</div>
<?php include("../../inc/foot.php"); ?>