<?php
$raiz = "/";
include_once "../../php/funciones-comunes.php";
$titulo_pagina = 'Atajos - Emmet';
include "../../inc/head.php";
?>
<div class="container is-flex">
  <main class="bd-main section">

    <H1>Atajos VS Code</H1>

    <div class="tile is-parent">
      <article class="tile is-child">
        <h3>General</h3>
        <pre class="language-html" rel="Child:>"><code class="language-html">
          nav>ul>li
              &lt;nav>
                  &lt;ul>
                      &lt;li> &lt;/li>
                  &lt;/ul>
              &lt;/nav> 
        </code></pre>
      </article>
    </div>

  </main>

  <aside class="barra-lateral section">
    <h2>Htaccess info adicional</h2>
  </aside>
</div>
<?php include("../../inc/foot.php"); ?>