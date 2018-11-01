<?php 
$raiz = "../";
include_once("../php/funciones-comunes.php");
$titulo_pagina = 'Comentar JS';
include($raiz . "inc/head.php");
?>

<main>
  <h1>COMENTAR</h1>
  <pre class="language-js" rel="js"><code class="language-js">// comentario en una sola línea
 
 /* este es un comentario 
    multilínea
  */
  
 /* no puedes, sin embargo, /* anidar comentarios */ SyntaxError */</code></pre>
</main>

<aside>

</aside>

<?php include($raiz . "inc/foot.php");?>