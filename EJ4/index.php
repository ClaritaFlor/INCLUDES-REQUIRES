<?php
//la línea inferior no muestra el contenido de las variables porque no existen aun en el script
echo "El nombre es $nombre y el apellido es $apellido";
echo "</br><hr>";
//realizamos el include
include 'nom_ape.php';

//esta línea si muestra el contenido de las variables porque ya existen en el include

echo "<b>AHORA SI SE INCLUYO EL ARCHIVO POR LO CUAL SE IMPRIME:</b></br>";
echo "El nombre es $nombre y el apellido es $apellido";
?>