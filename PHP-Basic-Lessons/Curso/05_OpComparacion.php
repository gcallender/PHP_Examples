<?php

// Operadores de comparacion
echo "<h1>Operadores de Comparación</h1>";

$numero1 = 2;
$numero2 = "2";
// Operador ==
echo "<p>
Hola, soy el operador ==
</p>";
var_dump($numero1 == $numero2);
// Operador identico
echo "<p>
Hola, soy el operador identico ===
</p>";
var_dump($numero1 === $numero2);
// Operador diferente
echo "<p>
Hola, soy el operador diferente != o <>
</p>";
var_dump($numero1 != $numero2);
// Operador no identico
echo "<p>
Hola, soy el operador no identico !==
</p>";
var_dump($numero1 !== $numero2);

$a = 13;
$b = 14;
// Operador mayor que
echo "<p>
Hola, soy el operador mayor que >
</p>";
var_dump($a > $b);
// Operador menor que
echo "<p>
Hola, soy el operador menor que <
</p>";
var_dump($a < $b);
// Operador mayor o igual que
echo "<p>
Hola, soy el operador mayor o igual que >=
</p>";
var_dump($a >= $b);
// Operador menor o igual que
echo "<p>
Hola, soy el operador menor o igual que <=
</p>";
var_dump($a < $b);
// Operador de nave espacial
echo "<p>
Hola, soy el operador nave espacial <=>
</p>";
var_dump($a <=> $b);
var_dump($b <=> $a);
var_dump($a <=> $a);

// Operador de elvis
$resultado = true;
echo "<p>
Hola, soy el operador de elvis ?:
</p>";
var_dump($resultado?:"No hay datos");
// Operador ternario
echo "<p>
Hola, soy el operador ternario ?:
</p>";
var_dump($resultado?"Soy verdadero":"Soy falso");

// Operador de fusion null
$resultado = null;
echo "<p>
Hola, soy el operador de fusion null ??
</p>";
var_dump($resultado??"No hay datos");

// OBS: Comparacion de variable sin valor
echo "<h2>Uso de \"isset\"</h2>";
$resultado2;
// Operador de elvis
echo "<h3>Operador de elvis:</h3>";
echo "<p>
Hola, soy el operador de elvis ?:
</p>";
var_dump(isset($resultado2)?:"No hay datos");
// Operador ternario
echo "<h3>Operador ternario:</h3>";
echo "<p>
Hola, soy el operador ternario ?:
</p>";
var_dump(isset($resultado2)?"Soy verdadero":"Soy falso");
// Operador de fusion null
echo "<h3>Operador de fusión null:</h3>";
echo "<p>
Hola, soy el operador de fusion null ??
</p>";
var_dump($resultado2??"No hay datos");

 ?>
