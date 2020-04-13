<?php
$raiz = "../../";
include_once('../../php/funciones-comunes.php');
$titulo_pagina = 'sintaxis y reglas';
include($raiz . 'inc/head.php');
?>
<div class="container is-flex">
<main class="bd-main section">

  <h1>Sintaxys & Reglas</h1>

  <hr>

  <div class="tile is-parent">
    <article class="tile is-child">
      <h3>Sensitivo a Mayúscula / Minuscula</h3>
      <p>JavaScript es case-sensitive (distingue mayúsculas y minúsculas) y utiliza el conjunto de caracteres Unicode. Por ejemplo, la palabra Früh (que significa "temprano" en Alemán) puede ser usada como el nombre de una variable.</p>
      
      <pre class="language-js" rel="js"><code class="languege-js">var Früh = "foobar";</code></pre>
      
      <p>Pero, la variable früh no es la misma que Früh porque JavaScript distingue mayúsculas y minúsculas (case-sensitive).</p>
    </article>
    
  </div>

  <div class="tile is-parent">
    <article class="tile is-child">
      <h3>Sentencia</h3>
      <p>En JavaScript, las instrucciones son llamadas Sentencias y son separadas por un punto y coma (;).</p>
      
      <p>Un punto y coma no es necesario al final de una sentencia si está escrita en una sólo línea. Pero si más de una sentencia es necesaria, tienen que estar separadas por un punto y coma. ECMAScript tiene también reglas automáticas para insertar puntos y coma (ASI) al final de las sentencias. (Para más información, ver la referencia detallada sobre gramática léxica (en inglés) de Javascript). Es recomendable, sin embargo, añadir siempre punto y coma al final de sus sentencias, aún cuando no sea estrictamente necesario. Esta práctica evitará efectos secundarios en su código.</p>
    </article>
  </div>

  <div class="tile is-parent">
    <article class="tile is-child">
      <h3>COMENTAR</h3>
      <p>La sintaxis de comentarios es la misma como en C++ y en muchos otros lenguajes:</p>

      <pre class="language-js" rel="js"><code class="language-js">// comentario en una sola línea
/* este es un comentario 
multilínea
*/
/* no puedes, sin embargo, /* anidar comentarios */ SyntaxError */</code></pre>
    </article>
</div>

</main>
  <aside class="barra-lateral section">
  <h3>Sidebar stuff</h3>
  </aside>
</div>
<?php include($raiz . 'inc/foot.php'); ?>