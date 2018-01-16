<?php
// Conversion a numeros enteros
// Contexto
$var = "8.3";
$suma = 20 + $var;
// Forzado de tipo
$int = (int)$var;
// Funcion
$intFunc = intval($var);

// Conversion a numeros tipo float o double (numero Real)
// Forzado de tipo
$numReal = (float)$var;
// Funcion
$floatFunc = floatval($var);

// Conversion a tipo booleano
// Forzado de tipo y funcion
$boolean = (boolean)$var;
$boolFunc = boolval($var);

// Conversion a tipo array
// Funcion explode
$numeros = "1, 2, 3, 4";
$numArray = explode(",", $numeros, 5);
// Tipo forzado
$array = (array)$var;

$arrayColores = array("rojo", "azul", "verde");
$string = implode(" ", $arrayColores);

echo "<p>" . $string . "</p>";
echo "<p>" . gettype($string) . "</p>";

 ?>
