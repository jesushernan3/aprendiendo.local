<?php
$raiz = "/";
include_once "../../php/funciones-comunes.php";
$titulo_pagina = 'Php - Htaccess';
include "../../inc/head.php";
?>
<div class="container is-flex">
	<main class="bd-main section">

		<H1>HTACCESS</H1>

		<div class="tile is-parent">
			<article class="tile is-child">
				<h3>¿Qué es el archivo .htaccsess?</h3>
				<p>El archivo <em>.<b>htaccess</b></em> es para modificar su configuración de Apache en un nivel por dominio e incluso por nivel de directorio. Muchos sistemas de administración de contenido dependen de archivos .htaccess para configurar su sitio. También puede crear su propio archivo .htaccess manualmente.</p>
				<p>Htaccess es la abreviatura de Hypertext Access. </p>
				<p class="nota"><b>nota</b>: debería evitar estos archivos si tiene acceso al fichero de configuración principal de <em>httpd</em>. <br>
					Usar este tipo de ficheros ralentiza su servidor Apache http. Cualquier directiva que pueda incluir en un fichero .htaccess estará mejor configurada dentro de una sección Directory, tendrá el mismo efecto y mejor rendimiento.</p>
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