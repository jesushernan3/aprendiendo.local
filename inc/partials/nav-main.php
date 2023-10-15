<div class="brand">
  <a href="/">APRENDIENDO</a>
</div>
<nav>
  <div class="nav-mobile">
    <a id="nav-toggle" href="#!"><span></span></a>
  </div>
  <ul class="nav-list">
    <li><a href="#">Html</a></li>
    <li><a href="#">Css</a>
      <ul class="nav-dropdown">
        <li><a href="/">Contenido Css</a></li>
        <li><a href="/">Contnido Css</a></li>
        <li><a href="#">Contenido Css</a></li>
        <li><a href="#">Contenido Css</a></li>
      </ul>
    </li>
    <li><a href="#">Js</a>
      <ul class="nav-dropdown">
        <li><a href="<?php echo $raiz; ?>views/vistas-js/que-es-js.php">Que es JS</a></li>
        <li><a href="<?php echo $raiz; ?>views/vistas-js/sintaxys-reglas-js.php">Sintaxis JS</a></li>
        <li><a href="<?php echo $raiz; ?>views/vistas-js/comentar-js.php">Comentar JS</a></li>
        <li><a href="<?php echo $raiz; ?>views/vistas-js/variables-js.php">Variables JS</a></li>
      </ul>
    </li>
    <li><a href="#!">Php</a>
      <ul class="nav-dropdown">
        <li><a href="<?php echo $raiz; ?>views/vistas-php/php-intro.php">Introducción</a></li>
        <li>
          <a href="<?php echo $raiz; ?>views/vistas-php/php-variables.php">Variables PHP</a></li>
        <li>
          <a href="#!">htaccess</a>
          <!-- intento de colocar el sub menu dentro de menu principal, que se mueva hacia la derecha pero no está agarrando el css, no sé si es debido a jquery o lo que fuere pero cualquier directiva nueva en css no lo toma -->
          <ul class="nav-dropdown nav-submenu nueva">
            <li class="nueva"><a href="<?php echo $raiz; ?>views/vistas-php/php-htacces-bases.php">Introducción</a></li>
            <li class="nueva"><a href="<?php echo $raiz; ?>views/vistas-php/php-htacces-basico.php">Basico</a></li>
            <li class="nueva"><a href="<?php echo $raiz; ?>views/vistas-php/php-htacces-url.php">Url</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#!">Snippets</a>
      <ul class="nav-dropdown">
        <li><a href="<?php echo $raiz; ?>views/vistas-snippets/php-snippets-vscode.php">VS Code</a></li>
      </ul>
    </li>
    <li><a href="#">Atajos</a>
      <ul class="nav-dropdown">
        <li><a href="<?php echo $raiz; ?>views/vistas-atajos/php-atajos-vscode.php">Atajos VS Code</a></li>
        <li><a href="<?php echo $raiz; ?>views/vistas-atajos/php-atajos-emmet.php">Atajos Emmet</a></li>
      </ul>
    </li>
    <li><a href="#">Notas</a></li>
  </ul>
</nav>