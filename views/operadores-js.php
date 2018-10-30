<?php 
$raiz = "../";
include_once("../php/funciones-comunes.php");
$titulo_pagina = 'Operadores JS';
include($raiz . "inc/head.php");
?>

<main>
  <h1>Operadores</h1>

  <h3>de Asignación</h3>
  <p>El operador básico de asignación es el de igual <code>(=)</code>, que asigna el valor del operando de la derecha al operando de la izquierda. Por ejemplo, <code>x = y</code>, está asignando el valor de <code>y</code> a <code>x</code>.</p>
  <pre class="language-js" rel="js"><code>var nombreVar1 = 3;</code></pre>

  <table class="standard-table">
 <caption>Tabla 3.1 Operadores de asignación</caption>
 <thead>
  <tr>
   <th scope="col">Nombre</th>
   <th scope="col">&nbsp;Operador abreviado</th>
   <th scope="col">Significado</th>
  </tr>
 </thead>
 <tbody>
  <tr>
   <td><a href="#">Operadores de asignación</a></td>
   <td><code>x = y</code></td>
   <td><code>x = y</code></td>
  </tr>
  <tr>
   <td><a href="#">Asignación de adición</a></td>
   <td><code>x += y</code></td>
   <td><code>x = x + y</code></td>
  </tr>
  <tr>
   <td><a href="#">Asignación de sustracción</a></td>
   <td><code>x -= y</code></td>
   <td><code>x = x - y</code></td>
  </tr>
  <tr>
   <td><a href="#">Asignación de multiplicación</a></td>
   <td><code>x *= y</code></td>
   <td><code>x = x * y</code></td>
  </tr>
  <tr>
   <td><a href="#">Asignación de división</a></td>
   <td><code>x /= y</code></td>
   <td><code>x = x / y</code></td>
  </tr>
  <tr>
   <td><a href="#">Asignación de resto</a></td>
   <td><code>x %= y</code></td>
   <td><code>x = x % y</code></td>
  </tr>
  <tr>
   <td><a href="#">Asignación de exponenciación</a></td>
   <td><code>x **= y</code></td>
   <td><code>x = x ** y</code></td>
  </tr>
  <tr>
   <td><a href="#">Asignación de desplazamiento a la izquierda</a></td>
   <td><code>x &lt;&lt;= y</code></td>
   <td><code>x = x &lt;&lt; y</code></td>
  </tr>
  <tr>
   <td><a href=#>Asignación de desplazamiento a la derecha</a></td>
   <td><code>x &gt;&gt;= y</code></td>
   <td><code>x = x &gt;&gt; y</code></td>
  </tr>
  <tr>
   <td><a href="#">Asignación de desplazamiento a la derecha sin signo</a></td>
   <td><code>x &gt;&gt;&gt;= y</code></td>
   <td><code>x = x &gt;&gt;&gt; y</code></td>
  </tr>
  <tr>
   <td><a href="#">Asignación AND binaria</a></td>
   <td><code>x &amp;= y</code></td>
   <td><code>x = x &amp; y</code></td>
  </tr>
  <tr>
   <td><a href="#">Asignación XOR binaria</a></td>
   <td><code>x ^= y</code></td>
   <td><code>x = x ^ y</code></td>
  </tr>
  <tr>
   <td><a href="#">Asignación OR binaria</a></td>
   <td><code>x |= y</code></td>
   <td><code>x = x | y</code></td>
  </tr>
 </tbody>
</table>

</main>

	<aside>
	  <h1>Sidebar stuff</h1>
	  <p>Informacion util en el Sidebar</p>
	</aside>

<?php include($raiz . "inc/foot.php"); ?>