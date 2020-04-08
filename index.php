
<?php 
$raiz = "./";
$id_body = "id=\"index\"";
include_once "php/funciones-comunes.php";
$titulo_pagina = 'Aprendiendo el mero mero';
include "inc/head.php";
?>

	<section class="hero is-primary">
    <div class="hero-body">
      <h1 class="title">Aprendiendo</h1>
      <h2 class="subtitle">Front y poquito de Backend</h2>
    </div>
  </section>

	<div class="container is-flex">
    <main class="bd-main section">

      <h1>From the blog</h1>

     <div class="card">
       <div class="card-image">
         <figure class="image is-128x128">
           <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/308367/gridarea-card-img-01.jpg" alt="" class="card-img">
         </figure>
       </div>
       <div class="card-header">
         <h2 class="card-header-title">Blog post title</h2>
       </div>
       <div class="card-content">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere semper urna, ut pellentesque sem fermentum vel. Mauris luctus quis lectus nec luctus. Donec ut diam et neque eleifend varius sed quis erat.</p>
         <a href="index-segundo.php">segundo index</a>
       </div>
     </div>

     <div class="card">
       <div class="card-image">
         <figure class="image is-128x128">
           <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/308367/gridarea-card-img-01.jpg" alt="" class="card-img">
         </figure>
       </div>
       <div class="card-header">
         <h2 class="card-header-title">Blog post title</h2>
       </div>
       <div class="card-content">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere semper urna, ut pellentesque sem fermentum vel. Mauris luctus quis lectus nec luctus. Donec ut diam et neque eleifend varius sed quis erat.</p>
         <a href="index-segundo.php">segundo index</a>
       </div>
     </div>
     
     
    </main>
    
    <aside class="barra-lateral section">
      <h1>Sidebar stuff</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere semper urna, ut pellentesque sem fermentum vel. Mauris luctus quis lectus nec luctus. Donec ut diam et neque eleifend varius sed quis erat. In tempor pharetra felis at fermentum. Maecenas iaculis neque orci, sit amet sodales quam venenatis sit amet. Praesent eu enim nec velit bibendum accumsan a sed tellus. Aenean sed justo a tortor hendrerit imperdiet efficitur nec risus. Morbi gravida mi quis ultrices elementum. Pellentesque fermentum sodales sagittis. Sed vel efficitur nisl. Ut congue sodales sapien. Duis ultricies felis nunc, eu semper est tincidunt eu. Curabitur faucibus luctus eros, eget semper mauris dictum vel.</p>
    </aside>
  </div>

<?php include "inc/foot.php"; ?>