<?php

// Operadores de asignacion
echo "<h1>Operadores de Asignación</h1>";
$a = 15;
$b = 5;
echo "<pre>
Valor de \$a es: $a
Valor de \$b es: $b
</pre>";
// Operadores combinados
echo "<h2>Operadores Combinados:</h2>";
$a += 2;
$b *= 3;
echo "<pre>
Valor de \$a+=2 es: $a
Valor de \$b*=3 es: $b
</pre>";
$texto = "Hola ";
$texto .= "Mundo";
echo "<pre>
Valor de \$texto es: $texto
Valor de \$texto.=\"Mundo\" es: $texto
</pre>";
// Incremento
echo "<h2>Incremento:</h2>";
$a = 12;
echo "<pre>
El valor de \$a es: $a
Post-Incremento -> El valor de \$a++ es: " . $a++ . "
El valor de \$a es: $a
</pre>";
$a = 12;
echo "<pre>
El valor de \$a es: $a
Pre-Incremento -> El valor de ++\$a es: " . ++$a . "
El valor de \$a es: $a
</pre>";
// Decremento
echo "<h2>Decremento:</h2>";
$a = 12;
echo "<pre>
El valor de \$a es: $a
Post-Decremento -> El valor de \$a-- es: " . $a-- . "
El valor de \$a es: $a
</pre>";
$a = 12;
echo "<pre>
El valor de \$a es: $a
Pre-Decremento -> El valor de --\$a es: " . --$a . "
El valor de \$a es: $a
</pre>";

 ?>
