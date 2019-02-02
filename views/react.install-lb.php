<?php 
$raiz = "../";
include_once("../php/funciones-comunes.php");
$titulo_pagina = 'React JS - Instalacion';
include($raiz . "inc/head.php");
?>

<main>
  <h1>React JS - Instalación</h1>
  <h3>Cómo instalar React en tu computadora de desarrollo</h3>
  <p>
  ¿Cómo instalar React?
  </p>

<p>
React es una biblioteca, por lo que decir instalar puede sonar un poco raro. Tal vez la configuración es una palabra mejor, pero entiendes el concepto.</p>

<p>
Hay varias formas de configurar React para que pueda usarse en su aplicación o sitio.
</p>

<h3>Cargar React directamente en la página web.</h3>
<p>
La más simple es agregar el archivo React JavaScript en la página directamente. Esto es mejor cuando su aplicación React interactúa con los elementos presentes en una sola página y no controla realmente todo el aspecto de navegación.
</p>

<p>
En este caso, agrega 2 etiquetas de secuencia de comandos al final de la etiqueta de <code>body</code>:
</p>
<pre class="language-js" rel="js"><code class="language-js">&lthtml>
  ...
  &ltbody>
    ...
    &lscript
      src="https://cdnjs.cloudflare.com/ajax/libs/react/16.7.0-alpha.2/umd/react.development.js"
      crossorigin
    >&lt/script>
    &ltscript
      src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/16.7.0-alpha.2/umd/react-dom.production.min.js"
      crossorigin
    >&lt/script>
    &lt/body>
    &lt/html></code></pre>
   

</main>

<aside>

</aside>

<?php include($raiz . "inc/foot.php"); ?>