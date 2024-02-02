<?php
include 'Juego.php';

$peliculas = new SimpleXMLElement($xmlstr);

echo $videojuegos->videojuegos[0]->argumento;
?>