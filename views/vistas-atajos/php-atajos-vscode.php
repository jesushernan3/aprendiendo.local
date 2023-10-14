<?php
$raiz = "/";
include_once "../../php/funciones-comunes.php";
$titulo_pagina = 'Atajos - VS Code';
include "../../inc/head.php";
?>
<div class="container is-flex">
  <main class="bd-main section">

    <H1>Atajos VS Code</H1>

    <div class="tile is-parent">
      <article class="tile is-child">
        <h3>General</h3>

      </article>
    </div>

    <div class="tile is-parent">
      <article class="tile is-child">
        <h3>Edicón Básica</h3>
        <p>
          <table class="table">
            <tr>
              <td>Ctrl+Shift+K</td>
              <td>Borrar linea</td>
            </tr>
            <tr>
              <td>Ctrl+Enter</td>
              <td>Insertar linea abajo</td>
            </tr>
            <tr>
              <td>Ctrl+Shift+Enter</td>
              <td>Insertar linea arribao</td>
            </tr>
            <tr>
              <td>Ctrl+Shift+\</td>
              <td>Jump to matching bracket</td>
            </tr>
            <tr>
              <td>Ctrl+Ñ</td>
              <td>Conmutar linea a comentario</td>
            </tr>
            <tr>
              <td>Shift+Alt+A</td>
              <td>Conmutar comentario en el lugar de cursor</td>
            </tr>
            <tr>
              <td>Alt+Z</td>
              <td>Conmutar ajuste de linea</td>
            </tr>
          </table>

        </p>
      </article>
    </div>



  </main>

  <aside class="barra-lateral section">
    <h2>Htaccess info adicional</h2>
  </aside>
</div>
<?php include("../../inc/foot.php"); ?>