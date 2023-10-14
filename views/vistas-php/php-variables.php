<?php
$raiz = "../../";
include_once("../../php/funciones-comunes.php");
$titulo_pagina = 'Variables JS';
include("../../inc/head.php");
?>
<div class="container is-flex">
	<main class="bd-main section">

		<H1>VARIABLES PHP</H1>
		<hr>

		<div class="tile is-parent">
			<article class="tile is-child">
				<h3>¿Qué es una Variable?</h3>
				<p>Básciamente es un contenedor para guardar en memoria pedazos de información</p>

				<h3>Declaración de Variables</h3>
				<p>En PHP, una variable comienza con el signo $, seguido del nombre de la variable:</p>
				<p>Cuando asignas un valor de texto a una variable, asegurarse de poner <code>""</code>alrededor del valor</p>
				<pre class="language-php" rel="php"><code class="language-php">$txt= "Valor de la Variable";
					$num = 5;
					$num_decimal = 10.5;</code></pre>
			</article>
		</div>

		<div class="tile is-parent">
			<article class="tile is-child">
				<h3>Reglas para variables PHP (nombres)</h3>
				<ul>
					<li>Nombres deben comenzar con el signo <code>$</code>, seguido por el nombre de la variable.</li>
					<li>Nombres deben comenzar con una letra o guión bajo <code>_</code>.</li>
					<li>Nombres no deben comenzar con un número.</li>
					<li>Nombres de variables solo pueden contener carácteres alfanúmerricos(A-z. 0-9, y _).</li>
					<li>Nombres son sensibles a Mayúscula/Minúscualas.</li>
				</ul>
			</article>
		</div>

		<div class="tile is-parent">
			<article class="tile is-child">
				<h3>Salida a Variables</h3>
				<p>la declaración <code>echo</code> de PHP a menudo se usa para enviar datos a la pantalla.</p>
				<pre class="language-php" rel="php"><code class="language-php">&lt;?php
				  $texto = "Aprendiendo.com" 
				  echo "me encanta" . $texto . "!"; // Resultado: "me encanta Aprendiendo.com!"
				?></code></pre>
			</article>
		</div>
	</main>

	<aside class="barra-lateral section">
		<h1>Variables Teorias</h1>
		<p>Las variables en JavaScript no tienen ningún tip
			o adjunto. Una vez que asigna un tipo literal específico a una variable, más tarde puede reasignar la variable para alojar cualquier otro tipo, sin errores de tipo ni ningún problema.
		</p>
		<p>
			Esta es la razón por la que a veces se hace referencia a JavaScript como "sin tipo".
		</p>
		<p>
			Se debe declarar una variable antes de poder usarla. Hay 3 formas de hacer esto, usando var, let o const, y esas 3 formas difieren en cómo puedes interactuar con la variable más adelante.
		</p>
	</aside>
</div>
<?php include("../../inc/foot.php"); ?>