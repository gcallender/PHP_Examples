<?php

echo "<h1>Sentencia Switch</h1>";

echo "<h2>Sintaxis:</h2>";
echo "<pre>
switch (variable) {
    case 'value':
        # code...
        break;
    default:
        # code...
        break;
}
</pre>";
echo "<pre>
switch (variable):
    case 'value':
        # code...
        break;
    default:
        # code...
        break;
endswitch;
</pre>";

echo "<h2>Ejemplos:</h2>";

$var = 3;
switch ($var) {
    case 1:
        echo "<p>
        Lunes
        </p>";
        break;
    case 2:
        echo "<p>
        Martes
        </p>";
        break;
    case 3:
        echo "<p>
        Miércoles
        </p>";
        break;
    default:
        echo "<p>
        Otro día
        </p>";
        break;
}

$var = 2;
switch ($var):
    case 1:
        echo "<p>
        Lunes
        </p>";
        break;
    case 2:
        echo "<p>
        Martes
        </p>";
        break;
    case 3:
        echo "<p>
        Miércoles
        </p>";
        break;
    default:
        echo "<p>
        Otro día
        </p>";
        break;
endswitch;

 ?>
