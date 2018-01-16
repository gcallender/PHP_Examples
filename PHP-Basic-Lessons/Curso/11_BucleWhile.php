<?php

echo "<h1>Bucle While</h1>";

echo "<h2>Sintaxis:</h2>";
echo "<pre>
while (\$variable <= 10) {
    # code...
}
</pre>";
echo "<pre>
while (\$variable <= 10):
    # code...
endwhile
</pre>";

echo "<h2>Ejemplos:</h2>";

$cont = 1;
while ($cont <= 5) {
    echo "<pre>
    Valor del contador while(){}: $cont
    </pre>";
    $cont++;
}
$cont = 1;
while ($cont <= 5):
    echo "<pre>
    Valor del contador while():endwhile;: $cont
    </pre>";
    ++$cont;
endwhile;

echo "<h2>Ejemplos Do While:</h2>";
$cont = 1;
do {
    echo "<pre>
    Valor del contador do{}-while();: $cont
    </pre>";
    $cont++;
} while ($cont <= 3);
do {
    echo "<pre>
    Valor del contador do{}-while();: $cont
    </pre>";
    $cont++;
} while ($cont <= 3);

 ?>
