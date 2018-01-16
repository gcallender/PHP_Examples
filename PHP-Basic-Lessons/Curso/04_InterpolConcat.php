<?php

// Comillas dobles
echo "<h1>Comillas Dobles</h1>";

// Concatenacion
echo "<h2>Concatenación</h2>";
// Forma 1
$palabra = "Hola ";
$union = $palabra . "Mundo";
echo "<p>" . $union . "</p>";
// Forma 2
$palabra .= "Mundo 2";
echo "<p>" . $palabra . "</p>";

// Interpolacion
echo "<h2>Interpolación</h2>";
// Forma 1
echo "<p>
Bienvenido a $palabra, hasta luego
</p>";
// Forma 2
echo "<p>
Bienvenido a {$palabra}, hasta luego
</p>";
// OBS: Se recomienda usar la interpolacion
// sobre la concatenacion

// Caracteres escapados
/*
\n avance de linea
\r retorno de carro
\t tabulacion
\v tabulacion vertical
\e escape
\f avance de pagina
\\ barra invertida
\$ signo dolar
\" comillas dobles
*/
echo "Hola mundo \n, de nuevo";

// Comillas simples
echo "<h1>Comillas Simples</h1>";

// Concatenacion
echo "<h2>Concatenación</h2>";
echo '<p>
La variable es: ' . $palabra . '
</p>';

// No funciona la Interpolacion
echo "<h2>No funciona la Interpolación</h2>";
echo '<p>
La variable es: $palabra
</p>';
echo '<p>
I\'m an engineer
</p>';
echo '<p>
My directory is: C:\\Hola\\
</p>';

 ?>
