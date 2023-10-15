<?php
$raiz = "/";
include_once "../../php/funciones-comunes.php";
$titulo_pagina = 'Php - Htaccess';
include "../../inc/head.php";
?>
<div class="container is-flex">
	<main class="bd-main section">

		<H1>HTACCESS</H1>
		<hr>
		<div class="tile is-parent">
			<article class="tile is-child">
				<h3>¿Qué es el archivo .htaccsess?</h3>
				<p>
					El archivo <em><b>.htaccess</b></em> (HyperText Access o acceso de hipertexto) es un archivo de configuración del software de servidor Apache, que contiene las directivas que definen el comportamiento de Apache. Este archivo indica en todo momento qué puede hacer y qué no el usuario que visita tu web, así como configurar el comportamiento del servidor ante errores de conexión u optimizar la carga de las páginas de tu sitio.
				</p>
				<p>
					Por lo tanto, podríamos decir que este pequeño archivo de apenas unos kilobytes, es la llave maestra que abrirá todas las puertas de tu web. Algo que puede ser tan útil como peligroso y que debe ser configurado y protegido con especial cuidado.
				</p>
				<p>
					No tiene porqué existir un solo archivo .htaccess, sino que puede existir un .htaccess para cada directorio si lo consideras necesario. El comportamiento de este archivo es jerárquico en el árbol de directorios de tu web, por lo que, si tienes un archivo .htaccess en el directorio raíz de la web, las instrucciones que indiques en ese archivo se aplicarán a toda la web. En cambio, si creas un archivo en alguna de las carpetas de tu web, las directrices de ese archivo solo se aplicarán al contenido de esa carpeta y subcarpetas, por lo que no afectará al resto de directorios de tu web.
				</p>
				<p>
					De la misma forma, el archivo .htaccess se utiliza para configurar otros muchos aspectos de tu web; como las tareas de protección, mediante la restricción del acceso a determinadas carpetas de tu servidor o bloqueando el acceso a determinadas direcciones IP; redireccionar a pantallas de error personalizadas, como en el caso de los errores 404; evitar vulnerabilidades y accesos no permitidos, como el listado de los directorios que forman tu web o reducir el tiempo de carga de tu página.
				</p>
			</article>
		</div>
		<div class="tile is-parent">
			<article class="tile is-child">
				<h3>encabezado del articulo</h3>
				<p>contenido</p>
			</article>
		</div>





	</main>

	<aside class="barra-lateral section">
		<h2>Htaccess info adicional</h2>
	</aside>
</div>
<?php include("../../inc/foot.php"); ?>