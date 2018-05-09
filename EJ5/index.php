<?php
//la línea inferior daría error porque aun no existe la función.
//verNombre();

//realizamos el include
include './nom_ape.php';
//Si se incluye nuevamente saldria error ya que ya estaria incluido
//include './nom_ape.php';

//esta si mostraría el contenido de la función
verNombre();
?>