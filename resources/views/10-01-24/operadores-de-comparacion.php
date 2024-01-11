<?php

$a = 10;
$b = 10;

echo $a == $b;
// Es igual
var_dump($a == $b); 

// Es diferente
var_dump($a != $b);

// Es menor que
var_dump($a < $b);

// Es mayor que
var_dump($a > $b);

// Es menor o igual que
var_dump($a <= $b);

// Es mayor o igual que
var_dump($a >= $b);

?>

<!-- Operadores Logicos -->
<?php
 $c = true;
 $d = false;

//  Ambos valores son  verdaderos = True
 var_dump($c && $d);

 //  Al menos un Valor es True = True
 var_dump ($c || $d);
 ?>
 
