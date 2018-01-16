<?php

echo "<h1>Sentencia If</h1>";

echo "<h2>Sintaxis:</h2>";
echo "<pre>
if (condicion) {
    instrucciones;
} else {
    instrucciones;
}
</pre>";
echo "<pre>
if (condicion):
    instrucciones;
else:
    instrucciones;
endif;
</pre>";

echo "<h2>Ejemplos:</h2>";

$a = 4;
$b = 12;

if ($a <= $b) {
    echo "<pre>
    $a es menor o igual que $b
    </pre>";
} else {
    echo "<pre>
    $a es mayor que $b
    </pre>";
}

if ($a < $b):
    echo "<pre>
    $a es menor que $b
    </pre>";
elseif ($a == $b):
    echo "<pre>
    $a es igual que $b
    </pre>";
else:
    echo "<pre>
    $a es mayor que $b
    </pre>";
endif;

 ?>
