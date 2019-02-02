<?php 
$raiz = "../";
include_once("../php/funciones-comunes.php");
$titulo_pagina = 'React JS';
include($raiz . "inc/head.php");
?>

<main>
  <h1>React JS - Introduccion</h1>
  <h3>¿Qué es React?</h3>
  <p>
    React es una biblioteca de JavaScript que tiene como objetivo simplificar el desarrollo de interfaces visuales.
  </p>

<p>
  Desarrollado en Facebook y lanzado al mundo en 2013, impulsa algunas de las aplicaciones más utilizadas, impulsando a Facebook e Instagram entre otras innumerables aplicaciones.
</p>

<p>
  Su objetivo principal es facilitar el razonamiento sobre una interfaz y su estado en cualquier momento, dividiendo la interfaz de usuario en una colección de componentes.
</p>

<h3>¿Es React simple de aprender?</h3>
<p>
  Aunque dije que React es más simple que los marcos alternativos, sumergirse en React sigue siendo complicado, pero principalmente debido a las tecnologías de corolario que pueden integrarse con React, como Redux y GraphQL.
</p>

<p>
  React en sí mismo tiene una API muy pequeña, y básicamente necesita entender 4 conceptos para comenzar:
</p>

     <ul>
       <li>Componentes</li>
       <li>JSX</li>
       <li>Estado (State)</li>
       <li>Propiedades (Props)</li>    
     </ul>
</main>

<aside>

</aside>

<?php include($raiz . "inc/foot.php"); ?>