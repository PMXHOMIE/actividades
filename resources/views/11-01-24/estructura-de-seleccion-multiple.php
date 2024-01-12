<?php

$a = 15;

// if($a == 1){
//     echo "lunes <br>";

// }elseif ($a == 2) {
//     echo "martes <br>";

// }elseif ($a == 3) {
//     echo "miercoler <br>";

// }elseif ($a == 4) {
//     echo "jueves <br>";

// }elseif ($a == 5) {
//     echo "viernes <br>";

// }elseif ($a == 6) {
//     echo "sabado <br>";

// }elseif ($a == 7) {
//     echo "domingo <br>";
// }

// switch ($a){
//     case '1':
//         echo "lunes <br>";
//         break;

//     case '2':
//         echo "martes <br>";
//         break;

//     case '3':
//         echo "miercoler <br>";
//         break;

//     case '4':
//         echo "jueves <br>";
//         break;

//     case '5':
//         echo "viernes <br>";
//         break;

//     case '6':
//         echo "sabado <br>";
//         break;

//     case '7':
//         echo "domingo <br>";
//         break;

//     default:
//     echo "Esta madre noes valida escuje un numero del 1 al 7 mamon";
//     }

   echo match($a) {
     1 => "lunes",
     2 => "martes",
     3 => "miercoles",
     4 => "jueves",
     5 => "viernes",
     6 => "sabado",
     7 => "domingo",
     default => "Esta madre noes valida escuje un numero del 1 al 7 mamon"
   };