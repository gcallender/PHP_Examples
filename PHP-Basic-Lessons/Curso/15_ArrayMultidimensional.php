<?php

echo "<h1>Matrices o Arreglos Multidimendionales</h1>";

$personas = array(
    array("Juan", "Perez", 21),
    array("Pedro", "Soto", 22),
    array("Pablo", "Gonzalez", 19),
    array("María", "Figueroa", 20)
);

//Obtener un Valor
echo "<h3>Obtener un valor:</h3>";
$row = 3;
$column = 0;
echo "<pre>
El contenido de \$personas[$row][$column] es: " . $personas[$row][$column] . "
</pre>";

// Recorrer array
echo "<h3>Recorrer arreglo (matriz):</h3>";
for ($row = 0; $row < count($personas); $row++) {
    for ($column = 0; $column < count($personas[$row]); $column++) {
        echo "<pre>
        El contenido de \$personas[$row][$column] es: " . $personas[$row][$column] . "
        </pre>";
    }
}


// Multidimensional mixto
echo "<h2>Arreglo Mixto:</h2>";
$tablero = array(
    "A"=>array("Nada","Nada","Nada"),
    "B"=>array("Barco1","Nada","Nada"),
    "C"=>array("Barco1","Nada","Nada"),
    "D"=>array("Nada","Nada","Barco2")
);

echo "<p>
Coordenadas:
</p>";
$auxString = "";
foreach ($tablero as $ikey => $ivalue) {
    $auxString = "";
    foreach ($tablero[$ikey] as $jkey => $jvalue) {
        //$auxString .= "[$ikey][$jkey] -> " . $tablero[$ikey][$jkey] . "; ";
        $auxString .= "[$ikey][$jkey] -> $jvalue; ";
    }
    echo "<pre>$auxString</pre>";
}


 ?>
