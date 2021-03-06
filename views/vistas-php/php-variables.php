<?php 
$raiz = "../../";
include_once("../../php/funciones-comunes.php");
$titulo_pagina = 'Variables JS';
include("../../inc/head.php");
?>
<div class="container is-flex">
<main class="bd-main section">

	<H1>VARIABLES PHP</H1>
	<hr>

		<div class="tile is-parent"> 
			<article class="tile is-child">
				<h3>¿Qué es una Variable?</h3>
					<p>Básciamente es un contenedor para guardar en memoria pedazos de información</p>
				
				<h3>Declaración de Variables</h3>
					<p>En PHP, una variable comienza con el signo $, seguido del nombre de la variable:</p>
					<p>Cuando asignas un valor de texto a una variable, asegurarse de poner <code>""</code>alrededor del valor</p>
				
					<pre class="language-php" rel="php"><code class="language-php">$txt= "Valor de la Variable";
					num = 5;
					num_decimal = 10.5;</code></pre>
			</article>
		</div>

		<div class="tile is-parent">
			<article class="tile is-child">
				<h3>Reglas para variables PHP (nombres)</h3>
					<ul>
						<li>Nombres deben comenzar con el signo <code>$</code>, seguido por el nombre de la variable.</li>
						<li>Nombres deben comenzar con una letra o guión bajo <code>_</code>.</li>
						<li>Nombres no deben comenzar con un número.</li>
						<li>Nombres de variables solo pueden contener carácteres alfanúmerricos(A-z. 0-9, y _).</li>
						<li>Nombres son sensibles a Mayúscula/Minúscualas.</li>
					</ul>
			</article>
		</div>

		<!-- ESTO QUE SIGUE ES DE PHP -->
		<div class="tile is-parent">
			<article class="tile is-child">
				<h3>Inicializar una variable</h3>
				<p>Si al declarar una variable se le asigna un valor, esto indica que la variable ha sido <em>inicializada</em>. <br>
				En JavaScript no es obligatorio inicializar las variables, ya que se pueden declarar por una parte y asignarles un valor posteriormente.</p>
				<pre class="language-js" rel="js"><code>var variable_1;
				variable_1 = 3;</code></pre>
				
				<p>Se pueden declarar varias variables en una sola sentencia de código. Se comienza por alguna de las palabras reservadas como <code>var</code>, <code>let</code>(es6) ó <code>const</code>(es6) una sola vez y los nombres se separan por <em>coma</em> <code>,</code>.</p>
				<pre class="language-js" rel="js"><code>var persona = "Pedro Escamoso", cocheNombre = "Ikigai", precio = 33000; </code></pre>
			</article>
		</div>


		<div class="tile is-parent">
			<article class="tile is-child">
				<h3>Valor de variable = undefined</h3>
				<p>A veces variables son declaradas sin ningún valor. El valor puede ser algo calculado posteriormente, o algo que será introducido luego por el usuario.</p>
				<p>Aún así una variable declarada sin valor tendrá no obstante un valor de <em>undefined</em>.</p>
				<pre class="language-js" rel="js"><code>var nombreVariable; // valor de nombreVariable es undefined.
				nombreVariable = "Ernesto" // valor de nombreVariable ahora es de "Ernesto"</code></pre>
				
				<p><i class="fas fa-exclamation"></i> Tratar de acceder a una variable no declarada resultará e un error de referencia ó <em>ReferenceError</em>.</p>
				<pre class="language-js" rel="js"><code>console.log('The value of c is ' + c); // Uncaught ReferenceError: c is not defined</code></pre>
				
				<h3>Redeclaración de variables</h3>
				<p>En una redeclaración de variable, ésta no pierde su valor inicial</p>
				<pre class="language-js" rel="js"><code>var nombre = "Dede"; // Valor inicial de nombre es "Dede"
				var nombre; // Redeclaración de variable, mantiene su valor inicial de "Dede"</code></pre>
			</article>
		</div>

		

		<div class="tile is-parent">
			<article class="tile is-child">
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
				<pre class="language-js" rel="js"><code>  // codigo aqui no puede usar cocheNombre
				
				function myFunction() {
				
				  var cocheNombre = " Volvo"; // codigo aqui puede usar cocheNombre
				
				}</code></pre>
				
				<p><em>Importante</em>: Antes del lanzamientode ECMAScript 2015 JavaScript no tenía alcance de instrucción de bloque; una variable declarada dentro de un bloque es local para donde se encuentra la función, en este caso el ámbito global porque es donde reside la función, por lo tanto es una variable global.</p>
				<pre class="language-js" rel="js"><code>if (true) {
				  var cocheNombre = " Volvo"; // cocheNombre está en el ámbito global, porque el bloque de código reside en el ambito global
				}
				console.log(cocheNombre); // resutlado será Volvo</code></pre>
				
				<p>El comportamiento cambia despues del lanzamiento de ECMAScript 2015, cuando se usa <code>let</code> para la declarción de variables</p>
				<pre class="language-js" rel="js"><code>if (true) {
				  let cocheNombre = " Volvo"; // cocheNombre con let solamente tiene alcance dentro de este bloque de código
				}
				console.log(cocheNombre); // ReferenceError: y is not defined</code></pre>
			</article>
		</div>

		

		<div class="tile is-parent">
			<article class="tile is-child">
				<h3 id="let"><code>Let</code>(es6)</h3>
				<p><code>let</code> se usa para declarar variables con un alzance local para el ámbito donde reside la variable. Que a diferencia de <code>var</code> define la variable globalmente, o localmente a una funcion entera al margen del alcance de bloque.</p>
				<pre class="language-js" rel="js"><code>function varTest() {
				var x = 1;
				if (true) {
				  var x = 2;  // misma variable!
				  console.log(x);  // 2
				}
				console.log(x);  // 2
							
				unction letTest() {
				let x = 1; // variable en el contexto global
				if (true) {
					let x = 2;  // variable diferente, en el contexto local dentro del bloque de if
					console.log(x);  // 2
				}
				console.log(x);  // 1
				</code></pre>
				
				<p>En el nivel superior de programas y funciones, <code>let</code>, a diferencia de <code>var</code>, no crea una propiedad en el objeto global. Por ejemplo:</p>
				<pre class="language-js" rel="js"><code>var x = 'global';
				et y = 'global';
				onsole.log(this.x); // "global"
				onsole.log(this.y); // undefined</code></pre>
			</article>
		</div>

		

		<div class="tile is-parent">
			<article class="tile is-child">
				<h3 id="const"><code>Const</code>(es6)</h3>
				<p>Las constantes tienen un ámbito de bloque, al igual que las variables definidas mediante la instrucción <code>let</code>. El valor de una constante no puede cambiar a través de la reasignación y no puede ser redeclarado.</p>
				<p>su declaración crea una constante cuyo alcance puede ser global o local para el bloque en el que se declara. Las constantes globales no se convierten en propiedades del objeto <em>window</em>, a diferencia de las <code>var</code> variables. Se requiere un inicializador para una constante; es decir, debe especificar su valor en la misma declaración en la que se ha declarado (lo cual tiene sentido, dado que no puede modificarse más adelante).</p>
				<pre class="language-js" rel="js"><code>const PI = 3.14;</code></pre>
				
				<p>Las reglas de alcance para constantes son las mismas que para las variables de bloque de ámbito. Si se omite la palabra clave const, se supone que el identificador representa una variable.</p>
				
				<p>La declaración <code>const</code> crea una referencia de solo lectura a un valor. No significa que el valor que tiene es inmutable, solo que el identificador de la variable no puede ser reasignado. Por ejemplo, en el caso donde el contenido es un objeto, esto significa que el contenido del objeto (por ejemplo, sus parámetros) puede ser alterado.</p>
				<pre class="language-js" rel="js"><code class="language-js">// ESTO CAUSARÁ UN ERROR
				unction f() {};
				const f = 5;
				
				// ESTO TAMBIÉN CAUSARÁ UN ERROR
				unction f() {
				const g = 5;
				var g;
				
				//sentencias
				</code></pre>
			</article>
		</div>

</main>

	<aside class="barra-lateral section">
	  <h1>Variables Teorias</h1>
		<p>Las variables en JavaScript no tienen ningún tip
		o adjunto. Una vez que asigna un tipo literal específico a una variable, más tarde puede reasignar la variable para alojar cualquier otro tipo, sin errores de tipo ni ningún problema.
		</p>
		<p>
			Esta es la razón por la que a veces se hace referencia a JavaScript como "sin tipo".
		</p>
		<p>
			Se debe declarar una variable antes de poder usarla. Hay 3 formas de hacer esto, usando var, let o const, y esas 3 formas difieren en cómo puedes interactuar con la variable más adelante.
		</p>
	</aside>
</div>
<?php include("../../inc/foot.php"); ?>
