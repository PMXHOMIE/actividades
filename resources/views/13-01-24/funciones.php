<?php

// $resultado = 1;

// for ($i = 1; $i <= 9 ; $i++) { 

//     $resultado = $resultado * $i;

// }

// echo "El factorialde 9 es: " . $resultado;


function factorial($n){
    $resultado = 1;

 for ($i = 1; $i <= $n ; $i++) { 

    $resultado = $resultado * $i;

 }
    return $resultado;
//  echo "El factorial de " . $n . " es: " . $resultado;

}


$resultado = factorial(5);

echo "El factorial de 6 es:  . $resultado";