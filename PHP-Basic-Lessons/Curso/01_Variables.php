<?php

echo "<p>Hola Mundo!</p>";
// Variables locales
$integer = 1;
$float = 1.5;
$isTrue = true;
$arrayColors = array('azul', 'rojo', 'verde');
$string = "Hola";

echo $integer;
echo $float;
if ($isTrue) {
	echo $arrayColors[0];
	echo $string;
}

// Variables locales y globales
function variablesGlobales() {
	$local = "Soy la variable local";
	echo $local;
	echo $GLOBALS["global"];
}
$global = "Soy la variable global";
variablesGlobales();

 ?>
