<?php

echo "<h1>Arrays</h1>";

// Arreglo indexado
echo "<h2>Arreglo Indexado:</h2>";
$color = "Rojo";
$arrayIndexado = array(1,2,"Hola",$color);
// Obtener un $valor
echo "<pre>
El valor de \$arrayIndexado(2) es: $arrayIndexado[2]
-------------------------------------------------------
</pre>";
// Recorrer array indexado
for ($i = 0; $i < count($arrayIndexado); $i++) {
    echo "<pre>
    El valor de \$arrayIndexado($i) es: $arrayIndexado[$i]
    </pre>";
}
// Agregar valor a array Indexado
echo "<pre>
Se agrega un nuevo valor a \$arrayIndexado.
</pre>";
$arrayIndexado[] = "newData";
foreach ($arrayIndexado as $key => $value) {
    echo "<pre>
    Clave: $key ----- Valor: $value
    </pre>";
}

// Arreglo asociativo
echo "<h2>Arreglo Asociativo:</h2>";
$arrayAsociativo = array("Nombre"=>"Juan", "Apellido"=>"Perez");
// Obtener un $valor
echo "<pre>
El valor de \$arrayAsociativo(\"Nombre\") es: " . $arrayAsociativo["Nombre"] . "
-------------------------------------------------------
</pre>";
// Recorrer array asociativo
foreach ($arrayAsociativo as $key => $value) {
    echo "<pre>
    Clave: $key ----- Valor: $value
    </pre>";
}

 ?>
