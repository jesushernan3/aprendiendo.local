<?php 
$raiz = "../";
include_once("../php/funciones-comunes.php");
$titulo_pagina = 'Variables JS';
include($raiz . "inc/head.php");
?>

<main>

<H1>VARIABLES</H1>

  <h3>Declaración de Variables</h3>
  <p>Hay tres tipos de declaración(creación) de variables en JavaScript.</p>

  <p> <code>var</code> declara la variable, inicializandola opcionalmente a un valor</p>
  
	<p><code><a href="#let">let</a></code> declara una variable local a nivel de bloque, inicializandola opcionalmente a un valor</p>
  
	<p><code><a href="#const">const</a></code> declara una variable local sólo de lectura a nivel de bloque, llamada constante.</p>
  
  <h3>Identificadores (nombres)</h3>

		<ul>
			<li>Nombres pueden contener letras, dígitos, guiones bajos(<code>_</code>) y signo monetario (<code>$</code>).</li>
			<li>Nombres deben comenzar con una letra.</li>
			<li>Nombres pueden comenzar con <code>$</code> y <code>_</code>. </li>
			<li>Nombres son sensibles a Mayúscula/Minúscualas.</li>
			<li>Palabras reservadas (keywords en JavaScript) no pueden ser usadas como nombres.</li>
		</ul>
  
  
  <pre class="language-js" rel="js"><code class="language-js">var nombreVariable;
var nombre_variable;
var nombre33variable;
var $nombreVariable;
var _nombreVariable;</code></pre>


	<h3>Inicializar una variable</h3>

	<p>Si al declarar una variable se le asigna un valor, esto indica que la variable ha sido <strong>inicializada</strong>. <br>
	 En JavaScript no es obligatorio inicializar las variables, ya que se pueden declarar por una parte y asignarles un valor posteriormente.</p>
	<pre class="language-js" rel="js"><code>var variable_1;
variable_1 = 3;</code></pre>

<p>Se pueden declarar varias variables en una sola sentencia de código. Se comienza por alguna de las palabras reservadas como <code>var</code>, <code>let</code>(es6) ó <code>const</code>(es6) una sola vez y los nombres se separan por <strong>coma</strong> <code>,</code>.</p>
	<pre class="language-js" rel="js"><code>var persona = "Pedro Escamoso", cocheNombre = "Ikigai", precio = 33000; </code></pre>



	<h3>Valor de variable = undefined</h3>
	<p>A veces variables son declaradas sin ningún valor. El valor puede ser algo calculado posteriormente, o algo que será introducido luego por el usuario.</p>
	<p>Aún así una variable declarada sin valor tendrá no obstante un valor de <strong>undefined</strong>.</p>
	<pre class="language-js" rel="js"><code>var nombreVariable; // valor de nombreVariable es undefined.
	nombreVariable = "Ernesto" // valor de nombreVariable ahora es de "Ernesto"</code></pre>

	<p><i class="fas fa-exclamation"></i> Tratar de acceder a una variable no declarada resultará e un error de referencia ó <em>ReferenceError</em>.</p>
	<pre class="language-js" rel="js"><code>console.log('The value of c is ' + c); // Uncaught ReferenceError: c is not defined</code></pre>

	<h3>Redeclaración de variables</h3>
	<p>En una redeclaración de variable, ésta no pierde su valor inicial</p>
	<pre class="language-js" rel="js"><code>var nombre = "Dede"; // Valor inicial de nombre es "Dede"
	var nombre; // Redeclaración de variable, mantiene su valor inicial de "Dede"</code></pre>

	

	<h3>Alcance de variables</h3>
	<p>El alcance determina la accesibilidad (visibilidad) de una variable. Hay dos tipos de alcance: <strong>Local</strong> y <strong>Global</strong></p>
	<p>cuando declaras una variable fuera de cualquier función, es llamada una variable <em>global</em> porque está disponible a cualquier parte del código en el documento actual.</p>

	<p><b>Global:</b></p>
	<pre class="language-js" rel="js"><code>var cocheNombre = " Volvo";

// codigo aqui puede usar cocheNombre

	function myFunction() {

  		// codigo aqui puede tambien usar cocheNombre

	}</code></pre>
	
	<p>por otra parte cuando declaras una variable dentro de una función, se dice una variable <em>local</em> porque solamente está disponible dentro de esa función.</p>
	<p><b>Local:</b></p>
	<pre class="language-js" rel="js"><code>// codigo aqui no puede usar cocheNombre

	function myFunction() {

			var cocheNombre = " Volvo"; // codigo aqui puede usar cocheNombre

	}</code></pre>

	<p><strong>Importante</strong>: Antes del lanzamientode ECMAScript 2015 JavaScript no tenía alcance de instrucción de bloque; una variable declarada dentro de un bloque es local para donde se encuentra la función, en este caso el ámbito global porque es donde reside la función, por lo tanto es una variable global.</p>
	<pre class="language-js" rel="js"><code>if (true) {
	var cocheNombre = " Volvo"; // cocheNombre está en el ámbito global, porque el bloque de código reside en el ambito global
}
console.log(cocheNombre); // resutlado será Volvo</code></pre>

	<p>El comportamiento cambia despues del lanzamiento de ECMAScript 2015, cuando se usa <code>let</code> para la declarción de variables</p>
<pre class="language-js" rel="js"><code>if (true) {
	let cocheNombre = " Volvo"; // cocheNombre con let solamente tiene alcance dentro de este bloque de código
}
console.log(cocheNombre); // ReferenceError: y is not defined</code></pre>

	

	<h3 id="let"><code>Let</code>(es6)</h3>
	<p><code>let</code> se usa para declarar variables con un alzance local para el ámbito donde reside la variable. Que a diferencia de <code>var</code> define la variable globalmente, o localmente a una funcion entera al margen del alcance de bloque.</p>
	<pre class="language-js" rel="js"><code>function varTest() {
  var x = 1;
  if (true) {
    var x = 2;  // misma variable!
    console.log(x);  // 2
  }
  console.log(x);  // 2
}

function letTest() {
  let x = 1; // variable en el contexto global
  if (true) {
    let x = 2;  // variable diferente, en el contexto local dentro del bloque de if
    console.log(x);  // 2
  }
  console.log(x);  // 1
}</code></pre>

	<p>En el nivel superior de programas y funciones, <code>let</code>, a diferencia de <code>var</code>, no crea una propiedad en el objeto global. Por ejemplo:</p>
	<pre class="language-js" rel="js"><code>var x = 'global';
let y = 'global';
console.log(this.x); // "global"
console.log(this.y); // undefined</code></pre>

	

	<h3 id="const"><code>Const</code>(es6)</h3>
	<p>Las constantes tienen un ámbito de bloque, al igual que las variables definidas mediante la instrucción <code>let</code>. El valor de una constante no puede cambiar a través de la reasignación y no puede ser redeclarado.</p>
	<p>su declaración crea una constante cuyo alcance puede ser global o local para el bloque en el que se declara. Las constantes globales no se convierten en propiedades del objeto <em>window</em>, a diferencia de las <code>var</code> variables. Se requiere un inicializador para una constante; es decir, debe especificar su valor en la misma declaración en la que se ha declarado (lo cual tiene sentido, dado que no puede modificarse más adelante).</p>
	<pre class="language-js" rel="js"><code>const PI = 3.14;</code></pre>

	<p>Las reglas de alcance para constantes son las mismas que para las variables de bloque de ámbito. Si se omite la palabra clave const, se supone que el identificador representa una variable.</p>

	<p>La declaración <code>const</code> crea una referencia de solo lectura a un valor. No significa que el valor que tiene es inmutable, solo que el identificador de la variable no puede ser reasignado. Por ejemplo, en el caso donde el contenido es un objeto, esto significa que el contenido del objeto (por ejemplo, sus parámetros) puede ser alterado.</p>

</main>

	<aside>
	  <h1>Sidebar stuff</h1>
	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere semper urna, ut pellentesque sem fermentum vel. Mauris luctus quis lectus nec luctus. Donec ut diam et neque eleifend varius sed quis erat. In tempor pharetra felis at fermentum. Maecenas iaculis neque orci, sit amet sodales quam venenatis sit amet. Praesent eu enim nec velit bibendum accumsan a sed tellus. Aenean sed justo a tortor hendrerit imperdiet efficitur nec risus. Morbi gravida mi quis ultrices elementum. Pellentesque fermentum sodales sagittis. Sed vel efficitur nisl. Ut congue sodales sapien. Duis ultricies felis nunc, eu semper est tincidunt eu. Curabitur faucibus luctus eros, eget semper mauris dictum vel.</p>
	</aside>

<?php include($raiz . "inc/foot.php"); ?>