<?php

// $base = 5;
// $exp = 4;

// $resultado = 1;

// ademas de las variables ya definidas 
// por fuera, se define la variable $i 
// al inicio del for
// for ($i = 0; $i <= $exp;  $i++){

//     $resultado = $resultado + $base;

// }

// echo "El valor de $base elevbado a la $exp  es: $resultado";



// $filas = 10;

// for ($i = 1; $i <= $filas ; $i++) { 
//     for ($j = 1; $j <= $i; $j++) { 
//         echo "*";
//     }
//     echo "<br>";
//     }


$nombres = ['dople', "slayer", "panther", "viento", "jomi"];

foreach ($nombres as $indice => $nombre ) {
    echo $nombre . "se encontraba en el indice $indice <br>";
}
