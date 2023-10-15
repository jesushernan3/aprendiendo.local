<?php
$raiz = "/";
include_once "../../php/funciones-comunes.php";
$titulo_pagina = 'Aprendiendo - Snippest - VS Code';
include "../../inc/head.php";
?>
<div class="container is-flex">
  <main class="bd-main section">
    <H1>Snippets para VS CODE</H1>
    <hr>
    <div class="tile is-parent">
      <article class="tile is-child">
        <h3>Atajo para página entera</h3>
        <pre class="language-js" rel="vscode snippet"><code class="languaje-js">
        &lcub;
          "Boiler para creación de página entera en Aprendiendo": &lcub;
            "prefix": "boilerapr",
            "body": &lsqb;
              "&lt;?php",
              "\\$raiz = \"/\";",
              "include_once \"../../php/funciones-comunes.php\";",
              "\\$titulo_pagina = '$&lcub;1:titulo en la barra de nav&rcub;';",
              "include \"../../inc/head.php\";",
              "?>",
              "&lt;div class=\"container is-flex\">",
                "&lt;main class=\"bd-main section\">",
                  "&lt;H1>$&lcub;2:Titulo encabezado contenido&rcub;&lt;/H1>",
                  "&lt;hr>",
                  "&lt;div class=\"tile is-parent\">",
                    "&lt;article class=\"tile is-child\">",
                      "&lt;h3>$&lcub;3:Encabezado de artículo&rcub;&lt;/h3>",
                      "&lt;p>$4&lt;/p>",
                    "&lt;/article>",
                  "&lt;/div>",
                "&lt;/main>",
                "&lt;aside class=\"barra-lateral section\">",
                  "&lt;h2>Htaccess info adicional&lt;/h2>",
                "&lt;/aside>",
              "&lt;/div>",
            "&lt;?php include(\"../../inc/foot.php\"); ?>"
          &rsqb;,
          "description": "Atajo para la creación de una plantilla de página entera en Aprendiendo.test"
          &rcub;
        &rcub;
        </code></pre>
      </article>
    </div>
  </main>
  <aside class="barra-lateral section">
    <h2>Htaccess info adicional</h2>
  </aside>
</div>
<?php include("../../inc/foot.php"); ?>