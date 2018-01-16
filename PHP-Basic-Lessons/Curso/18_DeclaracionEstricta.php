<?php
// Activacion modo estricto
declare (strict_types = 1);

// Declaraciones de tipo escalar
echo "<h1>Declaraciones de tipo escalar</h1>";

// Modo coercitivo
// Definición del tipo de variable en el argumento
function suma(int $a, int $b) {
    return ($a + $b);
}
echo "<p>
Definición del tipo de variable en el argumento:
</p>";
echo "<pre>
function suma(int \$a, int \$b) {
    return (\$a + \$b);
}
</pre>";
var_dump(suma(3, 4));

// Retorno de un valor con tipo estricto
function resta($a, $b): float {
    return ($a - $b);
}
echo "<p>
Retorno de un valor en modo estricto:
</p>";
echo "<pre>
function resta(\$a, \$b): float {
    return (\$a - \$b);
}
</pre>";
var_dump(resta(4.1, 2));

echo "<h2>Activación modo estricto:</h2>";
echo "<p>
Para activar el modo estricto al definir una variable,
se debe utilizar la siguiente instrucción al
comienzo del código.
</p>";
echo "<pre>
declare (strict_types = 1);
</pre>";

 ?>
