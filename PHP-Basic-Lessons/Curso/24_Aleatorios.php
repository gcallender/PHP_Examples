<?php

// CSPNRG y Funcion intdiv

// Numeros aleatorios
echo "<h2>Aleatorios:</h2>";

echo "<pre>
Hexa aleatorio: " . bin2hex(random_bytes(4)) . "
</pre>";
echo "<pre>
Hexa aleatorio de 0 a 100: " . random_int(0, 100) . "
OBS: Los límites para random_int son:
Inferior: PHP_INT_MIN
Superior: PHP_INT_MAX
</pre>";

// Funcion de division con resultado entero
echo "<h2>Dision entera:</h2>";
echo "<pre>
El resultado de intdiv(3, 2) es:
</pre>";
var_dump(intdiv(3, 2));

 ?>
