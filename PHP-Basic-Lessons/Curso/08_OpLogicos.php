<?php

// Operadores logicos
echo "<h1>Operadores Lógicos</h1>";

// AND
echo "<h1>AND:</h1>";
$bool = (15==2 && 2==2);
echo "<pre>
El resultado de (15==2 && 2==2) es:
</pre>";
var_dump($bool);
$bool = (15==15 and 2==2);
echo "<pre>
El resultado de (15==15 and 2==2) es:
</pre>";
var_dump($bool);
echo "<p>
<b>OBS: '&&' tiene mayor precedencia que 'and'</b>
</p>";
// OR
echo "<h1>OR:</h1>";
$bool = (15==2 || 2==2);
echo "<pre>
El resultado de (15==2 || 2==2) es:
</pre>";
var_dump($bool);
$bool = (15==2 or 2==4);
echo "<pre>
El resultado de (15==2 or 2==4) es:
</pre>";
var_dump($bool);
echo "<p>
<b>OBS: '||' tiene mayor precedencia que 'or'</b>
</p>";
// XOR
echo "<h1>XOR:</h1>";
$bool = (15==2 xor 2==2);
echo "<pre>
El resultado de (15==2 xor 2==2) es:
</pre>";
var_dump($bool);
$bool = (15==15 xor 2==2);
echo "<pre>
El resultado de (15==15 xor 2==2) es:
</pre>";
var_dump($bool);
// NOT
echo "<h1>NOT:</h1>";
$bool = !(15==2);
echo "<pre>
El resultado de !(15==2) es:
</pre>";
var_dump($bool);


 ?>
