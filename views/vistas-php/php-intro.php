<?php
$raiz = "../../";
include_once("../../php/funciones-comunes.php");
$titulo_pagina = 'PHP Introducción';
include("../../inc/head.php");
?>
<div class="container is-flex">
  <main class="bd-main section">

    <H1>INTRODUCCIÓN</H1>
    <hr>

    <div class="tile is-parent">
      <article class="tile is-child">
        <h3>¿Qué es PHP?</h3>
        <p>Lenguaje de programación en el cual la información se precrocesa en el servidor del hosting y devuelve una respuesta al usuario. La sigla PHP es un acrónimo recursivo porque la primer letra vuelve a decir PHP y significa "PHP Hypertext Pre-processor</p>
        <br>
        <ul>
          <li>Lenguaje de programación server-side.</li>
          <li>Pensado estrictamente para el desarrollo web.</li>
          <li>Orientado a servidores UNIX/LINUX.</li>
          <li>Tiene una serie de librerias (basadas en funciones) para manipular bases de datos MySQL.</li>
          <li>Se parece mucho a JavaScript.</li>
        </ul>

        <h3>¿Cómo funciona PHP?</h3>
        <p>Cuando hacemos una petición web y llegamos al servidor, sea el Apache o IIS (Internet Server de Microsoft) se resuelven una serie de preguntas:</p>
        <ul>
          <li>Si el dominio es correcto.</li>
          <li>En quésubcarpeta están los archivos</li>
          <li>Si se pidió un documento o se muestra uno por default (generalmente el index).</li>
          <li>La extensión que tiene el archivo a demostrar</li>
        </ul>

      </article>
    </div>

    <div class="tile is-parent">
      <article class="tile is-child">
        <h3>Muestra</h3>

      </article>
    </div>

    <div class="tile is-parent">
      <article class="tile is-child">
        <h3>Salida a Variables</h3>
        <p>la declaración <code>echo</code> de PHP a menudo se usa para enviar datos a la pantalla.</p>
        <pre class="language-php" rel="php"><code class="langu;age-php">&lt;?php
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