<?php

// Funciones anonimas y variables
echo "<h1>Funciones Anónimas y Variables</h1>";

// Funciones anonimas
echo "<h2>Funciones Anónimas:</h2>";

$saludo = function($name) {
    echo "<p>
    Hola $name.
    </p>";
};
$saludo("Jorge");

$suma = function($n1, $n2) {
    return ($n1 + $n2);
};
$a = 2;
$b = 3;
echo "<pre>
La suma de $a + $b es: " . $suma($a, $b) . "
</pre>";

// Funciones variables
echo "<h2>Funciones Variables:</h2>";

function bienvenida($saludo) {
    //echo "<p>
    //Hola, soy la función variable $saludo.
    //</p>";
    return "<p>
    Hola, soy la función variable $saludo.
    </p>";
}
$variable = "bienvenida";
echo "<p>
La función $variable retorna: " . $variable("Hola") . "
</p>";

// Funciones internas de PHP
echo "<h2>Funciones Internas de PHP:</h2>";

$aux = "array_filter";
if (function_exists($aux)) {
    echo "<p>
    La función \"$aux\" existe.
    </p>";
} else {
    echo "<p>
    La función \"$aux\" no existe.
    </p>";
}

$aux = "xml";
print_r(get_extension_funcs($aux));


 ?>
