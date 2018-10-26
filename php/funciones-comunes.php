<?php
function parametro_plantilla($variable) {
  if (isset($GLOBALS[$variable])) {
    echo $GLOBALS[$variable];
  }else {
    echo 'sin datos cargados';
  }
}
?>