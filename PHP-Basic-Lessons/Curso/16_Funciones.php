<?php

echo "<h1>Funciones</h1>";

saludo();
function saludo() {
    echo "<p>
    Hola, soy una función.
    </p>";
}

function foo() {
    function bar() {
        echo "<p>
        Hola, ya existo.
        </p>";
    }
}
//bar();
foo();
bar();

echo "--------------------------------------------";

suma(15, 10);
suma_array(array(4, 5));
function suma($num1, $num2) {
    $suma = $num1 + $num2;
    echo "<pre>
    La suma es: $suma
    </pre>";
}
function suma_array($entrada) {
    $num1 = $entrada[0];
    $num2 = $entrada[1];
    $suma = $num1 + $num2;
    echo "<pre>
    La suma de los dos elementos ($num1 + $num2) es: $suma
    </pre>";
}

echo "--------------------------------------------";

// Funcion por referencia
$valor = 24;
echo "<pre>
El valor del número es: $valor
</pre>";
resta_10($valor);
echo "<pre>
Se aplica resta_10().
El valor del número es: $valor
</pre>";
function resta_10(&$num) {
    $num -= 10;
}

echo "--------------------------------------------";

// Funcion recursiva
recursividad(14);
function recursividad($a) {
    if ($a < 20) {
        echo "<pre>
        El valor de \$a es: $a
        </pre>";
        recursividad($a + 1);
        // O tambien
        //recursividad(++$a);
        // O tambien
        //$a++;
        //recursividad($a);
    }
}

echo "--------------------------------------------";

// Retorno de Funciones
echo "<pre>
La suma de 10 + 20 es: " . suma_20(10) . "
</pre>";
function suma_20($num) {
    return $num + 20;
}

echo hacer_cafe();
echo hacer_cafe("Expreso");
function hacer_cafe($tipo = "Capuchino") {
    return "<p>
    El café es de tipo: $tipo
    </p>";
}

echo persona("Perez");
echo persona("Juan");
echo persona("Juan", "Perez");
function persona($nombre="Unknown", $apellido="Unknown") {
    return "<p>
    Bienvenido $nombre $apellido a la fiesta.
    </p>";
}

echo animales();
echo animales(array("gato", "tigre"));
echo animales(array("gato", "tigre"), "felinos");
function animales($animales=array("sinDato","sinDato"), $tipo="sinTipo") {
    return "<p>
    Los animales son: . " . implode(", ", $animales) . " de tipo: $tipo
    </p>";
}

echo "--------------------------------------------";

// Recibir multiples valores
list($flo, $col, $cant) = flores();
echo "<p>
Hola, soy un $flo de color $col y somos $cant
</p>";
function flores() {
    $flor = "Clavel";
    $color = "Morado";
    $cantidad = 10;
    return array($flor, $color, $cantidad);
}


 ?>
