<?php

// Operadores aritmeticos
echo "<h1>Operadores Aritméticos</h1>";

$a = 4;
$b = 10;

// Adicion
echo "<h2>Suma:</h2>";
$suma = $a + $b;
echo "<p>
Resultado de $a + $b = $suma
</p>";

// Sustraccion
echo "<h2>Resta:</h2>";
$resta = $a - $b;
echo "<p>
Resultado de $a - $b = $resta
</p>";

// Multiplicacion
echo "<h2>Multiplicación:</h2>";
$producto = $a * $b;
echo "<p>
Resultado de $a * $b = $producto
</p>";

// Division
echo "<h2>División:</h2>";
$division = $a / $b;
echo "<p>
Resultado de $a / $b = $division
</p>";

// Modulo
echo "<h2>Módulo:</h2>";
$modulo = $a % $b;
echo "<p>
Resultado de $a % $b = $modulo
</p>";

// Potencias
echo "<h2>Potencias:</h2>";
$resultado = $a ** 2;
echo "<p>
Resultado de $a ** 2 = $resultado
</p>";

// Identidad y negacion
echo "<h2>Identidad:</h2>";
$identidad = +$resta;
echo "<p>
Resultado de +$resta = $identidad
</p>";
echo "<h2>Negación:</h2>";
$negacion = -$resta;
echo "<p>
Resultado de -$resta = $negacion
</p>";

 ?>
