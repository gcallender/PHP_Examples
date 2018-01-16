<?php

echo "<h1>Foreach</h1>";
echo "<h2>Sintaxis:</h2>";
echo "<pre>
foreach (\$variable as \$key => \$value) {
    # code...
}
</pre>";
echo "<pre>
foreach (\$variable as \$key => \$value):
    # code...
endforeach;
</pre>";


echo "<h2>Ejemplos:</h2>";

$arreglo = array(1,2,3);
$i = 0;

echo "<h3>Ejemplo 01:</h3>";
foreach ($arreglo as $valor) {
    echo "<pre>
    El valor de arreglo($i) es: $valor
    </pre>";
    $i++;
}
echo "<h3>Ejemplo 02:</h3>";
foreach ($arreglo as $clave => $valor) {
    echo "<pre>
    El valor de arreglo($clave) es: $valor
    </pre>";
}
echo "<h3>Ejemplo 03:</h3>";
foreach ($arreglo as $key => &$value):
    echo "<pre>
    El valor de arreglo($key) es: $value
    </pre>";
    $value += 2;
    echo "<pre>
    El valor de arreglo($key) es: $value
    ------------------------------------
    </pre>";
endforeach;

 ?>
