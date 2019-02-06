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
  
  <p>Después de esas etiquetas, puede cargar sus archivos JavaScript que usan React, o incluso JavaScript en línea en una etiqueta de script:</p>
  <pre class="language-html" rel="html"><code class="language-html">&ltscript src="app.js">&lt/script>

  &lt!-- or -->

  &ltscript>
  //my app
  &lt/script></code></pre>

  <p>Para usar JSX necesitas un paso adicional: cargar Babel</p>
  <pre class="language-html" rel="html"><code class="language-html">&ltscript src="https://unpkg.com/babel-standalone@6/babel.min.js">&lt/script></code></pre>

  <p>y cargue sus scripts con el <code>texto/babel</code> MIME type:</p>
  <pre class="language-html" rel="html"><code class="language-html">&ltscript src="app.js" type="text/babel">&lt/script></code></pre>

  <p>Ahora puede agregar JSX en su archivo app.js:</p>
  <pre class="language-js" rel="js"><code class="language-js">const Button = () => {
  return &ltbutton>Click me!&lt/button>
}

ReactDOM.render(&ltButton />, document.getElementById('root'))</code></pre>

<p>Comenzar de esta manera con las etiquetas de script es bueno para crear prototipos y permite un inicio rápido sin tener que configurar un flujo de trabajo complejo.</p>

   

</main>

<aside>

</aside>

<?php include($raiz . "inc/foot.php"); ?>