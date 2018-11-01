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

  <h3>de Comparacion</h3>
  <p>Un operador de comparación compara sus operandos y devuelve un valor lógico en función de si la comparación es verdadera (<code>true</code>) o falsa (<code>false</code>).</p>

  <pre class="language-js" rel="js"><code class="language-js">var var1 = 3;
var var2 = 4</code></pre>

<table class="standard-table">
 <caption>Tabla 3.2 Operadores de comparación</caption>
 <thead>
  <tr>
   <th scope="col">Operador</th>
   <th scope="col">Descripción</th>
   <th scope="col">Ejemplos devolviendo <code>true</code></th>
  </tr>
 </thead>
 <tbody>
  <tr>
   <td><a href="#">Igualdad</a> (<code>==</code>)</td>
   <td>Devuelve <code>true</code>&nbsp;si ambos operandos son iguales.</td>
   <td><code>3 == var1</code><br>
       <code>"3" == var1</code><br>
       <span style="">3 == "3"</span>
   </td>
  </tr>
  <tr>
   <td><a href="#">Desigualdad</a> (<code>!=</code>)</td>
   <td>Devuelve <code>true</code>&nbsp;si ambos operandos no son iguales.</td>
   <td><code>var1 != 4<br>
    var2 != "3"</code></td>
  </tr>
  <tr>
   <td><a href="#">Estrictamente iguales</a> (<code>===</code>)</td>
   <td>Devuelve <code>true</code>&nbsp;si los operandos son igual y tienen el mismo tipo.
   </td>
   <td><code>3 === var1</code></td>
  </tr>
  <tr>
   <td><a href="#">Estrictamente desiguales </a>(<code>!==</code>)</td>
   <td>Devuelve <code>true</code>&nbsp;si los operandos no son iguales y/o no son del mismo tipo.
   </td>
   <td><code>var1 !== "3"<br>
    3 !== "3"</code></td>
  </tr>
  <tr>
   <td><a href="#">Mayor que</a> (<code>&gt;</code>)</td>
   <td>Devuelve <code>true</code>&nbsp;si el operando de la izquierda es mayor&nbsp;que el operando de la derecha.</td>
   <td><code>var2 &gt; var1<br>
    "12" &gt; 2</code></td>
  </tr>
  <tr>
   <td><a href="#">Mayor o igual que</a> (<code>&gt;=</code>)</td>
   <td>Devuelve <code>true</code>&nbsp;si el operando de la izquierda es mayor o igual que el operando de la derecha.</td>
   <td><code>var2 &gt;= var1<br>
    var1 &gt;= 3</code></td>
  </tr>
  <tr>
   <td><a href="#">Menor que</a> (<code>&lt;</code>)</td>
   <td>Devuelve <code>true</code>&nbsp;si el operando de la izquierda es menor que el operando de la derecha.</td>
   <td><code>var1 &lt; var2<br>
    "2" &lt; 12</code></td>
  </tr>
  <tr>
   <td><a href="#">Menor o igual que</a> (<code>&lt;=</code>)</td>
   <td>Devuelve <code>true</code>&nbsp;si el operando de la izquierda es menor o igual que el operando de la derecha.</td>
   <td><code>var1 &lt;= var2<br>
    var2 &lt;= 5</code></td>
  </tr>
 </tbody>
</table>

  <h3>de Arimética</h3>
  <p>Los operadores aritméticos toman los valores númericos (tanto literales como variables) de sus operandos y devuelven un único resultado numérico. Los operadores aritméticos estandar son la suma (<code>+</code>), la resta (<code>-</code>), la multiplicación (<code>*</code>) y la división (<code>/</code>). </p>

  <table class="standard-table">
 <caption>Tabla 3.3 Operadores aritméticos</caption>
 <thead>
  <tr>
   <th scope="col">Operador</th>
   <th scope="col">Descripción</th>
   <th scope="col">Ejemplo</th>
  </tr>
 </thead>
 <tbody>
  <tr>
   <td><a href="#">Resto </a>(<code>%</code>)</td>
   <td>
    <p>Operador binario correspondiente al módulo de una operación. Devuelve el resto de la división de dos operandos.</p>
   </td>
   <td><code>12 % 5</code> devuelve <code>2</code>.</td>
  </tr>
  <tr>
   <td><a href="#">Incremento</a> (<code>++</code>)</td>
   <td>
    <p>Operador unario. Incrementa en una unidad al operando. Si es usado antes del operando <code>(++x)</code> devuelve el valor del operando después de añadirle 1 y si se usa después del operando <code>(x++)</code> devuelve el valor de este antes de añadirle 1.</p>
   </td>
   <td>Si <code>x</code> es <code>3</code>, entonces <code>++x</code> establece <code>x</code> a <code>4</code> y devuelve <code>4</code>, mientras que <code>x++</code> devuelve <code>3</code> y, solo después de devolver el valor, establece <code>x</code> a <code>4</code>.</td>
  </tr>
  <tr>
   <td><a href="#">Decremento</a> (<code>--</code>)<br>
    &nbsp;</td>
   <td>
    <p>Operador unario. Resta una unidad al operando. Dependiendo de la posición con respecto al operando tiene el mismo comportamiento que el operador de incremento.</p>
   </td>
   <td>Si <code>x</code> es <code>3</code>, entonces <code>--x</code> establece <code>x</code> a <code>2</code> y devuelve <code>2</code>, mientras que <code>x--</code> devuelve <code>3</code> y, solo después de devolver el valor, establece <code>x</code> a <code>2</code>.</td>
  </tr>
  <tr>
   <td><a href="#">Negación Unaria</a> (<code>-</code>)</td>
   <td>
    <p>Operación unaria. Intenta convertir a número al operando y devuelve su forma negativa.</p>
   </td>
   <td>
    <p><code>-"3"</code> devuelve <code>-3</code>.<br>
     <code>-true</code> devuelve <code>-1</code>.</p>
   </td>
  </tr>
  <tr>
   <td><a href="#">Unario positivo </a>(<code>+</code>)</td>
   <td>Operación unaria. Intenta convertir a número al operando.</td>
   <td><code>+"3"</code> devuelve <code>3</code>.<br>
    <code>+true</code> devuelve <code>1</code>.</td>
  </tr>
  <tr>
   <td><a href="#">Exponenciación</a> (<code>**</code>)&nbsp;<span title="This is an experimental API that should not be used in production code."><i class="icon-beaker"> </i></span></td>
   <td>Calcula la potencia de la base al valor del exponente. Es equivalente a <code>base<sup>exponente</sup></code></td>
   <td><code>2 ** 3</code> devuelve <code>8</code>.<br>
    <code>10 ** -1</code> devuelve <code>0.1</code>.</td>
  </tr>
 </tbody>
</table>

  <h3>de Lógica</h3>
  <p>Los operadores lógicos son comúnmente utilizados con valores booleanos; estos operadores devuelven un valor booleano. Sin embargo, los operadores <code>&&</code> y <code>||</code> realmente devuelven el valor de uno de los operandos, asi que si estos operadores son usados con valores no booleanos, podrían devolveran un valor no booleano</p>

<table class="standard-table">
 <caption>Tabla 3.6 Operadores lógicos</caption>
 <thead>
  <tr>
   <th scope="col">Operador</th>
   <th scope="col">Uso</th>
   <th scope="col">Descripción</th>
  </tr>
 </thead>
 <tbody>
  <tr>
   <td style="vertical-align: top;"><a href="#">AND Lógico </a><code>(&amp;&amp;)</code></td>
   <td style="vertical-align: top;"><code>expr1 &amp;&amp; expr2</code></td>
   <td style="vertical-align: top;">
    <p>Devuelve <code>expr1 </code>si puede ser convertido a false de lo contrario devuelve <code>expr2. </code>Por lo tanto, cuando se usa con valores booleanos, <code>&amp;&amp; </code>devuelve <code>true</code> si ambos operandos son <code>true</code>, en caso contrario devuelve <code>false</code>.</p>
   </td>
  </tr>
  <tr>
   <td style="vertical-align: top;"><a href="#">OR Lógico</a><code> (||)</code></td>
   <td style="vertical-align: top;"><code>expr1 || expr2</code></td>
   <td style="vertical-align: top;">
    <p>Devuelve <code>expr1 </code>si puede ser convertido a <code>true</code> de lo contrario devuelve&nbsp;<code>expr2. </code>Por lo tanto, cuando se usa con valores booleanos, <code>||</code>&nbsp;devuelve <code>true</code> si alguno de los operandos es <code>true</code>, o <code>false</code> si ambos son <code>false</code>.</p>
   </td>
  </tr>
  <tr>
   <td style="vertical-align: top;"><a href="#">NOT Lógico</a><code> (!)</code></td>
   <td style="vertical-align: top;"><code>!expr</code></td>
   <td style="vertical-align: top;">
    <p>Devuelve <code>false</code> si su operando&nbsp;puede ser convertido a <code>true</code>, en caso contrario, devuelve <code>true</code>.</p>
   </td>
  </tr>
 </tbody>
</table>

  <h3>de Caracteres</h3>
  <p>El operador de concatenación (<code>+</code>) uno dos valores de tipo string. <br>
  Ej.
  </p>

  <pre class="language-js" rel="js"><code class="language/js">console.log("mi " + "string"); // lanza el String "mi string" en la consola.</code></pre>

  <p>La versión acortada de este operador de asignación <code>(+=)</code> puede ser usada también para concatenar cadenas de caracteres. <br>
  Ej.</p>
  <pre class="language-js" rel="js"><code class="language/js">var mistring = "alfa";
mistring += "beto"; // devuelve "alfabeto" y asigna este valor a "mistring".</code></pre>

  <h3>de Condición</h3>
  <p>Es una especie de <code>if</code> de una línea sola</p>
  <pre class="language-js" rel="js"><code class="language-js">condición ? valor1 : valor2</code></pre>

  <p>Si la condición es <code>true</code>, el operador tomará el <code>valor1</code>, de lo contrario tomará el <code>valor2</code>. Puedes usar el operador condicional en cualquier lugar que use un operador estándar. <br>
  Ej.</p>
  <pre class="language-js" rel="js"><code class="language-js">var estado = (edad >= 18) ? "adulto" : "menor";</code></pre>
  <p>Esta sentencia asigna el valor <code>adulto</code> a la variable <code>estado</code> si edad es mayor o igual a <code>18</code>, de lo contrario le asigna el valor <code>menor</code>.</p>

  <h3>de Coma</h3>
  <p>El operador coma (<code>,</code>) simplemente evalúa ambos operandos y retorna el valor del último. Este operador es ante todo utilizado dentro de un ciclo <code>for</code>, permitiendo que diferentes variables sean actualizadas en cada iteración del ciclo.</p>
  <p>Por ejemplo, si a es un Array bi-dimensional con 10 elementos en cada lado, el siguiente código usa el operador coma para actualizar dos variables al mismo tiempo. El código imprime en la consola los valores correspondientes a la diagonal del Array:</p>
  <pre class="language-js" rel="js"><code class="language-js">for (var i = 0, j = 9; i <= j; i++, j--)
  console.log("a[" + i + "][" + j + "]= " + a[i][j]);</code></pre>




</main>

	<aside>
	  <h1>Sidebar stuff</h1>
	  <p>Informacion util en el Sidebar</p>
	</aside>

<?php include($raiz . "inc/foot.php"); ?>