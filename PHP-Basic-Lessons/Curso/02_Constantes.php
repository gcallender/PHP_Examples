<?php
// Constantes

// Using const
const CONSTANTE = "Soy una constante";
const NUMERO = 1;
const COLORES = array("amarillo", "azul", "rojo");

echo "<p>" . CONSTANTE . "</p>";
echo "<p>" . NUMERO . "</p>";
echo "<p>" . COLORES[1] . "</p>";

// Using define
define("CONSTANTE2", "Hola mundo");
define("COLORES2", array("rojo", "verde", "azul"));

echo "<p>" . CONSTANTE2 . "</p>";
echo "<p>" . COLORES2[0] . "</p>";

// Constantes predefinidas
/*
PHP_INT_MIN
PHP_FLOAT_DIG
PHP_FLOAT_EPSILON
PHP_FLOAT_MIN
PHP_FLOAT_MAX
PHP_FD_SETSIZE
*/

echo "<p>" . PHP_INT_MIN . "</p>";

 ?>
