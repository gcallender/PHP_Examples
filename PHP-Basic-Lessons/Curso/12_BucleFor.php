<?php

echo "<h1>Bucle For</h1>";

echo "<h2>Sintaxis:</h2>";
echo "<pre>
for (\$i=0; \$i < valor; \$i++) {
    # code...
}
</pre>";
echo "<pre>
for (\$i=0; \$i < valor; \$i++):
    # code...
endfor;
</pre>";

echo "<h2>Ejemplos:</h2>";

for ($i=1; $i <= 5; $i++) {
    echo "<pre>
    El valor de la variable de control es: $i
    </pre>";
}

echo "<p>
Con otra sintaxis ...
</p>";
for ($i=1; $i <= 5; $i++):
    echo "<pre>
    El valor de la variable de control es: $i
    </pre>";
endfor;

 ?>
